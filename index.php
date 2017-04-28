<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Home</title>
   </head>
 <body>

 <h1>hello</h1>
 <?php
 		$page = $_GET['page'];

 				switch ($page) {
		 			case 'home':
		 				header("Location: home.php");
		 				break;
		 			
		 			case 'contact':
		 				header("Location: contact.php");
		 				break;
		 		} 		
 ?>


 </body>
</html>