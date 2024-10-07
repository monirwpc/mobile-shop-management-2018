<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mobile');
	$q= "select * from mb_db";
	$result = mysqli_query($con,$q);
	$num = mysqli_num_rows($result);
	mysqli_close($con);

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Update Customers Info Record</title>
		<link rel="stylesheet" href="css/update-style.css" />
	</head>
	<body style="background:url(images/pink.png)repeat fixed 0 0 #fff;">
		<div class="container">
		<a class="home" title="Go to Home Page" href="home.php"><img src="logo/home.png" /></a>
		<h1 class="h1">Update Customers Info Record</h1>
		<form action="update-search.php" method="post">
			<p style="margin-left:80px;"><span style="color:white;font-size:20px;">Enter Your date:</span><input style="padding:10px 20px;" type="text" name="search" placeholder="Enter your ID" /></p>
			<input style="margin-left:250px;padding:8px 25px;font-size:20px;background:green;color:white;border:none;" type="submit" value="Search" />
		
		</form>
		<br/><br/>
		
		<form action="updation.php" method="post">
			<table align="center" id="viewTable">
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
						$row=mysqli_fetch_array($result);
						?>
						<tr>
							<td><?php echo $row['customer_id']; ?><input type="hidden" name="customer_id<?php echo $i;?>" value="<?php echo $row['customer_id'];?>" /></td>
							<td><input type="text" name="customer_name<?php echo $i;?>" value="<?php echo $row['customer_name']; ?>" /></td>
							<td><input type="text" name="gender<?php echo $i;?>" value="<?php echo $row['gender']; ?>" /></td>
							<td><input type="text" name="customer_address<?php echo $i;?>" value="<?php echo $row['customer_address']; ?>" /></td>
							<td><input type="text" name="mobile_no<?php echo $i;?>" value="<?php echo $row['mobile_no']; ?>" /></td>
							<td><input type="text" name="mobile_name<?php echo $i;?>" value="<?php echo $row['mobile_name']; ?>" /></td>
							<td><input type="text" name="mobile_model<?php echo $i;?>" value="<?php echo $row['mobile_model']; ?>" /></td>
							<td><input type="text" name="price<?php echo $i;?>" value="<?php echo $row['price']; ?>" /></td>
							<td><input type="text" name="date<?php echo $i;?>" value="<?php echo $row['date']; ?>" /></td>
							
						</tr>
						<?php
					}
				?>
				
			</table>
			<br/>
			<input align="center" class="update" type="submit" value="Update" name=""/>
		</form>
		
		<br/><br/><li style="text-align:center;list-style:none;" ><a style="border:1px solid white;background:white;padding:15px 20px;text-decoration:none;font-size:20px;" href="home.php">Go to Home Page</a></li>
		</div>
	</body>
</html>