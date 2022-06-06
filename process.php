<?php
require_once('config.php');
?>
<?php

if(isset($_POST))
{

	$firstname 				= $_POST['firstname'];
	$lastname 				= $_POST['lastname'];
	$username 				= $_POST['username'];
	$city 					= $_POST['city'];
	$address 				= $_POST['address'];
	$email 					= $_POST['email'];
	$phone					= $_POST['phone'];
	$password 				= $_POST['password'];

	$hashPassword = password_hash($password, PASSWORD_DEFAULT);
	
	try
	{
		$sql = "INSERT INTO users (firstname, lastname, username, city, address, email, phone, password) VALUES(?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $username, $city, $address, $email, $phone, $hashPassword]);
		
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
	}
	catch (PDOException $e)
	{
	    echo $e->getMessage();
        exit;
	}
	

}else{
	echo 'No data';
}