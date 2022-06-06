<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Keyboards</title>
		<link href='../img/keyboard.png' rel='icon' type='image/x-icon'/>
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

		<h1>KEYBOARDS</h1>

		<div class="boxesContainer">

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/key1.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Razer BLAKWIDOW V3PRO</h4><br>
				<input id = "key1" name = "Razer BLAKWIDOW V3PRO" class = "btn" type="button" value="₾219.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/key2.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Logitech G PRO X</h4><br>
				<input id = "key2" name = "Logitech G PRO X" class = "btn" type="button" value="₾139.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/key3.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Hperx ALLOY FPS</h4><br>
				<input id = "key3" name = "Hperx ALLOY FPS" class = "btn" type="button" value="₾249.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/key4.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Redragon K552 White</h4><br>
				<input id = "key4" name = "Redragon K552 White" class = "btn" type="button" value="₾99.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/key5.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Asus TUF K3</h4><br>
				<input id = "key5" name = "Asus TUF K3" class = "btn" type="button" value="₾169.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/key6.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Logitech G213 PRODIGY</h4><br>
				<input id = "key6" name = "Logitech G213 PRODIGY" class = "btn" type="button" value="₾109.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/key7.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Tecware PHANTOM RGB</h4><br>
				<input id = "key7" name = "Tecware PHANTOM RGB" class = "btn" type="button" value="₾89.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/key8.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>A4tech BLOODY B800</h4><br>
				<input id = "key8" name = "A4tech BLOODY B800" class = "btn" type="button" value="₾69.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		</div>
		
		<br/>
		<footer>Online Shopping © 2022</footer>
	</body>
</html>