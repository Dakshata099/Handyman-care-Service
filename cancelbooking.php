<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("handyman") or die(mysql_error());
	$bid=$_REQUEST['bid'];
	$r=mysql_query("delete from bookings where bcode=$bid");
	if($r)
	{
		include("bookings.php");
		echo"<script>alert('Requested booking successfully cancelled!')</script>";
	}
	else
		include("cancelbooking.html");
?>