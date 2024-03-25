<?php
include('./functions/connection.php');
$user = $_SESSION['CUser_Id'];
$select_cart = mysqli_query($conn, "SELECT * FROM temp_cart where user_id = $user ");
$cart_rows= mysqli_num_rows($select_cart);
if($cart_rows == 0){
	header('location:index.php');
}
if(isset($_POST['checkout'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $country = mysqli_real_escape_string($conn,$_POST['country']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $postal = mysqli_real_escape_string($conn,$_POST['postal']);
    $status= 1;
    $select_total = "SELECT SUM(p_total)
    AS value_sum FROM temp_cart where user_id = $user";
    $runtotal = mysqli_query($conn,$select_total);
    $total = mysqli_fetch_assoc($runtotal);
    $rt = $total['value_sum'];
    $Total =$rt+10;
    $custid = $_SESSION['CUser_Id'];
    $add = mysqli_query($conn,"INSERT INTO order_info(`customer_id`,`name`,`email`,`country`,`city`, `address`, `postal_code`, `bill_total`, `status`) VALUES($custid,'$name','$email','$country','$city','$address','$postal',$Total,$status)");
    if($add){
        $ordered_cart_query = "INSERT INTO orders_cart (customer_id,p_id, p_name, p_price, p_quantity,p_total) SELECT user_id,p_id,p_name, p_price,p_quantity, p_total FROM temp_cart where user_id = $user";
		$order_query = mysqli_query($conn,$ordered_cart_query);

        if($order_query){
            $refresh_cart = "DELETE FROM temp_cart where user_id =$user";

            $refresh_CRT = mysqli_query($conn,$refresh_cart);
            if($refresh_CRT){
                header('location:success.php');
            }else{
                echo "<script>alert('error by checkout');</script>";
    
            }
        }else{
            echo "<script>alert('error by order cart');</script>";

        }
       
    }else{
        echo "<script>alert('error by checkout');</script>";

    }

}


?>
<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lukani - checkout page</title>
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

   

    <?php
// include_once './functions/connection.php';

// require('./functions/connection.php');
?>

<?php
$sid = $_SESSION['CUser_Id'];
									$select_total = "SELECT SUM(p_total)
									AS value_sum FROM temp_cart where user_id = $sid
									";
									$runtotal = mysqli_query($conn,$select_total);
									$total = mysqli_fetch_assoc($runtotal);
									$rt = $total['value_sum'];
									$Total =$rt+10  ;
									?>

    <!--contact area start-->
    <div class="contact_area mt-3">
        <div class="container">
            <div class="row">
             
                <div class="col-lg-12 col-md-12">
                    <div class="contact_message form">
                        <h3 class="text-center">Checkout-<button class="btn btn-info">Cart Total : $<?=$Total?></button> </h3> 
                        <form  method="post" action="checkout.php">
                            <p>
                                <label> Name (required)</label>
                                <input name="name" value="<?= $_SESSION['CFullName']?>"  type="text" required>
                            </p>
                            <p>
                                <label>Email (required)</label>
                                <input name="email" value="<?= $_SESSION['CEmail']?>"  type="email" required>
                            </p>
                            <p>
                                <label>Country</label>
                                <input name="country" value="pak" type="text" required>
                            </p>
                            <p>
                                <label>City</label>
                                <input name="city" value="khi"  type="text" required>
                            </p>
                            <p>
                                <label>Address</label>
                                <input name="address" value="u9878ygushd"  type="text" required>
                            </p>
                            <p>
                                <label>Postal Code</label>
                                <input name="postal" value="678"  type="text" required>
                            </p>
                           
                           
                            <button type="submit" name="checkout">Checkout</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--contact area end-->

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

    <!--map js code here-->
    <script
        src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="assets/js/map.js"></script>

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


<!-- Mirrored from htmldemo.net/lukani/lukani/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:18:49 GMT -->
</html>