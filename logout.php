<?php
	session_start();
	session_destroy();
	header('location:http://localhost/Mobile_Shop_Management/login.php');

?>