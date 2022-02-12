<?php 
	session_start();
	$userid=$_SESSION['userid'];

	include 'adminheader.php';
	include 'dash_style.php';
 ?>
 <a href="#View_admins" id="showAdmins" class="btn btn-warning">Show Admin</a>
<a href="#addadmin" class=" btn btn-danger">Add Admin</a>

<section id="View_admins">
	 <h1>View Admins</h1> <br>
        <div id="universities"></div>
        <script>
            document.getElementById('showAdmins').addEventListener('click', showValues);
            function showValues() 
            {
                var req = new XMLHttpRequest();
                req.open('GET','viewadmin.php',true );

                req.onload = function()
                {
                    if(req.status==200){
                    var namez = JSON.parse(req.responseText);
                    var display = '';

                    for (var i in namez)
                    {
                        display += '<ul>'+
                            '<li><b>ID: </b>'+namez[i].id+'</li>'+
                            '<li><b>Admin ID: </b>'+namez[i].userid+'</li>'+
                            '<li><hr>'+'</li>'+'</ul>';
                    }

                    document.getElementById('universities').innerHTML=display;
                }
            }
                req.send();
            }
        </script>
        <br>
</section>

<section id="addadmin">
	<form action="addadmin.php" method="POST">
        <h1>Add Admin</h1> <br>
        <table>
            <tr>
                <td><b>New Admin ID:</b></td>
                <td><input type="text" name="newuserid" placeholder=" New Admin ID"  style="text-align: center;" ></td>
            </tr>
            <tr>
                <td><b>New Admin Password:</b></td>
                <td><input type="password" name="newpass" placeholder="Admin password"  style="text-align: center;" ></td>
            </tr>
            <tr>
                <td><b>Your Password:</b></td>
                <td><input type="password" name="mypass" placeholder="Your password" style="text-align: center;" ></td>
            </tr>
            <tr>
                <td><input type="submit" name="addAdmin" value="Add Admin"></td>
            </tr>
            
        </table>

        <?php 
        include 'db_connect.php';

        if (isset($_POST['addAdmin'])) 
        {
            $mypass = $_POST['mypass'];
            $sql3 = "SELECT * FROM admin WHERE passwoard = '$mypass' AND userid='$userid'";
            $ver = mysqli_query($con, $sql3);
            if(mysqli_num_rows($ver) == 1)
            {
                $newuserid = $_POST['newuserid'];
                $newpass = $_POST['newpass'];

                $sql4 = "INSERT INTO admin (userid, passwoard ) VALUES('$newuserid', '$newpass')";
                mysqli_query($con, $sql4);
                
                echo "<script>
                        alert('Admin adding operation successful');
                    </script>";
            }
            else{
                echo "<script>
                        alert('Your password does not match. Please try again');
                    </script>";
            }
        }
        ?>
        <br>
       
 	</form>

</section>

 
        