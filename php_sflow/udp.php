<?php


// $cmd = "sflowtool -l  -p 5001";

///media/ramedisk_ixp/php_rrd/data_rec

//>/dev/null 2>&1
//sflowtool -4 -p 6343 -f 127.0.0.1/5000 -f 127.0.0.1/5001 >/dev/null 2>&1

$cmd = "sflowtool -p 5001 -l";



$descriptorspec = array(
   0 => array("pipe", "r"),   // stdin is a pipe that the child will read from
   1 => array("pipe", "w"),   // stdout is a pipe that the child will write to
   2 => array("pipe", "w")    // stderr is a pipe that the child will write to
);



 
$process = proc_open($cmd, $descriptorspec, $pipes, realpath('./'), array());



$line=0;
$flow_rows='';
while ($xdr = fgets($pipes[1])) {
   print_r($xdr);
  $line++;
  $flow_rows=$flow_rows.$xdr;

  if($line==1000){
  //  print_r($flow_rows);
    $line=0;
  }

}
    // print_r($summary);


    // $pstatus = proc_get_status($process);
    // $PID = $pstatus['pid'];

    // // other commands

    // kill($PID); // instead of proc_terminate($resource);
    // fclose($pipes[0]); 
    // fclose($pipes[1]); 
    // fclose($pipes[2]);
    // proc_close($process);

 
 

?>