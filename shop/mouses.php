<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mouses</title>
		<link href='../img/mouse.png' rel='icon' type='image/x-icon'/>
		<script src="../scripts/menu.js"></script>
		<script src="../scripts/checkout.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../styles/index.css">
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body >

		<div class="menu" id="menubar" >
			<a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
			<div class="dropdown current">
				<button class="dropbtn current">SHOP
				  <i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
				  <a href="laptops.php">Laptops</a>
				  <a href="mouses.php">Mouses</a>
				  <a href="keyboards.php">Keyboards</a>
				  <a href="headsets.php">Headsets</a>
				</div>
			</div>
			<a href="../contact.php">CONTACT</a>
			<a href="../about.php">ABOUT</a>
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

		<h1>MOUSES</h1>

		<div class="boxesContainer">

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/mou1.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Logitech G300S PRO</h4><br>
				<input id = "mou1" name = "Logitech G300S PRO" class = "btn" type="button" value="₾59.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/mou2.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Hyperx Pulsefire FPS PRO</h4><br>
				<input id = "mou2" name = "Hyperx Pulsefire FPS PRO" class = "btn" type="button" value="₾129.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/mou3.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Zowie S1 DIVINA BLUE</h4><br>
				<input id = "mou3" name = "Zowie S1 DIVINA BLUE" class = "btn" type="button" value="₾149.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/mou4.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Razer VIPER Ultimate</h4><br>
				<input id = "mou4" name = "Razer VIPER Ultimate" class = "btn" type="button" value="₾79.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/mou5.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Logitech G305 Wireless</h4><br>
				<input id = "mou5" name = "Logitech G305 Wireless" class = "btn" type="button" value="₾69.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/mou6.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Asus ROG Gladius II Core</h4><br>
				<input id = "mou6" name = "Asus ROG Gladius II Core" class = "btn" type="button" value="₾49.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/mou7.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Razer Mamba</h4><br>
				<input id = "mou7" name = "Razer Mamba" class = "btn" type="button" value="₾89.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/mou8.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>HP OMEN 400</h4><br>
				<input id = "mou8" name = "HP OMEN 400" class = "btn" type="button" value="₾39.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		</div>
		
		<br/>
		<footer>Online Shopping © 2022</footer>
	</body>
</html>