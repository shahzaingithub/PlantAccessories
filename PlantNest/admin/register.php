<?php 


// if(!isset($_SESSION['Auserloggedin'])){
//     header('Location:login.php');
//   }

require('connection.php');

  if(isset($_POST['submit'])){
      $uname = mysqli_real_escape_string($conn,$_POST['username']) ;
      $fname = mysqli_real_escape_string($conn,$_POST['fullname']);
      $role = 1;
   $email = $_POST['Email'];
   $password = md5(mysqli_real_escape_string($conn,$_POST['Password']));
  
//    $role = mysqli_real_escape_string($conn,$_POST['role']);
   $error_message ="";

   if($error_message == '' && $role ==1){
      $Regquery = "SELECT * FROM users WHERE Email = '$email'";
      $runquery = mysqli_query($conn,$Regquery);
      $rows = mysqli_num_rows($runquery);
      if($rows > 0){
          echo "<script>alert('User Existed');</script>";
      }
  else{
      $addquery ="INSERT INTO `users`(`username`,`fullName`,`Email`,`Password`,`role`) VALUES ('$uname','$fname','$email','$password',1)";
      $Runquery = mysqli_query($conn,$addquery);
      echo "<script>alert('Admin Added Succesfully')</script>";
      header('location:login.php');
  }
   }

   

}
  


  
  ?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->


<!-- Mirrored from kamleshyadav.com/html/splashdash/html/b5/light/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:21:19 GMT -->
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
    <link rel="stylesheet" type="text/css" href="assets/css/auth.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
</head>

