<?php

	$customer_name=$_POST['cus_name'];
	$gender=$_POST['gender'];
	$customer_address=$_POST['cus_address'];
	$mobile_no=$_POST['cus_contact'];
	$mobile_name=$_POST['mobile_name'];
	$mobile_model=$_POST['model'];
	$price=$_POST['price'];
	$date=$_POST['date'];
	

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'mobile');
	
	$q = "insert into mb_db(customer_name,gender,customer_address,mobile_no,mobile_name,mobile_model,price,date)values
	('$customer_name','$gender','$customer_address','$mobile_no','$mobile_name','$mobile_model','$price','$date')";
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
			<p> <a style="color:white;font-size:25px;" href="insertForm.php">Go Back</a></p>
			
			</div>
		</div>
	</body>
</html>