<?php

session_start();
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'plants';
$conn =  mysqli_connect($server,$user,$password,$db);
if(!$conn){
    // die('Error while Connecting To DataBase'.mysqli_error());
}
else{
  // echo 'running connection';
}




?>