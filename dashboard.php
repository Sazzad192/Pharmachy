<?php 
include 'hearder.php';
include 'dash_style.php';

session_start();
$userid=$_SESSION['userid'];


if (!isset($_SESSION['userid']))
{
	
	header('location: login.php');
}

?>
  

<!--dashboard starts -->
<div style="text-align: center;"><h3> Admin:<?php echo $_SESSION['userid'];?></h3></div>
<div class="button">
	<a href="dashboard.php" class="btn btn-primary">Dashboard</a>
	<a href="addproduct.php" class="btn btn-warning">Add Product</a>
	<a href="" class="btn btn-warning">Edit Products</a>
	<a href="" class=" btn btn-danger">Delete Product</a>
	<a href="addadmin.php" class=" btn btn-info ">Add Admin</a>
	<a href="logout.php" class="btn btn-danger">Logout</a>
</div>



<div class="table-responsive">
  <table class="table">
    <thead>
			<th>ID</th>
			<th>Product Name </th>
			<th>Product category </th>
			<th>Product price </th>
			<th>Product quantity </th>
			<th>Product picture </th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			<?php 

			  	require_once 'db_connect.php';
			  	$selectq= " SELECT * FROM product ";
			  	$query = mysqli_query($con, $selectq);
			  	while($result = mysqli_fetch_assoc($query))
			  	{
			?>	
			  	
			<tr>
				<td> <?php echo $result['id']; ?> </td>
				<td> <?php echo $result['name']; ?> </td>
				<td> <?php echo $result['product_cetagori']; ?> </td>
				<td> <?php echo $result['price']; ?> </td>
				<td> <?php echo $result['product_quantity']; ?> </td>
				<td> <img src="<?php echo $result['picture']; ?>" width="100px" height="50px"> </td>
				<td> <a href="editproduct.php?id=<?php echo $result['id']; ?>"><button type="button" class="btn btn-outline-info"> Edit</button></a> </td>
				<td> <a href="delteproduct.php?idd=<?php echo $result['id']; ?>"><button type="button" class="btn btn-outline-danger">Delete</button></a> </td>

			</tr>
		<?php 

			}

		 ?>
			
		</tbody>
  </table>
</div>
