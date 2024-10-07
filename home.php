<?php
	session_start();
	if (!isset($_SESSION['username']))
		header('location:http://localhost/Mobile_Shop_Management/login.php');
	?>


<!DOCTYPE html>
<html>	
	<head>
		<title>Menu </title>
		
		<link rel="stylesheet" href="css/homestyle.css" />
	</head>	
		
	<body>
	
		<div class="container">
		
			<div class="header">
				<h1>Mobile Shop Customer Records Management</h1>
				
				<div class="search">
					<form action="header_search.php" method="post">
						<input type="text" name="search" placeholder="Enter Your ID Number"/>
						<input class="submit" type="submit" value="search" />
					
					</form>
				</div>
			
			</div>
			<div class="menubar">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="insertForm.php">Insert Customer Info</a></li>
					<li><a href="view.php">View Customer Info</a></li>
					<li><a href="deleteForm.php">Delete Info</a></li>
					<li><a href="updateForm.php">Edit Info</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="login.php">Log Out</a></li>
				</ul>
			</div>
			
			
			<div class="maincontent">
				
				<div class="mobile_desc">
					<h2>Our Mobile </h2>
					<div class="mobile">
						<div class="mobile-first">
							<img src="images/1.jpg" />
							<p><a style ="text-decoration:none;color:black;font-size:17px;" href="">Samsung Galaxy J2prime</a></p>
							<p><a href="">Buy Now</a></p>
						</div>
						
						<div class="mobile-first">
							<img src="images/4.jpg" />
							<p><a style ="text-decoration:none;color:black;font-size:17px;" href="">Samsung Galaxy J2prime</a></p>
							<p><a href="">Buy Now</a></p>
						</div>
						
						
					</div>
					
					<div class="mobile">
						<div class="mobile-first">
							<img src="images/4.jpg" />
							<p><a style ="text-decoration:none;color:black;font-size:17px;" href="">Samsung Galaxy J2prime</a></p>
							<p><a href="">Buy Now</a></p>
						</div>
						
						<div class="mobile-first">
							<img src="images/1.jpg" />
							<p><a style ="text-decoration:none;color:black;font-size:17px;" href="">Samsung Galaxy J2prime</a></p>
							<p><a href="">Buy Now</a></p>
						</div>
						
					</div>
					
					<h3 class="more"><a href="">Show More Mobiles</a></h3>
					
					
				</div>
				
				<div class="sidebar">
					<h2>Our Brand</h2>
					<ul>
						<li><a href="">Samsung </a></li>
						<li><a href="">Nokia </a></li>
						<li><a href="">Symphony </a></li>
						<li><a href="">Oppo </a></li>
						<li><a href="">Huwey </a></li>
						<li><a href="">Lenovo </a></li>
						<li><a href="">Samsung </a></li>
						<li><a href="">Nokia </a></li>
						<li><a href="">Symphony </a></li>
						<li><a href="">Oppo </a></li>
						<li><a href="">Huwey </a></li>
						<li><a href="">Lenovo </a></li>
						<li><a href="">Samsung </a></li>
						
					</ul>
					
					<div class="social-media">
						<h2>Contact Us </h2>
						<div class="icon">
							<a href=""><img src="logo/1.jpg" /></a>
							<a href=""><img src="logo/2.jpg" /></a>
							<a href=""><img src="logo/skype.jpg" /></a>
							<a href=""><img src="logo/5.png" /></a>
						
						</div>
						
					</div>
				</div>
			
			</div>
		
			
			<div class="footer">
				<p>&copy;Mobile Shopping Management</p>
				<span>Powered By <a style="color:yellow;" href="monirul.php">Monirul Islam</a></span>
			</div>
		</div>
	</body>	
		
</html>	