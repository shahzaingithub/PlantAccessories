<?php

require('connection.php');

if(!isset($_GET['id'])){
    header("location:login.php");    
    }
    $id=$_GET['id'];






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

<body>
<div class="page-wrapper">

 

<?php
      include_once('nav.php')
      ?>


<div class="page-wrapper">
<div class="main-content">      
<div class="row">


                    <div class="col xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-title-wrapper">
                            <div class="page-title-box">
                                <h4 class="page-title">Products </h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.html"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Tabs </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="row">
					<div class="col-xl-12">
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>#</th>
                        <th>Name </th>
                        <th>Full Name</th>
                        <th>Email</th>
                       
                       
                      
                        <th colspan="2" align="center">Actions</th>
                      </tr>
                    </thead>


                    <tbody class="table-border-bottom-0">
          
         
                    <?php
          $quaery = mysqli_query($conn,"select * from users where Role = $id");
          $num = mysqli_num_rows($quaery);
       if($num >= 1) {
        while($row = mysqli_fetch_assoc($quaery)){
            ?> 
            <tr>
                <td>*</td>
                <td><?=$row['Username']?></td>
                <td><?=$row['FullName']?></td>
                <td><?=$row['Email']?></td>
                <td colspan="2"><a class="btn btn-danger" href="./functions/deleteuser.php?id=<?=$row['User_Id']?>&role=<?=$id?>">Delete</a> 
              
          
            </td>
            </tr>

            <?php
        }
            ?>

            <?php
       


       }



                    
               ?>  
                
                
                    </tbody>
                  </table>
                </div>
                </div>
                </div>
    </div>
    </div>
    </div>
      

    </div>
    </div>
    </div>

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