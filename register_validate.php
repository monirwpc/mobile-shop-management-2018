<?php 
	$username=$_POST['user'];
	$password=$_POST['pass'];
	
	
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'mobile');
	
	$q = "insert into user(username,password)values
	('$username','$password')";
	$status=mysqli_query($con,$q);
	mysqli_close($con);

?>

<html>
	<head>
		<title>register-validate</title>
		<link rel="stylesheet" href="css/insertion.css" />
	</head>
	
	<body>
	
		
			<div class="main">
	
			
			<h1>Mobile Shopping Management</h1>
			<h3>
			<?php 
			if($status==1)
						echo "Account Created !!"; 
					else 
						echo "Account creat Failed".mysqli_error();
					?>
					</h3>
			<p> <a style="color:white;font-size:25px;" href="login.php">Go Back</a></p>
			
			</div>
		
	</body>
</html>