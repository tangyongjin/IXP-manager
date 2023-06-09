<?php

set_include_path(get_include_path() . PATH_SEPARATOR . dirname( __FILE__ ) . "/../../library".PATH_SEPARATOR.'/opt/ixpmanager/vendor/zendframework/zendframework1/library/');
require '/opt/ixpmanager/vendor/zendframework/zendframework1/library/Zend/Config/Ini.php';
require '../../bin/utils.inc';

$config = new Zend_Config_Ini('../../application/configs/application.ini', scriptutils_get_application_env());
$dbopts = $config->resources->doctrine2->connection->options;
$driver = $dbopts->driver;
$driver = preg_replace('/^pdo_/', '', $driver);
$db = new PDO($driver.":host=".$dbopts->host.";dbname=".$dbopts->dbname, $dbopts->user, $dbopts->password);



$protocol = ($_REQUEST['proto'] == 6) ? 6 : 4;
$file_type='bytes' ;

$src_mac=$_REQUEST['src_mac'];
$poolmac=$_REQUEST['poolmac'];


//view_cust_mac

$db->query('SET NAMES utf8 ');

$sth = $db->query("SELECT * from  view_cust_mac where mac= '$src_mac' ");
foreach ($sth as $row) {
	 $src_custname = $row['name'];
}

$sth = $db->query("SELECT * from  view_cust_mac where mac= '$poolmac' ");
foreach ($sth as $row) {
	 $poolname = $row['name'];
}





$etag=$_REQUEST['etag'];
$filename=sprintf ($config->sflow->rootdir."ip2ip/%05s/%05s/%05s", $poolmac, $src_mac,$etag);
$rrdfilename=$filename;

if( !is_readable( $filename ) )
{
    header("HTTP/1.0 404 Not Found $filename");
    die();
}

$period = isset ($_REQUEST['period']) ? $_REQUEST['period'] : 'day';
//$period='day';

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
	 '--title='.$poolname.' - '.$src_custname.' traffic - '.$config->identity->orgname,
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
	$options[] = 'LINE2:cdefb#ff00ff:Peak '.$src_custname.' to '.$poolname;
	$options[] = 'GPRINT:max_in:\tMax\\:%8.2lf%s\l';
	$options[] = 'AREA:cdefd#006600:Peak '.$poolname.' to '.$src_custname;
	$options[] = 'GPRINT:max_out:\tMax\\:%8.2lf%s\l';
	$options[] = 'COMMENT:\s';
}




$avg_label = $separated_maxima ? 'Avg. ' : '';
 

$options[] = 'AREA:cdefc#00CF00:'.$avg_label."入";
if (!$separated_maxima)
	$options[] = 'GPRINT:max_out:\tMax\\:%8.2lf%s';
$options[] = 'GPRINT:avg_out:\tAvg\\:%8.2lf%s';
$options[] = 'GPRINT:last_out:\tCur\\:%8.2lf%s\l';
$options[] = 'LINE1:cdefa#002A97FF:'."出";
 

// $options[] = 'LINE1:cdefa#FF0000:'.$avg_label.$dstvliowner.' to '.$srcvliowner;



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
  
    // echo $cmdline;die;
        	
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
