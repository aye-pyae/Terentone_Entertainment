<?php 

require "Admin_views/it_book_admin_view.php";
require "database.php";


if($_SERVER['REQUEST_METHOD']=="POST"){

	$book_name=htmlspecialchars($_POST['book_name']);
	$book_link=htmlspecialchars($_POST['book_link']); 
	

	$config = require "../config.php";

	$db = new Database($config);

	$db -> set_table('it_book');

	$new_book = $db -> insert_items([

		"book_name" => $book_name,
		"book_link" => $book_link

	]);


	if($new_book==1){

		echo "Successfully Inserted.";

	} else{

		echo "Some error occur. Please try again.";

	}		
	
	
}



?>