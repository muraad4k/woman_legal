<?php session_start()?>
<!DOCTYPE html>
<html ng-app="myapp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
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
    <!-- Preloader
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
	-->
  <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="logo-wrapper"><a href="home.html"><img src="img/core-img/logo-small.png" alt="">&nbsp; &nbsp; Women Legal App</a></div>
       
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
          <ul class="sidenav-nav ps-0">
        
        <li><a href="advocateDahboard.php"><i class="lni lni-dashboard"></i>Dashboard</a></li>
         <!-- <li><a href="home.php"><i class="lni lni-home"></i>Home</a></li> -->
         <li><a href="post_business.php"><i class="lni lni-user"></i>My profile</a></li>
         <!-- <li><a href=post_business.php><i class="lni lni-pencil-alt
"></i>Update profilr</a></li> -->
         <li><a href="view_all_problem.php"><i class="fas fa-exclamation-triangle"></i>women's problem</a></li>
         <li><a href="worker_update_info.php"><i class="fas fa-info-circle"></i>User Details</a></li>
          <li><a style="color:white;" ng-click="user_logout()"><i class="lni lni-power-switch"></i>Logout</a></li>    
     </div>
   </div>
     </div>
   </div>
    </div>

   
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
        
<!-- 
           <li><a href="view_own_business.html"><i class="lni lni-pencil-alt
"></i>Update profilr</a></li>

           <li><a style="color:white;" ng-click="user_logout()"><i class="lni lni-power-switch"></i>Logout</a></li>
      </div> -->
    </div>
      </div>
    </div>
 
   <div class="page-content-wrapper">
      <!-- Top Products-->
      <div class="top-products-area py-1">
      <div class="container">
        <!-- Profile Wrapper-->
		
        <div class="container-fluid bg-primary text-white border-bottom py-2">
        <div class="row align-items-center">
            <div class="col d-flex align-items-center">
                <i class="fas fa-users fa-2x me-1"></i>
                <h1 class="h4 mb-0 text-white">ADVOCATE PROFILE </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-white py-1">
        <div class="row align-items-center">
            <div class="col d-flex align-items-center">
                <i class="fas fa-home"></i>
                <span class="mx-1">/</span>
                <a href="#" class="text-white">PROFILE</a>
            </div>
        </div>
    </div>     
        <div class="profile-wrapper-area py-3">
          <!-- User Information-->
        
          <!-- User Meta Data-->
          <div class="card user-data-card" >
            <div class="card-body">
              <form>
                
                <div  ng-repeat="x in workerdetails">
                <div class="mb-3">
                  <div class="title mb-2"><span> Name</span></div>
                  <input class="form-control name" ng-model="x.name" type="text">
                  <div class="title mb-2"><span> Name</span></div>
                  <input class="form-control email" ng-model="x.email" type="text">
                  <div class="title mb-2"><span>Mobile</span></div>
                  <input class="form-control tell" ng-model="x.mobile" type="text">
                  
                  <div class="title mb-2"><span>City </span></div>
                  <input class="form-control field_7" ng-model="x.field_1" type="text" >
                  <div class="title mb-2"><span>Address</span></div>
                  <input class="form-control field_6" ng-model="x.field_2" type="text">
                  <div class="title mb-2"><span>Choice Image</span></div>
                  <input class="form-control image" ng-model="x.image" type="file">
              
                </div>


                <!-- <div class="mb-3">
                  
                </div></div> -->
                <div class="mb-3">
                  <div class="title mb-2"><span>Practice areas</span></div>
                  <input class="form-control field_2" ng-model="field_2" type="text">
                </div>
				 <div class="mb-3">
                  <div class="title mb-2"><span>Experience</span></div>
                  <input class="form-control field_3" ng-model="field_3" type="number">
                </div>
				 <div class="mb-3">
                  <div class="title mb-2"><span>About Profile</span></div>
                  <textarea class="form-control field_4" ng-model="field_4" type="text" ></textarea>
                </div>
				 <div class="mb-3">
                  <div class="title mb-2"><span>Languages</span></div>
                  <input class="form-control field_5" ng-model="field_5" type="text" >
                </div>

                 <div class="mb-3">
                  <div class="title mb-2"><span>Choice Files</span></div>
                  <input class="form-control passport" ng-model="files" type="file">
                  
				 <div class="mb-3">
                  <div class="title mb-2"><span>Courts</span></div>
                  <input class="form-control field_9" ng-model="field_9" type="text" >
                </div>
				 
                <!-- <div class="mb-3"> -->
                  
                <!-- </div><div class="mb-3">
                  <div class="title mb-2"><span>aqoonsi</span></div>
                  <input class="form-control passport" ng-model="aqoonsi" type="file">
                </div> -->
					 
                
                <!-- <div class="mb-3">
                  <div class="title mb-2"><span>Email</span></div>
                  <input class="form-control" ng-model="x.email" type="text">
                </div> -->
                
               
                <button class="btn btn-success w-100 ng" ng-click="" >Submit</button>
              </form>
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
    <script src="js/pwa.js"></script>
		<script src="js/angular_data.js"></script>
    <script>
      $(document).ready(function(){
        $(document).on('click','.ng',()=>{
          
          var data = new FormData();
                data.append("name", $(".name").val())
                data.append("mobile", $(".tell").val())
                // data.append("profile_image1", $(".passport").val())
                data.append("profile_image", $(".image")[0].files[0])
                data.append("field_2", $(".field_2").val())
                data.append("field_3", $(".field_3").val())
                data.append("field_4", $(".field_4").val())
                data.append("field_5", $(".field_5").val())
                data.append("field_9", $(".field_9").val())
                data.append("field_7", $(".field_7").val())
                data.append("field_6", $(".field_6").val())
                data.append("email",$('.email').val())
                data.append("action", "createProfile")
                // data.append("profile_image", $(".image")[0].files[0])
                data.append("passport", $(".passport")[0].files[0])
                console.log($('.passport').val())
                $.ajax({
                    method: "POST",
                    dataType: "JSON",
                    processData: false,
                    cache: false,
                    contentType: false,
                    data: data,
                    url: "./doctor.api.php",
                    success: (res) => {
                        console.log(res);
                        // readAll();
                        // $(".doctorModal").modal('hide');
                        alert("Submit Successfully");
                    },
                    error: (error) => {
                        console.log(error);
                        alert(" Error Ocurred");
                    }
                })
                            
                   
        })})
         
      
       
      
      
    </script>
 <body onload="onLoad()">		
	</body>
</html>