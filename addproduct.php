<?php 
	include 'adminheader.php';
	include 'controller/product_con.php';
 ?>
<style>

	.sss
	{
		margin-left: 35%;
		margin-right: 25%;
		margin-top: 10%;
		margin-bottom: 25%;
	}
	.ss
	{
		padding: 10px;
	}
	.ssb
	{
		width: 120px;
		margin-left: 8px;
	}
	input
	{
		width: 470px;
		height: 25px;
	}
</style>

<form action="addproduct.php" method="POST" enctype="multipart/form-data">
	
	<div class="sss">
		
	<div class="ss">
		<h4>Product name:</h4>
		<input type="text" name="name" class="btn1" placeholder="Product name" required>
	</div>
	<div class="ss">
		<h4>Product cetagori:</h4>
		<input type="text" name="product_cetagori" class="btn1" placeholder="cetagori" required>
	</div >
	<div class="ss">
		<h4>Product price:</h4>
		<input type="text" name="price" class="btn1" placeholder="Product price" required>
	</div>
	<div class="ss">
		<h4>Product quantity:</h4>
		<input type="text" name="product_quantity" class="btn1" placeholder="Product quantity" required>
	</div>
	<div class="ss">
		<h4>Product picture:</h4>
		<input type="file" name="picture" class="btn1" >
	</div>
	
	<div>
		<input type="submit" class="ssb" name="submit" value="Add product">
	</div>
	</div>
</form>
 
