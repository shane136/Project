<?php
session_start();
  $firstName = $_SESSION['residentData']['fname'];
  $lastName = $_SESSION['residentData']['lname'];
  $middleName = $_SESSION['residentData']['mname'];
  $age = $_SESSION['residentData']['age'];
  $zone = $_SESSION['residentData']['zone'];
  $barangay = $_SESSION['residentData']['barangay'];
  $voterStatus = $_SESSION['residentData']['status'];
?>




<!DOCTYPE html>
<html class = "h-100"lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADMIN | BLOTTER RECORDS</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/admin_style.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/table.css" type="text/css">
  <script type="text/javascript" src="../assets/js/page.js"></script>
  <link rel="stylesheet" href="../assets/css/dropdown.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/page.css" type="text/css">
  <script src="../assets/js/dropdown.js"></script>
  <script type="text/javascript" src="../assets/js/modal.js"></script>
  <script type="text/javascript" src="../assets/js/validateAddRes.js"></script>
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

<main class="main">
<div class="card shadow mb-0">
    <div class="container-xl px-4 mt-4">
        <h2> RESIDENTS PROFILE </h2>
    <hr class="mt-0 mb-4">
                            <div class="box">
                                <div class="box-header">
                                  <div style="padding:10px;">
                                  
                                    <a href="#addResidentModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-circle"></i><span> Add New</span></a>                          
                                    <a href="" class="btn btn-danger" data-toggle="modal"><i class="fa fa-ban"></i><span> Delete All</span></a>
                                   
                                  </div>

              <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>

                                <th></th>
                                <th><center>ID</center></th>
                                <th><center>PHOTO</center></th>
                                <th><center>NAME</center></th>
                                <th><center>AGE</center></th>
                                <th><center>SEX</center></th>
                                <th><center>COMPLETE ADDRESS</center></th>
                                <th><center>VOTER STATUS</center></th>
                                <th style="width: 16% !important;"><center>Action</center></th>
								

                            </tr>
                        </thead>
                        <tbody>
                        	
                        <tr>

                        <td><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></td>
							          <td></td>
							          <td></td>
							          <td><?php echo $firstName. " ". $middleName." ". $lastName?></td>
							          <td><?php echo $age;?></td>     
							          <td><?php echo ($_SESSION['residentData']['sex'] == 0) ? "Female" : "Male";?></td>      
							          <td><?php echo $zone. ", ". $barangay?></td>     
                        <td><?php echo $voterStatus;?></td>        
							          <td>
								          <a href="#editResidentModal" class="btn btn-warning btn-sm" data-toggle="modal"><i class="fa fa-pencil"></i><span> Edit</span></a>
								          <a href="#deleteOfficialModal" class="btn btn-danger btn-sm" data-toggle="modal" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-minus-circle"></i><span> Delete</span></a>
							          </td>

                        </tr>



                    
                        </tbody>
                    </table>
				
                  </div>
              </div>
          </div>
       </div>
    </div>
            <div class="pagination-container">
              <ul class="pagination"></ul>
            </div>
</div>

<?php include '../admin/AddResident.php';?>
<?php include '../admin/EditResident.php';?>	


</main>
<footer class="footer"></footer>
</div>

</html>