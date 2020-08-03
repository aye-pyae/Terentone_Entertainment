<html>
	<head>
		<title>Edit File</title>

		<style>	

			form{
				background: #b0c4de;
				width: 50%;
				margin: auto;
				overflow: hidden;
				padding: 25px;
				
			} 	


			h2{
				text-align: center;
			}	



			
			label{
				display: block;
				padding: 5px;
				font-size: 1.2em;
			   
			}



			li{
			list-style: none;
			padding: 20px;
			padding-left: 15%		
			
			}

		
			select{
			width: 80%;
			height: 30px;
			font-size: 1em;

			}



			input{
				font-size: 1em;
				font-weight: bold;
				align-self: center;
				width: 12%;
				height: 30px;
				margin-left: 35%;
			}
			

		</style>

	</head>

	<body>

		<form method="post" autocomplete="off">

			<h2>Edit Data</h2>
			
			<ul>
				<li>
					
					<select name="edit_file" id="edit_file">

						<option value="bollywood">Bollywood Movies</option>
						<option value="hollywood">Hollywood Movies</option>
						<option value="anime">Cartoon & Animation</option>
						<option value="other_movie">Other Movies</option>
						<option value="course">Online Courses</option>
						<option value="general_book">General Books</option>
						<option value="it_book">IT Books</option>
						
					</select>

				</li>

				<li>
					<input type="submit" value="OK">
				</li>

			</ul>

		</form>

	</body>

</html>