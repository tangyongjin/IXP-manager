<?php
 

$action=$_GET['action'];


function getcol($col){
  
		 $col=(array)($col);
 

        $tpl1='<field name="COL" type="DB_TYPE" length="255"  nullable="NULL_OP"/>';
	    $tpl2='<field name="COL"  type="DB_TYPE" nullable="NULL_OP"/>';

		 $colmane=$col['Field'];

		 if($colmane=='id'){
		 	return '';

		 }

		 $TYPE=$col['Type'];

		 $nulltype= $col['Null']=='NO'? 'no':'yes';
		 $pieces = explode("(", $TYPE);

		 
		 
         $stype=$pieces[0];
         // $len=$pieces[1];


		 if( $stype =='int'){
		     $type='integer';
		 }

		 if($stype  =='char'){
		    $type='string';
		 }
		 
		 if( $stype =='longtext'){
		    $type='text';
		 }

		if( $stype =='date'){
		    $type='date';
		 }

		if( $stype =='datetime'){
		    $type='datetime';
		 }

		if( ($stype =='double') || ($stype =='float') ){
		    $type='float';
        }

        if ( $stype=='date'   ){
             $type='date';
        }

       if ( $type=='datetime' ||  $type=='date'  ){

       	   
       	   	$ret = str_replace('COL', $colmane, $tpl2);
	       	$ret = str_replace('DB_TYPE', $type, $ret);
	       	$ret = str_replace('NULL_OP', $nulltype, $ret);
        }

        else
        {       	 
           

          	$ret = str_replace('COL', $colmane, $tpl1);
            $ret = str_replace('DB_TYPE', $type, $ret);
            $ret = str_replace('NULL_OP', $nulltype, $ret);
        }
         // echo '<pre>', htmlentities($ret), '</pre>'; 
         return $ret;
}


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


    case 'dbtool':

        $smallname=$_GET['table'];
        $bigname=ucfirst($smallname);
        

        echo "Entities.$bigname.dcm.xml</br>";
        

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
    
    // 与数据库交互
    $query = 'desc ticket';


 
    // 发送查询给MySQL
        $result = $mysqliConn->query($query);

        $col_string='';
		while ($row = $result->fetch_object())
		{
		    $col_string.=getcol($row);
		}

	    $result->free();
	    $mysqliConn->close();
		 


        $tpl='<?xml version="1.0"?>
		<doctrine-mapping xmlns="http://doctrine-project.org/schemas/orm/doctrine-mapping" xsi="http://www.w3.org/2001/XMLSchema-instance" schemaLocation="http://doctrine-project.org/schemas/orm/doctrine-mapping.xsd">
         <entity name="Entities\bigname" table="smallname" tableName="smallname" repository-class="Repositories\bigname">
		    <id name="id" type="bigint">
		      <generator strategy="AUTO"/>
		    </id>
            fileds
         </entity>
		</doctrine-mapping>';

        

        $fileds='';

       
  		$newtpl = str_replace('smallname', $smallname, $tpl);
        $newtpl = str_replace('bigname', $bigname, $newtpl);
        $newtpl = str_replace('fileds', $col_string, $newtpl);

       echo    htmlentities($newtpl) ;

		
        // echo '<pre>', htmlentities($newtpl), '</pre>'; 
		
		break;
	
	



	default:
		# code...
		break;
}


 



?>
