<?php
require('../connection.php');
$id = $_GET['id'];

if($id){
    $sql = "DELETE FROM `categories` WHERE `Category_Id`=$id";
    $run = mysqli_query($conn,$sql);
    if($run){
        // echo"<script>alert('product successfully added in the category');</script>";
        header("location:../category.php?result=success");
    }
    else{
        header("location:category.php?result=error");

    }
}




?>