<?php  session_start()?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
	<!-- angular js -->
	<script src="js/angular-1.3.js"></script>
	<script src="js/angular_cookies.js"></script>

  </head>
  <body ng-controller="myappCtrl">
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
          <!-- <li><a href="home.php"><i class="lni lni-home"></i>Home</a></li> -->
          <li><a href="post_business.php"><i class="lni lni-user"></i>My profile</a></li>
          <li><a href="view_all_problem.html"><i class="fas fa-exclamation-triangle"></i>women's problem</a></li>
          <li><a href="worker_update_info.php"><i class="fas fa-info-circle"></i>User Details</a></li>
           <li><a style="color:white;" ng-click="user_logout()"><i class="lni lni-power-switch"></i>Logout</a></li>
      </div>
    </div>
      </div>
    </div>
 
    <div class="page-content-wrapper">
      <!-- Catagory Single Image-->
      
    <div class="page-content-wrapper">
      <div class="product-catagories-wrapper py-2">
        <div class="container">
          <div class="container-fluid bg-primary text-white border-bottom py-1">
        <div class="row align-items-center">
            <div class="col d-flex align-items-center">
                <i class="fas fa-users  me-1"></i>
                <h1 class="h4 mb-0 text-white">WOMEN'S PROBLEM </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-white py-1">
        <div class="row align-items-center">
            <div class="col d-flex align-items-center">
                <i class="fas fa-home"></i>
                <span class="mx-1">/</span>
                <a href="#" class="text-white">PROBLEM</a>
            </div>
        </div>
    </div>     
     
      <!-- Product Catagories-->
      <div class="product-catagories-wrapper py-1">
        <div class="container">
        <div class="card p-1 mt-1">
          <table class="table table-bordered problems">
            <thead class="bg-primary text-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Case Number</th>
                <th scope="col">Case Type</th>
                <th scope="col">Address</th>
                <th scope="col">Problem Background</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            
            </tbody>
          </table>
        </div>
        <div class="row g-1 problems" >
            <!-- Single Top Product Card -->
          
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
    <div class="modal fade userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- Profile Image Section -->
                  <div class="d-flex justify-content-center mb-3">
                      <img src="https://via.placeholder.com/100" class="rounded-circle profile" alt="Profile Image" width="200" height="200">
                  </div>
                  <form>
                      <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Name</label>
                          <input type="text" class="form-control name" placeholder="@username" id="recipient-name" required disabled>
                      </div>
                      <div class="mb-3">
                          <label for="recipient-email" class="col-form-label">Email</label>
                          <input type="text" class="form-control email" placeholder="user@gmail.com" id="recipient-email" required disabled>
                      </div>
                      <div class="mb-3">
                          <label for="recipient-mobile" class="col-form-label">Mobile</label>
                          <input type="number" class="form-control mobile" placeholder="@password" id="recipient-mobile" required disabled>
                      </div>
                      <div class="mb-3 hasFile" hidden>
                        <input type="hidden" class='currentFile'/>
                         <div class='alert alert-success'>This User has Uploaded Problem as File You can View The File By Clicking Below Button</div>
                         <a  class='btn btn-success fileView'>View File</a>
                  <!-- Call Button -->
<a id="callButton" href="tel:" class="btn btn-primary">
  <i class="fas fa-phone-alt"></i> Call
