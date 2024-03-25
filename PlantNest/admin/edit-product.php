
<?php

include('connection.php');

$id = $_GET['id'];
$cid = $_GET['cid'];
if(isset($_POST['update-data'])){
  $newname = mysqli_real_escape_string($conn,$_POST['Name']);
  $newprice = mysqli_real_escape_string($conn,$_POST['Price']);
  $newDescription = mysqli_real_escape_string($conn,$_POST['Description']);
  
  $newcategory = mysqli_real_escape_string($conn,$_POST['category']);
  
  $update_data = "UPDATE `products` SET `Name`='$newname',`Description`='$newDescription',`Price`='$newprice',`Category`='$newcategory' WHERE Plant_Id = $id";
    
  $upload = mysqli_query($conn, $update_data);
  if($upload)
  {
      
      header("Location:product.php?id=$newcategory");
      
  }
  else
  {
      
      header("Location:product.php?id=$newcategory");
     
  }
}
 


          
  //  $update2 = "UPDATE `product_info` SET price = $newprice WHERE p_id = $id ";
  // if(!$conn->multi_query($update)){
    
  //   echo "error".mysqli_error();
  // }
  // else{
      // echo "<script>alert('update done');</script>";
// header('location:../Admin/html/manageproducts.php');
//   }




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
              <form  method="post" enctype="multipart/form-data">
             
                                <div class="row g-2">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Product-Name</label>
                                    <input
                                      type="text"
                                      id="nameWithTitle"
                                      class="form-control"
                                      placeholder="Enter Name"
                                  
                                      name="Name"
                                    
                                      />
                                  </div>
                                 
                                 
                                  
                                </div>
                                <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Product Price</label>
                                    <input
                                      type="number"
                                      id="nameWithTitle"
                                      class="form-control"
                                      placeholder="Enter Price"
                                      name="Price"
                                     
                                      min="40"
                                      max="400000"
                                      required
                                    />
                                  </div>
                                </div>
                               <div class="row g-2">
                               <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Product Image</label>
                                    <input
                                      type="file"
                                      id="nameWithTitle"
                                      class="form-control"
                                      placeholder="CHOOSE PHOTO"
                                      name="pimage"
                                      required
                                    />
                                  
                                  </div>
                                  
                                  <div class="col mb-0">


                                  
                                    <label for="emailWithTitle" class="form-label">Category</label>
                                  <select name="category" class="form-control" placeholder="category" style="border:1px solid black">
                          <?php       $quaery = mysqli_query($conn,'select * from categories');
          $num = mysqli_num_rows($quaery);
       if($num >= 1) {
        while($row = mysqli_fetch_assoc($quaery)){
            ?>
            <option value="<?=$row['Category_Id']?>"><?=$row['Name']?></option>
            <?php
        }}
            ?>
                                  </select>
                                  </div>
                               </div>
                             
                                
                                <div class="row-g-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Product Description</label>
                                 <textarea style="border:1px solid black" placeholder="Product" name="Description"   cols="30" rows="10" min=200 required class="form-control"></textarea>
                                  </div>
                                </div>
                              
                              </div>
                              <div class="modal-footer">
                             
                                
                               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="update-data" class="btn btn-primary">Add Product</button>
        </form>
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