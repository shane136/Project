<?php 
session_start();

	include("../connection/connection.php");
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
<li><a href="..\connection\login.php" class="btn" onclick="return confirm('Are you sure you want to log out?');">
	<i class="fas fa-sign-out-alt"></i> Logout</a></li>
</div>
	</aside>

<main class="main">
<div class="card shadow mb-0">
    <div class="container-xl px-4 mt-4">
        <h2> BARANGAY BLOTTER </h2>
    <hr class="mt-0 mb-4">
                            <div class="box">
                                <div class="box-header">
                                  <div style="padding:10px;">
                                  
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="" ><i class="fa fa-user-plus" aria-hidden="true"></i> Add Blotter</button>  
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>      
                                   
                                </div>

              <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                        <thead>
                            <tr>

                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                <th><center>Date Recorded</center></th>
                                <th><center>COMPLAINANT</center></th>
                                <th><center>COMPLAINEE</center></th>
                                <th><center>COMPLAINT</center></th>
                                <th><center>ACTION TAKEN</center></th>
                                <th><center>STATUS</center></th>
                                <th><center>LOCATION OF INCIDENT</center></th>
                                <th style="width: 40px !important;">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                        	
    <!-- <td align="center"><a class="btn btn-danger" onclick="" href="#">Delete</a></td> -->

                        </tbody>
                    </table>
                </div>
            </div>

                              </div>
                            </div>
    </div>
</div>
</main>
 	 <footer class="footer"></footer>
</div>

</html>