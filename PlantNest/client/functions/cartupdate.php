<?php
require('connection.php');
if(isset($_POST['update'])){
$id = $_POST['id'];
    $newquantity = $_POST['quantity'];
    $updateq = "UPDATE  `temp_cart` SET p_quantity = $newquantity WHERE p_id = $id ";
    $runup = mysqli_query($conn,$updateq);
if($runup){
    header('location:../cart.php');
}else{
    header('location:../cart.php');
}

}



?>