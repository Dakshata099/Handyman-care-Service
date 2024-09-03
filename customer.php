<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	//echo"Connection established";
	mysql_select_db("handyman") or die(mysql_error());
	//echo"db selected";
	/*create table customer(id int not null AUTO_INCREMENT,fullname varchar(40) not null,address varchar(60) not null,gender varchar(10),city varchar(15),state varchar(15),email varchar(40),phoneno bigint,username varchar(15),password varchar(15),feedback text,PRIMARY KEY(id));*/
	$nm=$_POST['names'];
	$u=$_POST['username'];
	$add=$_POST['address'];
	$g=$_POST['gender'];
	$c=$_POST['city'];
	$e=$_POST['eid'];
	$p=$_POST['phoneno'];
	$ps=$_POST['newpassword'];
	
	$sql=mysql_query("INSERT INTO customer(fullname,address,gender,city,state,email,phoneno,username,password,feedback) VALUES('$nm','$add','$g','$c','Maharashra','$e',$p,'$u','$ps','')") or die(mysql_error());
	//echo"<br>Entries inserted";
	if($sql)
	{
		include("home.html");
		echo"<script>alert('Successfully Registered')</script>";	
	}
?>