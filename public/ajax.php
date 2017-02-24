<?php
 

 
//$output = exec('sudo  /opt/ixpmanager/bin/ixptool.php  -a    statistics-cli.gen-mrtg-conf');
// /opt/ixpmanager/bin/ixptool.php -a statistics-cli.gen-mrtg-conf

// /ixpdata/mrtgcfg/mrtg.cfg


//www-data:x:33:33:www-data:/var/www:/bin/bash

// www-data:x:33:33:www-data:/var/www:/usr/sbin/nologin



exec("/opt/ixpmanager/bin/ixptool.php -a statistics-cli.gen-mrtg-conf  2>&1", $output, $return_var);
// print_r($return_var);
// print_r($output);


echo htmlspecialchars(file_get_contents('/ixpdata/mrtgcfg/mrtg.cfg'));

 



?>
