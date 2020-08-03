<?php 

include 'Admin_views/edit_file_view.php';

if($_SERVER['REQUEST_METHOD']==="POST"){

	$file=htmlspecialchars($_POST['edit_file']);

	switch ($file) {

		case 'bollywood':
						header('Location: bollywood_admin.php');
						break;

		case 'hollywood': 
						header('Location: hollywood_admin.php');
						break;

		case 'anime': 
						header('Location: cartoon_admin.php');
					    break;

		case 'other_movie':
						header('Location: other_movie_admin.php');
						break;

		case 'course':
						header('Location: course_admin.php');
						break;


		case 'general_book':
						header('Location: general_book_admin.php');
						break;

		case 'it_book':
						header('Location: it_book_admin.php');
						break;
														;

		default :
					echo 'There is no selected.';
					break;	

	}
	
}


?>