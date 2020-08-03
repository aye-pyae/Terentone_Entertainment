<!DOCTYPE html>

<html>

 	<head>

 		<title> Login </title>

 		<style>

	 		form{

	 			width: 70%;
	 			background: #FFFADC;
	 			margin: auto;
	 			overflow: hidden;
	 			padding: 5px;

	 		}


	 		label{
	 			display: block;
	 			font-size: 1.2em;
	 		}


	 			
	 		ul{ 

	 			padding: 10px;

	 		} 		



	 		li{
	 			list-style: none;
	 			padding: 10px;
	 			margin-bottom: 15px; 				

	 		}



	 		input:not([type="submit"]){
	 			width: 100%;
	 			height: 30px;

	 		} 



	 		input[type="submit"]{

	 			float: right;
	 			width: 60px;
	 			height: 30px;
	 			font-size: 1em;

	 		}
	 		


	 		.error{
	 			color: red;
	 			font-style: italic;
	 			text-align: center;
	 			
	 		}

		
 		</style> 

 	</head>

 	<body>

 		<form method="post" autocomplete="off">

 			<ul>

 				<li>
 					<label for="username">Username:</label>
 					<input type="text" name="username" id="username">
 				</li>

 				<li>
 					<label for="password">Password:</label>
 					<input type="password" name="password" id="password">
 				</li>

 				<li>
 					<input type="submit" value="Login">
 				</li>

 				<li>
 					<p class='error'>

 						<?php 

 							echo (isset($status))? $status : '';

 						?>
 						
 					</p>
 				</li>

 				
 			</ul>

 		</form>

 	</body>

 </html>