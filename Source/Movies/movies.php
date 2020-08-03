<?php 

session_start();
require "../../Views/header.view.php"; 

?> 



<!DOCTYPE html>

<html> 

	<head>	

		<title>	Movie </title>

		<style>	

			body{ 

				background: #fafad2;				

			}


			h3{ 

				font-family: sans-serif; 
				font-family: Garamond ;			
				font-size: 1.5em;
				font-weight: bold;				
			}	



			table{

				margin-top: 60px;
				text-align: center;
				font-size: 1.3em;

			}



			div{
				margin-top: 70px;
			}		
			
		


			.category{

				width: 15%;
				height: 40px;
				font-size: 1.2em;
				background-color: #696969;
				color: yellow; 

			}



			.logout{

				width: 15%;
				height: 40px;
				font-size: 1.4em;			
				background-color: #696969;
				color: yellow; 
				
			}



			form{
				background: #cd853f;				
				height: 30%;
				margin-top: 10%;

			}		



		</style>

	</head>

	<body>

		<h2>Welcome, <?= ucfirst($_SESSION['usernames']); ?></h2>
		
		<h3>Click Your Favorite Movies </h3>


		<table align="center">

			<tr>
				<th>Cartoon & Animation</th>
				<th>Bollywood</th>
				<th>Hollywood</th>
				<th>Other Movies</th>
			</tr>

			<tr>
				<td><a href="cartoon.php" target="blank"><img src="../Image/cc.jpg" width="200"></a></td>

				<td><a href="bollywood.php" target="blank"><img src="../Image/bb.jpg" width="200">
				</a></td>

				<td><a href="hollywood.php" target="blank"><img src="../Image/hh.jpg" width="200">
				</a></td>

				<td><a href="other_movie.php" target="blank"><img src="../Image/oo.jpg" width="200"></a></td>

			</tr>

		</table>	


		<div align="center">			

			<a href="../../Views/selected_category.php" target="blank"><input type="button" value="Other Categories" class="category" name="cat" id="cat"></a>		

			<a href="../../logout.php" target="blank"><input type="button" value="Logout" class="logout" name="logout" id="logout"></a>	


		</div>

		
		<form>

			<footer align="center">

				<?php 	require "../../Views/developer_contact.php"; ?>

			</footer>
			
		</form>			

		
	</body>

</html>