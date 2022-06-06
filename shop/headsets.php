<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Headsets</title>
		<link href='../img/headset.png' rel='icon' type='image/x-icon'/>
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

		<h1>HEADSETS</h1>

		<div class="boxesContainer">

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/hset1.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Hyperx Cloud ALPHA S</h4><br>
				<input id = "hset1" name = "Hyperx Cloud ALPHA S" class = "btn" type="button" value="₾299.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/hset2.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Logitech G433 BLUE</h4><br>
				<input id = "hset2" name = "Logitech G433 BLUE" class = "btn" type="button" value="₾149.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/hset3.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Razer Kraken Ultimate</h4><br>
				<input id = "hset3" name = "Razer Kraken Ultimate" class = "btn" type="button" value="₾199.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/hset4.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Steelseries ARCTIS 7</h4><br>
				<input id = "hset4" name = "Steelseries ARCTIS 7" class = "btn" type="button" value="₾599.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/hset5.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Logitech G PRO X</h4><br>
				<input id = "hset5" name = "Logitech G PRO X" class = "btn" type="button" value="₾249.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/hset6.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Hyperx CLOUD STINGER</h4><br>
				<input id = "hset6" name = "Hyperx CLOUD STINGER" class = "btn" type="button" value="₾129.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/hset7.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Corsair HS50</h4><br>
				<input id = "hset7" name = "Corsair HS50" class = "btn" type="button" value="₾349.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/hset8.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Sennheiser HD 400S</h4><br>
				<input id = "hset8" name = "Sennheiser HD 400S" class = "btn" type="button" value="₾169.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		</div>
				
		
		<br/>
		<footer>Online Shopping © 2022</footer>
	</body>
</html>