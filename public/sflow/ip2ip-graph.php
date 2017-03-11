<?php
# 





set_include_path(get_include_path() . PATH_SEPARATOR . dirname( __FILE__ ) . "/../../library".PATH_SEPARATOR.'/opt/ixpmanager/vendor/zendframework/zendframework1/library/');
require '/opt/ixpmanager/vendor/zendframework/zendframework1/library/Zend/Config/Ini.php';
//require '../../library/Zend/Config/Ini.php';
require '../../bin/utils.inc';

$config = new Zend_Config_Ini('../../application/configs/application.ini', scriptutils_get_application_env());

 
$protocol = ($_REQUEST['proto'] == 6) ? 6 : 4;
$file_type='bytes' ;

$src_mac=$_REQUEST['src_mac'];

$dst_ip=$_REQUEST['dst_ip'];

$filename=sprintf ($config->sflow->rootdir."ip2ip/%05s/%05s", $src_mac, $dst_ip);


 
$rrdfilename=$filename;

// don't send error messages back to the end user (barryo)
if( !is_readable( $filename ) )
{
    header("HTTP/1.0 404 Not Found $filename");
    die();
}

$period = isset ($_REQUEST['period']) ? $_REQUEST['period'] : 'day';

switch ($period) {
	case 'year':
		$timeperiod = 60*60*24*365*1.2;
		break;
	case 'month':
		$timeperiod = 60*60*24*31*1.2;
		break;
	case 'week':
		$timeperiod = 60*60*24*8*1.2;
		break;
	default:
		$timeperiod = 60*60*24*1.5;
		break;
}

$separated_maxima = ($timeperiod > 60*60*24*2) ? 1: 0;

$multiplier=8;





$options = array (
//	'--daemon', isset( $config->sflow->rrd->rrdcached->sock ) ? $config->sflow->rrd->rrdcached->sock : null,
	// '--font title:10:Courier',
	'--width=600',
	'--height=150',
	'--slope-mode',
	'--lower-limit=0',
	'--start=' . (time() - $timeperiod),
	// '--title='.$dstvliowner.' - '.$srcvliowner.' traffic - '.$config->identity->orgname.' '.$vlanname[$custinfo[$srcvli]['vlan']].' - IPv'.$protocol.'/'.$rrdtype.$multiplier,
	
	// '--vertical-label='.(($rrdtype == 'bytes') ? 'bits' : 'pkts' ).' / second',
    '--vertical-label='."bytes".'/second',

	'--watermark=Copyright '. date('Y') .' '.$config->identity->orgname.$rrdfilename.'-'.date('Y-m-d G:i:s'),
	'DEF:a='.$filename.':traffic_in:AVERAGE',
	'DEF:b='.$filename.':traffic_in:MAX',
	'DEF:c='.$filename.':traffic_out:AVERAGE',
	'DEF:d='.$filename.':traffic_out:MAX',
	'CDEF:cdefa=a,'.$multiplier.',*',
	'CDEF:cdefb=b,'.$multiplier.',*',
	'CDEF:cdefc=c,'.$multiplier.',*',
	'CDEF:cdefd=d,'.$multiplier.',*',
	'VDEF:last_in=cdefa,LAST',
	'VDEF:last_out=cdefc,LAST',
	'VDEF:max_in=cdefb,MAXIMUM',
	'VDEF:max_out=cdefd,MAXIMUM',
	'VDEF:avg_in=cdefb,AVERAGE',
	'VDEF:avg_out=cdefd,AVERAGE',
);

if ($separated_maxima) {
	$options[] = 'LINE2:cdefb#ff00ff:Peak '.$dstvliowner.' to '.$srcvliowner;
	$options[] = 'GPRINT:max_in:\tMax\\:%8.2lf%s\l';
	$options[] = 'AREA:cdefd#006600:Peak '.$srcvliowner.' to '.$dstvliowner;
	$options[] = 'GPRINT:max_out:\tMax\\:%8.2lf%s\l';
	$options[] = 'COMMENT:\s';
}

$avg_label = $separated_maxima ? 'Avg. ' : '';

// $options[] = 'AREA:cdefc#00CF00:'.'avg_label'.$src_mac.' to '.$dst_ip;

if (!$separated_maxima)
$options[] = 'GPRINT:max_out:\tMax\\:%8.2lf%s';
$options[] = 'GPRINT:avg_out:\tAvg\\:%8.2lf%s';
$options[] = 'GPRINT:last_out:\tCur\\:%8.2lf%s\l';

$options[] = 'LINE1:cdefa#002A97FF:'.'avg_label'.$src_mac.' to '.$dst_ip;
if (!$separated_maxima)
$options[] = 'GPRINT:max_in:\tMax\\:%8.2lf%s';
$options[] = 'GPRINT:avg_in:\tAvg\\:%8.2lf%s';
$options[] = 'GPRINT:last_in:\tCur\\:%8.2lf%s\l';

$options[] = 'COMMENT:\s';
$options[] = 'COMMENT:\s';
$options[] = 'COMMENT:\s';

$output = ixpmanager_rrdgraph ($config->sflow->rrd->rrdtool, "-", $options,$rrdfilename);

if ($output) {
	ob_start();
	header("Content-type: image/png");
	ob_end_clean();
	session_write_close();
	print $output;
}

exit;

# PECL rrd_graph is completely brain damaged as it doesn't support taking
# "-" as a filename.  Because of this, it cannot be used for inline image
# generation.  So we need to write our own wrapper function, sigh.

function ixpmanager_rrdgraph ($rrdtool, $filename, $options,$rrdfilename)
{
	/* clean up headers, session stuff, configure appropriate MIME stuff */
	$args = '';
	foreach(array_keys ($options) as $key) {
     	$args .= ' '."'".$options[$key]."'";
			
	}
	$font_cfg=' ';
    $cmdline ="$rrdtool graph  -  $font_cfg  $args  2>&1";
 	$fp = popen($cmdline, "r");
  
        	
	if (isset($fp) && is_resource($fp)) {
		$line = "";
		while (!feof($fp)) {
			$line .= fgets($fp, 8192);
		}
		pclose($fp);
		return $line;
	}

	return 0;
}

?>
