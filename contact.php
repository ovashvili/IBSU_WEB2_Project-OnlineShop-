<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
		<link href='img/contact.png' rel='icon' type='image/x-icon'/>
		<script src="scripts/menu.js"></script>
		<script src="scripts/contact.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/contact.css">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body onload = "document.frm.firstName.focus()">

		<div class="menu" id="menubar" >
			<a href="index.php" ><i class="fa fa-home" aria-hidden="true"></i></a>
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
			<a href="contact.php" class="current">CONTACT</a>
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

		<div class="box">
			<div class="title">
			<h1>Contact Form</h1>
			</div>
			 <form name = "frm" action="contact.php">
			<div class="contact-form">
				<div class="input-fields">
					<input type="text" id = "firstName" name = "firstName" class="input" placeholder="First Name" required>
					<input type="text" id = "lastName" name = "lastName" class="input" placeholder="Last Name" required>
					<input type="text" id = "email" name = "email" class="input" placeholder="Email Address" required>
					<input type="text" id = "phone" name = "phone" class="input" placeholder="Phone" required>
					<input type="text" id = "subject" name = "subject" class="input" placeholder="Subject" required>
				</div>
					<div class="msg">
					<textarea id = "message" name = "message" placeholder="Message" required></textarea>
					<input type="submit" value="Send" onclick = "return validate()" class = "btn"/>
					</div>
			</div>
			</form>
			<div class="google-maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5948.621032030305!2d44.76967301055906!3d41.80007077330548!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7dc6e4f283f28996!2sInternational%20Black%20Sea%20University!5e0!3m2!1sen!2sge!4v1608701547844!5m2!1sen!2sge" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
		<br/>
		
		<footer>Online Shopping © 2022</footer>
	</body>
</html>