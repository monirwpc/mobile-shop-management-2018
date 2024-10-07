<!DOCTYPE html>
<html>
	<head>
		<title>Buyer Information Form</title>
		<link rel="stylesheet" href="css/style.css" />
		
	</head>
	<body style="background:url(images/dark-triangles.png)repeat fixed 0 0 #fff;">
		<div class="container">
		
			<a class="home" title="Go to Home Page" href="home.php"><img src="logo/home.png" /></a>
		
		
		</br></br><h1 style="text-align:center;color:white">Customer's Information Form</h1></br></br>
		<form method="post" action="insertion.php">
			<table class="insertTable" align="center">
				<tr>
					<th align="left">Customer Name :</th>
					<td class="a"><input type="text" name="cus_name" required /></td>
				</tr>
				
				<tr>
					<th align="left">Gender :</th>
					<td style="font-size:22px;color:white;" class="a">
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
					</td>
				</tr>
				
				<tr>
					<th align="left">Customer Address :</th>
					<td class="a"><input type="text" name="cus_address" required /></td>
				</tr>
				
				<tr>
					<th align="left">Customer Contact No :</th>
					<td class="a"><input type="text" name="cus_contact" required /></td>
				</tr>
				
				<tr>
					<th align="left">Mobile Name :</th>
					<td> <select style="padding:8px 57px;font-size:13px;background:gray;color:white;" name="mobile_name">
					  <option value="Symphony">Select</option>
					  <option value="Symphony">Symphony</option>
					  <option value="Samsung">Samsung</option>
					  <option value="Nokia">Nokia</option>
					  <option value="Oppo">Oppo</option>
					  <option value="Huwei">Huwei</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<th align="left">Mobile Model :</th>
					<td class="a"><input type="text" name="model" required /></td>
				</tr>
				
				<tr>
					<th align="left">Price :</th>
					<td class="a"><input type="text" name="price" required /></td>
				</tr>
				
				<tr>
					<th align="left">Date :</th>
					<td class="a"><input type="text" name="date" value="<?php echo date("d/m/Y")?>" /></td></br>
				</tr>
				
				
				
				<tr>
					<th></th>
					<td class="insertSubmit" align="center"><input style="padding:6px 30px;background:blue;color:red;font-size:18px;margin-top:20px;" type="submit" value="submit" /></td>
				</tr>
			</table>
		</form></br></br>
		<li style="text-align:center;list-style:none;" ><a style="border:1px solid white;background:white;padding:15px 20px;text-decoration:none;font-size:20px;" href="home.php">Go to Home Page</a></li>
		</br></br>
	</div>
	</body>
</html>
		