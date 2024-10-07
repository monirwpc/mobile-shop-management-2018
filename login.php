<!DOCTYPE html>

<html>
	<head>
		<title>
			LogIn
		</title>
		<style>
			.main{
				margin-top:200px;
				border:4px solid #e67e22;
				width: 460px;
				margin-left: 33%;
				background:gray;
				text-align: center;
				border-radius:12px;
					
				}
		</style>
	</head>
	<body style="background:url(images/ll.jpg)repeat fixed 0 0 #fff;">
		
		<div class="main">
		<p align="center" style="color:yellow;font-size:20px;font-weignt:bold">This Site is Being Protected.. Are You User This Site?<br> Please Enter Username & Password At First !!</p>
		<form action="validation.php" method="post">
			<table align="center" style="color:white;font-size:16px;">
				<tr>
					<td style="font-size:20px;color:whiteblue;">UserName  </td>
					<td><input style="margin-left:10px;padding:5px;margin-bottom:5px;" type="text" name="username" placeholder="Enter Username" /></td>
				</tr>
				<tr>
					<td style="font-size:20px;color:white">PassWord  </td>
					<td><input style="margin-left:10px;padding:5px;margin-bottom:5px;" type="password" name="password" placeholder="Enter Password"/></td>
				</tr>
				
				<tr>
					<td> </td>
					<td><input style="background:#9b59b6;color:white;border:none;padding:7px 18px;font-size:15px;font-weignt:bold;" type="submit" name="LogIn" value="Login Now" /></td>
				</tr>
				
			</table>
			<p ><a style="color:black;font-size:20px;font-weignt:bold" href="resistration.php">Creat a New Account</a></p>
		</form></br>
		</div>
	</body>
</html>