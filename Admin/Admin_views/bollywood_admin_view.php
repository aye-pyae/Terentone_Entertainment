<!DOCTYPE html>

<html>

	<head>

		<title> Bollywood Admin </title>

		<style>

			form{
				width: 60%;
				margin: auto;				
	 			background: #a9a9a9;	 			
	 			padding: 5px;	 		
	 			overflow: hidden;	 			
			}


			h2{

				text-align: center;
				font-family: cambria;
				color: white;


			}


			input:not([type="submit"]){

				width: 100%;
				height: 30px;

			}


			input[type="submit"]{

				background: #a9a9a9;
				color: white;
				width: 12%;
				height: 30px;
				float: right;
				font-size: 1.2em;
				font-weight: bold; 
				margin-bottom: 20px;
				margin-right: 200px;
				margin-top: 30px;


			}


			input[type="button"]{

				background: #a9a9a9;
				color: white;
				width: 12%;
				height: 30px;				
				font-size: 1.2em;
				font-weight: bold; 
				margin-bottom: 20px;
				margin-left: 200px;
				margin-top: 30px;

			}


			ul{
				padding: 5px;
			}



			label{
				display: block;
				font-size: 1.2em;
				color: white;
				font-weight: bold;


			}


			li{
				list-style: none;
				padding: 10px;
			
			}

			
			
		</style>

	</head>


	<body>

		<form method = "post" autocomplete = "off">

			<h2>Bollywood Movies</h2>

			<ul>
				<li>
					<label for = "movie_name">Movie Name : </label>
					<input type = "text" name = "movie_name" id = "movie_name">
				</li>


				<li>
					<label for = "movie_link">Movie Link : </label>
					<input type = "text" name = "movie_link" id = "movie_link">
				</li>


				<li>

					<a href="edit_file.php">

        				<input type="button" value="Cancel" name="back" id="back">

        			</a>

					<input type = "submit" value = "Submit">
					
				</li>

				
			</ul>

		</form>


	</body>

</html>