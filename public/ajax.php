<?php
 

$action=$_GET['action'];

switch ($action) {

   case 'warn':


         
       
	
	    $servername = "mysql";
        $username = "root";
		$password = "cnix@1234";
		$mysqliConn = new mysqli();
 

	    $mysqliConn->connect($servername, $username, $password, 'ixp2');
	    if ($mysqliConn->connect_error)
	    {
	        printf("Unable to connect to the database:%s", $mysqliConn->connect_error);
	        exit();
	    }
    
 


        $query = "select sub_ip,reason,memo from ticket where   id in (select max(id) as lastid from ticket ) and sub_ip<>'119.38.219.7' ";
        $result = $mysqliConn->query($query);


		while ($row = $result->fetch_object())
		{
		     $reason= $row->reason;
		     $sub_ip=$row->sub_ip;
		     $memo=$row->memo;
		}

        // echo $reason;
        // echo $sub_ip;
              

        /*
        https://oapi.dingtalk.com/robot/send?access_token=5e401200959ff772720eceac0afeccb8eb29cf215c0465ecb13e8a14260e14f6
        */      
 
        //$robot_url='https://oapi.dingtalk.com/robot/send?access_token=ea2f8323f1486165ae26e9f0ba13d38395aec86220aa718066abce44982dad5d';

        $robot_url='https://oapi.dingtalk.com/robot/send?access_token=5e401200959ff772720eceac0afeccb8eb29cf215c0465ecb13e8a14260e14f6';



        $x=array("msgtype"=>"text",
                "text"=>array("content"=>'['.date('Y-m-d H:i:s').']'.$sub_ip.'|'.$reason.'|'.$memo),
                "at"=>array("atMobiles"=>array(18600089281,13601303606,17310559595,18510627106),"isAtAll"=>true),
        	);
        

        $ch = curl_init($robot_url);
        $data_string = json_encode($x);                                                                          
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type:application/json','Content-Length:'.strlen($data_string)));
                                                                                                                     
		$result = curl_exec($ch);

	 	break;

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
