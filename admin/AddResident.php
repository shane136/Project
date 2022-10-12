<script type="text/javascript" src="../assets/js/validation.js"></script>

<!-- addResidentModal -->
<div id="addResidentModal" class="modal fade bd-example-modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form name="RegForm" method="post" action="" name="Vform" role="form" onsubmit="return validateForm()">   
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
				<div class="row gx-3 mb-3">	
					<!-- dre boss-->
					<div class="col-md-4" id="fname_div">
						<label>First Name</label>
						<input type="text" class="form-control" name="fname">
						<div id="fname_error"></div>
					</div>
					<!-- dre boss-->
          			<div class="col-md-4">
						<label>Middle Name</label>
						<input type="text" class="form-control">
					</div>
          			<div class="col-md-4">
						<label>Last Name</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-6">
						<label>Place of Birth</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-6">
						<label>Barangay</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-4">
						<label>Zone</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-4">
						<label>Civil Status</label>
						<select name="" class="form-control"> 
							<option disabled selected hidden></option>
							<option>Single</option>
                            <option>Married</option>
							<option>Widowed</option>
							<option>Separated</option>
							<option>Divorced</option>
						</select>    
					</div>
					<div class="col-md-4">
						<label>Occupation</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-4">
						<label>Age</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-4">
						<label>Blood Type</label>
						<select name="" class="form-control input-lg"> 
							<option disabled selected hidden></option>
							<option>AB+</option>
                            <option>AB-</option>
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>O+</option>
							<option>O-</option>
						</select>
					</div>
					<div class="col-md-4">
						<label>Nationality</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-4">
						<label>No. of Household Member</label>
						<input type="number" min="1" class="form-control">
					</div>
          			<div class="col-md-4">
						<label>Sex</label>
						<select name="" class="form-control"> 
								<option disabled selected hidden></option>
								<option>Female</option>
                				<option>Male</option>
						</select>
					</div>
					<div class="col-md-4">
						<label>Educational Attainment</label>
						<select name="" class="form-control">
                                <option disabled selected hidden></option>								        
								<option>Not Applicable</option>
                                <option>Elementary Level</option>
								<option>Elementary Graduate</option>
                                <option>Completer</option>
								<option>Senior High School</option>
                                <option>College Level</option>
                                <option>Vocational/TVET</option>
                                <option>Undergraduate (Bachelor’s Degree)</option>
                                <option>Postgraduate (Master’s Degree)</option>
                                <option>Doctorate Degree (PhD)</option>
                            </select>
					</div>		
					<div class="col-md-4">
						<label>Date of Birth</label>
						<input type="date" class="form-control">
					</div>	
					<div class="col-md-8">
						<label>Photo (.jpg, .jpeg & .png)</label>
						<input type="file" class="form-control" accept= ".png, .jpg, .jpeg" >
					</div>
					<div class="col-md-6">
						<label>Username</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-6">
						<label>Password</label>
						<input type="text" class="form-control">
					</div>
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
