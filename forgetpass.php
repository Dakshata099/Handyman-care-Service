<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("handyman") or die(mysql_error());
	$u=$_REQUEST['u'];
	$e=$_REQUEST['e'];
	$r=mysql_query("select username from customer where username='$u' and email='$e'") or die(mysql_error());
	$row=mysql_fetch_array($r);
	if($row)
	{
		include("forgetpass1.html");
	}
	else if(!$row)
	{
		include("forgetpass.html");
		echo"<script>alert('Your information not matched.Please confirm again!!')</script>";
	}
	
?>