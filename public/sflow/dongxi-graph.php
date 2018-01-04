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

$sth = $db->query('
SELECT DISTINCT
	cu.name,
	vi.vlan,
	vi.vlaninterfaceid
FROM
	(view_vlaninterface_details_by_custid vi, cust cu)
WHERE
	vi.custid = cu.id
');

foreach ($sth as $row) {
	$custinfo[$row['vlaninterfaceid']]['name'] = $row['name'];
	$custinfo[$row['vlaninterfaceid']]['vlan'] = $row['vlan'];
}

$sth = $db->query('SELECT name, number FROM vlan');
foreach ($sth as $row) {
	$vlanname[$row['number']] = $row['name'];
}

$srcvli = isset( $_REQUEST['srcvli'] ) ? $_REQUEST['srcvli'] : false;
$biz = isset( $_REQUEST['biz'] ) ? $_REQUEST['biz'] : false;



$sth = $db->query("SELECT biz_name from a_biz_type where  id=$biz ");
foreach ($sth as $row) {
    $biz_name= $row['biz_name'];
}



$sql="select name from cust where id in(select custid from   view_vlaninterface_details_by_custid where vlaninterfaceid= $srcvli ) ";

$sth = $db->query($sql);

foreach ($sth as $row) {
    $cust_name= $row['name'];
}


 
$protocol = ($_REQUEST['protocol'] == 6) ? 6 : 4;
$rrdtype = $_REQUEST['type']; 

 
if($rrdtype=='bits'){
   $file_type='bytes' ;
}

if($rrdtype=='bytes'){
   $file_type='bytes' ;
}

if($rrdtype=='pkts'){
   $file_type='pkts' ;
}



$filename=sprintf ($config->sflow->rootdir."/ipv$protocol/$file_type/dongxi/src-%05d/dongxi.ipv$protocol.$file_type.src-%05d.biz-%05d.rrd", $srcvli, $srcvli, $biz);

$rrdfilename=$filename;

 




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

@$options = array (
	'--width=600',
	'--height=150',
	'--slope-mode',
	'--lower-limit=0',
	'--start=' . (time() - $timeperiod),
	'--title=traffic - '.$config->identity->orgname.' '.$vlanname[$custinfo[$srcvli]['vlan']].' - IPv'.$protocol.'/'.$rrdtype.$multiplier,
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




// 2A97FF 蓝色
// 00CF00 绿色

// FF0000  红色 

if ($separated_maxima) {
	$options[] = 'LINE2:cdefb#ff00ff:Peak ';
	$options[] = 'GPRINT:max_in:\tMax\\:%8.2lf%s\l';
	$options[] = 'AREA:cdefd#006600:Peak ';
	$options[] = 'GPRINT:max_out:\tMax\\:%8.2lf%s\l';
	$options[] = 'COMMENT:\s';
}

$avg_label = $separated_maxima ? 'Avg. ' : '';

// $options[] = 'AREA:cdefc#00CF00:'.$avg_label.'-';
@$options[] = 'AREA:cdefc#000066:'.$biz_name.$avg_label.' to '.$cust_name;


if (!$separated_maxima)
	$options[] = 'GPRINT:max_out:\tMax\\:%8.2lf%s';
$options[] = 'GPRINT:avg_out:\tAvg\\:%8.2lf%s';
$options[] = 'GPRINT:last_out:\tCur\\:%8.2lf%s\l';

 @$options[] = 'LINE1:cdefa#00CF00:'.$avg_label.$cust_name.' to '.$biz_name;

 // $options[] = 'LINE1:cdefa#0000CF00:'.$avg_label.'-';
 

if (!$separated_maxima)
	$options[] = 'GPRINT:max_in:\tMax\\:%8.2lf%s';
$options[] = 'GPRINT:avg_in:\tAvg\\:%8.2lf%s';
$options[] = 'GPRINT:last_in:\tCur\\:%8.2lf%s\l';

$options[] = 'COMMENT:\s';
$options[] = 'COMMENT:\s';
$options[] = 'COMMENT:\s';



// don't send error messages back to the end user (barryo)
if( @is_readable( $rrdfilename ) )
{
  
  $output = ixpmanager_rrdgraph ($config->sflow->rrd->rrdtool, "-", $options,$rrdfilename);

  if ($output) {
		ob_start();
		header("Content-type: image/png");
		ob_end_clean();
		session_write_close();
		print $output;
    }

    
}else{

// echo 111;
        $output=Errimg($rrdfilename);
        ob_start();

        header( "Content-type: image/png" );
        imagepng( $output );

		// header("Content-type: image/png");
		// ob_end_clean();
		// session_write_close();
		// print $output;

}




// $output = ixpmanager_rrdgraph ($config->sflow->rrd->rrdtool, "-", $options,$rrdfilename);

// if ($output) {
// 	ob_start();
// 	header("Content-type: image/png");
// 	ob_end_clean();
// 	session_write_close();
// 	print $output;
// }

exit;

# PECL rrd_graph is completely brain damaged as it doesn't support taking
# "-" as a filename.  Because of this, it cannot be used for inline image
# generation.  So we need to write our own wrapper function, sigh.




function  Errimg($text){
	

	$my_img = imagecreate( 750, 80 );                             //width & height
	$background  = imagecolorallocate( $my_img, 0,   0,   255 );
	$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
	imagestring( $my_img, 4, 30, 25, 'check:'.$text, $text_colour );
	imagesetthickness ( $my_img, 5 );
    return $my_img;
}




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
