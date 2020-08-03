<?php 

require "Admin_views/hollywood_admin_view.php";
require "database.php";


if($_SERVER['REQUEST_METHOD']=="POST"){

	$movie_name=htmlspecialchars($_POST['movie_name']);
	$movie_link=htmlspecialchars($_POST['movie_link']); 

		
	
	$config = require "../config.php";

	$db = new Database($config);

	$db -> set_table('hollywood');

	$new_movies = $db -> insert_items([

		"movie_name" => $movie_name,
		"movie_link" => $movie_link

	]);


	if($new_movies==1){

		echo "Successfully Inserted.";

	} else{

		echo "Some error occur. Please try again.";

	}


}



?>