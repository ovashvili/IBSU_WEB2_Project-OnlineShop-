var name;
var price;
var currentDisc = 0;
var promo = [ ["ibsu", 0.5], ["test", 0.3] ];
var prod = {
  "lap": "Laptop",
  "hset": "Headset",
  "key": "Keyboard",
  "mou": "Mouse"
};
function checkout(clicked_id)
{
	name = document.getElementById(clicked_id).name; 
	price = document.getElementById(clicked_id).value;
	imgUrl = "img/home/" + clicked_id + ".png";
	localStorage.setItem("product", prod[clicked_id.substring(0, clicked_id.length - 1)]);
	localStorage.setItem("name", name);
	localStorage.setItem("price", price);
	localStorage.setItem("imgUrl", imgUrl);
	window.location = "../checkout.php";
}

function getprod()
{
	frm.cardname.focus();
	document.getElementById(1).innerHTML = localStorage.product;
	document.getElementById(2).src = localStorage.imgUrl;
	document.getElementById(3).innerHTML = localStorage.name;
	document.getElementById(4).innerHTML = localStorage.price;
}

function sale()
{
	var disc = false;
	for(var i = 0; i < promo.length; i++)
	{
		if(document.getElementById("prm").value ==  promo[i][0])
		{
			disc = true;
			var prmDisc = parseInt(promo[i][1] * 100);
			if(prmDisc < currentDisc)
			{
				alert("You've already got higher discount!");
				break;
			}
			currentDisc = prmDisc;
			alert("You've got " + currentDisc + "% discount!")
			prc = localStorage.price;
			prc = "₾" + (parseFloat(prc.substring(1, prc.length - 1)) * (1 - promo[i][1])).toFixed(2);
			document.getElementById(4).innerHTML = prc;
			break;
		}
	}
	if(!disc)
		alert("Promo code is incorret!");
	
}

function validate()
{
	var v = true, fc = true;
	if (frm.cardname.value.length == 0)
	{
		alert("Please input card name!");
		if(fc)
		{
			frm.cardname.focus();
			fc = false;
		}
		v = false;
	}
	if (frm.cardnumber.value.length == 0)
	{
		alert("Please input card number!");
		if(fc)
		{
			frm.cardnumber.focus();
			fc = false;
		}
		v = false;
	}
	if (frm.expmonth.value.length == 0)
	{
		alert("Please input exp month!");
		if(fc)
		{
			frm.expmonth.focus();
			fc = false;
		}
		v = false;
	}
	
	if (frm.expyear.value.length == 0)
	{
		alert("Please input exp year!");
		if(fc)
		{
			frm.expyear.focus();
			fc = false;
		}
		v = false;
	}
	if (frm.cvv.value.length == 0)
	{
		alert("Please input cvv!");
		if(fc)
		{
			frm.cvv.focus();
			fc = false;
		}
		v = false;
	}
	
	return v;
}