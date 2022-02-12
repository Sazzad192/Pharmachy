<?php 
	include "hearder.php";
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

<?php 
	
	$id = $_GET['id'];
	$selectq= " SELECT * FROM product WHERE id= $id";
	$query = mysqli_query($con, $selectq);
	$result = mysqli_fetch_assoc($query);

 ?>

<form action="" method="POST">
	
	<div class="sss">
		
	<div class="ss">
		<h4>Product name:</h4>
		<input type="text" name="name" class="btn1" value="<?php echo $result['name'] ?>" placeholder="Product name" >
	</div>
	<div class="ss">
		<h4>Product category:</h4>
		<input type="text" name="product_cetagori" class="btn1" value="<?php echo $result['product_cetagori'] ?>" placeholder="cetagori" >
	</div >
	<div class="ss">
		<h4>Product price:</h4>
		<input type="text" name="price" class="btn1" value="<?php echo $result['price'] ?>" placeholder="Product price" >
	</div>
	<div class="ss">
		<h4>Product quantity:</h4>
		<input type="text" name="product_quantity" class="btn1" value="<?php echo $result['product_quantity'] ?>" placeholder="Product quantity" >
	</div>
	
	
	<div >
		<input type="submit" class="ssb" name="edit" value="Edit product">
	</div>
	</div>
</form>
 
