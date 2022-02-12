<?php 
include 'hearder.php';
include 'login_style.php';
require_once'controller/signup_con.php';

?>
		

 <form action="C_login.php" method="post">
 	<div id="jj">
 		<div class="sUp"><h2>Login</h2></div>
 		<div>
			<h4>Phone:</h4>
			<input class="pass" type="text" name="phone" placeholder="Enter your phone no">
		</div>
		<div>
			<h4>Passwoar:</h4>
			<input class="pass" type="password" name="passwoard" placeholder="Enter your passwoard ">
		</div>

		

		<div id="ss"><input type="Submit" name="login" value="Login"></div>
		<div a class="pass2">Don't have any account? <a href="signup.php"><b> SIGNUP</b></a></div>
 	</div>

 </form>
