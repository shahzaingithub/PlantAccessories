<?php


require('connection.php');
$id = $_GET['id'];
$query = mysqli_query($conn,"DELETE FROM temp_cart WHERE `p_id` = $id ");
if($query){
    header("Location:../cart.php?success");
}else{
    header("Location:../cart.php?error");

}



?>