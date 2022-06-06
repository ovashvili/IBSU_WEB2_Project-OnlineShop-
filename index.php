<?php 

	session_start();
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Online Shopping</title>
		<link href='img/home.png' rel='icon' type='image/x-icon'/>
		<script src="scripts/menu.js"></script>
		<script src="scripts/index.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/index.css">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body onload = "randP()">

		<div class="menu" id="menubar" >
			<a href="index.php" class="current"><i class="fa fa-home" aria-hidden="true"></i></a>
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

		<h1>Our Products</h1>

		<div class="boxesContainer">

			<div class="cardBox ">
				<div class="card">
					<div class="front">
						<img id = "lap" alt="Laptops">
					</div>
					<div class="back">
						<h2>Laptops</h2><br>
						<input class = "btn" type="button" value="See Models" onclick="location.href='shop/laptops.php'">
					</div>
				</div>
			</div>

			<div class="cardBox">
				<div class="card">
					<div class="front">
						<img id = "mou" alt="Mouses">
					</div>
					<div class="back">
							<h2>Mouses</h2><br>
							<input class = "btn" type="button" value="See Models" onclick="location.href='shop/mouses.php'">
					</div>
				</div>
			</div>

			<div class="cardBox">
				<div class="card">
					<div class="front">
						<img id = "key" alt="Keyboards">
					</div>
					<div class="back">
						<h2>Keyboards</h2><br>
						<input class = "btn" type="button" value="See Models" onclick="location.href='shop/keyboards.php'">
					</div>
				</div>
			</div>

			<div class="cardBox">
				<div class="card">
					<div class="front">
						<img id = "hset" alt="Headsets">
					</div>
					<div class="back">
						<h2>Headsets</h2><br>
						<input class = "btn" type="button" value="See Models" onclick="location.href='shop/headsets.php'">
					</div>
				</div>
			</div>
		</div>
		
		<br/>
		<footer>Online Shopping © 2022</footer>
	</body>
</html>