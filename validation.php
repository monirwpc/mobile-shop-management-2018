<?php
session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'mobile');
	$q = "select * from user where username='$username' && password='$password' ";
	$result = mysqli_query($con,$q);
	$num = mysqli_num_rows($result);
	
	if($num==1)
	{
		$_SESSION['username']=$username;
		header('location:http://localhost/Mobile_Shop_Management/home.php');
	}
	else
	{
		header('location:http://localhost/Mobile_Shop_Management/login.php');
		
	}
	

?>