</a>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Close</button>
              </div>
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
      $(".view-file").click(()=>{
        $.ajax({
          method: "GET",
          data: {
            "file": $(".currentFile").val(),
          },
          url: "./view.file.php"
        })

      })
      $(document).on("click", "a.accept-case", function(){
        var id =$(this).attr("caseId");
        updateCase(id, response=>{
            alert(response.message);
        })
      })
      $(document).on("click", "a.deny-case", function(){
        var id =$(this).attr("caseId");
        updateCaseDeny(id, response=>{
            alert(response.message);
        })
      })
      $(document).on("click", "a.finish", function(){
        var id =$(this).attr("caseId");
        finish(id, response=>{
            alert(response.message);
        })
      })
      $(document).on("click", ".profile", function(){
        // alert('profile clicked');
        var email =$(this).attr("email");
        var data={
     "action": "fetchingOne",
      "email": email
   }
   $.ajax({
     method: "POST",
     url: "./doctor.api.php",
     data: data,
     dataType: "JSON",
     success:(response)=>{
      var imageUrl = 'uploads/' + response.data[0].image; // Construct the full image URL
      $('.profile').attr('src', imageUrl);     
       $('.name').val(response.data[0].name);
      $('.email').val(response.data[0].email);
      $('.mobile').val(response.data[0].mobile);
      $('#callButton').attr('href', 'tel:' + response.data[0].mobile);
      if($(this).attr("fileName")!=""){
       var fileName =$(this).attr("fileName");
       alert(fileName)
        $(".fileView").attr("href",`./view.file.php?file=${fileName}`)
         $('.hasFile').attr("hidden", false);
      }else{
        $('.hasFile').attr("hidden", true);
      }
       console.log(response)
      },
     error: (response)=>{
console.log("the response is ",response)
     }
   })
        $('.userModal').modal("show");
      })
     
      $(document).on('click','.close',function(){
        var imageUrl = 'https://via.placeholder.com/100' ; // Construct the full image URL
      $('.profile').attr('src', imageUrl);     
       $('.name').val('');
      $('.email').val('');
      $('.mobile').val('');
      })
     
     getProblems();

     function updateCase(id, get_response){
      $.ajax({
        method: "POST",
     url: "./doctor.api.php",
     data: {action: "updateCaseFromAdvocate", caseId : id},
     dataType: "JSON",
     success: (response)=>{
        get_response(response)
        getProblems();
     },
      error: (response)=>{
        console.log(response)

     }
      })
     }
     function updateCaseDeny(id, get_response){
      $.ajax({
        method: "POST",
     url: "./doctor.api.php",
     data: {action: "updateCaseFromAdvocatedeny", caseId : id},
     dataType: "JSON",
     success: (response)=>{
        get_response(response);
        getProblems();
     },
      error: (response)=>{
        console.log(response)

     }
      })
     }

     function finish(id, get_response){
      $.ajax({
        method: "POST",
     url: "./doctor.api.php",
     data: {action: "finish", caseId : id},
     dataType: "JSON",
     success: (response)=>{
        get_response(response)
        getProblems();
     },
      error: (response)=>{
        console.log(response)

     }
      })
     }

     function getProblems(){
       
       var data={
     "action": "ReadProblems",
   }
   $.ajax({
     method: "POST",
     url: "./doctor.api.php",
     data: data,
     dataType: "JSON",
     success:(response)=>{
      var html=""
      var tr="<tr>"
      const {data} = response;
      data.forEach(value=>{

        tr += `<td>${value.cus_id}</td>`;
              tr += `<td>${value.name}</td>`;
              tr += `<td>${value.field_4}</td>`;
              tr += `<td>${value.field_2}</td>`;
              tr += `<td>${value.field_5}</td>`;
              tr += `<td>${value.field_3}</td>`;
              if(value.status.toLowerCase()=="accepted")
                tr += `<td>
                  <a class='btn btn-secondary finish' caseId='${value.cus_id}' title='Processing...'><i class="fas fa-spinner"></i></a>
        <a class='btn btn-primary profile' email='${value.email}' title='Profile'><i class="fas fa-user"></i></a>
                  </td>`;
              else if(value.status.toLowerCase()=="finished")
              tr += `<td>
                <a class='btn btn-success finish' caseId='${value.cus_id}' title='Finished'><i class="fas fa-check"></i></a>
        <a class='btn btn-primary profile' email='${value.email}' title='Profile'><i class="fas fa-user"></i></a>

                  </td>`;
              else
                tr += `<td>
                  <a class='btn btn-success accept-case' caseId='${value.cus_id}' title='Accept'><i class="fas fa-check"></i></a>
        <a class='btn btn-danger deny-case' caseId='${value.cus_id}' title='Deny'><i class="fas fa-times"></i></a>
        <a class='btn btn-primary profile' email='${value.email}' fileName='${value.file}' title='Profile'><i class="fas fa-user"></i></a>

                  </td>`;
              tr += `</tr>`;

  
      })
        
        // $(".problems").html(html)
        $(".problems tbody").html(tr)
       console.log("now response is",response);
     },
     error: (response)=>{
console.log("the response is ",response)
     }
   })
     }

   })


  </script>
  </body onload="onLoad()">	
</html>