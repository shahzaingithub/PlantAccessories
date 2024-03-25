<?php


// include_once './functions/connection.php';
require('./functions/connection.php');



?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/lukani/lukani/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:18:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lukani – Plant and Flower Shop eCommerce HTML Template </title>
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

 <!--offcanvas menu area start-->
 <div class="off_canvars_overlay">

</div>
<?php

include_once('nav.php');
?>
    <!--header area start-->

   
 
    <!--slider area start-->
    <section class="slider_section mb-30">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>Lovely Plants </h1>
                                <p>Discount <span>20% Off </span> For Lukani Members </p>
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>BIG SALE</h1>
                                <p>Discount <span>20% Off </span> For Lukani Members </p>
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1>TOP SALE</h1>
                                <p>Discount <span>20% Off </span> For Lukani Members </p>
                                <a class="button" href="shop.html">Discover Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--banner area start-->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner1.jpg" alt=""></a>
                            <div class="banner_content">
                                <h3>Big Sale Products</h3>
                                <h2>Plants <br> For Interior</h2>
                                <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner2.jpg" alt=""></a>
                            <div class="banner_content">
                                <h3>Top Products</h3>
                                <h2>Plants <br> For Healthy</h2>
                                <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <div class="product_area  mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                            <h2>Our Products</h2>
                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#plant1" role="tab" aria-controls="plant1"
                                        aria-selected="true">
                                        Plant Stands & Movers
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#plant2" role="tab" aria-controls="plant2"
                                        aria-selected="false">
                                        Plant families
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#plant3" role="tab" aria-controls="plant3"
                                        aria-selected="false">
                                        Outdoor Plant Pots
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product1.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-7%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">commodo augue
                                                        nisi</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">eget
                                                        sagittis</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product3.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">fringilla
                                                        augue</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£68.00</span>
                                                    <span class="old_price">£75.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-5%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">massa massa</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£75.00</span>
                                                    <span class="old_price">£80.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">placerat
                                                        vestibulum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">Porro Cook</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£62.00</span>
                                                    <span class="old_price">£68.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product7.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-4%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">sapien
                                                        libero</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">vulputate
                                                        rutrum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£64.00</span>
                                                    <span class="old_price">£72.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product9.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">adipiscing
                                                        cursus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£60.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">Donec eu
                                                        cook</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£67.00</span>
                                                    <span class="old_price">£77.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="plant2" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product7.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-4%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">sapien
                                                        libero</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">vulputate
                                                        rutrum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£64.00</span>
                                                    <span class="old_price">£72.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product9.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">adipiscing
                                                        cursus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£60.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">Donec eu
                                                        cook</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£67.00</span>
                                                    <span class="old_price">£77.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product1.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-7%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">commodo augue
                                                        nisi</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">eget
                                                        sagittis</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product3.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">fringilla
                                                        augue</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£68.00</span>
                                                    <span class="old_price">£75.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-5%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">massa massa</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£75.00</span>
                                                    <span class="old_price">£80.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">placerat
                                                        vestibulum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">Porro Cook</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£62.00</span>
                                                    <span class="old_price">£68.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="plant3" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product3.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">fringilla
                                                        augue</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£68.00</span>
                                                    <span class="old_price">£75.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-5%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">massa massa</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£75.00</span>
                                                    <span class="old_price">£80.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">placerat
                                                        vestibulum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">Porro Cook</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£62.00</span>
                                                    <span class="old_price">£68.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product7.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-4%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">sapien
                                                        libero</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-6%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">vulputate
                                                        rutrum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£64.00</span>
                                                    <span class="old_price">£72.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product1.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-7%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">commodo augue
                                                        nisi</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£69.00</span>
                                                    <span class="old_price">£74.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">eget
                                                        sagittis</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£65.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product9.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-8%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">adipiscing
                                                        cursus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£60.00</span>
                                                    <span class="old_price">£70.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img
                                                        src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-9%</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html"
                                                                title="Add to cart"><i
                                                                    class="icon-shopping-bag"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name"><a href="product-details.html">Donec eu
                                                        cook</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">£67.00</span>
                                                    <span class="old_price">£77.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--banner fullwidth area-->
    <div class="banner_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_fullwidth_content">
                        <h3>Amazing From Lukani</h3>
                        <h2>Plants The <br> Perfect Choice!</h2>
                        <p>Discount 20% Off For Lukani Members</p>
                        <a href="#">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner fullwidth end-->

    <!--testimonial area start-->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>What Our Customers Says ?</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial_container">
                <div class="row">
                    <div class="testimonial_carousel owl-carousel">
                        <div class="col-12">
                            <div class="single-testimonial">
                                <div class="testimonial-icon-img">
                                    <img src="assets/img/about/testimonials-icon.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                        it truly is an artwork. I love how my website operates and looks with this
                                        theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img src="assets/img/about/testimonial1.png" alt=""></a>
                                    </div>
                                    <div class="testimonial_author">
                                        <p><a href="#">Rebecka Filson</a> / <span>CEO of CSC</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-testimonial">
                                <div class="testimonial-icon-img">
                                    <img src="assets/img/about/testimonials-icon.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                        it truly is an artwork. I love how my website operates and looks with this
                                        theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img src="assets/img/about/testimonial2.png" alt=""></a>
                                    </div>
                                    <div class="testimonial_author">
                                        <p><a href="#">Amber Laha</a> / <span>CEO of DND</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-testimonial">
                                <div class="testimonial-icon-img">
                                    <img src="assets/img/about/testimonials-icon.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>“ When a beautiful design is combined with powerful technology, <br>
                                        it truly is an artwork. I love how my website operates and looks with this
                                        theme. Thank you for the awesome product. ”</p>
                                    <div class="testimonial_text_img">
                                        <a href="#"><img src="assets/img/about/testimonial3.png" alt=""></a>
                                    </div>
                                    <div class="testimonial_author">
                                        <p><a href="#">Lindsy Neloms</a> / <span>CEO of SFD</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonial area end-->

    <!--product area start-->
    <div class="product_area product_deals product_deals5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Today Deals</h2>
                    </div>
                </div>
            </div>
            <div class="product_deals_container">
                <div class="row">
                    <div class="product_carousel product_column5 owl-carousel">
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="assets/img/product/product1.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-7%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">commodo augue nisi</a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price">£69.00</span>
                                            <span class="old_price">£74.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="assets/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-9%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">eget sagittis</a></h4>
                                        <div class="price_box">
                                            <span class="current_price">£65.00</span>
                                            <span class="old_price">£70.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="assets/img/product/product3.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-6%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">fringilla augue</a></h4>
                                        <div class="price_box">
                                            <span class="current_price">£68.00</span>
                                            <span class="old_price">£75.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="assets/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-5%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">massa massa</a></h4>
                                        <div class="price_box">
                                            <span class="current_price">£75.00</span>
                                            <span class="old_price">£80.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>

                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="assets/img/product/product5.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-8%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">placerat vestibulum</a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price">£65.00</span>
                                            <span class="old_price">£70.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="assets/img/product/product6.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-9%</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/12/15"></div>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">Porro Cook</a></h4>
                                        <div class="price_box">
                                            <span class="current_price">£62.00</span>
                                            <span class="old_price">£68.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

  

    <!--newsletter area start-->
    <div class="newsletter_area_start">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Get <span>20% Off</span> Your Next Order</h2>
                    </div>
                    <div class="newsletter_container">
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-newsletter">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email" />
                                <button id="mc-submit">Subscribe</button>
                                <div class="email_icon">
                                    <i class="icon-mail"></i>
                                </div>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--newsletter area end-->

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

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="assets/img/product/product3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab"
                                                    aria-controls="tab4" aria-selected="false"><img
                                                        src="assets/img/product/product8.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->

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


<!-- Mirrored from htmldemo.net/lukani/lukani/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:18:38 GMT -->
</html>