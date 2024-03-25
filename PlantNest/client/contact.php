<?php

include_once('./functions/connection.php');
if(!isset($_SESSION['CAuserloggedin'])){
    header('location:index.php');
}
if(isset($_POST['feedback'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']) ;
    $email = mysqli_real_escape_string($conn,$_POST['email']);
  $sid= $_SESSION['CUser_Id'];

 $message = mysqli_real_escape_string($conn,$_POST['message']);



 

    $addquery ="INSERT INTO `message`(`user_id`,`name`, `email`, `feedback`) VALUES (NUll,'$name','$email','$message')";
    $Runquery = mysqli_query($conn,$addquery);
    if($Runquery){
    echo "<script>alert('Your Feedback is send')</script>";
    // header('location:login.php');   

    }
    else
     {

        echo "<script>alert('Your Feedback is not send')</script>";
    }
}
 

 









?>


<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lukani - contact page</title>
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
 include_once('nav.php');
 ?>

    <!--contact map start-->
    <!-- <div class="contact_map mt-100">
        <div class="map-area">
            <div id="googleMap"></div>
        </div>
    </div> -->
    <!--contact map end-->

    <!--contact area start-->
    <div class="contact_area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message content">
                        <h3>contact us</h3>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                            est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
                            formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                            <li><i class="fa fa-phone"></i> <a href="#">demo@example.com</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="tel:0123456789">0123456789</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message form">
                        <h3>Tell us your project</h3>
                        <form id="" method="POST" action="">
                            <p>
                                <label> Your Name (required)</label>
                                <input name="name" placeholder="Name *" type="text">
                            </p>
                            <p>
                                <label> Your Email (required)</label>
                                <input name="email" placeholder="Email *" type="email">
                            </p>
                           
                            <div class="contact_textarea">
                                <label> Your Message</label>
                                <textarea placeholder="Message *" name="message" class="form-control2"></textarea>
                            </div>
                            <button type="submit" name ="feedback"> feedback</button>
                            <p class="form-messege"></p>
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
<?php
    include('footer.php')

    ?>



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