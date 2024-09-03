<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		include("carpentry.html");
	}
	else
	{
	include("loginC.html");
	echo"<script>alert('For major services you have to login first!!! otherwise registered as customer')</script>";
	}
?>