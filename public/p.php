<?php



session_start();

print_r($_SESSION);

print_r($_SERVER);

// $file="/ixpdata/rrd/ipv4/bytes/p2p/src-00006/p2p.ipv4.bytes.src-00006.dst-00015.rrd";


// $result = rrd_fetch( $file,  array( "AVERAGE", "-r", "7200", "-s", "-24h" ) );


// $traffic=array_values($result['data']['traffic_in']);
// print_r($traffic);
// $index=0;
// $total=0;
// $avg=0;
// foreach ($traffic as $key => $one_value) {
//    echo "$one_value <br/>";
//    if( is_nan  ($one_value)) 
//    {
//         echo "skip" ;
//    }else
//    {
//    	 $index++;
//      $total= $total+  $one_value;
//    }
// }


// print_r( array('totl'=>$total,
//                 'index'=>$index,
//                 'avg'=>intval($total/$index ))   );



?>
