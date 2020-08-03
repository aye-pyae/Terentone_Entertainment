<?php 

session_start();

require "Views/header.view.php";

require "function.php";

require "database.php";

$config = require "config.php";

if($_SERVER['REQUEST_METHOD']==="POST"){

	$username = htmlspecialchars(trim($_POST['username']));
	$email = htmlspecialchars(trim($_POST['email']));
	$password = htmlspecialchars(trim($_POST['password']));
	$interests = htmlspecialchars(trim($_POST['interests']));


	if(empty($username) || empty($email) || empty($password) || empty($interests) ||invalid_email($email)){

		$show_text = "Please Fill Out The Valid Data";

	} else{		

		$db = new Database($config);

		$db -> set_table('users');

		$new_user = $db -> insert_user([

			'name' => $username,
			'email' => $email,
			'password' => $password,
			'interest' => $interests 
		]);
		
		
		$_SESSION['usernames'] = $username;
		
    	$_SESSION['interest'] = trim($interests);    	

    	header("Location: Source/".ucwords($_SESSION['interest'])."/" .$_SESSION['interest']. ".php");	

	}
	


}



include "Views/signup_view.php";

?>s