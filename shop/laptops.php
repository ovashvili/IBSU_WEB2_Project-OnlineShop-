<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Laptops</title>
		<link href='../img/laptop.png' rel='icon' type='image/x-icon'/>
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

		<h1>LAPTOPS</h1>

		<div class="boxesContainer">

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/lap1.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>MSI GE63 RGB</h4><br>
				<input id = "lap1" name = "MSI GE63 RGB" class = "btn" type="button" value="₾2099.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/lap2.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Dell ALIENWARE</h4><br>
				<input id = "lap2" name = "Dell ALIENWARE" class = "btn" type="button" value="₾2699.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/lap3.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Lenovo LEGION Y545</h4><br>
				<input id = "lap3" name = "Lenovo LEGION Y545" class = "btn" type="button" value="₾2599.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/lap4.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Asus ROG Strix G</h4><br>
				<input id = "lap4" name = "Asus ROG Strix G" class = "btn" type="button" value="₾1999.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/lap5.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Asus ROG Zephyrus M</h4><br>
				<input id = "lap5" name = "Asus ROG Zephyrus M" class = "btn" type="button" value="₾2049.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/lap6.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>MSI GL65 RGB</h4><br>
				<input id = "lap6" name = "MSI GL65 RGB" class = "btn" type="button" value="₾2999.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>
		  
		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/lap7.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Lenovo LEGION Y540 FHD</h4><br>
				<input id = "lap7" name = "Lenovo LEGION Y540 FHD" class = "btn" type="button" value="₾2499.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		  <div class="cardBox">
			<div class="card">
			  <div class="front">
				<img src="../img/home/lap8.png" alt="Avatar">
			  </div>
			  <div class="back">
				<h4>Dell Inspiron i7559</h4><br>
				<input id = "lap8" name = "Dell Inspiron i7559" class = "btn" type="button" value="₾1299.99" onclick="checkout(this.id)">
			  </div>
			</div>
		  </div>

		</div>
		
		<br/>
		<footer>Online Shopping © 2022</footer>
	</body>
</html>