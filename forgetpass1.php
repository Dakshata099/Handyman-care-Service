<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("handyman") or die(mysql_error());
	$u=$_REQUEST['u'];
	$p=$_REQUEST['p'];
	$cp=$_REQUEST['cp'];
	if($p!=$cp)
	{
		include("forgetpass1.html");
		echo"<script>alert('Entered confirm password not matched with entered password. Please Re-enter password')</script>";
	}
	else
	{
	$r=mysql_query("update customer set password='$cp' where username='$u'");
	if($r)
	{
		include("login.html");
		echo"<script>alert('Successfully changed password!! Login again !!')</script>";
	}
	else
		include("forgetpass.html");
	}		
?>