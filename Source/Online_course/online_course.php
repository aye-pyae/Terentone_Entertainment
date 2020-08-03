<?php 	

require "../../Views/header.view.php";

?>


<!DOCTYPE html>

<html>

	<head>

		<title>Courses</title>

		<style>	


			.category{

				width: 15%;
				height: 40px;
				font-size: 1em;
				margin-left: 50px;
				margin-bottom: 50px;				
				background-color: #696969;
				color: yellow; 
			}



			.logout{

				width: 10%;
				height: 40px;
				font-size: 1.2em;
				margin-right: 50px;	
				margin-bottom: 50px;			
				background-color: #696969;
				color: yellow; 
				float: right;

			}


		</style>

	</head>

	<body>

		<div>			

			<a href="../../Views/selected_category.php" target="blank"><input type="button" value="Other Categories" class="category"></a>		

			<a href="../../logout.php" target="blank"><input type="button" value="Logout" class="logout"></a>	


		</div>	


		<p>

			<?php 

				require "../../database.php";

        		$config = require "../../config.php";

        		$db = new Database($config);

        		$db -> set_table('courses');

        		$all_courses = $db -> get_all_items();
        		

			
				if($all_courses){

					foreach ($all_courses as $courses) {

						list($id,$name,$link)=$courses;

						echo "<li>";
						echo "$name";
						echo "<br>";
						echo "<a href=$link>$link</a>";
						echo "<br>";
				    	echo "<br>";
				    	echo "</li>";

						
					}			

				}

 
			?>
			
		</p>

	</body>

</html>



