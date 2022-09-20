<?php 
session_start();

	include("../connection.php");
	include("../functions.php");
	include("../css.php");


	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html class = "h-100"lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

<script>
    var ScrollMsg= "Test Site | - HOMEPAGE "
    var CharacterPosition=0;
    function StartScrolling() {
    document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
    ScrollMsg.substring(0, CharacterPosition);
    CharacterPosition++;
    if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
    window.setTimeout("StartScrolling()",150); }
    StartScrolling();
</script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  

<div class="grid-container">
  <header class="header">
	
	</header>
 	
	<aside class="sidenav">

<div class="d-flex justify-content-center align-items-center px-3 py-4">
    <img
         class="rounded-pill img-fluid"
         width="65"
		 src = "../image/admin.jpg" 
         alt="profile">
    <div class="ms-2">
		<span class="name">Shane Pags</span> <br>
        <span class="name">Admin</span>
    </div>
</div>

<div class="ms-2"> 
  <span class="name"> DASHBOARD</span>
</div>
<ul>

  <li><a href="..\admin\home.php" class="btn">
    <i class="fa fa-home"></i> Home</a></li>

  <li><a href="..\admin\brgyprofile.php" class="btn">
    <i class="fa fa-info-circle"></i> Barangay Profile</a></li>

  <li><a href="..\admin\brgyofficial.php" class="btn">
    <i class="fa fa-file"></i> Barangay Officials</a></li>

  <li><a href="..\admin\resident.php" class="btn">
    <i class="fa fa-user"></i> Resident Record</a></li>

  <li><a href="..\admin\blotter.php" class="btn">
    <i class="fa fa-database"></i> Blotter Record</a></li>

</ul>

<div class="ms-2">
  <span class="name"> FORMS</span>
</div>
<ul>

<li><a href="..\admin\certificate.php" class="btn">
<i class="fa fa-certificate"></i> Certificate</a></li>
	

</ul>

<div class="ms-2"> 
<li><a href="\Project\login.php" class="btn" onclick="return confirm('Are you sure you want to log out?');">
	<i class="fas fa-sign-out-alt"></i> Logout</a></li>
</div>
	</aside>

<main class="main">
<div class="container-xl px-4 mt-4">
  <h2> BARANGAY PROFILE</h2>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Barangay Logo</div>
                <div class="card-body text-center">
                    <!-- picture image-->         
                    <img class="rounded-pill img-fluid"
                     width="200"
                     src="../image/admin.jpg" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4"></div>
                    <!-- picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Barangay details-->
            <div class="card mb-4">
                <div class="card-header">Barangay Details</div>
                <div class="card-body">
                    <form>
                        <!-- Name -->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Barangay</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="" value="">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- City-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">City</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="" value="">
                            </div>
                            <!-- Province -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Province</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Region -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Region</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="" value="">
                            </div>
                            <!-- Location-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <!-- Email add-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="example123@gmail.com" value="">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Phone # -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="" value="">
                            </div>
                            <!-- Tel # -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Telephone number</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="" value="">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
 	 <footer class="footer"></footer>
</div>

</html>