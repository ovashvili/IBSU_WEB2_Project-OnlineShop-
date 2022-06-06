<?php 
	session_start();
	if(!isset($_SESSION['userIdentity'])){
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Checkout</title>    
		<link href='img/checkout.png' rel='icon' type='image/x-icon'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="scripts/menu.js" type="text/javascript"></script>
		<script src="scripts/checkout.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="styles/index.css">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/checkout.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body onload = "getprod()">
		<div class="menu" id="menubar" >
			<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
			<div class="dropdown">
				<button class="dropbtn">SHOP
				  <i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
				  <a href="shop/laptops.php">Laptops</a>
				  <a href="shop/mouses.php">Mouses</a>
				  <a href="shop/keyboards.php">Keyboards</a>
				  <a href="shop/headsets.php">Headsets</a>
				</div>
			</div>
			<a href="contact.php">CONTACT</a>
			<a href="about.php">ABOUT</a>
			<?php 
				if( isset($_SESSION['userIdentity']) && !empty($_SESSION['userIdentity']) )
				{
					?>
						 <a href="logout.php">Logout</a>
					<?php 
				}
				else
				{ 
					?>
						 <a href="login.php">LOGIN</a>
						 <a href="registration.php">REGISTRATION</a>
					<?php 
				} 
			?>
			<a href="javascript:void(0);" class="icon" onclick="swap()">
			<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		</div><br/><br/><br/>

		<div class="row">
			<div class="col-50">
				<div class="container">
					<form name = "frm" action="checkout.php">
						<div class="row">
							<div class="col-50">
								
								<h2>Payment</h2>
								<label for="fname">Available Cards</label>
								<div class="icon-container">
									<i class="fa fa-cc-visa" style="color:navy;"></i>
									<i class="fa fa-cc-amex" style="color:black; "></i>
									<i class="fa fa-cc-mastercard" style="color:red;"></i>
									<i class="fa fa-cc-paypal" style="color:white;"></i>
								</div>

								<label for="cname">Name on Card</label>
								<input type="text" id="cname" name="cardname" placeholder="NIKUSHA OVASHVILI" required>
								<label for="ccnum">Credit card number</label>
								<input type="text" id="ccnum" name="cardnumber" size="17" maxlength="16" placeholder="1111-2222-3333-4444" onkeyup="if (this.value.length >= 16) this.form.expmonth.focus();" required>
								<label for="expmonth">Exp Month</label>
								<select type="text" id="expmonth" name="expmonth" placeholder="September" required>
									<option value="0">January</option>
									<option value="1">February</option>
									<option value="2">March</option>
									<option value="3">April</option>
									<option value="4">May</option>
									<option value="5">June</option>
									<option value="6">July</option>
									<option value="7">August</option>
									<option value="8">September</option>
									<option value="9">October</option>
									<option value="10">November</option>
									<option value="11">December</option>
								</select>
								
								<div class="row">
									<div class="col-50">
										<label for="expyear">Exp Year</label>
										<input type="text" id="expyear" name="expyear" size="5" maxlength="4" placeholder="2021" onkeyup="if (this.value.length >= 4) this.form.cvv.focus();" required>
									</div>
									<div class="col-50">
										<label for="cvv">CVV</label>
										<input type="text" id="cvv" name="cvv" size="5" maxlength="4" placeholder="352" required>
									</div>
								</div>
							</div>
						</div>
						<input type="submit" value="Continue to checkout" class="btn" onclick = "return validate()">
					</form>
				</div>
			</div>
			<div class="col-25">
				<div class="container">
					<h2>Cart <span><i class="fa fa-shopping-cart"></i> <b id = "1"></b></span></h2>
					<img class="zoom" id="2" alt="Product">
					<label class = "center" id = "3"></label>
					<input  type="text" id="prm" name="discount" placeholder="Enter Promo Code">
					<input type="submit" value="Submit" class="btn" onclick = "sale()">
					<hr>
					<p>Price <span class="price" style="color:white"><b id = "4"></b></span></p>
				</div>
			</div>
		</div>
		
		<footer>Online Shopping © 2022</footer>
	</body>
</html>