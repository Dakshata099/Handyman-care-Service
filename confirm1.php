<html><head>
<link href="ConfirmStyle.css" rel="stylesheet" type="text/css"></head>
<body>
<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("handyman") or die(mysql_error());
	session_start();

	$cnm=$_REQUEST['cnm'];
	$ba=$_POST['ba'];
	$p=$_POST['p'];
	$no=$_POST['no'];
	$d=$_POST['d'];
	$t=$_POST['t'];
	
	$u=$_SESSION['username'];
	$v=$_SESSION['v'];
	$m=$_SESSION['m'];
	$o=$_SESSION['o'];

	$id=mysql_query("select id from customer where username='$u'");
	$aa=mysql_fetch_array($id);
	$i=$aa['id'];//select id of given username
	
	$r=mysql_query("insert into bookings(service_type,service_name,type2,cust_name,booking_add,pincode,contact,booking_date,booking_time,id) values('$m','$v','$o','$cnm','$ba',$p,$no,'$d','$t',$i)");
	
	echo"<div id=h><font class=l><center>Ganesha Handyman Care System</center></font><a href=home.html><img class=homeicon src=home.gif></a><a class=log href=demo.php>Log In</a>";
	echo"</div>";
	echo"<div id=msg>";
	echo"<b><font color=green>Your Booking Request has been accepted.</font></b>";
	echo"<br>ID: ".rand(100,1000);
	echo"<br>Customer Name :	<b><u>".$cnm."</u></b>";
	echo"<br>Service Address :	<b><u>".$ba."</u></b>";
	echo"<br>Contact Number :	<b><u>".$no."</u></b>";
	echo"<br>Services info :	<b><u>".$m."  service</b>,<b>".$v."</b>,<b>".$o."</u></b>";		
	echo"<br>Service Date :	<b><u>".$d."\t\t</b>Service Time :	<b>".$t."</u></b>";
	
	
	echo"</div>";
	echo"<div id=done>";
	echo"<form action=home.html method=get><input type=submit value=Done></form>";
	echo"</div>";
?>
</body></html>