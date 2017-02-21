<?php


// $cmd = "sflowtool -l  -p 5000";

///media/ramedisk_ixp/php_rrd/data_rec



$cmd = "sflowtool -l";


$src_fonder_mac='70e42263b9a0';
$dst_zhonglian_mac='3c94d5d387f0';

$descriptorspec = array(
   0 => array("pipe", "r"),   // stdin is a pipe that the child will read from
   1 => array("pipe", "w"),   // stdout is a pipe that the child will write to
   2 => array("pipe", "w")    // stderr is a pipe that the child will write to
);


$summary=array(
'starttime'=> date("Y/m/d H:i:s"). substr((string)microtime(), 1, 6),
'running_time'=>0,
'record_total'=>0,
'record_used'=>0,
'record_droped'=>0,
'pktsize'=>0,
'bits'=>0,
'mbps'=>0


);


 
$process = proc_open($cmd, $descriptorspec, $pipes, realpath('./'), array());


$starttime = time();
$run_duration=3;

while ($xdr = fgets($pipes[1])) {

    $running_time = time()- $starttime;
    if ($running_time > $run_duration) {    
 
    break;
   }
   
//   print_r($running_time);

    // $array=explode(',',$xdr);
    // $pktsize=intval($array[17]);
    // $summary['record_total']++;
    // $summary['running_time']=$running_time;

 

    // if(($array[4]==$src_fonder_mac)&&($array[5]==$dst_zhonglian_mac )){
    //      $summary['record_used']++;
    //      $summary['pktsize'] =($summary['pktsize'] + 1000 *$array[17]);
    //      $summary['bits'] =8*($summary['pktsize']);
    //      // $summary['mbps'] = ($summary['bits']/1000000)/ intval($now);
    //     // $summary['mbps'] = ($summary['bits']/1000000)/ intval($running_time);
    // }else {
    //      $summary['record_droped']++;
    // }
    echo  $running_time;
    //print_r($summary);
    flush();
}
    print_r($summary);


    $pstatus = proc_get_status($process);
    $PID = $pstatus['pid'];

    // other commands

    kill($PID); // instead of proc_terminate($resource);
    fclose($pipes[0]); 
    fclose($pipes[1]); 
    fclose($pipes[2]);
    proc_close($process);

    // proc_close($process); 
 
 

?>