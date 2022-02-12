<?php 
	require_once 'db_connect.php';

	$id = $_GET['idd'];
	$selectq= " DELETE  FROM product WHERE id= $id";
	$dquery = mysqli_query($con, $selectq);
	
	if ($dquery) 
	{
		?>
			<script>
				alert("Delete successfull!");
			</script>
		<?php

		header("location:dashboard.php");
	}
	else
	{
		?>
			<script>
				alert("Something wrong!");
			</script>

		<?php
	}

 ?>

