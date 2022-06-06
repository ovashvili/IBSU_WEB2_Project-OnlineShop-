function validate()
{
	var v = true, fc = true;
	if (login.username.value.length == 0)
	{
		alert("Empty Username!");
		if(fc)
		{
			login.username.focus();
			fc = false;
		}
		v = false;
	}
	if (login.pass.value.length == 0)
	{
		alert("Empty Password!");
		if(fc)
		{
			login.pass.focus();
			fc = false;
		}
		v = false;
	}
	
	return v;
}