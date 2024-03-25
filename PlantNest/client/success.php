<?php
include('./functions/connection.php');

?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/lukani/lukani/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:18:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lukani - 404</title>
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

    <!--header area start-->

    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>

    <?php
// include_once './functions/connection.php';

// require('./functions/connection.php');
?>
<div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="icon-x"></i></a>
                        </div>
                        <div class="welcome-text">
                            <p>Free Delivery: Take advantage of our time to save event</p>
                        </div>
                    
                        <div class="search_container">
                            <form action="#">
                                <div class="hover_category">
                                <select class="select_option" name="select" id="categori1">
                                               <option value="" selected>All Category</option>
                                                <?php
                                        $cat = mysqli_query($conn,"SELECT * FROM categories");
                                        $row = mysqli_num_rows($cat);
                                        if($row >=1){
                                            while($ct=mysqli_fetch_assoc($cat)){

                                            
                                            ?>
    <option  value="<?=$ct['Category_Id']?>"><?=$ct['Name']?></option>
                                               
                                    
                                     
                                            <?php
                                        }
                                    }
                                        ?>
                                               
                                </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="call-support">
                            <p>Call Support: <a href="tel:0123456789">0123456789</a></p>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                    <a href="index.php">Home</a>
                                </li> <li class="menu-item-has-children">
                                    <a href="shop.php">Shop</a>
                                </li> <li class="menu-item-has-children">
                                    <a href="contact.php"> Contact Us</a>
                                </li>
                               
                            </ul>
                        </div>

                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> demo@example.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    <header>
        <div class="main_header">
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7">
                            <div class="welcome-text">
                                <p>Free Delivery: Take advantage of our time to save event</p>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-4">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-6">
                            <div class="header_right_info">
                                <div class="search_container">
                                    <form action="#">
                                        <div class="hover_category">
                                            <select class="select_option" name="select" id="categori1">
                                               <option value="" selected>All Category</option>
                                                <?php
                                        $cat = mysqli_query($conn,"SELECT * FROM categories");
                                        $row = mysqli_num_rows($cat);
                                        if($row >=1){
                                            while($ct=mysqli_fetch_assoc($cat)){

                                            
                                            ?>
    <option  value="<?=$ct['Category_Id']?>"><?=$ct['Name']?></option>
                                               
                                    
                                     
                                            <?php
                                        }
                                    }
                                        ?>
                                               
                                            </select>
                                        </div>
                                        <div class="search_box">
                                            <input placeholder="Search product..." type="text">
                                            <button type="submit"><i class="icon-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="header_account_area">
                                    <div class="header_account-list top_links">
                                        <a href="#"><i class="icon-users"></i></a>
                                        <ul class="dropdown_links">
                                           
                                            <?php
                                            if(isset($_SESSION['CAuserloggedin'])){
                                                ?>
                                                <li><a href="my-account.php"><?=$_SESSION['CUsername']?></a></li>
                                                <li><a href="cart.php">Shopping Cart</a></li>
                                            <li><a href="logout.php">Logout</a></li>
                                                <?php
                                            }

                                            ?>
                                             <?php
                                            if(!isset($_SESSION['CAuserloggedin'])){
                                                ?>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="signup.php">Sign up</a></li>
                                                <?php
                                            }

                                            ?>
                                           
                                        </ul>
                                    </div>
                                  
                                    <div class="header_account-list  mini_cart_wrapper">
                                        <a href="javascript:void(0)"><i class="icon-shopping-bag"></i><span
                                                class="item_count"><?php
                                                 if(isset($_SESSION['CAuserloggedin'])){
                                                    $sid = $_SESSION['CUser_Id'];

                                                $query = mysqli_query($conn,"SELECT * FROM temp_cart where user_id = $sid");
                                                $rows = mysqli_num_rows($query);
                                                ?><?=$rows?></span></a>
                                                <?php
                                                
                                                 }else{
                                                    ?>
                                                    0
                                                    <?php
                                                 }
                                                ?>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_gallery">
                                                <div class="cart_close">
                                                    <div class="cart_text">
                                                        <h3>cart</h3>
                                                    </div>
                                                    <div class="mini_cart_close">
                                                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                                <?php
                                                if(isset($_SESSION['CAuserloggedin'])){
                                                    $sid = $_SESSION['CUser_Id'];
                                                    $query = mysqli_query($conn,"SELECT * FROM temp_cart where user_id = $sid");
                                                    $rows = mysqli_num_rows($query);
                                                    if($rows >= 1){
                                                        while($row = mysqli_fetch_assoc($query)){

                                                      
?>

<div class="cart_item">
                                                    <div class="cart_img">
                                                        <a href="#"><img src="assets/img/s-product/product.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="cart_info">
                                                        <a href="#"><?=$row['p_name']?></a>
                                                        <p><?=$row['p_quantity']?>x <span> $<?=$row['p_total']?>(<?=$row['p_price']?>)</span></p>
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
<?php
                                                    }  }
                                                }else{
                                                    ?>
                                                  
                                                <p class="text-center">No Item Added</p>
                                                    <?php
                                                }
                                                
                                                ?>
                                              
                                              
                                            </div>
                                            <?php
                                            $sid = $_SESSION['CUser_Id'];
                                            $select_total = "SELECT SUM(p_total)
                                            AS value_sum FROM temp_cart where user_id = $sid
                                            ";
                                            $runtotal = mysqli_query($conn,$select_total);
                                            $total = mysqli_fetch_assoc($runtotal);
                                            $rt = $total['value_sum'];
                                            ?>
                                            <div class="mini_cart_table">
                                                <div class="cart_table_border">
                                                    <div class="cart_total">
                                                        <span>Sub total:</span>
                                                        <span class="price">$<?=$rt?></span>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                                <div class="cart_button">
                                                    <a href="cart.php"><i class="fa fa-shopping-cart"></i> View
                                                        cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a class="active" href="checkout.php"><i class="fa fa-sign-in"></i>
                                                        Checkout</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="categories_menu">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">Categories</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                        <?php
                                        $cat = mysqli_query($conn,"SELECT * FROM categories");
                                        $row = mysqli_num_rows($cat);
                                        if($row >=1){
                                            while($ct=mysqli_fetch_assoc($cat)){

                                            
                                            ?>
   <li class="menu_item_children"><a href="category.php?categoryid=<?=$ct['Category_Id']?>"><?=$ct['Name']?></a>

                                                </li>
                                               
                                    
                                     
                                            <?php
                                        }
                                    }
                                        ?>
                                     
                                       
                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--main menu start-->
                            <div class="main_menu menu_position">
                                <nav>
                                    <ul>
                                        <li><a href="index.php">home</a>   
                                        </li>
                                        <li><a href="shop.php">Shop</a>   
                                        </li>
                                       
                                        <li><a href="#">Category<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                            <?php
                                        $cat = mysqli_query($conn,"SELECT * FROM categories");
                                        $row = mysqli_num_rows($cat);
                                        if($row >=1){
                                            while($ct=mysqli_fetch_assoc($cat)){

                                            
                                            ?>
   <li ><a href="category.php?categoryid=<?=$ct['Category_Id']?>"><?=$ct['Name']?></a>

                                                </li>
                                               
                                    
                                     
                                            <?php
                                        }
                                    }
                                        ?> 
                                                
                                                <!-- <li><a href="blog-sidebar.html">blog sidebar</a></li> -->
                                            </ul>
                                        </li>
                                       
                                        <li><a href="contact.php"> Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--main menu end-->
                        </div>
                        <div class="col-lg-3">
                            <div class="call-support">
                                <p>Call Support: <a href="tel:0123456789">0123456789</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->
    <!--header area end-->

    <!--error section area start-->
    <div class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>Order Placed!!!!</h1>
                        <h2>Your Order Has Been Placed!</h2>
                        <p>Sorry but the page you are looking for does not exist, have been<br> removed, name changed or
                            is temporarily unavailable.</p>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--error section area end-->

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
                                <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
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


<!-- Mirrored from htmldemo.net/lukani/lukani/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:18:40 GMT -->
</html>