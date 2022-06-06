var prod = [ "lap", "mou", "key", "hset" ];
function randP()
{
	for(var i = 0; i < 4; i++)
		document.getElementById(prod[i]).src = "img/home/" + prod[i] + (Math.floor(Math.random() * 8) + 1) + ".png";
}