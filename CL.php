<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		include("cleaning.html");
	}
	else
	{
	include("loginCL.html");
	echo"<script>alert('For major services you have to login first!!! otherwise registered as customer')</script>";
	}
?>