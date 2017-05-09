<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Home Page</title>
   </head>
 <body>

 <?php
 		$page = $_GET['page'];

 				switch ($page) {
		 			case 'home':
		 				include 'home.php';
		 				break;
		 			
		 			case 'contact':
		 				include 'contact.php';
		 				break;
		 			} 		
 ?>


 </body>
</html>