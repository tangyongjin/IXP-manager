<?php
 

$action=$_GET['action'];



function request_by_curl($remote_server, $post_string) {  
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $remote_server);
    curl_setopt($ch, CURLOPT_POST, 1); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array ('Content-Type: application/json;charset=utf-8'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
    $data = curl_exec($ch);
    curl_close($ch);  
    return $data;  
}  

switch ($action) {

   case 'warn':
        
        //https://open-doc.dingtalk.com/docs/doc.htm?spm=a219a.7629140.0.0.c0UBCT&treeId=257&articleId=105735&docType=1

  	    
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



    

        $query = "select sub_ip,reason,rt_diff as memo from ticket where   id in (select max(id) as lastid from ticket ) and sub_ip<>'119.38.219.7' ";
        $result = $mysqliConn->query($query);

        
        
        $found=0;
		while ($row = $result->fetch_object())
		{
		     $reason= $row->reason;
		     $sub_ip=$row->sub_ip;
		     $memo=$row->memo;
		     $found++;
		}

 	    
        
        
        if($found ==0){
              die;
        }
 

       // die;

       if (strpos($reason, ' 0') !== false){
          $picUrl='http://114.113.88.2/ixp/css/images/w16.png';
       }else
       {
       	  $picUrl='http://114.113.88.2/ixp/css/images/sort_desc.png';
       }


        $webhook ='https://oapi.dingtalk.com/robot/send?access_token=5e401200959ff772720eceac0afeccb8eb29cf215c0465ecb13e8a14260e14f6';
        
        // $message="###### AA  \n  ![screenshot](http://114.113.88.2/ixp/css/images/w16.png)\n  BB";
        $message=$memo;
        
        // .'  ### '.date('Y-m-d H:i:s'). "   - ".$memo; 
        // $message='<img src="http://114.113.88.2/ixp/css/images/w16.png" width = "16" height = "16"  />';

 

        $md=$sub_ip.$reason;
		$data = array (
			   'msgtype' => 'markdown',
			   'markdown' => array("title"=>"Alert",
			   	                   "text"=>
			   	                   '- '.$sub_ip."\n - ".$reason."\n - ".$memo
			   	                   //."\n - aaa ![screenshot](http://114.113.88.2/ixp/css/images/w16.png) bbb\n"
			   	                   )
		        )
		;
		$data_string = json_encode($data);
		$result = request_by_curl($webhook, $data_string);  
		echo $result;


 

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
