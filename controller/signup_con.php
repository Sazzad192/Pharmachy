<?php
require_once'db_connect.php';

	if(isset($_POST['submit']))
	{
		$name= $_POST['name'];
		$username= $_POST['username'];
		$phone= $_POST['phone'];
		$mail= $_POST['mail'];
		$address= $_POST['address'];
		$passwoard=$_POST['passwoard'];

		$pass=md5($passwoard);


		$phonequery	="SELECT *FROM user WHERE phone='$phone'";
		$query_p= mysqli_query($con,$phonequery);
		$count=mysqli_num_rows($query_p);
		if($count!=0)
		{
			?>
				<script>
					alert("Phone no already used");
				</script>
			<?php
		}

		else
		{
			$insertquery="INSERT INTO user(name, username, phone, mail, address, passwoard) VALUES('$name','$username','$phone','$mail','$address','$pass')";

			$iquery = mysqli_query($con,$insertquery);
			?>
				<script>
					alert("Welcome to Online Pharmacy!");
				</script>
			<?php
		}	
				
	}

	if(isset($_POST['login']))
	{

		$phone= $_POST['phone'];
		$passwoard=$_POST['passwoard'];

		session_start();
		$_SESSION['phone'] = $phone;
		
		$phone_search= "SELECT *FROM user WHERE phone='$phone' ";
		$query=mysqli_query($con, $phone_search); 
		

		if (mysqli_num_rows($query) == 1) 
		{

			$pass= md5($_POST['passwoard']);
			$sql = "SELECT * FROM user WHERE passwoard='$pass'";
			$verify = mysqli_query($con,$sql);
			

			if (mysqli_num_rows($verify) == 1)
			{ 
				?>
					<script>
						alert(" login successful ");
					</script>
				<?php

				header("location: medicine_shop.php");

			}

			else
			{
				?>
					<script>
						alert(" passwoard incorrect ");
					</script>
				<?php
			}
		}
	else
		{
			?>
				<script>
					alert("Invalid Phone no");
				</script>
			<?php
		}
		
	}

    if(isset($_POST['alogin'])) 
            {
                
                $userid= $_POST['userid'];
                $passwoard=$_POST['passwoard'];

                session_start();
				$_SESSION['userid'] = $userid;

                $sql = "SELECT * FROM admin WHERE userid='$userid'";

                $verify = mysqli_query($con, $sql);
                if(mysqli_num_rows($verify) == 1)
                {
                     //pass value
                    
                    $sql = "SELECT * FROM admin WHERE passwoard='$passwoard'";
                    $verify = mysqli_query($con, $sql);
                   // $_SESSION['userid']=$verify['userid'];
                    if(mysqli_num_rows($verify) == 1)
                    {

                    	?>
							<script>
                   				alert("Welcome!!");
                    		</script>
                    	<?php
                    	header("location: dashboard.php");
                    }
                    else
                    {
                    	?>
							<script>
                   				alert("Invalid passwoard");
                    		</script>
                    	<?php
                    }
                }
                else
                {
                	?>
						<script>
                   			alert("Invalid userid ");
                    	</script>
					<?php
                    
                }

  			}
		

        	
?>	