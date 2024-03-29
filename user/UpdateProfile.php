<?php
session_start();
    $firstName = $_SESSION['residentData']['fname'];
    $lastName = $_SESSION['residentData']['lname'];
    $middleName = $_SESSION['residentData']['mname'];
    $bdate = $_SESSION['residentData']['bdate'];
    $bplace = $_SESSION['residentData']['bplace'];
    $age = $_SESSION['residentData']['age'];
    $zone = $_SESSION['residentData']['zone'];
    $numHouseHold = $_SESSION['residentData']['num_household'];
    $occupation = $_SESSION['residentData']['occupation'];
    $civilStatus = $_SESSION['residentData']['civil_status'];
    $educationalAttainment = $_SESSION['residentData']['educational_attainment'];
    $bloodType = $_SESSION['residentData']['blood_type'];
    $nationality = $_SESSION['residentData']['nationality'];
    $barangay = $_SESSION['residentData']['barangay'];
    $voterStatus = $_SESSION['residentData']['status'];
    $sex = $_SESSION['residentData']['sex'];
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

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
    <script src="../assets/js/script.js"> </script>

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
        
          <div class="container-xl px-4 mt-4">
  <h3> UPDATE ACCOUNT </h3>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile-->
           
                <div class="card mb-4 mb-xxl-0">                       
                    <div class="card-body text-center">                 
                        <img id="output" width="250"/>
                    </div>
                </div>
                    <input type="file"  accept=".png, .jpg, .jpeg" name="image" id="file"  onchange="loadFile(event)">
              
        </div>

        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Information</div>
                <div class="card-body">
                    <form action ="\Project\connection\updateProfile.php" method="POST">              
                    <div class="mb-8">
                            <label class="small mb-1" for="inputFname">First Name</label>
                            <input class="form-control" id="inputFname" name="fName"  type="text" placeholder="" value="<?php echo $firstName;?>">
                        </div>

                        <div class="mb-8">
                            <label class="small mb-1" for="inputMname">Middle Name</label>
                            <input class="form-control" id="inputMname" name="mName"  placeholder="" value="<?php echo $middleName;?>">
                        </div>

                        <div class="mb-8">
                            <label class="small mb-1" for="inputLname">Last Name</label>
                            <input class="form-control" id="inputLname" name="lName" type="text" placeholder="" value="<?php echo $lastName;?>">
                        </div>

                        <div class="mb-8">
                            <label class="small mb-1" for="inputBplace">Place of Birth</label>
                            <input class="form-control" id="inputBplace" name="bPlace" type="text" placeholder="" value="<?php echo $bplace;?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                           
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputZone">Zone</label>
                                    <select name="zone" class="form-control">
                                        <option selected value = "<?php echo $zone;?>"><?php echo $zone;?></option>
                                        <option value = "Zone 1">Zone 1</option>
                                        <option value = "Zone 2 ">Zone 2</option>
                                        <option value = "Zone 3 ">Zone 3</option>
                                        <option value = "Zone 4">Zone 4</option>
                                    </select>
                            </div>             
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBrgyName">Barangay</label>
                                <input class="form-control" id="inputBrgyName" name="barangay" type="text" placeholder="" value="<?php echo $barangay;?>">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputStatus">Civil Status</label>
                                    <select name="civilStatus" class="form-control input-lg"> 
								        <option selected value = "<?php echo $civilStatus;?>"><?php echo $civilStatus;?></option>
								        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
								        <option value="Widowed">Widowed</option>
								        <option value="Separated">Separated</option>
								        <option value="Divorced">Divorced</option>
							        </select>        
                            </div>                           
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOccupation">Occupation</label>
                                <input class="form-control" id="inputOccupation" name="occupation" type="text" placeholder="" value="<?php echo $occupation;?>">
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputbdate">Date of Birth</label>
                                <input type="date" class="form-control" id="inputbdate" name="bdate" value ="<?php echo date('Y-m-d', strtotime($bdate));?>">
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputAge">Age</label>
                                <input class="form-control" id="inputAge" type="text" name="age" placeholder="" value="<?php echo $age;?>">
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputGender">Sex</label>                               
                                    <select name="sex" class="form-control input-lg"> 
								        <option selected hidden value = "<?php echo $sex;?>"><?php echo ($sex == 0) ? "Female" : "Male";?></option>
								        <option value = "0">Female</option>
                                        <option value = "1">Male</option>
						            </select>
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBtype">Blood Type</label>
                                    <select name="bloodType" class="form-control input-lg"> 
								        <option  selected value = "<?php echo $bloodType;?>"><?php echo $bloodType;?></option>
								        <option value = "AB+">AB+</option>
                                        <option value ="AB-">AB-</option>
								        <option value = "A+">A+</option>
								        <option value = "A-">A-</option>
								        <option value = "B+">B+</option>
								        <option value = "B-">B-</option>
								        <option value = "O+">O+</option>
								        <option value = "O-">O-</option>
							        </select>
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputNationality">Nationality</label>
                                <input class="form-control" id="inputNationality" type="text" name="nationality" placeholder="" value="<?php echo $nationality;?>">
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputHmember">No. of Household Member</label>
                                <input class="form-control" id="inputHmember" type="number" min="1" name="numHouseHold" placeholder="" value="<?php echo $numHouseHold;?>">
                            </div>
                            <div class="col-md-4"> 
                            <label class="small mb-1" for="inputEducation">Educational Attainment</label>
                            <select name="educationalAttainment" class="form-control" required>
                                <option selected value ="<?php echo $educationalAttainment;?>"><?php echo $educationalAttainment;?></option>								        
								<option value = "Not Applicable">Not Applicable</option>
                                <option value = "Elementary Level">Elementary Level</option>
								<option value = "Elementary Graduate">Elementary Graduate</option>
                                <option value = "Completer">Completer</option>
								<option value = "Senior High School">Senior High School</option>
                                <option value = "College Level">College Level</option>
                                <option value = "Vocational/TVET">Vocational/TVET</option>
                                <option value = "Undergraduate (Bachelor’s Degree)">Undergraduate (Bachelor’s Degree)</option>
                                <option value = "Postgraduate (Master’s Degree)">Postgraduate (Master’s Degree)</option>
                                <option value = "Doctorate Degree (PhD)">Doctorate Degree (PhD)</option>
                            </select>
                            </div>
                            <div class="col-md-4">
						    <label class="small mb-1" for="inputVoter">Voter Status</label>
						    <select name="voterStatus" class="form-control"> 
								<option selected value = "<?php echo $voterStatus;?>"><?php echo $voterStatus;?></option>
								<option value = "Active">Active</option>
                				<option value = "Inactive">Inactive</option>
								<option value = "Cancelled">Cancelled</option>
                                <option value = "Not Registered">Not Registered</option>
						    </select>				
					        </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputUsername">Username</label>
                                <input class="form-control" name = "username" id="inputUsername" type="text" placeholder="" value="">
                            </div>                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPass">Password</label>
                                <input class="form-control" name = "password" id="inputPass" type="password" placeholder="" value="">
                            </div>
                        </div>
                        
                        <!-- Save button-->
                        <button type="submit" class="btn btn-primary"><iconify-icon icon="material-symbols:save-as-outline-rounded"></iconify-icon> Save Changes</button>
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
