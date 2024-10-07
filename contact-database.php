<?php

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$textarea=$_POST['textarea'];
	
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'mobile');
	
	$q = "insert into contact_db(name,email,phone,massage)values
	('$name','$email','$phone','$textarea')";
	$status=mysqli_query($con,$q);
	mysqli_close($con);


?>

<html>
	<head>
		<title>insertion</title>
		<link rel="stylesheet" href="css/insertion.css" />
	</head>
	
	<body>
	<div class="home">
		<a title="Go to Home Page" href="home.php"><img src="logo/home.png" /></a>
		</div>
		<div class="container">
		
			<div class="main">
	
			
			<h1>Mobile Shopping Management</h1>
			<h3>
			<?php 
			if($status==1)
						echo "Record Inserted"; 
					else 
						echo "Insertion Failed".mysqli_error();
					?>
					</h3>
			<p> <a style="color:white;font-size:25px;" href="contact.php">Go Back</a></p>
			
			</div>
		</div>
	</body>
</html>