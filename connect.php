<?php
$host='localhost'; 
$database='samplebd'; 
$user ='root'; 
$pswd =''; 
 
$link = mysqli_connect($host, $user, $pswd, $database);
if (mysqli_connect_error())
  {
	die('Ошибка подключения (' . mysqli_connect_errno() . ') '
	. mysqli_connect_error());
   }


?>