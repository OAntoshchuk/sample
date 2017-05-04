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


mysqli_query($link,"INSERT INTO `message` (`name`, `mail`, `description`) 
			VALUES ('$name', '$mail', '$description');"
	);



mysqli_close($link);
header("Location: index.php?page=home");

?>




</body>
</html>