<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

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
        

    <div class="container bootstrap snippets bootdey">
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="https://img.freepik.com/premium-vector/print-design-wolf-character-league-your-mascot_413831-70.jpg?w=2000" 
          class="avatar img-circle img-thumbnail" alt="avatar">
        </div>
      </div>
      
      
      <div class="col-md-9">
        
        <h5>Please fill out the required field.</h5>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Full Name</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" required>
            </div>
          </div>
          <div class="form-group">
          <label class="col-lg-3 control-label">Type of Certification</label>
          <div class="col-lg-8">
                            <select name="" class="form-control" required>
                                <option selected></option>								        
								                <option>Resident Certificate (Cedula)</option>
                                <option>Indigency</option>
                            </select>
          </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Purpose</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" required>
            </div>
          </div> 
          
          <!-- date_time -->
          <div>
          <p class="col-lg-3">Date & Time Requested 
            <span id="date"></span></p>
            <script>var x = new Date();
            document.getElementById("date").innerHTML=x.toLocaleString();</script>    
          </div>
          
          <button class="btn btn-primary" type="submit">Request</button>   
        </form>
      </div>
  </div>
</div>
<hr>


<!-- status of request-->

              <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                        <thead>
                            <tr>

                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                <th><center>Type of Certification</center></th>
                                <th><center>Purpose</center></th>
                                <th><center>Date and Time Requested</center></th>
                                <th><center>Pick-up Schedule</center></th>
                                <th><center>Status</center></th>
                                <th style="width: 12% !important;"> <center>Option</center></th>
                                   
                            </tr>
                        </thead>
                        <tbody>
                        	
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <!-- goto paymentDetails -->
                        <td><a href="../user/payment.php"><button class="btn btn-primary btn-sm">Pay</button></a>
                        <button class="btn btn-danger btn-sm" href="#" onclick="return confirm('Are you sure you want to delete?');">Delete</button></td>

                      </tr>
                       
                     
                    
                        </tbody>
                    </table>
                </div>
            </div>

                              
                         

        </div>


      </div>
        </div>


        

  </body>
</html>