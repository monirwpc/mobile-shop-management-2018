<!DOCTYPE html>
<html>
	<head>
		<title>User Registration Form</title>
		<style>
			.main{
				margin-top:200px;
				border:4px solid #e67e22;
				width: 460px;
				margin-left: 33%;
				background:gray;
				text-align: center;
				border-radius:12px;
				padding:20px;
				padding-top:5px;
				}
		</style>
	</head>
	
	<body style="background:url(images/ll.jpg)repeat fixed 0 0 #fff;">
		<div class="main">
			<form action="register_validate.php" method="post" >
				<table>
					<p style="color:black;font-size:25px;font-family:times new roman">Registration Form</p>
					<tr>
						<td style="font-size:20px;color:white;">Enter UserName</td>
						<td><input style="margin-left:10px;padding:5px;margin-bottom:5px;width:250px;" type="text" name="user" placeholder="Enter Your Name" /></td>
					</tr>
					<tr>
						<td style="font-size:20px;color:white">Enter Password</td>
						<td><input style="margin-left:10px;padding:5px;margin-bottom:5px;width:250px" type="text" name="pass" placeholder="Enter Your Password" /></td>
					</tr>
					
					<tr>
						<td></td>
						<td><input style="background:#9b59b6;color:white;border:none;padding:7px 18px;font-size:15px;font-weignt:bold;" type="submit" name="submit" value="Creat Account" /></td>
					</tr>
					
					
				</table>
			
			</form>
		</div>
	</body>
</html>