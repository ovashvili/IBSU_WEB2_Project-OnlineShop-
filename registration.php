<?php
	require_once('config.php');
	session_start();
	if(isset($_SESSION['userIdentity'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>		
		<title>Registration</title>
		<link href='img/registration.png' rel='icon' type='image/x-icon'/>
		<script src="scripts/menu.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/registration.css">
		<link rel="stylesheet" href="styles/style.css" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body onload="document.frm.firstname.focus()">
		<div class="menu" id="menubar">
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
							 <a href="registration.php" class="current">REGISTRATION</a>
						<?php 
					} 
				?>
				<a href="javascript:void(0);" class="icon" onclick="swap()">
				<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		</div><br/>

		<form name = "frm" class="box" action="registration.php" method="post">
			<h1>Registration</h1>
			<label for="name"><b>Name</b></label><br/>
			<input type="text" class=tp placeholder="Enter Name" name="firstname" id="firstname" required /><br/>

			<label for="surname"><b>Surname</b></label><br>
			<input type="text" class=tp placeholder="Enter Surname" name="lastname" id="lastname" required /><br/>

			<label for="address"><b>Username</b></label><br/>
			<input type="text" id="username" name="username"  class=tp placeholder="Enter Username" required /><br />
			
			<label for="address"><b>City</b></label><br/>
			<input type="text" id="city" name="city"  class=tp placeholder="Enter City" required /><br />
			
			<label for="address"><b>Address</b></label><br/>
			<input type="text" id="address" name="address"  class=tp placeholder="Enter Address" required /><br />


			<label for="emailf"><b>Email</b></label><br/>
			<input type="text" id="email" name="email" class=tp placeholder="Enter Email" required /><br />

			<label for="phone"><b>Phone (optional)</b></label><br/>
			<input type="text" id="phone" name="phone" class=tp placeholder="Enter Phone" /><br />

			<label for="psw"><b>Password</b></label><br />
			<input type="password" placeholder="Enter Password" class=tp name="password" id="password" ><br />

			<label for="pswRepeat"><b>Repeat Password</b></label><br />
			<input type="password" placeholder="Repeat Password" class=tp name="pswRepeat" id="pswRepeat" ><br />

			<input type="reset" value="Reset" />
			<input type="submit" name ="create" id = "register" value="Submit" />
		</form></br>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<script type="text/javascript">
		$(function(){
			$('#register').click(function(e){

				var valid = this.form.checkValidity();

				fc = true;
				var password 	= $('#password').val();
				var pswRepeat 	= $('#pswRepeat').val();
				
				if (password != pswRepeat) 
				{
					alert("Passwords do not match!")
					if(fc)
					{
						frm.pswRepeat.focus();
						fc = false;
					}
					valid = false;
				}
				else
				{
					if(password.length < 8)
					{
						alert("You have to enter at least 8 character!");
						if(fc)
						{
							frm.password.focus();
							fc = false;
						}
						valid = false;
					}
					else
					{
						var cn = false, cA = false;
						for(var i = 0; i < password.length; i++)
						{
							if(password[i] >= 0 && password[i] <= 9)
								cn = true;
							if(password[i] >= 'A' && password[i] <= 'Z')
								cA = true;
						}
						if(cn == false)
							alert("You have to enter at least 1 digit!");
						if(cA == false)
							alert("You have to enter at least 1 capital letter!");
						if(!cn || !cA)
						{
							if(fc)
							{
								frm.password.focus();
								fc = false;
							}
							valid = false;
						}
					}
				}

				if(valid){


				var firstname 	= $('#firstname').val();
				var lastname	= $('#lastname').val();
				var username 	= $('#username').val();
				var city 		= $('#city').val();
				var address 	= $('#address').val();
				var email 		= $('#email').val();
				var phone 		= $('#phone').val();
				
					e.preventDefault();	

					$.ajax({
						type: 'POST',
						url: '../process.php',
						data: {firstname: firstname, lastname: lastname, username: username, city: city, address: address, email: email,phone: phone,password: password},
						
						success: function (data) {
							swal.fire({
									'title': 'Successful',
									'text': data,
									'type': 'success'
							}).then(function() {
								window.location = "login.php";
							});
						},
						error: function (xhr, ajaxOptions, thrownError) {
							Swal.fire({
									'title': 'Errors',
									'text': 'There were errors while saving the data.',
									'type': 'error'
							})
						}
					})

					
				}else{
					
				}
			});		

			
		});
		
	</script>
		<footer>Online Shopping © 2022</footer>
	</body>
</html>