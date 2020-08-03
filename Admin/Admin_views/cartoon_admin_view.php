<!DOCTYPE html>

<html>

	<head>

		<title> Cartoon Admin </title>

		<style>

			form{
				width: 60%;
				margin: auto;				
	 			background: #ffefd5;	 			
	 			padding: 5px;	 		
	 			overflow: hidden;	 			
			}


			h2{

				text-align: center;
				font-family: cambria;
				color: #4b0082;


			}


			input:not([type="submit"]){

				width: 100%;
				height: 30px;

			}



			input[type="submit"]{

				width: 12%;
				height: 30px;
				float: right;
				font-size: 1.2em;
				color: #000080;
				font-weight: bold; 
				margin-bottom: 20px;
				margin-right: 200px;
				margin-top: 30px;

			}


			input[type="button"]{

				color: #000080;
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
				color: #000080;


			}



			li{
				list-style: none;
				padding: 10px;
			
			}
			
			
		</style>

	</head>


	<body>

		<form method = "post" autocomplete = "off">

			<h2>Cartoon & Animation</h2>

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