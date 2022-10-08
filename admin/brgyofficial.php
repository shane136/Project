<?php 
session_start();

	include("../connection/connection.php");
	include("../functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html class = "h-100"lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADMIN | BARANGAY OFFICIALS</title>


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/admin_style.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/table.css" type="text/css">
  <script type="text/javascript" src="../assets/js/table.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 

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

<a href="..\admin\certificate.php"><i class="fa fa-certificate"></i> Certificate</a>
	
<a href="..\connection\login.php" onclick="return confirm('Are you sure you want to log out?');">
  <i class="fas fa-sign-out-alt"></i> Logout</a>

</aside>

  <main class="main">
   <div class="card shadow mb-0">
    <div class="container-xl px-4 mt-4">
        <h2> LIST OF BARANGAY OFFICIALS </h2>
    <hr class="mt-0 mb-4">
                            <div class="box">
                                <div class="box-header">
                                  <div style="padding:10px;">
                                                    
                                  <a href="#addOfficialModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-circle"></i><span> Add New</span></a>
                                  <a href="" class="btn btn-danger" data-toggle="modal"><i class="fa fa-ban"></i><span> Delete All</span></a>
                                </div>
            
                                  <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                        <thead>
                            <tr>

                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                <th><center>PHOTO</center></th>
                                <th><center>NAME</center></th>
                                <th><center>POSITION</center></th>
                                <th><center>TERM</center></th>
                                <th><center>ADDRESS</center></th>
                                <th style="width: 15% !important;"><center>Option</center></th>
                                   
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
                        <td><a href="#editOfficialModal" class="btn btn-warning btn-sm" data-toggle="modal"><i class="fa fa-pencil"></i><span> Edit</span></a>
							          <a href="#deleteOfficialModal" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa fa-minus-circle"></i><span> Delete</span></a>
                        </td>
                       
                      </tr>
                                            
                    
                        </tbody>
                    </table>
                    <div class="pagination-container"><ul class="pagination"></ul></div>
                </div>
            </div>

        </div>

<!-- addOfficialModal -->

<div id="addOfficialModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add Official</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Position</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
          <div class="form-group">
						<label>Term</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Status</label>
						<input type="text" class="form-control" required>
					</div>		
          <div class="form-group">
						<label>Photo (.jpg, .jpeg & .png)</label>
						<input type="file" class="form-control" accept= ".png, .jpg, .jpeg" required>
					</div>			
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- editOfficialModal -->

<div id="editOfficialModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
      <div class="modal-header">						
					<h4 class="modal-title">Edit Official</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Position</label>
						<input type="text" class="form-control" required>
					</div>
          <div class="form-group">
						<label>Term</label>
						<input type="text" class="form-control" required>
					</div>	
          <div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>			
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>


    </main>

    <footer class="footer"></footer>
</div>

</html>