<?php session_start()?>
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
    <style>
        .card-custom {
            margin: 10px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .icon {
            font-size: 1.5rem;
            background-color: #f1f3f7;
            padding: 10px;
            border-radius: 50%;
        }
        .text-small {
            font-size: 0.875rem;
        }
        .text-green {
            color: #28a745;
        }
        .text-red {
            color: #dc3545;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <!-- Favicon-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        <!-- <div class="sidenav-profile">
          <div class="user-profile"><img src="img/bg-img/9.png" alt=""></div>
          <div class="user-info">
            <h6 class="user-name mb-1">Women Legal App</h6>
          
          </div>
        </div> -->
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
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
        
        <li><a href="./userDashboard.php"><i class="lni lni-dashboard"></i>Dashboard</a></li>
          <li><a href="view_business.php"><i class="lni lni-home"></i>feedback</a></li>
          <li><a href="post_problem.html"><i class="fas fa-exclamation-triangle"></i>post problem</a></li>
          <li><a href="view_problem.html"><i class="lni lni-user"></i>view problem</a></li>
          <!-- <li><a href="post_problem.html"><i class="fas fa-exclamation-triangle"></i>post problem</a></li> -->
          <li><a href="user_update_info.html"><i class="fas fa-info-circle"></i>my profile</a></li>
           <li><a style="color:white;" ng-click="user_logout()"><i class="lni lni-power-switch"></i>Logout</a></li>
          
          
      </div>
    </div>
      </div>
    </div>
 
 

<!--  -->





    <div class="container mt-5 pt-2 pb-2">
    <div class="container-fluid bg-primary text-white border-bottom py-1">
        <div class="row align-items-center">
            <div class="col d-flex align-items-center">
                <i class="fas fa-users fa-2x me-2"></i>
                <h1 class="h4 mb-0 text-white">USER DASHBOARD</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-white py-2">
        <div class="row align-items-center">
            <div class="col d-flex align-items-center">
                <i class="fas fa-home"></i>
                <span class="mx-2">/</span>
                <a href="#" class="text-white">DASHBOARD</a>
            </div>
        </div>
    </div>
    <div class="row">
         <!-- <div class="col-md-12">
            <div class="card card-custom">
                <div class="text-small">
                    <span class="text-green"> <div class="">
                        <i class="fas fa-clipboard"></i>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-md-12">
            <div class="card card-custom">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted">finish process</h6>
                        <h3 class="finish"></h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
                <div class="text-small">
                    <span class="text-green">3.65%</span> Since last week
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-custom">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted">process cases</h6>
                        <h3 class="process"></h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard"></i>
                    </div>
                </div>
                <div class="text-small">
                    <span class="text-red">-5.25%</span> Since last week
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-custom">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted">reject cases</h6>
                        <h3 class="reject"></h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
                <div class="text-small">
                    <span class="text-green">4.65%</span> Since last week
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3">
            <div class="card card-custom">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted">all cases</h6>
                        <h3 class="cases"></h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="text-small">
                    <span class="text-green">2.35%</span> Since last week
                </div>
            </div>
        </div> -->
        <div class="col-md-12">
            <div class="card card-custom">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted">pending cases</h6>
                        <h3 class="pending"></h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="text-small">
                    <span class="text-green">2.35%</span> Since last week
                </div>
            </div>
        </div><div class="col-md-12">
            <div class="card card-custom">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted">Total Cases</h6>
                        <h3 class="cases"></h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="text-small">
                    <span class="text-green">2.35%</span> Since last week
                </div>
            </div>
</div>
</div>























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
 <script>
$(document).ready(function(){


        const countRowNumbersActive = (tableName, label,statusType,action) => {
            $.ajax({
                method: "POST",
                dataType: "JSON",
                url: "doctor.api.php",
                data: {
                    email:localStorage.getItem('cook_user_email'),
                    status:statusType,
                    action: action,
                    table: tableName,
                },
                success: (res) => {
                    console.log(res)
                    label.html(res.rowNumber);
                },
                error: (res) => {
                    console.log(res)
                    // displayToast("Internal Server Error Ocurred 🤷‍♂😢️", "error", 2000);
                }
            })
        }
        countRowNumbersActive("requests", $(".finish"),'Finished',"countUserCases");
        countRowNumbersActive("requests", $(".pending"),'pending',"countUserCases");
        countRowNumbersActive("requests", $(".reject"),'rejected',"countUserCases");
        countRowNumbersActive("requests", $(".process"),'accepted',"countUserCases");
        countRowNumbersActive("requests", $(".cases"),'accepted',"user")
        
        // countRowNumbersActive("requests", $(".process"),'accepted',"countActive");
        // countRowNumbersActive("requests", $(".finish"),'Finished',"countActive");
        // countRowNumbersActive("requests", $(".reject"),'rejected',"countActive");

        // const readLevel = () => {
        //     $.ajax({
        //         method: "POST",
        //         dataType: "JSON",
        //         data: {
        //             "action": "readLevel"

        //         },
        //         url: "../api/level_tracking.php",
        //         success: (res) => {
        //             var tr = "<tr>"
        //             var {
        //                 data
        //             } = res;
        //             $('.level').html(res.data[0].level_quantity);

        //             console.log("data is ", data)
        //         },
        //         error: (res) => {
        //             console.log("There is an error")
        //             console.log(res)
        //         },
        //     })
        // }
        // readLevel();


})

 </script>
	</body>
</html>