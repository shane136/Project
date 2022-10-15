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
						<select name="cstatus" id="cstatus" class="form-control" onclick="checkStatus()"> 
							<option disabled selected hidden value=""></option>
							<option value="Single">Single</option>
                            <option value="Married">Married</option>
							<option value="Widowed">Widowed</option>
							<option value="Separated">Separated</option>
							<option value="Divorced">Divorced</option>
						</select>    
						<div>
							<p id="cStatus" class="text text-danger" style="display: none;">Please select an option</p>
						</div>
					</div>
					<div class="col-md-4">
						<label>Occupation</label>
						<input type="text" class="form-control" id="occupation" name="occupation" onkeyup="checkValidation()">
						<div>
							<p id="occupationName" class="text text-danger" style="display: none;">Required*</p>
						</div>
					</div>
					<div class="col-md-4">
						<label>Age</label>
						<input type="text" class="form-control" id="age" name="age" onkeyup="checkValidation()">
						<div>
							<p id="ageName" class="text text-danger" style="display: none;">Required*</p>
						</div>
					</div>
					<div class="col-md-4">
						<label>Blood Type</label>
						<select name="btype" id="btype" class="form-control input-lg" onclick="checkBtype()"> 
							<option disabled selected hidden value=""></option>
							<option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						</select>
						<div>
							<p id="btypeName" class="text text-danger" style="display: none;">Please select an option</p>
						</div>
					</div>
					<div class="col-md-4">
						<label>Nationality</label>
						<input type="text" class="form-control" id="nationality" name="nationality" onkeyup="checkValidation()">
						<div>
							<p id="nationalityName" class="text text-danger" style="display: none;">Required*</p>
						</div>
					</div>
					<div class="col-md-4">
						<label>No. of Household Member</label>
						<input type="number" min="1" class="form-control" id="member" name="member" onclick="checkMember()">
						<div>
							<p id="numberName" class="text text-danger" style="display: none;">Required*</p>
						</div>
					</div>
          			<div class="col-md-4">
						<label>Sex</label>
						<select name="sex" id="sex" class="form-control" onclick="checkSex()"> 
								<option disabled selected hidden value=""></option>
								<option value="Female">Female</option>
                				<option value="Male">Male</option>
						</select>
						<div>
							<p id="sexName" class="text text-danger" style="display: none;">Please select an option</p>
						</div>
					</div>
					<div class="col-md-4">
						<label>Educational Attainment</label>
						<select name="education" id="education" class="form-control" onclick="checkEduc()">
                                <option disabled selected hidden value=""></option>								        
								<option value="Not Applicable">Not Applicable</option>
                                <option value="Elementary Level">Elementary Level</option>
								<option value="Elementary Graduate">Elementary Graduate</option>
                                <option value="Completer">Completer</option>
								<option value="Senior High School">Senior High School</option>
                                <option value="College Level">College Level</option>
                                <option value="Vocational/TVET">Vocational/TVET</option>
                                <option value="Undergraduate (Bachelor's Degree)">Undergraduate (Bachelor’s Degree)</option>
                                <option value="Posgraduate (Master's Degree)">Postgraduate (Master’s Degree)</option>
                                <option value="Doctorate Degree (PhD)">Doctorate Degree (PhD)</option>
                            </select>
							<div>
								<p id="educName" class="text text-danger" style="display: none;">Please select an option</p>
							</div>
					</div>		
					<div class="col-md-4">
						<label>Date of Birth</label>
						<input type="date" value="" class="form-control" id="bdate" name="bdate" onclick="checkBdate()">
						<p id="bdateName" class="text text-danger" style="display: none;">Required*</p>
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

