
<?php
// include_once './functions/connection.php';

// require('./functions/connection.php');
if(isset($_POST['search'])){
    $cat = $_POST['cat'];
    $query = $_POST['query'];
    header("location:search.php?query=$query&cat=$cat");
}
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
                            <form method="POST">
                                <div class="hover_category">
                                <select class="select_option"name="cat" id="categori1">
                                               <option value="0" selected>All Category</option>
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
                                    <input placeholder="Search product..." name="query" type="text">
                                    <button type="submit"  name="search"><i class="icon-search"></i></button>
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
                                <a href="index.php"><img src="assets/img/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-6">
                            <div class="header_right_info">
                                <div class="search_container">
                                    <form method="post">
                                        <div class="hover_category">
                                            <select class="select_option" name="cat" >
                                               <option value="0" selected>All Category</option>
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
                                            <input placeholder="Search product..." type="text" name="query">
                                            <button type="submit" name="search"><i class="icon-search"></i></button>
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
                                            }else{
?>
                                             <?php
                                           
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
                                                
                                                 }elseif(!isset($_SESSION['CAuserloggedin'])){
                                                    ?>
                                                    0
                                                    <?php
                                                 }
                                                ?>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <class="cart_gallery">
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
                                                }elseif(!isset($_SESSION['CAuserloggedin'])){
                                                    ?>
                                                  
                                                <p class="text-center">No Item Added</p>
                                                    <?php
                                                }
                                                
                                                ?>
                                              
                                              
                                            <?php
                                               if(isset($_SESSION['CAuserloggedin'])){
                                            $sid = $_SESSION['CUser_Id'];
                                            $select_total = "SELECT SUM(p_total)
                                            AS value_sum FROM temp_cart where user_id = $sid
                                            ";
                                            $runtotal = mysqli_query($conn,$select_total);
                                            $total = mysqli_fetch_assoc($runtotal);
                                            $rt = $total['value_sum'];?>

                                          
                                            <div class="mini_cart_table">
                                                <div class="cart_table_border">
                                                    <div class="cart_total">
                                                        <span>Sub total:</span>
                                                        <span class="price">$<?=$rt?></span>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <?php  }
                                            ?>
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