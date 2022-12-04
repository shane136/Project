<!DOCTYPE html>
<html class = "h-100"lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADMIN | HOMEPAGE</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/admin_style.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/table.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/card-stat.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/graph.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/dropdown.css" type="text/css">
  <script src="../assets/js/dropdown.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script src="../assets/js/barGraph.js"></script>
  <script src="../assets/js/pieChart.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  
</head>
  

<div class="grid-container">
  <header class="header">
	
	</header>
 	
<aside class="sidenav" id="side">

<div class="d-flex justify-content-center align-items-center px-3 py-4">
    <img
         class="rounded-pill img-fluid"
         width="65"
		 src = "https://img.freepik.com/premium-vector/print-design-wolf-character-league-your-mascot_413831-70.jpg?w=2000" 
         alt="profile">
    <div class="ms-2">
		<span class="name">Shane Pags</span> <br>
        <span class="name">Admin</span>
    </div>
</div>

<div class="ms-2"> <span class="name"> DASHBOARD</span></div>

  <a href="..\admin\home.php"><i class="fa fa-home"></i> Home</a>

  <a href="..\admin\BrgyProfile.php"><i class="fa fa-info-circle"></i> Barangay Profile</a>

  <a href="..\admin\BrgyOfficial.php"><i class="fa fa-file"></i> Barangay Officials</a>

  <a href="..\admin\resident.php"><i class="fa fa-user"></i> Resident Record</a>

  <a href="..\admin\blotter.php"><i class="fa fa-database"></i> Blotter Record</a>

<div class="ms-2"><span class="name"> FORMS</span></div>

<a role="button" class="dropdown-btn"><i class="fa fa-list-ul"></i> Certificates</a>
<div class="dropdown-container">
    <a href="../admin/ResidentCertificate.php"><iconify-icon icon="fa:check-square-o"></iconify-icon> Resident Certificate</a>
    <a href="../admin/indigency.php"><iconify-icon icon="fa:check-square-o"></iconify-icon> Indigency</a>
</div>
	
<a href="..\connection\login.php" onclick="return confirm('Are you sure you want to log out?');">
  <i class="fas fa-sign-out-alt"></i> Logout</a>

</aside>

<!-- main_content -->
<main class="main">
   
<div class="container">
    <div class="row" id="test">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Population</h6>
                    <h2 class="text-right"><i class="fa fa-users f-left"></i><span>486</span></h2>
                    <p class="m-b-0">Total Population<span class="f-right">351</span></p>      
                    <a href="../admin/resident.php"><i class="fa fa-chevron-circle-right f-right" id="cursor"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Blotter</h6>
                    <h2 class="text-right"><i class="fa fa-database f-left"></i><span>486</span></h2>
                    <p class="m-b-0">Total Blotter<span class="f-right">351</span></p>
                    <a href="../admin/blotter.php"><i class="fa fa-chevron-circle-right f-right" id="cursor"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Certificate Received</h6>
                    <h2 class="text-right"><i class="fa fa-file f-left"></i><span>486</span></h2>
                    <p class="m-b-0">Completed Requests<span class="f-right">351</span></p>
                    <a href="../admin/certificate.php"><i class="fa fa-chevron-circle-right f-right" id="cursor"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Active Voters</h6>
                    <h2 class="text-right"><i class="fa fa-list f-left"></i><span>486</span></h2>
                    <p class="m-b-0">Total Active Voters<span class="f-right">351</span></p>
                    <a href="#voterStatusModal" data-toggle="modal"><i class="fa fa-chevron-circle-right f-right" id="cursor"></i></a>
                </div>
            </div>
        </div>
	</div>
</div>

<hr>
  <!-- bar_graph -->
<div class="container1">
  <div class="row" id="a">
         <div class="block" id="bar">
              <canvas id="myChart"></canvas>
          </div>
            
          <div class="block" id="pie">
              <canvas id="pieChart"></canvas>
          </div>   
      </div>                          
</div>

<?php include '../admin/voter.php';?>
</main>




 	 <footer class="footer"></footer>
</div>

</html>