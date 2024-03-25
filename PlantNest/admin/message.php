<?php

require('connection.php');



 ?>
<?php
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $sql = "DELETE FROM `message` WHERE user_id = '$delete_id'" or die('query failed');
        $res = mysqli_query($conn,$sql);
        header('location:login.php');
     }
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->


<!-- Mirrored from kamleshyadav.com/html/splashdash/html/b5/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:20:59 GMT -->
<head>
    <title>SplashDash</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" id="theme-change" type="text/css" href="#">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
</head>

<style>

:root{

   /* --purple:red; */
   --purple:red;
   /* --red:#c0392b;
   --orange:#f39c12;
   --black:#333;
   --white:#fff; */
   --light-color:#666;
   --light-white:#ccc;
   --light-bg:#f5f5f5;
   --border:.1rem solid var(--black);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
}
.title {
    display:flex;
    justify-content: end;
    text-align: center;
    margin-bottom: 2rem;
    text-transform: uppercase;
    /* color: var(--black); */
    /* color:#ff1313; */
    font-size: 4rem;
}
.messages .box-container .box {
    /* display:flex; */
    display:inline-block;
    margin-left:280px;
    justify-content: center;
    background-color: white;
    overflow:hidden;
    padding: 2rem;
    border: var(--border);
    box-shadow: var(--box-shadow);
    border-radius: 0.5rem;
}
.messages .box-container .box .delete-btn {
    margin-top: 0;
    background: white;
    color: #79A206;
}
.header .flex .account-box.active {
    display: inline-block;
    background: white;
}
   </style>
<body>
<div class="page-wrapper">

    </div>

<?php
      include_once('nav.php')
      ?>


<!-- copy code-->
<h2>dsds</h2>
<section class="messages containers mt-5">

   <!-- <h1 class="title"> User Messages </h1> -->

   <div class="box-container">
   <?php
      $sql = "SELECT * FROM `message` ";
   $res = mysqli_query($conn,$sql);
      if(mysqli_num_rows($res) > 0){
         while($fetch_message = mysqli_fetch_assoc($res)){
      
   ?>
   <div class="box container">
      <p> user id : <span><?php echo $fetch_message['user_id']; ?></span> </p>
      <p> name : <span><?php echo $fetch_message['name']; ?></span> </p>
      <p> email : <span><?php echo $fetch_message['email']; ?></span> </p>
      <p> message : <span><?php echo $fetch_message['feedback']; ?></span> </p>
      <button><a href="message.php?delete=<?php echo $fetch_message['user_id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete message</a>
      </button>
   </div>
   <?php
      };
   }else{
      echo '<p class="empty">you have no messages from users!</p>';
   }
   ?>
   </div>

</section>

<!-- code end -->

               
               
       
       

    <!-- Script Start -->
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/apexchart/apexcharts.min.js"></script>
    <script src="assets/js/apexchart/control-chart-apexcharts.js"></script>
	<!-- Page Specific -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>
      </body>
      </html>