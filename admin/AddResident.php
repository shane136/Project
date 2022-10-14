

<!-- addResidentModal -->
<div id="addResidentModal" class="modal fade bd-example-modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- <form name="RegForm" role="form">    -->
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
				<div class="row gx-3 mb-3">	
					<div class="col-md-4">
						<label>First Name</label>
						<input type="text" class="form-control" id="fname" name="fname" onkeyup="checkValidation()">
						<div>
							<p id="firstName" class="text text-danger" style="display:none;">First Name Is Required</p> 
						</div>
					</div>
          			<div class="col-md-4">
						<label>Middle Name</label>
						<input type="text" class="form-control" id="mname" name="mname" onkeyup="checkValidation()">
						<div>
							<p id="midName" class="text text-danger" style="display:none;">Middle Name Is Required</p>
						</div>
					</div>
          			<div class="col-md-4">
						<label>Last Name</label>
						<input type="text" class="form-control" id="lname" name="lname" onkeyup="checkValidation()">
						<div>
							<p id="lastName" class="text text-danger" style="display: none;">Last Name Is Required</p>
						</div>
					</div>
					<div class="col-md-6">
						<label>Place of Birth</label>
						<input type="text" class="form-control" id="place" name="place" onkeyup="checkValidation()">
						<div>
							<p id="placeOfBirth" class="text text-danger" style="display: none;">Required*</p>
						</div>
					</div>
					<div class="col-md-6">
						<label>Barangay</label>
						<input type="text" class="form-control" id="brgy" name="brgy" onkeyup="checkValidation()">
						<div>
							<p id="barangay" class="text text-danger" style="display: none;">Required*</p>
						</div>
					</div>
					<div class="col-md-4">
						<label>Zone</label>
						<input type="text" class="form-control" id="zone" name="zone" onkeyup="checkValidation()">
						<div>
							<p id="zoneName" class="text text-danger" style="display: none;">Required*</p>
						</div>
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
					<!-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> -->

					<button type="" class="btn btn-success" onclick="validateForm()">Add</button>
				</div>
			<!-- </form> -->
		</div>
	</div>
</div>

