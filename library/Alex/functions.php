<?php



function debug($value){

    echo "<pre>";
    print_r($value);
    echo "</pre>";
}




function  xlog($var){

  $loghandle = fopen("/ixpdata/logs/zend.log", "a+");


  $msg = serialize($var)."\r\n";





  fwrite($loghandle, $msg);
  fclose($loghandle);
  



}

 
  




?>