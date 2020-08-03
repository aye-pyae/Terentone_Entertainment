<?php 

	require "header.view.php";


	if($_SERVER['REQUEST_METHOD']==="POST"){
				
		$category=htmlspecialchars($_POST['category']);

		switch ($category) {

			case 'movies':
							header('Location: ../Source/Movies/movies.php');
							break;

			case 'courses': 
							header('Location: ../Source/Online_course/online_course.php');
							break;

			case 'books': 
							header('Location: ../Source/Books/books.php');
					    	break;

			default :
						echo 'There is no selected.';
						break;	

		}
	
	}


?>



<!DOCTYPE html>

<html>

	<head>

		<title> Category </title>

		<style>	

			form{

				background: #deb887;				
				width: 50%;				
				margin: auto;
				overflow: hidden;
				padding: 25px;
				
			} 	

			
			label{
				display: block;
				padding: 5px;
				font-size: 1.5em;
				color: white;
			   
			}



			li{
			list-style: none;
			padding: 20px;
			padding-left: 15%		
			
			}

		

			select{
			width: 80%;
			height: 35px;
			font-size: 1em;

			}



			input{
				margin-top: 20px;
				align-self: center;
				font-weight: bold;
				width: 15%;
				height: 30px;
				margin-left: 35%;
				font-size: 1em;
			}



			ul{
				
				height: 60%;
			}



			div{
				background: #cd853f;
				height: 25%;
				text-align: center;
				
			}
			

		</style>

	</head>

	<body>

		<form method="post" autocomplete="off">

			<ul>
				<li>

					<label for="category">Select Your Favorite Category:</label>
					<select name="category" id="category">

						<option value="movies">Movies</option>
						<option value="courses">Online Courses</option>
						<option value="books">Books</option>
						
					</select>

				</li>

				<li>
					<input type="submit" value="OK">
				</li>
				
			</ul>

			<div><?php require "developer_contact.php"; ?></div>


		</form>


	</body>

</html>