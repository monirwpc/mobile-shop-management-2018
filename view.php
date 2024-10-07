<?php
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'mobile');
	
	$q = "select * from mb_db";
	$result =mysqli_query($con,$q);
	$num = mysqli_num_rows($result);
	mysqli_close($con);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>View Record</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body style="background:url(images/dark-triangles.png)repeat fixed 0 0 #fff;">
	<a class="home" title="Go to Home Page" href="home.php"><img src="logo/home.png" /></a>
		<h1 style="text-align:center;color:white;margin-top:0;">View The Customers Information</h1>
		
		<form action="view_search.php" method="post">
			<p style="margin-left:80px;"><span style="color:white;font-size:20px;">Enter Your date:</span><input style="padding:10px 20px;" type="text" name="search" placeholder="Enter your date" /></p>
			<input style="margin-left:250px;padding:8px 25px;font-size:20px;background:green;color:white;border:none;" type="submit" value="Search" />
		
		</form>
		<br/><br/>
		<table class="viewTable"  align="center">
			<tr>
				<th>SL</th>
				<th>Customer Name</th>
				<th>Gender</th>
				<th>Customer Address</th>
				<th>Contact</th>
				<th>Mobile Name</th>
				<th>Model</th>
				<th>Price</th>
				<th>Date</th>
			</tr>
			<?php 
				for($i=1;$i<=$num;$i++)
				{
					$row = mysqli_fetch_array($result);
					?>
					<tr>
					
						<td><?php echo $row['customer_id'];?></td>
						<td><?php echo $row['customer_name'];?></td>
						<td><?php echo $row['gender'];?></td>
						<td><?php echo $row['customer_address'];?></td>
						<td><?php echo $row['mobile_no'];?></td>
						<td><?php echo $row['mobile_name'];?></td>
						<td><?php echo $row['mobile_model'];?></td>
						<td><?php echo $row['price'];?></td>
						<td><?php echo $row['date'];?></td>
					</tr>
				<?php
				}
			?>
		</table></br></br>
		<li style="text-align:center;list-style:none;" ><a style="border:1px solid white;background:white;padding:15px 20px;text-decoration:none;font-size:20px;" href="home.php">Go to Home Page</a></li>
		</br>
		
	</body>
	
</html>