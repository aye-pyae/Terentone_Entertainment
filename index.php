<?php 

require "Views/header.view.php";


if($_SERVER['REQUEST_METHOD']=="POST"){

	if($_POST['action']=='Sign Up'){

		header('Location: sign_up.php');

	} else{

		header('Location: login.php');

	} 
}


include "Views/index_view.php";


?>