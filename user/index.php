<?php 
session_start();

    include("../connection/connection.php");
	include("../functions.php");
  

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
         <title>USER INTERFACE</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
         <link rel="stylesheet" href="../assets/css/user_style.css" type="text/css">
    </head>
<body>


    <input type="checkbox" id="check">

    <header>
        <label for="check">
            <i class="fa-solid fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>USER<span>DASHBOARD</span></h3>
        </div>

        <div class="right_area">
            <a href="..\connection\login.php" onclick="return confirm('Are you sure you want to log out?');" class="logout_btn">Logout</a>
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

        <div class="content">

        </div>




</body>
</html>