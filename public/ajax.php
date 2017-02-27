<?php
 

$action=$_GET['action'];

switch ($action) {


	case 'create':
			   exec("/opt/ixpmanager/bin/ixptool.php -a statistics-cli.gen-mrtg-conf  2>&1", $output, $return_var);
			   echo htmlspecialchars(file_get_contents('/ixpdata/mrtgcfg/mrtg.cfg'));

	 	break;
	

	case 'preview':
        echo htmlspecialchars(file_get_contents('/ixpdata/mrtgcfg/mrtg.cfg'));
		break;
	

	case 'refreshmac':

	    exec("sshpass -p 'cnix@1234' ssh -o StrictHostKeyChecking=no root@sflow  /usr/local/bin/update-l2database.pl 2>&1", $output, $return_var);
        
        print_r($output);
        
print_r($return_var);
        

	  	break;
	



	default:
		# code...
		break;
}


 



?>
