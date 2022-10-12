<!-- EditResidentModal -->
<div id="editResidentModal" class="modal fade bd-example-modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Details</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
				<div class="row gx-3 mb-3">					
					<div class="col-md-4">
						<label>First Name</label>
						<input type="text" class="form-control" required>
					</div>
          			<div class="col-md-4">
						<label>Middle Name</label>
						<input type="text" class="form-control" required>
					</div>
          			<div class="col-md-4">
						<label>Last Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="col-md-6">
						<label>Place of Birth</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="col-md-6">
						<label>Barangay</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="col-md-4">
						<label>Zone</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="col-md-4">
						<label>Civil Status</label>
						<select name="" class="form-control" required> 
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
						<input type="text" class="form-control" required>
					</div>
					<div class="col-md-4">
						<label>Age</label>
						<input type="text" class="form-control" required>
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
						<input type="text" class="form-control" required>
					</div>
					<div class="col-md-4">
						<label>No. of Household Member</label>
						<input type="number" min="1" class="form-control" required>
					</div>
          			<div class="col-md-4">
						<label>Sex</label>
						<select name="" class="form-control" required> 
								<option disabled selected hidden></option>
								<option>Female</option>
                				<option>Male</option>
						</select>
					</div>
					<div class="col-md-4">
						<label>Educational Attainment</label>
						<select name="" class="form-control" required>
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
						<input type="date" class="form-control" required>
					</div>	
					<div class="col-md-8">
						<label>Photo (.jpg, .jpeg & .png)</label>
						<input type="file" class="form-control" accept= ".png, .jpg, .jpeg" required>
					</div>
					<div class="col-md-6">
						<label>Username</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="col-md-6">
						<label>Password</label>
						<input type="text" class="form-control" required>
					</div>
				</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Save Changes">
				</div>
			</form>
		</div>
	</div>
</div>