<?php

 

set_include_path(get_include_path() . PATH_SEPARATOR . dirname( __FILE__ ) . "/../../library".PATH_SEPARATOR.'/opt/ixpmanager/vendor/zendframework/zendframework1/library/');
require '/opt/ixpmanager/vendor/zendframework/zendframework1/library/Zend/Config/Ini.php';
require '../../bin/utils.inc';

$config = new Zend_Config_Ini('../../application/configs/application.ini', scriptutils_get_application_env());
$dbopts = $config->resources->doctrine2->connection->options;
$driver = $dbopts->driver;
$driver = preg_replace('/^pdo_/', '', $driver);
$db = new PDO($driver.":host=".$dbopts->host.";dbname=".$dbopts->dbname, $dbopts->user, $dbopts->password);

$db->query('SET NAMES utf8 ');



 

$biza = isset( $_REQUEST['biza'] ) ? $_REQUEST['biza'] : false;
$bizb = isset( $_REQUEST['bizb'] ) ? $_REQUEST['bizb'] : false;
$protocol = ($_REQUEST['protocol'] == 6) ? 6 : 4;
$rrdtype = $_REQUEST['type']; 



$sth = $db->query("SELECT biz_name from a_biz_type where  id=$biza ");
foreach ($sth as $row) {
    $name_a= $row['biz_name'];
}

$sth = $db->query("SELECT biz_name from a_biz_type where  id=$bizb ");
foreach ($sth as $row) {
    $name_b= $row['biz_name'];
}



 
if($rrdtype=='bits'){
   $file_type='bytes' ;
}

if($rrdtype=='bytes'){
   $file_type='bytes' ;
}

if($rrdtype=='pkts'){
   $file_type='pkts' ;
}

$filename   =sprintf("/ixpdata/rrd/ipv$protocol/$file_type/dxtotal/biz-%05d/dongxi.ipv$protocol.$file_type.biz-%05d.biz-%05d.rrd",$biza,$biza,$bizb);
            
// echo $filename;die;

$rrdfilename=$filename;

// don't send error messages back to the end user (barryo)
if( !is_readable( $filename ) )
{
    header("HTTP/1.0 404 dxtotal-graph.php :Not Found $filename");
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
$multiplier=1;

if ( ($file_type=='bytes')&&( $rrdtype=='bits') ){
 
    $multiplier=8;

}

$options = array (
	'--width=600',
	'--height=150',
	'--slope-mode',
	'--lower-limit=0',
	'--start=' . (time() - $timeperiod),
	'--title=traffic - '.$name_a.'-'.$name_b.' - IPv'.$protocol.'/'.$rrdtype.$multiplier,
    '--vertical-label='.$rrdtype.'/second',
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
	$options[] = 'LINE2:cdefb#ff00ff:Peak ';
	$options[] = 'GPRINT:max_in:\tMax\\:%8.2lf%s\l';
	$options[] = 'AREA:cdefd#006600:Peak ';
	$options[] = 'GPRINT:max_out:\tMax\\:%8.2lf%s\l';
	$options[] = 'COMMENT:\s';
}

$avg_label = $separated_maxima ? 'Avg. ' : '';

$options[] = 'AREA:cdefc#000066:'.$name_b.$avg_label.'-'.$name_a;

// $options[] = 'AREA:cdefc#000066:'.$biz_name.$avg_label.' to '.$cust_name;


if (!$separated_maxima)
	$options[] = 'GPRINT:max_out:\tMax\\:%8.2lf%s';
$options[] = 'GPRINT:avg_out:\tAvg\\:%8.2lf%s';
$options[] = 'GPRINT:last_out:\tCur\\:%8.2lf%s\l';

 $options[] = 'LINE1:cdefa#00CF00:'.$name_a.$avg_label.'-'.$name_b;


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
