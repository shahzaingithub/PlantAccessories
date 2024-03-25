<?php
require('../connection.php');
$id = $_GET['id'];
$role = $_GET['role'];


if($id){
    $sql = "DELETE FROM `users` WHERE `User_Id`=$id";
    $run = mysqli_query($conn,$sql);
    if($run){
        // echo"<script>alert('product successfully added in the category');</script>";
        header("location:../users.php?id=$role");
    }
    else{
        header("location:../users.php?id=$role");

    }
}




?>