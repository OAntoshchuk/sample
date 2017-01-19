<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Home</title>
   </head>
 <body>
    <h1>Home</h1>
   	<h1><a href="contact.php"> contact us </a></h1>
   	<br><br>
 </body>
</html>

<?php require_once 'connect.php'; ?>

<?php

$section = file_get_contents('./mes.txt', true);
echo "<pre>";
echo($section);
echo "</pre>";


?>