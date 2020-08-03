<?php 

session_start();



?>


<!DOCTYPE html>

<html>	

	<head>

		<title>	Book </title>
		
		<style>	

			body{
				position: relative;
				background-image: url('../Image/img9.jpg'); 
				background-repeat: no-repeat;
				background-size: cover;
				background-attachment: fixed;
				width: 100%;
				height: 100%;												
				
			}


			body::before{
				content: '';
				position: absolute;
				left: 0;
				right: 0;
				bottom: 0;
				top: 0;	
				background-color: rgba(0,0,0,0.7);			
									
			}

			

			h2{
				font-family: times new romance;				
				color: white;
			}



			h2,ul,form{
				position: relative;
				z-index: 100 !important;
			}



			ul{
				height: 40%;
			}



			li,a{
				padding:5px;
				font-size: 1.3em;
				font-family: century;
				list-style: square;
				font-weight: bold;
				margin-top: 5%;
				color: white;
			}	


			.category{

				width: 15%;
				height: 40px;
				font-size: 1em;				
				margin-top: 70px;
				background-color: #696969;
				color: yellow; 
			}



			.logout{

				width: 10%;
				height: 40px;
				font-size: 1.2em;
				margin-right: 70px;
				margin-top: 70px;
				background-color: #696969;
				color: yellow; 
				float: right;

			}


			form{
				background: #deb887;				
				height: 30%;
				margin-top: 10%;					

			}
			


			footer{
				text-align: center;
				margin: 10%;
				margin-bottom: 0;

			}
				
			
			
		</style>

	</head>

	<body>

		<ul>

			<?php 	

				require "../../Views/header.view.php";


			?>
			
		</ul>


		<h2>Welcome, <?= ucfirst($_SESSION['usernames']); ?></h2>


		<h2>Choose Your Favorite Book</h2>

		<ul>

			<li><a href="it.php" target="blank">IT</a></li>
			<li><a href="general.php" target="blank">General</a></li>	
			
			<div>			

				<a href="../../Views/selected_category.php" target="blank"><input type="button" value="Other Categories" class="category"></a>		

				<a href="../../logout.php" target="blank"><input type="button" value="Logout" class="logout"></a>	


			</div>		

		</ul>

		<form>

			<footer>	

				<?php 	require "../../Views/developer_contact.php"; ?>

			</footer>

		</form>			
			

	</body>

</html>
