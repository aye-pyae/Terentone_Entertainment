<!DOCTYPE html>

<html>	
	<head>

		<title>Movie Show</title>

		<style>
			
			body{
				font-size: 1.5em;
				line-height: 45px;
				margin: auto;
				margin-bottom: 0;
				margin-top: 0;
				padding-left: 20px;

			}


		</style>


	</head>

	<body>		

			<?php
				
				if($all_items){

					foreach ($all_items as $items) {

						echo "<pre>";

						list($id,$name,$link) = $items;

						echo "$name : ";
						echo "<a href=$link>$link</a>";
						
					}

				} 	


			?>

		
	</body>


</html>