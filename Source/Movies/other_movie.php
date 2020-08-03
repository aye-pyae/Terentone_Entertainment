<!DOCTYPE html>

<html>

	<head>

		<title> Other Movies</title>

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
				margin-bottom: 50px;
				margin-left: 3%;
				background-color: #696969;
				color: yellow; 
				
			}


		</style>

	</head>

	<body>

		<marquee direction="Right">

			<img src="../Image/O1.jpg">
			<img src="../Image/O2.jpg">
			<img src="../Image/O3.jpg">
			<img src="../Image/O4.jpg">
			<img src="../Image/O5.jpg">
			<img src="../Image/O6.jpg">
			<img src="../Image/O7.jpg">
			<img src="../Image/O8.jpg">
			<img src="../Image/O9.jpg">
			<img src="../Image/O10.jpg">
			<img src="../Image/O11.jpg">
			<img src="../Image/O12.jpg">
			<img src="../Image/O13.jpg">
			<img src="../Image/O14.jpg">
			<img src="../Image/O15.jpg">
			<img src="../Image/O16.jpg">
			<img src="../Image/O17.jpg">
			<img src="../Image/O18.jpg">
			<img src="../Image/O19.jpg">
			<img src="../Image/O20.jpg">
			<img src="../Image/O21.jpg">
			<img src="../Image/O22.jpg">
			<img src="../Image/O23.jpg">

		</marquee>

		<a href="movies.php">
			<input type="button" value="Back" name="back" id="back">
		</a>


		<p>

        	<?php 

        		require "../../database.php";

        		$config = require "../../config.php";

        		$db = new Database($config);

        		$db -> set_table('other_movies');

        		$all_items = $db -> get_all_items();			


				require '../../Views/show_items.php';


			?>



		</p>

	</body>

</html>




