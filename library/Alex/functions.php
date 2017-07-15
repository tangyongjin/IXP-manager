<?php



function debug($value){

    echo "<pre>";
    print_r($value);
    echo "</pre>";
}




function  xlog($var){

  $loghandle = fopen("/ixpdata/webapp/opt/ixpmanager/var/log/alex.log", "a+");
  $msg = serialize($var)."\r\n";
  fwrite($loghandle, $msg);
  fclose($loghandle);
}

function  logtext($var){

    $loghandle = fopen("/ixpdata/webapp/opt/ixpmanager/var/log/alex.log", "a+");
    ob_start();                    // start buffer capture
    var_dump( $var );           // dump the values
    $msg = ob_get_contents(); // put the buffer into a variable
    ob_end_clean();                // end capture
   
    fwrite($loghandle, $msg);
    fclose($loghandle);
}
 
  




?>