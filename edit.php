<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("handyman") or die(mysql_error());
	session_start();
	$newfullname=$_REQUEST['names'];
	$newaddress=$_REQUEST['address'];
	$newgender=$_REQUEST['gender'];
	$newcity=$_REQUEST['city'];
	$newemail=$_REQUEST['eid'];
	$newphoneno=$_REQUEST['phoneno'];
	$newusername=$_REQUEST['username'];
	$newpassword=$_REQUEST['newpassword'];

	$r=mysql_query("select fullname,address,gender,city,email,phoneno,username,password from customer") or die(mysql_error());
	$row=mysql_fetch_array($r);

	if($newfullname!=$row['fullname'])
	{
		$f=mysql_query("update customer set fullname='$newfullname' where username='$newusername'");	
	}
	if($newaddress!=$row['address'])
	{
		$f1=mysql_query("update customer set address='$newaddress' where username='$newusername'");	
	}
	if($newgender!=$row['gender'])
	{
		$f2=mysql_query("update customer set gender='$newgender' where username='$newusername'");	
	}
	if($newcity!=$row['city'])
	{
		$f3=mysql_query("update customer set city='$newcity' where username='$newusername'");	
	}
	if($newemail!=$row['email'])
	{
		//echo"u=".$newusername;
		$f4=mysql_query("update customer set email='$newemail' where username='$newusername'");		
	}
	if($newphoneno!=$row['phoneno'])
	{
		$f5=mysql_query("update customer set phoneno=$newphoneno where username='$newusername'");	
		/* if(!mysql_query($f5))
		{
			echo"error6";
		}*/
	}
	 if($newpassword!=$row['password'])
	{
		$f=mysql_query("update customer set password='$newpassword' where username='$newusername'");	
	}
	echo"<script>alert('Successfully updated your account')</script>";
	include("welcome.php");
	
?>