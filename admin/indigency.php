<!DOCTYPE html>
<html class = "h-100"lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN | FORM REQUESTS</title>


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/admin_style.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/table.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/dropdown.css" type="text/css">
  <script src="../assets/js/dropdown.js"></script>
 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/dt-1.10.11,r-2.0.2/datatables.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 <!-- Nav tabs -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

<a role="button" class="dropdown-btn"><i class="fa fa-certificate"></i> Certificate</a>
<div class="dropdown-container">
    <a href="../admin/ResidentCertificate.php">Resident Certificate</a>
    <a href="../admin/indigency.php">Indigency</a>
</div>
	
<a href="..\connection\login.php" onclick="return confirm('Are you sure you want to log out?');">
  <i class="fas fa-sign-out-alt"></i> Logout</a>

</aside>

<main class="main">
  <div class="card shadow mb-0">
    <div class="container-xl px-4 mt-4">
        <h2> INDIGENCY </h2>
    <hr class="mt-0 mb-4">

        <div>                                              
          <a href="#addCertificateModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-circle"></i><span> Add Certificate</span></a>                          
          <a href="" class="btn btn-danger" data-toggle="modal"><i class="fa fa-ban"></i><span> Delete All</span></a>																
				  <input class="searchBar" type="search" placeholder="Search" title="Type here">									
				</div><br>
                           
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#example2-tab1" aria-controls="example2-tab1" role="tab" data-toggle="tab">Requests</a></li>
        <li role="presentation"><a href="#example2-tab2" aria-controls="example2-tab2" role="tab" data-toggle="tab">Approved</a></li>
        <li role="presentation"><a href="#example2-tab3" aria-controls="example2-tab3" role="tab" data-toggle="tab">Disapproved</a></li>
    </ul>

    <!-- Tab panes -->
      <!-- Requests -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="example2-tab1">
        <div class="table-responsive-sm">
          <table class="table table-bordered" id="" width="50%" cellspacing="0">
                        <thead>
                            <tr>

                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                <th><center>CERTIFICATE NO.</center></th>
                                <th><center>RESIDENT NAME</center></th>
                                <th><center>SEX</center></th>
                                <th><center>AGE</center></th>
                                <th><center>TYPE</center></th>
                                <th><center>PURPOSE</center></th>
                                <th><center>OR NUMBER</center></th>
                                <th><center>DATE REQUESTED</center></th>
                                <th style="width: 20% !important;"><center>Action</center></th>

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
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>

                        <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      
                      <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up"></i> Approve</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down"></i> Disapprove</button></td>

                      </tr>
                      


                        </tbody>
                    </table>	
                  
        </div>
      </div>

        <!-- Approved -->
        <div role="tabpanel" class="tab-pane fade in" id="example2-tab2">
          <div class="table-responsive-sm">
            <table class="table table-bordered" id="" width="50%" cellspacing="0">
                        <thead>
                            <tr>

                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                <th><center>CERTIFICATE NO.</center></th>
                                <th><center>RESIDENT NAME</center></th>                               
                                <th><center>TYPE</center></th>
                                <th><center>PURPOSE</center></th>
                                <th><center>OR NUMBER</center></th>
                                <th><center>DATE REQUESTED</center></th>
                                <th><center>PICK UP DATE</center></th>
                                <!-- cash on pick-up/not paid, paid -->
                                <th><center>PAYMENT STATUS</center></th>
                                <!-- pending, processing, completed -->
                                <th><center>STATUS</center></th> 
                                <th style="width: 15% !important;"><center>Action</center></th>

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
                        <td></td>    
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="button" value="Print" onclick="PrintDoc()" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Print</button> 
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></td>                                 
                       
                      </tr>                                     

                        </tbody>
                    </table>
                    
        </div>
          </div>
      

        <!-- Disapproved -->
        <div role="tabpanel" class="tab-pane fade in" id="example2-tab3">
          <div class="table-responsive-sm">
            <table class="table table-bordered" id="" width="50%" cellspacing="0">
                        <thead>
                            <tr>

                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                <th><center>CERTIFICATE NO.</center></th>
                                <th><center>RESIDENT NAME</center></th>
                                <th><center>SEX</center></th>
                                <th><center>AGE</center></th>
                                <th><center>TYPE</center></th>
                                <th><center>PURPOSE</center></th>
                                <th><center>OR NUMBER</center></th>
                                <th><center>DATE REQUESTED</center></th>
                                <th style="width: 8% !important;"><center>Action</center></th>

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
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></td>
                      </tr>
                      

                        </tbody>
                    </table>	

      </div>
        </div>

<?php 

  include('CertContent.php');

?>
           </div>
        </div>

    </div>
</div>
    
<!-- addCertificateModal -->
<div id="addCertificateModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Resident Name</label>
						<input type="text" class="form-control" required>
					</div>
          <div class="form-group">
						<label>Sex</label>
						<select name="" class="form-control" required> 
								<option disabled selected hidden></option>
								<option>Female</option>
                <option>Male</option>
					</select>
					</div>
          <div class="form-group">
						<label>Age</label>
						<input type="text" class="form-control" required>
					</div>
          <div class="form-group">
						<label>Type</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Purpose</label>
						<input type="text" class="form-control" required>
					</div>	
          <div class="form-group">
            <label>Date & Time Requested:</label>
            <span id="date"></span>
            <script>var x = new Date();
            document.getElementById("date").innerHTML=x.toLocaleString();</script>    
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

</main>


      <footer class="footer"></footer>
</div>

</html>