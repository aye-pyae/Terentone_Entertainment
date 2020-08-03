<!DOCTYPE html>

<html>

	<head>

		<title> IT Book </title>

		<style>	


			input{
				width: 10%;
				height: 15%;
				font-size: 1.2em;
				font-weight: bold;
				margin-top: 3%;
				margin-bottom: 50px;
				margin-left: 3%;
				background-color: #696969;
				color: yellow; 				
				
			}	


		</style>

	</head>

	<body>
			
		<a href="books.php">

			<input type="button" value="Back" name="back" id="back">

		</a>

		<p>

			<?php 

    			require "../../database.php";

    			$config = require "../../config.php";

    			$db = new Database($config);

   				$db -> set_table('it_book');

   				$all_items = $db -> get_all_items();			


				require '../../Views/show_items.php';

			?>
			
		</p>

	</body>

</html>

