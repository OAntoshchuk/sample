<?php

require_once ( 'connect.php' );



$id = ($_POST['id']);


//$id = '61';


$query = "DELETE FROM `message` WHERE `id` = '$id'";
mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
mysqli_close($link);

echo 'ok';

//header("Location: index.php?page=home");
