<?php
   include 'db_connect.php';

    $sql = "SELECT * FROM admin";

    $result = mysqli_query($con, $sql);
    //Get the data
    $identifiers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    echo json_encode($identifiers);
?>