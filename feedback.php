<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("handyman") or die(mysql_error());
	$u=$_REQUEST['u'];
	$feed=$_REQUEST['feed'];
	mysql_query("update customer set feedback='$feed' where username='$u' ") or die(mysql_error());
		include("home.html");
		echo"<script>alert('Thank You!!!')</script>";
?>
	