<?php
	session_start();
	
	if(isset($_SESSION['username']))
	{
		$u=$_SESSION['username'];
		header("Location:welcome.php?username=$u");
	}
	else
	{
	include("login.html");
	//echo"<script>alert('Login First')</script>";
	}
?>