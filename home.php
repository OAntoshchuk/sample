<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>HOME</title>
   </head>
 <body>

	<h1>HOME</h1>
  	<h1> <a href="contact.php"> contact us </a></h1>

  	<?php

  		require 'connect.php';
  		$result = mysqli_query($link,"SELECT * FROM `message` ");
		mysqli_close($link);
		while ($row = mysqli_fetch_array($result))
		{   ?>

<h1><?php echo $row['name'];?></h1>
	<p><?php echo $row['mail'];?></p>
	<p><?php echo $row['description'];?></p>
<?php  	}  ?>

 </body>
</html>