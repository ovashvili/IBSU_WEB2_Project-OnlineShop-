<?php
session_start();
require_once('config.php');

$email     = $_POST['email'];
$username  = $_POST['username'];
$password  = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ? OR username = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$email, $username]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($user)
	{
		if (password_verify($password, $user['password']))
		{
			$_SESSION['userIdentity'] = $user;
			echo 'Successfully signed in!';
		}
		else
		{
			echo $user['password'];
		}	
	}
	else
	{
		echo 'Username or password is incorrect!';
	}
}else{
	echo 'There were errors while connecting to database.';
}