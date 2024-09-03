<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("handyman") or die(mysql_error());
	$v="carpentry";
	$ch=$_POST['ch'];
	foreach($ch as $c)
	{
		$r=mysql_query("insert into bookings(service_type,service_name,type1) values('major','carpentry','".$c."')");
	} 	
	
		
	/*$ck="";
	foreach($ch as $c)
	{
		$ck.=$c.",";
	}
	$ck=substr($ck,0,-2);
	$r=mysql_query("insert into bookings(type1,type2,type3,type4,type5) values('$ck')");*/
	
	if($r)
	{
		echo"<script>alert('For major services you must have to login first')</script>";
		include("bookings.html");
	}
	else
		include("carpentry.html");
?>