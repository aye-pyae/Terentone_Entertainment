<?php 

require "Admin_views/course_admin_view.php";
require "database.php";


if($_SERVER['REQUEST_METHOD']=="POST"){

	$description=htmlspecialchars($_POST['course_description']);
	$course_link=htmlspecialchars($_POST['course_link']); 

	$new_courses = $description." => ".$course_link;

	file_put_contents("C:/xamppp/htdocs/courses.txt","\n".$new_courses,FILE_APPEND);

	
}


?>