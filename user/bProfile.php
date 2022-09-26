<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>USER DASHBOARD</title>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/user_style.css">

  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
       <div class="mdl-layout__header-row">
 
         <div class="right_area">
            <a href="..\connection\login.php" type="button" onclick="return confirm('Are you sure you want to log out?');"  class="btn btn-primary" id="right-panel-link">Logout</a>
        </div>
 
       </div>
          
       </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
       
      <header class="demo-drawer-header">
           <div class="left_area">
            <h4><center>USER<span>DASHBOARD</span></center></h4>
        </div>

        </header>
       
        <div class="sidebar">
        <center>
            <img src="https://img.freepik.com/premium-vector/print-design-wolf-character-league-your-mascot_413831-70.jpg?w=2000" 
                 class="profile_image" 
                 alt="">
            <h4>Shane</h4>
        </center>
        <a href="..\user\profile.php"><i class="fa-regular fa-user"></i><span>Profile</span></a>
        <a href="..\user\bProfile.php"><i class="fa-solid fa-circle-info"></i><span>Barangay Profile</span></a>
        <a href="..\user\bOfficials.php"><i class="fa-solid fa-file"></i><span>Barangay Officials</span></a>
        <a href="..\user\reqForms.php"><i class="fa-solid fa-arrow-right"></i><span>Request Forms</span></a>
    </div>

          
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <!-- <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid"> -->
        
          <div class="container-xl px-4 mt-4">
  <h3>BARANGAY PROFILE </h3> 
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-body text-center">
                    <!-- picture image-->         
                    <img class="rounded-pill img-fluid"
                     width="600"
                     src="https://img.freepik.com/premium-vector/print-design-wolf-character-league-your-mascot_413831-70.jpg?w=2000" alt="">          
                   
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Barangay details-->
            <div class="card mb-4">
                <div class="card-header">Details</div>
                <div class="card-body">
                    <form>
                        <!-- Name -->
                        <div class="mb-8">
                            <label class="small mb-1" for="inputBrgyName">Barangay</label>
                            <input class="form-control" id="inputBrgyName" type="text" placeholder="" value="">
                        </div>

                        <div class="mb-8">
                            <label class="small mb-1" for="inputCity">City</label>
                            <input class="form-control" id="inputCity" type="text" placeholder="" value="">
                        </div>

                        <div class="mb-8">
                            <label class="small mb-1" for="inputProvince">Province</label>
                            <input class="form-control" id="inputProvince" type="text" placeholder="" value="">
                        </div>
               
                        <!-- Form Row-->
                        <div class="row gx-3">
                           
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputRegion">Region</label>
                                <input class="form-control" id="inputRegion" type="text" placeholder="" value="">
                            </div>             
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="" value="">
                            </div>

                        </div>
                        
                        <div class="mb-8">
                                <label class="small mb-1" for="inputEmailAdd">Email Address</label>
                                <input class="form-control" id="inputemailAdd" type="text" placeholder="" value="">
                            </div>

                        <div class="row gx-3">
                           
                           <div class="col-md-6">
                               <label class="small mb-1" for="inputPnumber">Phone Number</label>
                               <input class="form-control" id="inputRegion" type="text" placeholder="" value="">
                           </div>             
                           <div class="col-md-6">
                               <label class="small mb-1" for="inputTelnum">Telephone Number</label>
                               <input class="form-control" id="inputTelnum" type="text" placeholder="" value="">
                           </div>

                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

          </div>
        </div>

  </body>
</html>
