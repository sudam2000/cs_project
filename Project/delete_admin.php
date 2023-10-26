<?php 
   include("php/config.php");
?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];



    $query = "DELETE from admins WHERE Id = '$id'";

    $result = mysqli_query($con, $query);

    if(!$result){
        die("Query failed".mysqli_error());
    }
    else{
        header('location:admin_home.php?');
    }

    }
?>