<body>
    <div class="ad-auth-wrapper" style="background-color:#333433">
        <div class="ad-auth-box">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="ad-auth-img">
                        <img src="assets/images/auth-img1.png" alt="" />
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="ad-auth-content">
                        <form method="post">
                            <a href="index.html" class="ad-auth-logo">
                                <img src="assets/images/logo4.png" alt="" />
                            </a>
                            <h2><span class="primary"></span>Welcome!</h2>
                            <p>Please Enter Your Details Below to Continue</p>
                            <div class="ad-auth-form">
								<div class="ad-auth-feilds mb-30">
                                    <input type="text" placeholder="User Name" name="username" class="ad-input" required />
                                    <div class="ad-auth-icon">
                                        <svg 
										 xmlns="http://www.w3.org/2000/svg"
										 xmlns:xlink="http://www.w3.org/1999/xlink"
										 width="16px" height="16px">
										<path fill-rule="evenodd"  fill="rgb(154, 190, 237)"
										 d="M13.696,9.759 C12.876,8.942 11.901,8.337 10.837,7.971 C11.989,7.180 12.742,5.850 12.725,4.349 C12.698,1.961 10.713,0.031 8.318,0.062 C5.946,0.093 4.026,2.026 4.026,4.398 C4.026,5.879 4.774,7.189 5.914,7.971 C4.850,8.337 3.875,8.942 3.055,9.759 C1.786,11.025 1.026,12.663 0.878,14.426 C0.849,14.768 1.117,15.063 1.462,15.063 L1.466,15.063 C1.772,15.063 2.024,14.827 2.050,14.523 C2.325,11.285 5.057,8.734 8.375,8.734 C11.694,8.734 14.425,11.285 14.701,14.523 C14.727,14.827 14.979,15.063 15.285,15.063 L15.289,15.063 C15.634,15.063 15.902,14.768 15.873,14.426 C15.725,12.663 14.965,11.025 13.696,9.759 ZM8.375,7.562 C6.625,7.562 5.201,6.143 5.201,4.398 C5.201,2.653 6.625,1.234 8.375,1.234 C10.126,1.234 11.550,2.653 11.550,4.398 C11.550,6.143 10.126,7.562 8.375,7.562 Z"/>
										</svg>
                                    </div>
                                    <div class="ad-auth-form">
								<div class="ad-auth-feilds mb-30">
                                    <input type="text" placeholder="Full Name" name="fullname" class="ad-input" required/>
                                    <div class="ad-auth-icon">
                                        <svg 
										 xmlns="http://www.w3.org/2000/svg"
										 xmlns:xlink="http://www.w3.org/1999/xlink"
										 width="16px" height="16px">
										<path fill-rule="evenodd"  fill="rgb(154, 190, 237)"
										 d="M13.696,9.759 C12.876,8.942 11.901,8.337 10.837,7.971 C11.989,7.180 12.742,5.850 12.725,4.349 C12.698,1.961 10.713,0.031 8.318,0.062 C5.946,0.093 4.026,2.026 4.026,4.398 C4.026,5.879 4.774,7.189 5.914,7.971 C4.850,8.337 3.875,8.942 3.055,9.759 C1.786,11.025 1.026,12.663 0.878,14.426 C0.849,14.768 1.117,15.063 1.462,15.063 L1.466,15.063 C1.772,15.063 2.024,14.827 2.050,14.523 C2.325,11.285 5.057,8.734 8.375,8.734 C11.694,8.734 14.425,11.285 14.701,14.523 C14.727,14.827 14.979,15.063 15.285,15.063 L15.289,15.063 C15.634,15.063 15.902,14.768 15.873,14.426 C15.725,12.663 14.965,11.025 13.696,9.759 ZM8.375,7.562 C6.625,7.562 5.201,6.143 5.201,4.398 C5.201,2.653 6.625,1.234 8.375,1.234 C10.126,1.234 11.550,2.653 11.550,4.398 C11.550,6.143 10.126,7.562 8.375,7.562 Z"/>
										</svg>
                                    </div>
                                </div>
                                <div class="ad-auth-feilds mb-30">
                                    <input type="email" placeholder="Email Address" name="Email" class="ad-input" required/>
                                    <div class="ad-auth-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 483.3 483.3"><path d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1    v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5    c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#9abeed"></path><path d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3    c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95    c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4    c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#9abeed"></path></svg>
                                    </div>
                                </div>
                                <div class="ad-auth-feilds">
                                    <input type="password" placeholder="Password" name="Password" class="ad-input" required/>
                                    <div class="ad-auth-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 482.8 482.8"><path d="M395.95,210.4h-7.1v-62.9c0-81.3-66.1-147.5-147.5-147.5c-81.3,0-147.5,66.1-147.5,147.5c0,7.5,6,13.5,13.5,13.5    s13.5-6,13.5-13.5c0-66.4,54-120.5,120.5-120.5c66.4,0,120.5,54,120.5,120.5v62.9h-275c-14.4,0-26.1,11.7-26.1,26.1v168.1    c0,43.1,35.1,78.2,78.2,78.2h204.9c43.1,0,78.2-35.1,78.2-78.2V236.5C422.05,222.1,410.35,210.4,395.95,210.4z M395.05,404.6    c0,28.2-22.9,51.2-51.2,51.2h-204.8c-28.2,0-51.2-22.9-51.2-51.2V237.4h307.2L395.05,404.6L395.05,404.6z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#9abeed"></path><path d="M241.45,399.1c27.9,0,50.5-22.7,50.5-50.5c0-27.9-22.7-50.5-50.5-50.5c-27.9,0-50.5,22.7-50.5,50.5    S213.55,399.1,241.45,399.1z M241.45,325c13,0,23.5,10.6,23.5,23.5s-10.5,23.6-23.5,23.6s-23.5-10.6-23.5-23.5    S228.45,325,241.45,325z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#9abeed"></path></svg>
                                    </div>
                                </div>

                            
                            <div class="ad-auth-btn">
                                <button   name="submit" class="ad-btn ad-login-member" style="background-color:#79a206">Sign up</button>
                            </div>
                            <p class="ad-register-text">Already have an account ? <a href="login.php" style="color:#79a206">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="ad-notifications ad-error">
                <p><span>Duhh!</span>Something Went Wrong</p>
            </div>
        </div>
    </div>
</body>


<!-- Mirrored from kamleshyadav.com/html/splashdash/html/b5/light/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 08:21:19 GMT -->
</html>