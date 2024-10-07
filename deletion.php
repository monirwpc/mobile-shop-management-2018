<?php
	$size = sizeof($_POST);
	$j=1;
	for($i=1;$i<=$size;$i++,$j++)
	{
		$index="delete".$j;
		if(isset($_POST[$index])) 
			$customer_id[$i]=$_POST[$index];
		else
			$i--;
	}
	
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mobile');
	
	for($k=1;$k<=$size;$k++)
	{
	$q= "delete from mb_db where customer_id=".$customer_id[$k];
	mysqli_query($con,$q);
	}
	mysqli_close($con);
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Deletion</title>
		<link rel="stylesheet" href="css/insertion.css" />
	</head>
	<body>
		<div class="home">
		<a title="Go to Home Page" href="home.php"><img src="logo/home.png" /></a>
		</div>
		<div class="container">
			<div class="main">
				<h1>Mobile shop Managment</h1>
				<h3><?php 
						echo $size."Records Deleted"; 
					
					?></h3>
					
				<p><a href="deleteForm.php">Go Back</a></p>
			</div>
		</div>
	</body>
</html>