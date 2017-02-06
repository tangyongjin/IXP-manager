<?php


//这个文件无法被执行,除非另外部署一个webserver 在host上面.并且使用非80端口.


echo "aaa";
// $docker_ps_before = exec('docker ps');

$docker_ps_before = exec('whoami');


//$output = exec('docker-compose -f ../docker/docker-compose.yml  restart mrtg');
//$docker_ps_now = exec('docker ps');
//echo htmlspecialchars($docker_ps_before.'---'.$docker_ps_now);
echo htmlspecialchars($docker_ps_before);

?>
