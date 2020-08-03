<!DOCTYPE html>

<html>

	<head>

		<title> Hollywood </title>

		<style>

					
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

			<img src="../Image/H1.jpg">
			<img src="../Image/H2.jpg">
			<img src="../Image/H3.jpg">
			<img src="../Image/H4.jpg">
			<img src="../Image/H5.jpg">
			<img src="../Image/H6.jpg">
			<img src="../Image/H7.jpg">
			<img src="../Image/H8.jpg">
			<img src="../Image/H9.jpg">
			<img src="../Image/H10.jpg">
			<img src="../Image/H11.jpg">
			<img src="../Image/H12.jpg">
			<img src="../Image/H13.jpg">

		</marquee>

		<a href="movies.php">

			<input type="button" value="Back" name="back" id="back">

		</a>


		<p>

        	<?php 

        		require "../../database.php";

        		$config = require "../../config.php";

        		$db = new Database($config);

        		$db -> set_table('hollywood');

        		$all_items = $db -> get_all_items();			


				require '../../Views/show_items.php';


			?>			

		</p>

	</body>

</html>
