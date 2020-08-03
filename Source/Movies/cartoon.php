<!DOCTYPE html>

<html>

	<head>

		<title> Cartoon </title>

		<style>

			body{
				background-color: #fff855;
				
			}

			
			img{
				width: 150px;
				height: 150px;
				padding: 10px;
			}


			input{
				width: 10%;
				height: 15%;
				font-size: 1.2em;
				font-weight: bold;
				margin-top: 3%;
				margin-left: 3%;
				margin-bottom: 50px;
				background-color: #696969;
				color: yellow; 		
				
			}


		</style>

	</head>

	<body>

		<marquee direction="Right">

			<img src="../Image/C1.jpg">
			<img src="../Image/C2.jpg">
			<img src="../Image/C3.jpg">
			<img src="../Image/C4.jpg">
			<img src="../Image/C5.jpg">
			<img src="../Image/C6.jpg">
			<img src="../Image/C7.jpg">
			<img src="../Image/C8.jpg">
			<img src="../Image/C9.jpg">
			<img src="../Image/C10.jpg">
			<img src="../Image/C11.jpg">
			<img src="../Image/C12.jpg">
			<img src="../Image/C13.jpg">
			<img src="../Image/C14.jpg">
			<img src="../Image/C15.jpg">

		</marquee>
		
		<a href="movies.php">

			<input type="button" value="Back" name="back" id="back">

		</a>


        <p>
        	
        	<?php 

        		require "../../database.php";

        		$config = require "../../config.php";

        		$db = new Database($config);

        		$db -> set_table('cartoon');

        		$all_items = $db -> get_all_items();			


				require '../../Views/show_items.php';


			?>


		</p>

	</body>

</html>