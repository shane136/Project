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
  <link rel="stylesheet" href="../assets/css/print.css" type="text/css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/dt-1.10.11,r-2.0.2/datatables.min.css">

   <!-- html2pdf CDN-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>
  

<div class="grid-container">
  <header class="header">
	
	</header>
 	
	<aside class="sidenav">

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

<div class="ms-2"> 
  <span class="name"> DASHBOARD</span>
</div>
<ul>

  <li><a href="..\admin\home.php" class="btn">
    <i class="fa fa-home"></i> Home</a></li>

  <li><a href="..\admin\BrgyProfile.php" class="btn">
    <i class="fa fa-info-circle"></i> Barangay Profile</a></li>

  <li><a href="..\admin\BrgyOfficial.php" class="btn">
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
        <h2> CERTIFICATE REQUESTS </h2>
    <hr class="mt-0 mb-4">
                           
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
        <table class="table table-bordered" id="example2-tab1-dt" width="50%" cellspacing="0">
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
                                <th style="width: 19% !important;"><center>Action</center></th>

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
                      

                        </tbody>
                    </table>	
        </div>

        <!-- Approved -->
        <div role="tabpanel" class="tab-pane fade in" id="example2-tab2">
           <table class="table table-bordered" id="example2-tab2-dt" width="50%" cellspacing="0">
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
                                <th><center>PAYMENT STATUS</center></th>
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

        <!-- Disapproved -->
        <div role="tabpanel" class="tab-pane fade in" id="example2-tab3">
           <table class="table table-bordered" id="example2-tab3-dt" width="50%" cellspacing="0">
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
        </div>

    </div>
</div>
    
       
        <script src="../assets/js/script.js"> </script>


<!-- CERTIFICATE CONTENT -->
<div class="hideContent" id="printarea">
<div class="container1">
  <img class="logo" src="../assets/image/logo.png"> 
<div class="header"> 
 <p><span>Republic of the Philippines <br>
            Iligan City<p> 
    <p>BARANGAY WOLVES <br>
Office of the Barangay Council</span></p>
</div>
</div>


<hr>

            <h1 class="content">CERTIFICATION</h1>

<div class="photo">

</div>

<br>
                       
  <p>TO WHOM IT MAY CONCERN:</p><br><br>
    
    <p class="body">

        This is to certify that <u> NAME OF RESIDENT </u> of legal age, married/single, Filipino, is a bonafide resident
      of <u> ADDRESS OF RESIDENT </u>, Barangay Wolves, Iligan City, and that he/she has no derogatory/criminal records filed
      in this Barangay. <br>


      <p class="body">  This Certification is issued upon his/her request for: </p> 
      

  
        <div class="box">
          <ul class="a">
        
        <li>
             <input type="checkbox">
             <label class="container">Employment
           </label>
        </li>
         
        <li>
             <input type="checkbox">
             <label class="container">Overseas Employment
           </label>
        </li>

        <li>
             <input type="checkbox">
             <label class="container">Loan
           </label>
        </li>

        <li>
             <input type="checkbox">
             <label class="container">Postal ID
           </label>
        </li>

        <li>
             <input type="checkbox">
             <label class="container">Scholarship
           </label>
        </li>

        <li>
             <input type="checkbox">
             <label class="container">Others: <u>provide specific</u>
           </label>
        </li>
          </ul><br>
          
    </p>
       
</div>

  <p>Issued this <u> DATE </u> day of <u> MONTH </u> <u> YEAR </u>.</p> <br><br>

<div class="name"> 
  <img class="sign" src="../assets/image/signature.png">
  <p class="a"><u>ABCDEFGH I. JKLMNOP</u></p>
  <p class="b">Barangay Chairman</p>
</div>

<br class="bottom">
<h4>NOT VALID WITHOUT SEAL</h4>

</main>


      <footer class="footer"></footer>
</div>

</html>