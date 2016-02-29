function validate()
{
	var uname = document.getElementById("uName").value;
	var unAddress = uname.indexOf('@domain.com');
	var pword = document.getElementById("PW").value;
	var item1 = document.getElementById("q1").value;
	var item2 = document.getElementById("q2").value;
	var item3 = document.getElementById("q3").value;

	if(!(document.getElementById("a1").checked || document.getElementById("a2").checked || document.getElementById("a3").checked))
	{
		alert("No shipment option selected!");
		return false;
	}

	if(!(unAddress > -1))
	{
		alert("Invalid username! Must end in name@domain.com!");
		return false;
	}

	if(pword == "")
	{
		alert("Password cannot be blank!");
		return false;
	}

	if((item1 == "")||(item1 < 0))
	{
		alert("item quantity cannot be blank or less than zero!");
		return false;
	}

	if((item2 == "")||(item1 < 0))
	{
		alert("item quantity cannot be blank or less than zero!");
		return false;
	}

	if((item3 == "")||(item1 < 0))
	{
		alert("item quantity cannot be blank or less than zero!");
		return false;
	}
}