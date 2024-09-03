<html><head><link href="WC.css" rel="stylesheet" type="text/css">
</head><body background="tools.jpg">
<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		$u=$_SESSION['username'];
	}
	else
	{
		$u=$_REQUEST['username'];
		$_SESSION['username']=$_REQUEST['username'];
	}	
	//echo"<script>alert('Successfully Login')</script>";
	echo"<div id=wc>";
	echo"<a href=home.html class=home><img class=homeicon src=home.gif></a>";
	echo"Welcome <i>". $u."!!</i>";
	echo"<a href=logout.php class=logout>Log Out</a>";
	echo"</div>";
	echo"<div id=menu>";
	echo"<ul>";
	echo"<li><a href=servicetologin.php><font color=black>New Booking</font></a></li>";
	echo"<li class=a><a href=bookings.php><font color=black>Your Bookings</font></a></li>";
	echo"<li><a href=welcome.php?username=$u><font color=black>My Account</font></a></li>";
	echo"<li><a href=showMember.php><font color=black>Member at home</font></a></li></ul></div>";
	
	echo"<div id=panel>";
	mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("handyman") or die(mysql_error());
		$i=mysql_query("select id from customer where username='$u'");
		$r=mysql_fetch_array($i);
		$id=$r['id'];
	
		$result=mysql_query("select * from bookings where id=$id ") or die(mysql_error());
		echo"<table class=t border=1>";
		echo"<tr class=t1><th>Booking Code</th><th>Service info</th><th>Customer name</th><th>Booking address</th><th>Contact No.</th><th>Date</th><th>Time</th></tr>";
		while($row=mysql_fetch_array($result))
		{
			echo"<tr class=t2><td>".$row['bcode']."</td><td>".$row['service_type'].",".$row['service_name'].",".$row['type1'].$row['type2']."</td><td>".$row['cust_name']."</td><td>".$row['booking_add'].",".$row['pincode']."</td><td>".$row['contact']."</td><td>".$row['booking_date']."</td><td>".$row['booking_time']."</td></tr>";
		}
		echo"</table>";
	
		echo"<a href=cancelbooking.html>Cancel Booking</a>";
	echo"</div>";
	
?>
</body></html>