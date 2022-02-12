<?php 
  include 'hearder.php';
  require_once 'controller/product_con.php';
  include 'dash_style.php';
  session_start();
  $userid=$_SESSION['phone'];
  

  if (!isset($_SESSION['phone']))
  {
    
    header('location: login.php');
  }
 ?>
 
<style> 
  .card-body
  {
    width: 200px;
    height: 70px;
  }
  
</style>



<!-- Ajax -->
<script>
function showHint(str) 
{
  if (str.length == 0) 
  {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } 
  else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200) 
      {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>

<div style="text-align: center;"><h5> Login as <?php echo $_SESSION['phone'];?></h5></div>

  <nav class="navbar navbar-light bg-light justify-content-between">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" onkeyup="showHint(this.value)" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    <div>
        <p class="sp"> <span id="txtHint"></span></p>
    </div>
  </form>
  <a href="logout.php" class="btn btn-danger">Logout</a>
   <a href="shop_cart.php" class="navbar-brand"><i class="fas fa-shopping-cart"></i></a>
 </nav>



<div class="row">

  <?php 
      require_once 'db_connect.php';
      $selectq= " SELECT * FROM product ";
      $query = mysqli_query($con, $selectq);
      while($result = mysqli_fetch_assoc($query))
          {
            ?>
            <div  class="col-lg-3 col-md-3 col-sm-12">

              <form >
                  <div class="card-body">
                    <img name="picture" src="<?php echo $result['picture'] ?>" alt="picture" class="img-fluid" >
                    <div>
                      <h6 name="name" class="card-title"><?php echo $result['name'] ?></h6>
                      <h6 class="card-title" name="price"><?php echo $result['price'] ?></h6>
                      <button type="submit" name="cart" class="btn btn-success">Add to cart</button>
                      
                    </div>
                  
                </div>
              </form>
              
            </div>

            
            <?php 
          }      
   ?>
    
</div>




