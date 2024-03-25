<?php
require('../connection.php');
$id = $_GET['id'];
$cid = $_GET['cid'];



if($id){
    $sql = "DELETE FROM `products` WHERE `Plant_id`=$id";
    $run = mysqli_query($conn,$sql);
    if($run){
        // echo"<script>alert('product successfully added in the category');</script>";
        header("location:../product.php?id=$cid");
    }
    else{
        header("location:../product.php?id=$cid");

    }
}




?>