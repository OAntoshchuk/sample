<!DOCTYPE html>
<html>
<head>
<title>form</title>
<meta charset="utf-8">
</head>
 
<body>


<?php 

require_once ( 'connect.php' );


$name = ($_POST['name']); 
$mail = ($_POST['mail']);
$description = ($_POST['description']);



//mysql_query(" INSERT INTO `message` ('name', 'mail', 'description') VALUES ('$name','$mail','$description')	");

//mysql_query("INSERT INTO message ('name', 'mail', 'description') 		VALUES ('$name','$mail','$description')       ");


mysql_query("INSERT INTO `message` (`name`, `mail`, `description`) 
			VALUES ($name, $mail, $description);"
	);



mysql_close();

echo $name, $mail, $description;


//echo "message sent";

//$text = "";
//$text .= "имя: $name \r\n"; 
//$text .= "Почта: $mail \r\n"; 
//$text .= "Сообщение: $description \r\n";
//$text .= " \r\n";
//if (!empty($name) && !empty($mail) && !empty($description)) 
//{
//	$file = fopen ('mes.txt', 'a+'); 
//    fwrite ($file,$text); 
//    fclose ($file); 
// };
//header("Location: index.php");




	
//header("Location: index.php");

?>




</body>
</html>