function validate()
{
	fc = true;
	var pass = frm.password.value;
	if (pass != frm.pswRepeat.value) 
	{
		alert("Passwords do not match!")
		if(fc)
		{
			frm.pswRepeat.focus();
			fc = false;
		}
		v = false;
	}
	else
	{
		if(pass.length < 8)
		{
			alert("You have to enter at least 8 character!");
			if(fc)
			{
				frm.password.focus();
				fc = false;
			}
			v = false;
		}
		else
		{
			var cn = false, cA = false;
			for(var i = 0; i < pass.length; i++)
			{
				if(pass[i] >= 0 && pass[i] <= 9)
					cn = true;
				if(pass[i] >= 'A' && pass[i] <= 'Z')
					cA = true;
			}
			if(cn == false)
				alert("You have to enter at least 1 digit!");
			if(cA == false)
				alert("You have to enter at least 1 capital letter!");
			if(!cn || !cA)
			{
				if(fc)
				{
					frm.password.focus();
					fc = false;
				}
				v = false;
			}
		}
	}
	
	return v;
}