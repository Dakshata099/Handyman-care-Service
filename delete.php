<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("handyman") or die(mysql_error());
	session_start();
	$n=$_SESSION['username'];echo $n;
	$sql=mysql_query("delete from customer where username='$n' ") or die(mysql_error());
	if(session_destroy())//delete the all info stored in session
	{
		include("home.html");
		echo"<script>alert('Successfully deleted account')</script>";
	}
?>