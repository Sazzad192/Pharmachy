<?php 
	require_once 'db_connect.php';

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$product_cetagori=$_POST['product_cetagori'];
		$price = $_POST['price'];
		$product_quantity = $_POST['product_quantity'];
		$picture = $_FILES['picture'];

		$filename= $picture['name'];
		$filepath= $picture['tmp_name'];
		$fileerror= $file['error'];

		if($fileerror == 0)
		{
			$destfile='db_picture/'.$filename;
			move_uploaded_file($filepath, $destfile);

			$insertquery="INSERT INTO product (name, product_cetagori, price, product_quantity,picture) VALUES('$name','$product_cetagori','$price','$product_quantity','$destfile')";

			$iquery = mysqli_query($con,$insertquery);
		}

		
		if($iquery)
		{
			?>
				<script>
					alert('product added Successfully');
				</script>
			<?php
			header("location: dashboard.php" );
		}
		else
		{
			?>
				<script>
					alert('Something wrong');
				</script>
			<?php
		}
	}
	if(isset($_POST['edit']))
	{
		$id = $_GET['id'];
		$name=$_POST['name'];
		$product_cetagori=$_POST['product_cetagori'];
		$price = $_POST['price'];
		$product_quantity = $_POST['product_quantity'];
		

			$updatequery="UPDATE product SET id=$id, name='$name', product_cetagori='$product_cetagori',price = '$price', product_quantity='$product_quantity'  WHERE id=$id ";

			$iquery = mysqli_query($con,$updatequery);
		

		if($iquery)
		{
			?>
				<script>
					alert('Update Successfull');
				</script>
			<?php
			header("location: dashboard.php" );
		}
		else
		{
			?>
				<script>
					alert('Something wrong');
				</script>
			<?php
		}
		
	}
	
 ?>