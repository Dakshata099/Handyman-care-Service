<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		include("electricity.html");
	}
	else
	{
	include("loginE.html");
	echo"<script>alert('For major services you have to login first!!! otherwise registered as customer')</script>";
	}
?>