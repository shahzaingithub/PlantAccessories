<?php

require('connection.php');





if(isset($_POST['addcat'])){
    $newcat = mysqli_real_escape_string($conn,$_POST['Name']);
    
    $sql = "INSERT INTO `categories`(Name) VALUES ('$newcat')";
    $run = mysqli_query($conn,$sql);
    if($run){
        echo"<script>alert('product successfully added in the category');</script>";
    }
    else{
        echo"<script>alert('error while adding the category');</script>";
    }
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

<body>
	

    <div class="page-wrapper">

<?php
      include_once('nav.php')
      ?>

<div class="page-wrapper">
            <div class="main-content">
              <!-- Bootstrap Table with Header - Light -->
              <div class="card">
                <h5 class="card-header">Product Category's -              <button type="button"  class="btn btn-primary" data-bs-toggle="modal"
                          data-bs-target="#basicModal">Add Category</button>
                          
 </h5>
 <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Add Category</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <form  method="post">
                                    <label for="nameBasic" class="form-label">Category Name</label>
                                    <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" name="Name" required />
                                  </div>
                                </div>
                                <input name="addcat" class="btn btn-primary" type="submit"></input>

                                </div>
                              </div>
                              <div class="modal-footer">
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>#</th>
                        <th>Category Name</th>
                       
                      
                        <th colspan="2" align="center">Actions</th>
                      </tr>
                    </thead>


                    <tbody class="table-border-bottom-0">
          
         
                    <?php
          $quaery = mysqli_query($conn,'select * from categories');
          $num = mysqli_num_rows($quaery);
       if($num >= 1) {
        while($row = mysqli_fetch_assoc($quaery)){
            ?> 
            <tr>
                <td>*</td>
                <td><?=$row['Name']?></td>
                <td colspan="2"><button class="btn btn-info">Update</button>
               
                <a class="btn btn-danger" href="./functions/delete_category.php?id=<?=$row['Category_Id']?>">Delete</a> 
              
          
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
              <!-- Bootstrap Table with Header - Light -->
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