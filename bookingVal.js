function validate1()
{
	var alpha=/^[a-zA-Z\s]+$/;
	var n=alpha.test(document.bs.cnm.value);
	if(document.bs.cnm.value=="")
	{
		alert("Please provide customer name!");
		document.bs.cnm.focus();
		return false;
	}
	if(n==false)//to check entered characters are alphabets or not
	{
		alert("Please enter only characters in customer name field!");
		document.bs.cnm.focus();return false;
	}
	if(document.bs.ba.value=="")
	{
		alert("Please provide Booking Address!");
		document.bs.ba.focus();
		return false;
	}
	if(document.bs.p.value=="")
	{
		alert("Please provide your pincode!");
		document.bs.p.focus();
		return false;
	}
	if(isNaN(document.bs.p.value))//to check entered digits are digits or not
	{
		alert("Please enter only numbers in pincode field!");
		document.bs.p.focus();
		return false;
	}
	if(document.bs.p.value.length!=6)
	{
		alert("Please enter 6 digit pincode!");
		document.bs.p.focus();
		return false;
	}
	if(document.bs.no.value=="")
	{
		alert("Please provide phone number!");
		document.bs.no.focus();
		return false;
	}
	if(document.bs.no.value.length!=10)
	{
		alert("Please enter 10 digit contact no.!");
		document.bs.no.focus();
		return false;
	}
	if(isNaN(document.bs.no.value))//to check entered digits are digits or not
	{
		alert("Please enter only numbers in contact no field!");
		document.bs.no.focus();
		return false;
	}
	if(document.bs.d.value=="")
	{
		alert("Please select date for service!");
		document.bs.d.focus();
		return false;
	}
	if(document.bs.t.value=="")
	{
		alert("Please select time for service!");
		document.bs.t.focus();
		return false;
	}
}
