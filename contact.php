<html>
	<head>
		<title>Contact with Us</title>
		<link rel="stylesheet" href="css/contact-style.css" />
	</head>
	<body>
		<div class="main">
			<div class="home"><a title="Go to Home Page" href="home.php"><img src="logo/home.png" /></a></div>
			<div class="contact">
					<h1>Contact Address</h1>
					<h3>Monirul Mobile Store</h3>
					<h4> Gobindanagar,Thakurgaon-5100</h4>
					<p>Thakurgoan</p>
					
					<h2><a href="">Email:monirulmobilestore@gmail.com</a></h2>
					<h2><a href="">phone: 088 056161400</a></h2>
					<h2><a href="">website:www.tpi.edu.bd</a></h2>
					
			</div>
			
			<div class="view-contact-info">
				<h3><a href="contact-view.php">View Contact Information </a></h3>
			</div><br><br>
			<div class="form">
					<h2>Contact With Email:</h2>
					
					<form action="contact-database.php" method="post">
						<div class="contact-form">
							<input type="text" name="name" placeholder="Enter your name"/>
							<input type="text" name="email" placeholder="Enter your email"/>
							<input type="text" name="phone" placeholder="Enter your phone"/>
						</div>
						<div class="message">
							<textarea name="textarea" placeholder="messege"></textarea>
							<input type="submit" name="submit" value="Submit now"/>
						</div>
					</form>
			</div>
		</div>
	</body>
</html>