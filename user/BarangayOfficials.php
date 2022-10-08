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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <link rel="stylesheet" href="../assets/css/user_style.css">

  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
       <div class="mdl-layout__header-row">
 
         <div class="right_area">
         <a href="..\connection\login.php" type="button" onclick="return confirm('Are you sure you want to log out?');"  class="btn btn-primary" id="right-panel-link"><i class="fa fa-sign-out"></i> Logout</a>
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
        <a href="..\user\BarangayProfile.php"><i class="fa-solid fa-circle-info"></i><span>Barangay Profile</span></a>
        <a href="..\user\BarangayOfficials.php"><i class="fa-solid fa-file"></i><span>Barangay Officials</span></a>
        <a href="..\user\ReqForms.php"><i class="fa-solid fa-arrow-right"></i><span>Request Forms</span></a>
    </div>

          
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        

          <!-- start -->
<h3>BARANGAY OFFICIALS</h3>
<div class="py-5" style="background-color:#E0E0E0; width:100%;" >
    <div class="container">     
            <div class="container">
                <div class="carousel slide" data-ride="carousel" id="carousel1">
                    <div class="carousel-inner" role="listbox">

                   
    <div class="carousel-item active">
          <div class="row"> 
              <div class="card user-card">
                <div class="card-header">
                    <h5>CAPTAIN</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h1 class="user-name">Alessa Robert</h1>
                  
                    <hr>                                    
                   
                    <!-- content -->
                    <p class="user-name">TERM:</p>

                </div>
            </div>

        <!-- next     -->
            <div class="card user-card">
                <div class="card-header">
                    <h5>COUNCILOR</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius" alt="User-Profile-Image">
                    </div>                   
                    <h1 class="user-name">Alessa Robert</h1>           
                    <hr>                   
                  
                    <!-- content -->
                    <p class="user-name">TERM:</p>

                </div>
            </div>
        </div> 
    </div>    
    
    
    <div class="carousel-item">
          <div class="row"> 
              <div class="card user-card">
                <div class="card-header">
                    <h5>COUNCILOR</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h1 class="user-name">Alessa Robert</h1>                  
                    <hr>
                                        
                    <!-- content -->
                    <p class="user-name">TERM:</p>

                </div>
            </div>

        <!-- next     -->
            <div class="card user-card">
                <div class="card-header">
                    <h5>SK CHAIRMAN</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h1 class="user-name">Alessa Robert</h1>                    
                    <hr>
                                       
                    <!-- content -->
                    <p class="user-name">TERM:</p>

                </div>
            </div>
        </div> 
    </div>   
</div> 

                               
                    <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> 
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
                    <span class="sr-only">Previous</span> </a> 
                    <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> 
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span> </a>

                </div>
            </div>
        
    </div>
</div>

         

          <!-- end -->

          </div>
        </div>

  </body>
</html>
