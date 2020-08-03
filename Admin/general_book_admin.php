<?php 

require "Admin_views/general_book_admin_view.php";
require "database.php";


if($_SERVER['REQUEST_METHOD']=="POST"){

	$book_name=htmlspecialchars($_POST['book_name']);
	$book_link=htmlspecialchars($_POST['book_link']);

	$new_books = $book_name." => ".$book_link;

	file_put_contents("C:/xamppp/htdocs/other.txt","\n".$new_books,FILE_APPEND);


}


	
?>