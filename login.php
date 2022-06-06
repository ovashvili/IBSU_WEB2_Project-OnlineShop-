<?php 
	session_start();
	if(isset($_SESSION['userIdentity'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>	
		<meta charset="utf-8">
		<title>Login</title>
		<link href='img/login.png' rel='icon' type='image/x-icon'/>
		<script src="scripts/menu.js"></script>
		<script src="scripts/login.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/login.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
	</head>
	
	<body onload="document.login.username.focus()">

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
			
			<?php if( isset($_SESSION['userIdentity']) && !empty($_SESSION['userIdentity']) )
			{
			?>
				  <a href="logout.php">Logout</a>
			<?php }else{ ?>
				 <a href="login.php" class="current">LOGIN</a>
			     <a href="registration.php">REGISTRATION</a>
			<?php } ?>
			
			<a href="javascript:void(0);" class="icon" onclick="swap()">
			<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		</div><br/><br/><br/>

		<form class="box" name = "login" action="login.php" method="post">
			<h1>Login</h1>
			<input type="text" name="username" id="username" placeholder="Username" required />
			<input type="password" name="password" id="password" placeholder="Password" required />
			<input type="submit" value="Log In" name ="login" id = "login">
		</form>
		<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script>
			$(function(){
				$('#login').click(function(e){

					var valid = this.form.checkValidity();

					if(valid){
						var email = $('#username').val();
						var username = $('#username').val();
						var password = $('#password').val();
					}

					e.preventDefault();

					$.ajax({
						type: 'POST',
						url: 'signin.php',
						data:  {email: email, username: username, password: password},
						success: function(data){
							alert(data);
							if($.trim(data) === "1"){
								setTimeout(' window.location.href =  "index.php"', 1000);
							}
						},
						error: function(data){
							alert('there were erros while doing the operation.');
						}
					})
					.then(function() {
						window.location = "login.php";
					});;

				});
			});
		</script>
		<footer>Online Shopping © 2022</footer>
	</body>
</html>
