<?php 
include 'hearder.php';
include 'login_style.php';
require_once'controller/signup_con.php';


?>
		
 <form action="a_login.php" method="post">
 	<div id="jj">
 		<div class="sUp"><h2>Login</h2></div>
 		<div>
			<h4>User ID:</h4>
			<input class="pass" type="text" name="userid" placeholder="Enter your USER ID">
		</div>
		<div>
			<h4>Passwoar:</h4>
			<input class="pass" type="password" name="passwoard" placeholder="Enter your passwoard ">
		</div>

		
		<div id="ss"><input type="Submit" name="alogin" value="Login"></div>
		
 	</div>

 </form>
