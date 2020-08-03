<!DOCTYPE html>

<html>	

	<head>

		<title>	User Form </title>

		<style>	

			form{

				background: #afeeee;
				width: 50%;
				margin: auto;
				overflow: hidden;		
			}



			input:not([type="submit"]){
				width: 80%;
				height: 30px;

			}



			input[type='submit']{
				float: right;
				width: 17%;
				height: 30px;
				font-size: 1em;
				margin-right: 5px;			
			}

		


			label{
				display: block;
				font-size: 1.2em;
			}


		

			li{
				list-style: none;
				padding: 20px;

			}

		

			select{
				width: 40%;
				height: 30px;
				font-size: 1em;
			}
			



			.error { 
				color: red;
				font-style: italic;
				text-align: center;
				clear: both; 
			}
	

		</style>

	</head>

	<body>

		<form method="post" autocomplete="off">

			<ul>
				
				<li>
					<label for="username">Username:</label>
					<input type="text" name="username" id="username" placeholder="Provide Your Name" value="<?= old('username'); ?>">
					
				</li>

				
				<li>
					<label for="email">Email:</label>	
					<input type="email" name="email" id="email" placeholder="Provide Your Email Address" value="<?= old('email'); ?>">
				</li>

				
				<li>
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" value="<?= old('password'); ?>">
				</li>


				<li>
					<label for="interests">Interests:</label>
					<select name="interests" id="interests" value="<?= old('interests'); ?>">

						<option value="movies">Movies</option>
						<option value="books">Books</option>							
						<option value="online_course">Online Courses</option>
												
				    </select>
				</li>	


				<li>
					<input type="submit" value="Sign Up">
				</li>


				<li>
					<p class='error'>

					<?php 
					echo (isset($show_text))? $show_text : '';
					?>

					</p>

				</li>

			</ul>

		</form> 
			
	</body>

</html>