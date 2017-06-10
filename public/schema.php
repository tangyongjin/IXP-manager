<?php
 

$action=$_GET['action'];


function debug($arr){
       echo "<pre>";
       print_r($arr);
       echo "</pre>";
             
}


function getcol($col){


	  
		 $col=(array)($col);

         $tpl='         <field name="COL"  type="DB_TYPE"  LENGTHINFO  nullable="NULL_OP"/>';
	     

	     $LENGTHINFO_REPLACE='';

		 $colmane=$col['Field'];

		 if($colmane=='id'){
		 	return '';
		 }
	     
		 $TYPE=$col['Type'];

		 $nulltype= $col['Null']=='NO'? 'no':'yes';
		 $pieces = explode("(", $TYPE);

		 
		 
         $stype=$pieces[0];
         // 把 text转换成string

         if($pieces[0]=='text'){
             $pieces[1]='65535)';
         }

          // debug($pieces);

		 if (in_array($stype,array('int','bigint'))) {
		     $type='integer';
		 }
		 

		 if (in_array($stype,array('char','varchar'))) {
		     $type='string';
		     $LENGTHINFO_REPLACE='length="'.$pieces[1].'"';
		     $LENGTHINFO_REPLACE=str_replace(')', '', $LENGTHINFO_REPLACE);
		 
		 }

	 	 if (in_array($stype,array('text','longtext'))) {
		     $type='text';
		     
		 
		 }




         if (in_array($stype,array('date','datetime'))) {
		     $type=$stype;
		 }
	  
	    if (in_array($stype,array('double','float'))) {
		     $type='float';
		 }
 
        
       	$ret = str_replace('COL', $colmane, $tpl);
       	$ret = str_replace('DB_TYPE', $type, $ret);
       	$ret = str_replace('NULL_OP', $nulltype, $ret);
       	$ret = str_replace('LENGTHINFO', $LENGTHINFO_REPLACE, $ret);
       	
        return $ret."\r";
}


switch ($action) {


    case 'dbtool':

        $smallname=$_GET['table'];
        $bigname=ucfirst($smallname);
        

        echo "Please create file:touch /ixpdata/webapp/opt/ixpmanager/doctrine/schema/Entities.$bigname.dcm.xml</br>";
        
        // $myfile = fopen("/ixpdata/webapp/opt/ixpmanager/doctrine/schema/Entities.$bigname.dcm.xml", "w");

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
    

        $query = "desc $smallname";

        // echo $query;
 
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
        
        // echo  "<pre>";
        echo    htmlentities($newtpl) ;
		// echo  "</pre>";

       
		
		break;
	
	



	default:
		# code...
		break;
}


 



?>
