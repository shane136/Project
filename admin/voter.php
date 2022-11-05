<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../assets/css/voter_style.css">
<script src="../assets/js/voterTabs.js"></script>
<script src="../assets/js/voter.js"></script>

<!-- datatable -->
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<!-- Voter's List -->
<div id="voterStatusModal" class="modal fade bd-example-modal-xl">
	<div class="modal-dialog modal-xl modal-dialog-scrollable">
		<div class="modal-content">
			
				<div class="modal-header">						
					<h4 class="modal-title">Voter's Status List</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
		<div class="modal-body">

<div class="tabContainer">
    <div class="buttonContainer">
        <button onclick="showPanel('panelA')">ACTIVE</button>
        <button onclick="showPanel('panelB')">INACTIVE</button>
        <button onclick="showPanel('panelC')">CANCELLED</button>
        <button onclick="showPanel('panelD')">NOT REGISTERED</button>
    </div>

<div class="panel" id="panelA">

<div class="container">
<br>

<!-- <button type="button" onclick="exportTable()"><i class="fas fa-file-csv"></i> CSV</button>
<button type="button" onclick="generatePDF()"><i class="fa fa-file-pdf-o"></i> PDF</button>
<button type="button" onclick="printTable()"><i class="fa fa-print"></i> Print</button> -->

<!-- <input class="searchBar" type="search" placeholder="Search..." id="searchData" onkeyup="searchRow()" title="Type here"> -->

<br><br>
<div class="table-responsive-sm"> 
<table class="table table-bordered" id="active">
    <thead>
      <tr>
        <th>Resident ID</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>
    </thead>
    <tbody id="tableBody">
      <tr>
        <td>1</td>
        <td>Rea</td>
        <td>Shane</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Ror</td>
        <td>Sample</td>
      </tr>
    </tbody>
  </table>
  
</div>
</div>
</div>  

<div style="display: none;" class="panel" id="panelB">

<div class="container">
<br>

<!-- <button type="button" onclick=""> CSV</button>
<button type="button" onclick=""> PDF</button>
<button type="button" onclick=""> Print</button>

<input class="searchBar" type="search" placeholder="Search..." id="searchData" onkeyup="searchRow()" title="Type here"> -->

<br><br>
<div class="table-responsive-sm"> 
<table class="table table-bordered" id="inactive">
    <thead>
      <tr>
        <th>Resident ID</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>
    </thead>
    <tbody id="tableBody">
      <tr>
        <td>1</td>
        <td>Shane</td>
        <td>Pags</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Mang</td>
        <td>Kepweng</td>
      </tr>
    </tbody>
  </table>
  
</div>
</div>
</div>

<div style="display: none;" class="panel" id="panelC">

<div class="container">
<br>

<!-- <button type="button" onclick=""> CSV</button>
<button type="button" onclick=""> PDF</button>
<button type="button" onclick=""> Print</button>

<input class="searchBar" type="search" placeholder="Search..." id="searchData" onkeyup="searchRow()" title="Type here"> -->

<br><br>
<div class="table-responsive-sm"> 
<table class="table table-bordered" id="cancelled">
    <thead>
      <tr>
        <th>Resident ID</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>
    </thead>
    <tbody id="tableBody">
      <tr>
        <td>1</td>
        <td>Nas</td>
        <td>Rollah</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Ganda</td>
        <td>Mato</td>
      </tr>
    </tbody>
  </table>
  
</div>
</div>

</div>

<div style="display: none;" class="panel" id="panelD">

<div class="container">
<br>

<!-- <button type="button" onclick=""> CSV</button>
<button type="button" onclick=""> PDF</button>
<button type="button" onclick=""> Print</button>

<input class="searchBar" type="search" placeholder="Search..." id="searchData" onkeyup="searchRow()" title="Type here"> -->

<br><br>
<div class="table-responsive-sm"> 
<table class="table table-bordered" id="notRegistered">
    <thead>
      <tr>
        <th>Resident ID</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>
    </thead>
    <tbody id="tableBody">
      <tr>
        <td>1</td>
        <td>RR</td>
        <td>PP</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Abcdefg</td>
        <td>Hijklmnop</td>
      </tr>
    </tbody>
  </table>
  
</div>
</div>

</div>

</div>
			
				<!-- <div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
				</div> -->
			
		</div>
	</div>
</div>

