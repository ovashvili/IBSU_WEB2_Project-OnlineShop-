function swap() 
{
	var x = document.getElementById("menubar");
	if (x.className === "menu")
		x.className += " vertical";
	else
		x.className = "menu";
}