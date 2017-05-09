<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>HOME Page</title>
   </head>
 <body>

	<h1>Welcome HOME Page</h1>
  	<h1> <a href="index.php?page=contact"> contact us >>> </a></h1>
  	<h1>Welcome =) </h1>


    
  	<?php
  		
  		require 'connect.php';
  		$result = mysqli_query($link,"SELECT * FROM `message` ");
		mysqli_close($link);
		while ($row = mysqli_fetch_array($result))
		{   ?>


		<p><?php echo $row['id'];?></p>
	<h2><p><?php echo $row['name'];?></p></h2>
	<p><?php echo $row['mail'];?></p>
	<p><?php echo $row['description'];?></p>

	<?php $id = $row['id'];?>
<?php echo 'ppppppppppp',$id;?>


<form action="delete.php" method="POST">
<input type="hidden" name="id" value="<?php $id; ?>">
</form>	
<h4><a href=" delete.php ">  delete </a></h4>

<?php  	}  ?>





 </body>
</html>