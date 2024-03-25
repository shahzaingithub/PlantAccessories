<?php
require('connection.php');
?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->


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
	<div class="loader">
	  <div class="spinner">
		<img src="assets/images/loader.gif" alt=""/>
	  </div> 
	</div>
    <!-- Main Body -->
    <div class="page-wrapper">
    <?php
      include_once('nav.php');
    ?>
        
        <!-- Container Start -->
        <div class="page-wrapper">
            <div class="main-content">
                <!-- Page Title Start -->
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-title-wrapper">
                            <div class="page-title-box ad-title-box-use">
                                <h4 class="page-title">Orders</h4>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <!-- Table Start -->
                <div class="row">
                    <!-- Styled Table Card-->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card table-card">
                            <div class="card-header pb-0">
                                <h4>All Orders </h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div class="table-responsive">
                                        <table class="table table-styled mb-0">
                                            <thead>
                                                <tr>
                                                    <th>
														<div class="checkbox">
															<input id="checkbox1" type="checkbox">
															<label for="checkbox1"></label>
														</div>
													</th>
                                                    <th>Order ID</th>
                                                    <th>Billing Name</th>
                                                    <th>Date</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Payment Method</th>
													<th>View Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = mysqli_query($conn,"SELECT * FROM order_info");
                                                $row = mysqli_num_rows($sql);
                                                if($row >=1){
                                                   while($data = mysqli_fetch_assoc($sql)){
                                                    ?>
  <tr>
                                                    <td>
														<div class="checkbox">
															<input id="checkbox2" type="checkbox">
															<label for="checkbox2"></label>
														</div>
													</td>
                                                    <td>#Jh<?=$data['o_id']?></td>
                                                    <td>
                                                        <span class="img-thumb ">
                                                            <img src="assets/images/table/1.jpg" alt=" ">
                                                            <span class="ml-2 "><?=$data['name']?></span>
                                                        </span>
                                                    </td>
                                                    <td><?=$data['order_time']?></td>
                                                    <td>$<?=$data['bill_total']?></td>
                                                    <?php
                                                    if($data['status'] == 1){
                                                        ?>
<td>
                                                        <label class="mb-0 badge badge-dark" title="" data-original-title="Pending">Order Placed</label>
                                                    </td>
                                                        <?php
                                                    }
                                                    ?>
                                                      <?php
                                                    if($data['status'] == 2){
                                                        ?>
<td>
                                                        <label class="mb-0 badge badge-secondary" title="" data-original-title="Pending">Shipped </label>
                                                    </td>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if($data['status'] == 3){
                                                        ?>
<td>
                                                        <label class="mb-0 badge badge-success" title="" data-original-title="Pending">Deliverd</label>
                                                    </td>
                                                        <?php
                                                    }
                                                    ?>
													
                                                    <td>
                                                        <span class="img-thumb">
                                                            <i class="fab fa-cc-paypal"></i>
                                                            <span class="ml-2">COD</span>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="insideorder.php?oid=<?=$data['o_id']?>&ordertime=<?=$data['order_time']?>&cid=<?=$data['customer_id']?>">
                                                        <label class="mb-0 badge badge-primary" title="" data-original-title="Pending">View Detail</label>

                                                        </a>
														
													</td>
                                                   
                                                </tr>
                                                    <?php
                                                }
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

				<div class="ad-footer-btm">
					<p>Copyright 2022 © SplashDash All Rights Reserved.</p>
				</div>    
			</div>    
		</div>    
	</div>    
   <!-- Preview Setting Box -->
	<div class="slide-setting-box">
        <div class="slide-setting-holder">
            <div class="setting-box-head">
                <h4>Dashboard Demo</h4>
                <a href="javascript:void(0);" class="close-btn">Close</a>
            </div>
            <div class="setting-box-body">
				<div class="sd-light-vs"> 
					<a href="index.html">
						Light Version
						<img src="assets/images/light.png" alt=""/>
					</a>
				</div>
				<div class="sd-light-vs"> 
					<a href="https://kamleshyadav.com/html/splashdash/html/b5/splashdash-admin-template-dark/index.html">
						dark Version
						<img src="assets/images/dark.png" alt=""/>
					</a>
				</div>
            </div>
			<div class="sd-color-op">
				<h5>color option</h5> 
				<div id="style-switcher">
					<div>
						<ul class="colors">
							<li>
								<p class='colorchange' id='color'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color2'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color3'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color4'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color5'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='style'>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- Preview Setting -->
	
    <!-- Script Start -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from kamleshyadav.com/html/splashdash/html/b5/light/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:21:02 GMT -->
</html>