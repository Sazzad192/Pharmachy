<?php include 'hearder.php'; ?>
<style>
	*
		{
			padding: 0;
			margin: 0;
		}
		body
		{
			background: #5b7793;
			background-repeat: no-repeat;
			background-size: cover;
			float: center;

		}
		ul li
		{
			list-style: none;
		}
		a
		{
			text-decoration: none;
		}
	.login
		{
			display: flex;
			justify-content: center;
		}
		.login-part
		{
			width: 300px;
			border: 1px solid #ddd;
			transition: .3s;
		}
		.login-part:hover
		{
			box-shadow: 0px 0px 25px #000;
		}
		.pic
		{
			height: 250px;
			width: 300px;
			border: 0px solid #ddd;
		}
		.pic img
		{
			height: 100%;
			width: 100%;
		}
		.ser-con
		{
			text-align: center;
			padding: 20px;
			background: white;
		}
		.dm
		{
			margin: 0 20px;

		}
		.service-part
		{
			padding-top: 300px;
		}
</style>

<section id="login" class="service-part">
		
		<div class="login">
			<a href="C_login.php">
			<div class="login-part">
				<div class="pic"> 	
					<img src="style/picture/Customar.png" alt="CUSTOMAR">
				</div>
				<div class="ser-con text-center">
					<h3>LOGIN AS A CUSTOMAR</h3>
				</div>
			</div>
			</a>
			<a href="a_login.php">
			<div class="login-part dm">
				<div class="pic">
					<img src="style/picture/ad.png" alt="DELIVARY">
				</div>
				<div class="ser-con text-center">
					<h3>ADMIN</h3>
				</div>
			</div>
			</a>
		</div>
	</section>