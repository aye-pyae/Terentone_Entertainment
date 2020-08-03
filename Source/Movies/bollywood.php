<!DOCTYPE html>

<html>

	<head>

		<title> Bollywood </title>

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

			<img src="../Image/B1.jpg">
			<img src="../Image/B2.jpg">
			<img src="../Image/B3.jpg">
			<img src="../Image/B4.jpg">
			<img src="../Image/B5.jpg">
			<img src="../Image/B6.jpg">
			<img src="../Image/B7.jpg">
			<img src="../Image/B8.jpg">
			<img src="../Image/B9.jpg">
			<img src="../Image/B10.jpg">
			<img src="../Image/B11.jpg">
			<img src="../Image/B12.jpg">
			<img src="../Image/B13.jpg">
			<img src="../Image/B14.jpg">
			<img src="../Image/B15.jpg">
			<img src="../Image/B16.jpg">
			<img src="../Image/B17.jpg">
			<img src="../Image/B18.jpg">
			<img src="../Image/B19.jpg">
			
        </marquee>
        
        <a href="movies.php">

        	<input type="button" value="Back" name="back" id="back">

        </a>


        <p>            

        	<?php 

        		require "../../database.php";

        		$config = require "../../config.php";

        		$db = new Database($config);

        		$db -> set_table('bollywood');

        		$all_items = $db -> get_all_items();			


				require '../../Views/show_items.php';


			?>

		</p>      	
        

	</body>

</html>





