<?php
require('connection.php');
$id = $_GET['oid'];
$custid = $_GET['cid'];
$time =$_GET['ordertime'];
if($id=='' || $time==''){
    header("location:orders.php");
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->


<!-- Mirrored from kamleshyadav.com/html/splashdash/html/b5/light/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:21:18 GMT -->
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

    <!-- Main Body -->
    <div class="page-wrapper">
    <?php
      include_once('nav.php');
    ?>
     
        <div class="page-wrapper">
            <div class="main-content">
                <!-- Page Title Start -->
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-title-wrapper">
                            <div class="page-title-box">
                                <h4 class="page-title">Order Info</h4>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <!-- Table Start -->
                <div class="row">
                    <div class="col-lg-12">
						<div class="card">
							<div class="card-body">
                                <?php
                                $query = mysqli_query($conn,"SELECT * FROM order_info WHERE o_id = $id");
                            
                                    $data = mysqli_fetch_assoc($query);
                                    ?>
<div class="ad-invoice-title">
									<h4>Order - <?=$data['o_id']?></h4>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-6">
										<h5 class="mb-2">Billed To:</h5>
										<p><?=$data['name']?></p>
										<p><?=$data['city']?></p>
										<p><?=$data['country']?></p>
										<p><?=$data['address']?></p>
									</div>
									
								</div>
                                <div class="row">
									<div class="col-sm-6 mt-3">
										<h5 class="mb-2">Payment Method:</h5>
										<p>COD</p>
										
									</div>
									<div class="col-sm-6 mt-3 text-sm-end">
										<h5 class="mb-2">Order Date:</h5>
										<p><?=$data['order_time']?></p>
									</div>
								</div>
                             
								
								
								<div class="py-2 mt-3 mb-2">
									<h4 class="font-size-15">Order Summary</h4>
								</div>
								<div class="table-responsive">
									<table class="table table-styled mb-0">
										<thead>
											<tr>
												<th style="width: 70px;">No.</th>
												<th>Item</th>
												<th class="text-end">Price</th>
											</tr>
										</thead>
										<tbody>
                                            <?php
                                            $sid = $_GET['oid'];
										
$custid = $_GET['cid'];
$time =$_GET['ordertime'];
                                            $count =0;
                                            $sql =mysqli_query($conn,"SELECT * FROM orders_cart where customer_id = $custid AND ordertime = '$time'");
                                            $row = mysqli_num_rows($sql);
                                            if($row >= 1){
                                                while($dt=mysqli_fetch_assoc($sql)){

                                                
                                                ?>
	<tr>
												<td><?=$dt['p_name']?></td>
												<td>$<?=$dt['p_price']?>(Qty:<?=$dt['p_quantity']?>)</td>
												<td class="text-end">$<?=$dt['p_total']?></td>
											</tr>
											
                                                <?php
                                            }
                                        }
                                            ?>
										
										

											<tr>
												<td colspan="2" class="text-end">Sub Total</td>
												<td class="text-end">$<?=$data['bill_total']?></td>
											</tr>
											<tr>
												<td colspan="2" class="text-end">
													<strong>Shipping</strong></td>
												<td class=" text-end">$0</td>
											</tr>
											<tr>
												<td colspan="2" class="text-end">
													<strong>Total</strong></td>
												<td class=" text-end"><h4 class="m-0">$<?=$data['bill_total']?></h4></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="d-print-none mt-2">
									<div class="float-end">
										<a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
										<a href="javascript:;" class="btn btn-primary w-md waves-effect waves-light">Send</a>
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


<!-- Mirrored from kamleshyadav.com/html/splashdash/html/b5/light/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:21:18 GMT -->
</html>