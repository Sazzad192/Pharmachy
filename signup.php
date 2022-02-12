<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>
	<?php
	include 'hearder.php';
	include 'style.php';
	require_once'db_connect.php';
	require_once 'controller/signup_con.php';
	?>	

	<div id="jj">

		<form action="signup.php" method="POST" onsubmit = "return validate()"; >
			<div class="sUp"><h2>Creat an account</h2></div>
			<div> 
				<h4>Name:</h4>
				<input type="text" name="name"  placeholder="Enter your name" required>
				
			</div> 
			<div>
				<h4>Username:</h4>
				<input type="text" name="username"  placeholder="Enter your User name" required> 
				
			</div>
			<div>
				<h4> Phone: </h4>
				<input type="number" name="phone" id="phone"  placeholder="Enter your phone no" >
				
			</div>
			<div>
				<h4>Email:</h4>
				<input type="mail" name="mail" placeholder="Enter your mail address" required>
				
			</div>
			<div>
				<h4>Address:</h4>
				<input type="text" name="address" placeholder="Enter your address" required>
				
			</div>
		
			<div>
				<h4>Password:</h4>
				<input type="Password" name="passwoard" placeholder="Enter your password" required>
				
			</div>
		
			<div id="ss">
				<input type="submit" name="submit" value="Submit">
			</div>
			<div class="link">
				Already have an account? <a href="C_login.php"><b>LOGIN</b></a>
			</div>
		</form>


	</div>
</body>
</html>
