<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>About</title>
		<link href='img/about.png' rel='icon' type='image/x-icon'/>
		<script src="scripts/menu.js"></script>
		<script src="scripts/contact.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/about.css">
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
			<a href="contact.php">CONTACT</a>
			<a href="#about" class="current" >ABOUT</a>
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
		<br/>
		<div class="about-section">
			<h1>About Us</h1>
			<p>The International Black Sea University has been engaged in teaching and research since 1995. </p>
			<p>The university is the first English-language educational institution to offer programs in both English and Georgian at all three stages of teaching.</p>
		</div>

		<h1>Members</h1>
		<div class="row">
		  <div class="column">
			<div class="card">
			  <img src="img/av1.png" alt="Jane" style="width:100%">
			  <div class="container">
				<h2>Nikusha Ovashvili</h2>
				<p class="title">CEO & Founder</p>
				<p>19200121@ibsu.edu.ge</p>
				<input type="submit" value="Contact" onclick="window.open('mailto:19200121@ibsu.edu.ge?subject=Contact');">
			  </div>
			</div>
		  </div>

		  <div class="column">
			<div class="card">
			  <img src="img/av2.png" alt="Mike" style="width:100%">
			  <div class="container">
				<h2>Mail Ashirov</h2>
				<p class="title">CEO & Founder</p>
				<p>19200106@ibsu.edu.ge</p>
				<input type="submit" value="Contact" onclick="window.open('mailto:19200106@ibsu.edu.ge?subject=Contact');">
			  </div>
			</div>
		  </div>
		</div>
		
		<footer>Online Shopping © 2022</footer>
	</body>
</html>