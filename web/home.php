<!DOCTYPE html>
<html ng-app="myapp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Women Legal App">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Women Legal App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="css/font.css" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" href="img/icons/icon-72x72.png">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/lineicons.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
 	<script src="js/angular-1.3.js"></script>
	<script src="js/angular_cookies.js"></script>
</head>
	
  <body   ng-controller="myappCtrl">
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
     
        <!-- Page Title-->
      
        <!-- Filter Option-->
        <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <!-- <div class="logo-wrapper"><a href="home.html"><img src="img/core-img/logo-small.png" alt="">&nbsp; &nbsp; Women Legal App</a></div> -->
        <div class="user-profile-placeholder mr-5" >
          <!-- Display the user's profile image -->
          <?php 
          session_start();
          // Check if the userImage is set in the session
          if(isset($_SESSION['userImage'])) {
              echo '<img src="./uploads/' . $_SESSION['userImage'] . '" alt="User Profile Image" style="border-radius: 50%; width: 50px; height: 50px;">';
          }
          ?>
      </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>
    <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas" aria-labelledby="suhaOffcanvasLabel">
      <!-- Close button-->
      <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <!-- Offcanvas body-->
      <div class="offcanvas-body">
        <!-- Sidenav Profile-->
        <div class="sidenav-profile">
          <!-- <div class="user-profile"><img src="img/bg-img/9.png" alt=""></div> -->
          <?php
          // Check if the userImage is set in the session
          if(isset($_SESSION['userImage'])) {
              echo '<div class="rounded"><img src="./uploads/' . $_SESSION['userImage'] . '" alt="User Profile Image"style="border-radius: 50%; width: 80px; height: 80px; margin-top:30px; margin-left:95px""></div>';
          }
          ?>
          <div class="user-info">
            <h6 class="user-name mt-2"><?php echo $_SESSION['ADVOCATE']?></h6>
            <p class="user-name "><?php echo $_SESSION['type']?></p>
         
          </div>
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
        
        <li><a href="advocateDahboard.php"><i class="lni lni-dashboard"></i>Dashboard</a></li>
          <li><a href="home.php"><i class="lni lni-home"></i>Home</a></li>
          <li><a href="post_business.php"><i class="lni lni-user"></i>My profile</a></li>
          <li><a href="view_all_problem.php"><i class="fas fa-exclamation-triangle"></i>women's problem</a></li>
          <li><a href="worker_update_info.php"><i class="fas fa-info-circle"></i>User Details</a></li>
           <li><a style="color:white;" ng-click="user_logout()"><i class="lni lni-power-switch"></i>Logout</a></li>
          
          
          
      </div>
    </div>
      </div>
    </div>
 
    <div class="page-content-wrapper">
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Advocate page</h6>
            <!-- Select Product Catagory-->
          
          </div>
         
          <div class="row g-3">
          <div class="col-12 col-md-12">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="card-body"><img class="img-fluid" style="width:64px; height:64px;"  src="img/justice.png"/>&nbsp;&nbsp;&nbsp;<a class="text-success" href="advocateDahboard.php">
                     Dashboard </a></div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card -->

            <div class="col-12 col-md-12">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="card-body">
				  <img class="img-fluid" style="width:64px; height:64px;"  src="img/lawyer.png"/>&nbsp;&nbsp;&nbsp;<a class="text-success" href="post_business.html">
                    My Profile </a></div>
                </div>
              </div>
            </div>
			 <!-- <div class="col-12 col-md-12">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="card-body"><img class="img-fluid" style="width:64px; height:64px;"  src="img/lawyer.png"/>&nbsp;&nbsp;&nbsp;<a class="text-success" href="view_own_business.html">
                    Update Profile </a></div>
                </div>
              </div>
            </div> -->
			<div class="col-12 col-md-12">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="card-body"><img class="img-fluid" style="width:64px; height:64px;"  src="img/justice.png"/>&nbsp;&nbsp;&nbsp;<a class="text-success" href="view_all_problem.html">
                     Women's Problem </a></div>
                </div>
              </div>
            </div>
            
            <!-- <div class="col-12 col-md-12">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="card-body"><img class="img-fluid" style="width:64px; height:64px;"  src="img/justice.png"/>&nbsp;&nbsp;&nbsp;<a class="text-success" href="dahsboard.php">
                     Dashboard </a></div>
                </div>
              </div>
            </div> -->
            <!-- Single Weekly Product Card -->
            <!-- <div class="col-12 col-md-12">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                 <div class="card-body"><img class="img-fluid" style="width:64px; height:64px;"  src="img/feedback.png"/>&nbsp;&nbsp;&nbsp;<a class="text-success" href="view_feedback.html">
                   View Feedback </a></div>
                </div>
              </div>
            </div> -->
			<div class="col-12 col-md-12">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="card-body"><img class="img-fluid" style="width:64px; height:64px;"  src="img/man.png"/>&nbsp;&nbsp;&nbsp;<a class="text-success" href="worker_update_info.html">
                    User Details </a></div>
                </div>
              </div>
            </div>
			 </div>
			  </div>
			    </div>
				  </div>
            <!-- Single Weekly Product Card -->
           
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
      <div class="footer-nav-area" id="footerNav">
      <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
            <li class="active"><a href="home.html"><i class="lni lni-home"></i>Home</a></li>
            
            <li><a ng-click="user_logout()"><i class="lni lni-power-switch"></i>Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.passwordstrength.js"></script>
    <script src="js/dark-mode-switch.js"></script>
    <script src="js/no-internet.js"></script>
    <script src="js/active.js"></script>
    <script src="js/pwa.js"></script><script src="js/angular_data.js"></script>
  </body>
</html>