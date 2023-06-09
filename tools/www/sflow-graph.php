<?php
#
# sflow-graph.php
#
# Copyright (C) 2009-2016 Internet Neutral Exchange Association Company Limited By Guarantee.
# All Rights Reserved.
# 
# This file is part of IXP Manager.
# 
# IXP Manager is free software: you can redistribute it and/or modify it
# under the terms of the GNU General Public License as published by the Free
# Software Foundation, version v2.0 of the License.
# 
# IXP Manager is distributed in the hope that it will be useful, but WITHOUT
# ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
# FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
# more details.
# 
# You should have received a copy of the GNU General Public License v2.0
# along with IXP Manager.  If not, see:
# 
# http://www.gnu.org/licenses/gpl-2.0.html
#
# Description:
#
# This script uses rrdgraph to read in p2p traffic graphs and output a .png

# Turn off all error reporting
#error_reporting(0);

set_include_path(get_include_path() . PATH_SEPARATOR . dirname( __FILE__ ) . "/../../library");

require '../../library/Zend/Config/Ini.php';
require '../../bin/utils.inc';

$config = new Zend_Config_Ini('../../application/configs/application.ini', scriptutils_get_application_env());

$dbopts = $config->resources->doctrine2->connection->options;

# Zend likes to use "pdo_driver" instead of "driver".  This confuses.
$driver = $dbopts->driver;
$driver = preg_replace('/^pdo_/', '', $driver);

$db = new PDO($driver.":host=".$dbopts->host.";dbname=".$dbopts->dbname, $dbopts->user, $dbopts->password);

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
$dstvli = isset( $_REQUEST['dstvli'] ) ? $_REQUEST['dstvli'] : false;

// does $srcvli point to a valid array structure and is the vlan
if (!$srcvli || !$dstvli || !is_numeric($custinfo[$srcvli]['vlan']) || !is_numeric($custinfo[$dstvli]['vlan']) || ($custinfo[$srcvli]['vlan'] != $custinfo[$dstvli]['vlan']) || ($srcvli == $dstvli)) {
	header("HTTP/1.0 404");
	die();
}

$srcvliowner=$custinfo[$srcvli]['name'];
$dstvliowner=$custinfo[$dstvli]['name'];

// default to ipv4 if not otherwise specified
$protocol = ($_REQUEST['protocol'] == 6) ? 6 : 4;
$rrdtype = ($_REQUEST['type'] == 'pkts') ? 'pkts' : 'bytes';

# /data/ixpmatrix/ipv6/pkts/p2p/src-00043/p2p.ipv6.pkts.src-00043.dst-00131.rrd 
$filename=sprintf ($config->sflow->rootdir."/ipv$protocol/$rrdtype/p2p/src-%05d/p2p.ipv$protocol.$rrdtype.src-%05d.dst-%05d.rrd", $srcvli, $srcvli, $dstvli);

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
		
		// $timeperiod = 60*60*24*1.5;
	    $timeperiod = 60*60*24*1;

		break;
}

$separated_maxima = ($timeperiod > 60*60*24*2) ? 1: 0;

$multiplier = ($rrdtype == 'bytes') ? 8 : 1;

$options = array (
	'--daemon', isset( $config->sflow->rrd->rrdcached->sock ) ? $config->sflow->rrd->rrdcached->sock : null,
	'--width=600',
	'--height=150',
	'--slope-mode',
	'--lower-limit=0',
	'--start=' . (time() - $timeperiod),
	'--title='.$dstvliowner.' - '.$srcvliowner.' traffic - '.$config->identity->orgname.' '.$vlanname[$custinfo[$srcvli]['vlan']].' - IPv'.$protocol.'/'.$rrdtype,
	'--vertical-label='.(($rrdtype == 'bytes') ? 'bits' : 'pkts' ).' / second',
	'--watermark=Copyright '. date('Y') .' '.$config->identity->orgname.' - GeneratedbyIXPManager: '.date('Y-m-d G:i:s'),
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

$options[] = 'AREA:cdefc#00CF00:'.$avg_label.$srcvliowner.' to '.$dstvliowner;
if (!$separated_maxima)
	$options[] = 'GPRINT:max_out:\tMax\\:%8.2lf%s';
$options[] = 'GPRINT:avg_out:\tAvg\\:%8.2lf%s';
$options[] = 'GPRINT:last_out:\tCur\\:%8.2lf%s\l';

$options[] = 'LINE1:cdefa#002A97FF:'.$avg_label.$dstvliowner.' to '.$srcvliowner;
if (!$separated_maxima)
	$options[] = 'GPRINT:max_in:\tMax\\:%8.2lf%s';
$options[] = 'GPRINT:avg_in:\tAvg\\:%8.2lf%s';
$options[] = 'GPRINT:last_in:\tCur\\:%8.2lf%s\l';

$options[] = 'COMMENT:\s';
$options[] = 'COMMENT:\s';
$options[] = 'COMMENT:\s';

$output = ixpmanager_rrdgraph ($config->sflow->rrd->rrdtool, "-", $options);

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

function ixpmanager_rrdgraph ($rrdtool, $filename, $options)
{
	/* clean up headers, session stuff, configure appropriate MIME stuff */
	$args = $filename;
	foreach(array_keys ($options) as $key) {
		# this is necessary both for sanity / security and
		# compatibility with rrd_graph
		$args .= ' '.escapeshellarg($options[$key]);
	}

	$cmdline ="$rrdtool graph $args  2>&1";

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
