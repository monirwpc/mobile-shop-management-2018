<?php
	$size = sizeof($_POST);							//size of row;
	$records =$size/9;								//number of records;
	
	for($i=1;$i<=$records;$i++)						//next create;
	{
		$index1="customer_id".$i;
		$customer_id[$i]=$_POST[$index1];
		
		$index2="customer_name".$i;
		$customer_name[$i]=$_POST[$index2];
		
		$index3="gender".$i;
		$gender[$i]=$_POST[$index3];
		
		$index4="customer_address".$i;
		$customer_address[$i]=$_POST[$index4];
		
		$index5="mobile_no".$i;
		$mobile_no[$i]=$_POST[$index5];
		
		$index6="mobile_name".$i;
		$mobile_name[$i]=$_POST[$index6];
		
		$index7="mobile_model".$i;
		$mobile_model[$i]=$_POST[$index7];
		
		$index8="price".$i;
		$price[$i]=$_POST[$index8];
		
		$index9="date".$i;
		$date[$i]=$_POST[$index9];
	}
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mobile');
	for($i=1;$i<=$records;$i++)
	{
	$q= "update mb_db SET customer_name='$customer_name[$i]',gender='$gender[$i]',customer_address='$customer_address[$i]',
	mobile_no='$mobile_no[$i]',mobile_name='$mobile_name[$i]',mobile_model='$mobile_model[$i]',price='$price[$i]',
	date='$date[$i]'
	where customer_id=$customer_id[$i]";
	mysqli_query($con,$q);
	}
	mysqli_close($con);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Updation</title>
		<link rel="stylesheet" href="css/insertion.css" />
	</head>
	<body>
		<div class="home">
		<a title="Go to Home Page" href="home.php"><img src="logo/home.png" /></a>
		</div>
		<div class="container">
		
			<div class="main">
				<h1>Book Record Management</h1>
				<h3>
					<?php 
						echo $records." Records Updated"; 
					
					?>
				</h3>
					
				<p style="color:blue;font-size:25px;"><a href="home.php">Go Back</a></p>
			</div>
		</div>
	</body>
</html>