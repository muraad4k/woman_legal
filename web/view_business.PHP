<?PHP session_start()?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
          <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="logo-wrapper"><a href="user_home.html"><img src="img/core-img/logo-small.png" alt="">&nbsp; &nbsp; Women Legal App</a></div>
       
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
            $imageFilename = $_SESSION['userImage'];
              echo '<div class="user-profile "><img src="./uploads/'. $imageFilename .'" alt="User Profile Image" width: 150px; height: 150px; "></div>';
          }
          ?>
          <div class="user-info">
            <h6 class="user-name mt-4"><?php echo $_SESSION['name']?></h6>
            <h6 class="user-name "><?php echo $_SESSION['type']?></h6>
         
          </div>
        </div>
        
        <div class="sidenav-profile">

        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
        
          <li><a href="userDashboard.php"><i class="lni lni-dashboard"></i>Dashboard</a></li>
          <li><a href="view_business.html"><i class="lni lni-home"></i>feedback</a></li>
          <!-- <li><a href="user_home.php"><i class="lni lni-home"></i>Home</a></li> -->
          <li><a href="post_problem.html"><i class="lni lni-user"></i>Post problem</a></li>
          <li><a href="view_problem.html"><i class="fas fa-exclamation-triangle"></i>view problem</a></li>
          <li><a href="user_update_info.html"><i class="fas fa-info-circle"></i>my profile</a></li>
           <li><a style="color:white;" ng-click="user_logout()"><i class="lni lni-power-switch"></i>Logout</a></li>  
      </div>
    </div>
      </div>
    </div>

 
    <div class="page-content-wrapper">
      <!-- Catagory Single Image-->
     
      <!-- Product Catagories-->
      <div class="product-catagories-wrapper py-1">
        <div class="container">
     
        
      <!-- Top Products-->
      <div class="container mt-1 pt-1 pb-1">
        <div class="container-fluid bg-primary text-white border-bottom py-1">
            <div class="row align-items-center">
                <div class="col d-flex align-items-center">
                    <i class="fas fa-users fa-1x me-1"></i>
                    <h1 class="h4 mb-0 text-white">ADVOCATES DETAILS & FEEDBACK</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-primary text-white py-2">
            <div class="row align-items-center">
                <div class="col d-flex align-items-center">
                    <i class="fas fa-home"></i>
                    <span class="mx-2">/</span>
                    <a href="#" class="text-white">FEEDBACK</a>
                </div>
            </div>
        </div>
      <div class="top-products-area pb-1">
	
        <!-- <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Search  Advocates -->
			<!-- </h6> -->
			
          </div>
          <div class="row g-2" >
		    <div class="top-search-form">
          <!-- <form>
            <input class="form-control" ng-model="search_field" type="search" placeholder="Search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form> -->
        </div>
            <!-- Single Top Product Card -->
            <div class="col-12 col-md-6" ng-repeat="x in user_bus_details | filter : search_field| filter : search |orderBy:'cus_id':true ">
              <div class="card product-card" style="margin-bottom:10px;">
                <div class="card-body"  style="text-align:justify;">
			<!-- <img width="128" height="128" src="{{x.field_12}}"/><br> -->
       <img class="card-img-top rounded-circle img-thumbnail" ng-src="./uploads/{{x.image}}" alt="Card image" style="width: 100px; height: 100px;">
                  <!-- <div class="card-body"> -->
      	
              <a class="product-title d-block" style="font-size:18px"> Name:  <b>{{x.field_1}} </b></a>
             <a class="product-title d-block" style="font-size:16px">Practice areas: {{x.field_2}} </a>
			
                  <a class="product-title d-block" style="font-size:16px">Experience: {{x.field_3}} </a>
			
				<a class="product-title d-block" style="font-size:16px">Languages: {{x.field_5}} </a>	
				<a class="product-title d-block" style="font-size:16px">Address: {{x.field_6}} </a>
				 <a class="product-title d-block" style="font-size:16px">City: {{x.field_7}} </a>
				  <a class="product-title d-block" style="font-size:16px">Mobile: {{x.field_8}} </a>
				  <a class="product-title d-block" style="font-size:16px">Courts: {{x.field_10}} </a>
				  <a class="product-title d-block" style="font-size:16px">Enrolment Number: {{x.field_11}} </a>
				 <a class="product-title d-block" style="font-size:16px">About Profile: {{x.field_4}} </a>

				 <a class="product-title d-block" style="font-size:16px"
				 ng-href="tel:{{x.field_8}}" >Call Now </a>
           
              </div>
              
					
                </div>
				<!--
				  <a class="btn btn-danger" ng-click="share_location(x.email)" >Request</a>
				  -->
				 <a class="btn btn-danger" target="_blank"
				  href="https://maps.google.com/?q={{x.field_13}},{{x.field_14}}" >Show Map</a>

       			  <a class="btn btn-danger" ng-click="update_survey(x.cus_id,x.email)"  
					>Feedback</a>
				 
              </div>
			  
            </div>
              </div>
            </div>
          </div>
        </div>
     </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
   <div class="footer-nav-area" id="footerNav">
      <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
            <li class="active"><a href="user_home.html"><i class="lni lni-home"></i>Home</a></li>
            
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
    <script src="js/pwa.js"></script>
	<script src="js/angular_data.js"></script>
		
 <body onload="onLoad()">		
	</body>
</html>