<?php


if(!isset($_SESSION['Auserloggedin'])){
  header('location:login.php');
}






if(isset($_POST['addpro'])){
    $newpro = mysqli_real_escape_string($conn,$_POST['Name']);
    $des = mysqli_real_escape_string($conn,$_POST['Description']);
    $price = mysqli_real_escape_string($conn,$_POST['price']);
    $image_name=$_FILES['pimage']['name'];
    $image_tmp=$_FILES['pimage']['tmp_name'];
    $category = mysqli_real_escape_string($conn,$_POST['category']);

    // print_r($_POST);
    // die;

    $upload = move_uploaded_file($image_tmp,"assets/images/product_img/".$image_name);
    if($upload){
     echo "<script>alert('Image Uploaded');</script>";
 }
 else{
     echo "Error while Uploading";
 }
    

    
    $sql = "INSERT INTO `products`( `Name`, `Description`, `Price`, `Image_Url`, `Category`) VALUES ('$newpro',' $des','$price','$image_name',
    $category)";



    $run = mysqli_query($conn,$sql);
    if($run){
        echo"<script>alert('product successfully added in the category');</script>";
    }
    else{
        echo"<script>alert('error while adding the category');</script>";
    }
}




?>

<style>

    .color-change{
        color:white
    }
.color-change:hover{
    color:#79a206 !important

}
.icons-color{

    color:!important;
}
.icons-color:hover{
    color:#79a206 !important
}
</style>
    


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Products</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  method="post" enctype="multipart/form-data">
                                <div class="row g-2">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Product Name</label>
                                    <input
                                      type="text"
                                      id="nameWithTitle"
                                      class="form-control"
                                      placeholder="Enter Name"
                                      name="Name"
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
                             
                                <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Product Price</label>
                                    <input
                                      type="number"
                                      id="nameWithTitle"
                                      class="form-control"
                                      placeholder="Enter Price"
                                      name="price"
                                      min="40"
                                      max="400000"
                                      required
                                    />
                                  </div>
                                </div>
                                <div class="row-g-2">
                                <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Product Description</label>
                                 <textarea style="border:1px solid black" placeholder="Product" name="Description" id="" cols="30" rows="10" min=200 required class="form-control"></textarea>
                                  </div>
                                </div>
                              
                              </div>
                              <div class="modal-footer">
                              
                                
                               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="addpro" class="btn btn-primary" style="background-color:#79a206 !important">Add Product</button>
        </form>
      </div>
    </div>
  </div>
</div>


<header class="header-wrapper main-header">
            <div class="header-inner-wrapper">
                <div class="header-right">
                    <div class="serch-wrapper">
                        <form>
                            <input type="text" placeholder="Search Here...">
                        </form>
                        <a class="search-close" href="javascript:void(0);"><span class="icofont-close-line"></span></a>
                    </div>
                    <div class="header-left">
                        <div class="header-links">
                            <a href="javascript:void(0);" class="toggle-btn">
                                <span></span>
                            </a>
                        </div>
                        <div class="header-links search-link">
                            <a class="search-toggle" href="javascript:void(0);">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
                                    s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
                                    c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
                                    s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                        
									
                        <div class="user-info-wrapper header-links" >
                            <a href="javascript:void(0);" class="user-info">
                                <img src="assets/images/user.jpg" alt="" class="user-img">
                                <div class="blink-animation" >
                                    <span class="blink-circle"></span>
                                    <span class="main-circle"></span>
                                </div>
                            </a>
                            <div class="user-info-box" >
                                <div class="drop-down-header" style="background-color:#79a206">
                                    <h4 style=" white !important"><?=$_SESSION['Username']?></h4>
                                 
                                </div>
                                <ul>
                                    <li>
                                        <a href="Update_admin_profile.php" class="icons-color">
                                            <i class="far fa-edit  " style="color:black"></i> Edit Profile
                                        </a>
                                    </li>
                                 
                                    <li>
                                        <a href="logout.php" class="icons-color">
                                            <i class="fas fa-sign-out-alt " style="color:black"></i> logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Sidebar Start -->
        <aside class="sidebar-wrapper" style="background-color:#333433 !important">
			<div class="logo-wrapper">
				<a href="Admin_panel.php" class="admin-logo">
					<img src="assets/images/logo4.png" alt="" class="sp_logo">
					
				</a>
			</div>
            <div class="side-menu-wrap">
                <ul class="main-menu" >
                    <li >
                        <a href="javascript:void(0);" class=" color-change"  >
                            <span class="icon-menu feather-icon color-change">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </span>
                            <span class="menu-text color-change"  >
                                Dashboard
                            </span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="users.php?id=1" class=" color-change">
                                    <span class="icon-dash "  >
                                    </span>
                                    <span class="menu-text color-change" >
                                        Admin
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="users.php?id=0" class=" color-change">
                                    <span class="icon-dash color-change " >
                                    </span>
                                    <span class="menu-text color-change" >
                                        User
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- new -->
                    <li>
                        <a href="javascript:void(0);" class="active color-change">
                        <span class="icon-menu feather-icon color-change">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            </span>
                            <span class="menu-text color-change">
                                Products
                            </span>
                        </a>
                        <ul class="sub-menu color-change">
                        <?php
          $quaery = mysqli_query($conn,'select * from categories');
          $num = mysqli_num_rows($quaery);
       if($num >= 1) {
        while($row = mysqli_fetch_assoc($quaery)){
            ?>
            <li>
                                <a href="product.php?id=<?=$row['Category_Id']?>">
                                    <span class="icon-dash color-change">
                                    </span>
                                    <span class="menu-text color-change">
                                    <?=$row['Name']?>
                                    </span>
                                </a>
                            </li>
            <?php
        }
    }
            ?>
                            
                          
                        </ul>
                    </li>
                    <!-- new -->
                    <li>
                        <a href="add-product.php" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="color-change">
                            <span class="icon-menu feather-icon color-change">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            </span>
                            <span class="menu-text color-change">
                              Add Products
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="category.php" class="color-change">
                        <span class="icon-menu feather-icon color-change">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            </span>
                            <span class="menu-text color-change">
                               Category
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="orders.php" class="color-change">
                            <span class="icon-menu feather-icon color-change">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                            </span>
                            <span class="menu-text color-change ">
                                Orders
                            </span>
                        </a>
                    </li>


                    <li>
                        <a href="message.php" class="color-change">
                            <span class="icon-menu feather-icon color-change">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                            </span>
                            <span class="menu-text color-change ">
                                Message User
                            </span>
                        </a>
                    </li>
                    
                    
                    
                  
                    
                   
                 
                </ul>
            </div>
        </aside>