function validate()
{
	var v = true, fc = true;
	if (frm.firstName.value.length == 0)
	{
		alert("Empty Name!");
		if(fc)
		{
			frm.firstName.focus();
			fc = false;
		}
		v = false;
	}
	if (frm.lastName.value.length == 0)
	{
		alert("Empty Surname!");
		if(fc)
		{
			frm.lastName.focus();
			fc = false;
		}
		v = false;
	}
	if (frm.email.value.length == 0)
	{
		alert("Empty Email!");
		if(fc)
		{
			frm.email.focus();
			fc = false;
		}
		v = false;
	}
	if (frm.phone.value.length == 0)
	{
		alert("Empty Phone!");
		if(fc)
		{
			frm.phone.focus();
			fc = false;
		}
		v = false;
	}
	if (frm.subject.value.length == 0)
	{
		alert("Empty Subject!");
		if(fc)
		{
			frm.subject.focus();
			fc = false;
		}
		v = false;
	}
	if (frm.message.value.length == 0)
	{
		alert("Empty Message!");
		if(fc)
		{
			frm.message.focus();
			fc = false;
		}
		v = false;
	}
	
	return v;
}