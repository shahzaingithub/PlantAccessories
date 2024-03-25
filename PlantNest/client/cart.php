<?php
include_once './functions/connection.php';
if(!isset($_SESSION['CAuserloggedin'])){
	header('location:index.php');
	}
    if(isset($_POST['update'])){
        $id = $_POST['id'];
            $newquantity = $_POST['quantity'];
            $updateq = "UPDATE  `temp_cart` SET p_quantity = $newquantity WHERE p_id = $id ";
            $runup = mysqli_query($conn,$updateq);
        if($runup){
          echo "<script> alert('Updated Successfully)</script>";
        }else{
            echo "<script> alert('Updated Not Successfully)</script>";
        }
        
        }
        

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lukani - cart page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="assets/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

</head>

<body>



<div class="off_canvars_overlay">

    </div>
<?php



include_once('nav.php');
?>

    <!--header area start-->

    <!--offcanvas menu area start-->
    

    <?php
// include_once './functions/connection.php';

// require('./functions/connection.php');
?>

   
    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-100">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_remove">Action</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      $grandtotal = 0;
                                                if(isset($_SESSION['CAuserloggedin'])){
                                                    $sid = $_SESSION['CUser_Id'];
                                                   
                                                    $query = mysqli_query($conn,"SELECT * FROM temp_cart where user_id = $sid");
                                                    $rows = mysqli_num_rows($query);
                                                    if($rows >= 1){
                                                       
                                                        while($row = mysqli_fetch_assoc($query)){

                                                  
?>
                                        <tr>
                                            <td class="product_remove"><a onclick="return confirm('remove item from cart?')" href="functions/cartdelete.php?id=<?=$row['p_id']?>"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="assets/img/s-product/product.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#"><?=$row['p_name']?></a></td>
                                            <td class="product-price">$<?=$row['p_price']?></td>
                                            <form method="post" action="cartupdate.php">
                                            <td class="product_quantity"><label>Quantity</label> 
                                            <input type="hidden" name="id" value="<?=$row['p_id']?>">
                                            <input min="1"
                                                    max="100" value="<?=$row['p_quantity']?>" name="quantity" type="number"></td>
                                                    <td>
                                                        <div class="cart_submit">
                                <button type="submit" name="update">update cart</button>
                             
                            </div>
                        </td>

                                            </form>
                                      
                                            <?php
                                            
								 $cid =$row['p_id'];
							$subtotal= $row['p_price'] * $row['p_quantity']; 
							$updatec = "UPDATE  `temp_cart` SET p_total = $subtotal WHERE p_id = $cid";
							$runup = mysqli_query($conn,$updatec);
						if($runup){
                            // echo"<script>
                            // alert('Updated Successfully');
                            // </script>";		
                        				}
						else{
                            // echo"<script>
                            // alert('Not Updated Successfully');
                            // </script>";	
						}
								?>

                                            <td class="product_total">$<?=$subtotal?></td>



                                            </tr>
 <?php
  $grandtotal += $subtotal;
                                                        }
                                                    }
                                               

                                                    ?>
                                                    <?php
                                                     if($rows == 0){?>
                                                     
                                                    <tr>
                                                        <td class="text-center" colspan="7">No Item in the cart</td>
                                                    </tr>
                                                    <?php
                                                }}
                                        
 ?>                                      

                                      

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                    
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount"><?=$grandtotal?></p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        <p class="cart_amount">0</p>
                                    </div>
                                   

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">$<?=$grandtotal?></p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="checkout.php">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
           
        </div>
    </div>
    <!--shopping cart area end -->

    <!--brand area start-->
    <div class="brand_area brand__three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand5.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand6.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->

    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container contact_us">
                            <h3>Opening Time</h3>
                            <p><span>Mon - Fri:</span> 8AM - 10PM</p>
                            <p><span>Sat:</span> 9AM-8PM</p>
                            <p><span>Suns:</span> 14hPM-18hPM</p>
                            <p><b>We Work All The Holidays</b></p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="widgets_container widget_app">
                            <div class="footer_logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <div class="footer_widgetnav_menu">
                                <ul>
                                    <li><a href="#">Payment</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Internet</a></li>
                                </ul>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="footer_app">
                                <ul>
                                    <li><a href="#"><img src="assets/img/icon/icon-app.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/icon/icon1-app.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>My Account</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="cart.html">Shopping cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Customer Service</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="contact.html">Site Map</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p class="copyright-text">&copy; 2021 <a href="index.html">Lukani</a>. Made with <i
                                    class="fa fa-heart text-danger"></i> by <a href="https://hasthemes.com/"
                                    target="_blank">HasThemes</a> </p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment">
                            <a href="#"><img src="assets/img/icon/payment.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <!-- JS
============================================ -->
    <!--jquery min js-->
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <!--popper min js-->
    <script src="assets/js/popper.js"></script>
    <!--bootstrap min js-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--owl carousel min js-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--slick min js-->
    <script src="assets/js/slick.min.js"></script>
    <!--magnific popup min js-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--counterup min js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--jquery countdown min js-->
    <script src="assets/js/jquery.countdown.js"></script>
    <!--jquery ui min js-->
    <script src="assets/js/jquery.ui.js"></script>
    <!--jquery elevatezoom min js-->
    <script src="assets/js/jquery.elevatezoom.js"></script>
    <!--isotope packaged min js-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--slinky menu js-->
    <script src="assets/js/slinky.menu.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>



</body>


<!-- Mirrored from htmldemo.net/lukani/lukani/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:18:40 GMT -->
</html>