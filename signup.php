<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
						<img src="../assets/image/wolfie.png" class="image">
                        <h3>Welcome</h3>
                        <p>Barangay Web System</p>
						<a href="login.php" class="btn btn-sm btn-primary" id="submit" type="submit">Login</a>	  
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Please fill out the required fields *</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
										<div class="form-group">
                                            <input type="text" class="form-control" placeholder="Middle Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
										<div class="form-group">
                                            <input type="text" class="form-control" placeholder="Place of Birth *" value="" />
                                        </div>
										<div class="form-group">
                                    		<select name="zone" class="form-control">
												<option disabled selected hidden value="">Zone *</option>
                                        		<option value = "Zone 1">Zone 1</option>
                                        		<option value = "Zone 2">Zone 2</option>
                                        		<option value = "Zone 3">Zone 3</option>
                                        		<option value = "Zone 4">Zone 4</option>
                                    		</select>
                            			</div>   
										<div class="form-group">
                                            <input type="password" class="form-control" placeholder="Barangay *" value="" />
                                        </div>
										<div class="form-group">
                                    		<select name="civilStatus" class="form-control input-lg"> 
											<option disabled selected hidden value="">Civil Status</option>
								        	<option value="Single">Single</option>
                                        	<option value="Married">Married</option>
								        	<option value="Widowed">Widowed</option>
								        	<option value="Separated">Separated</option>
								        	<option value="Divorced">Divorced</option>
							        		</select>        
                            			</div>   
                                        <div class="form-group">
                                            <input type="occupation" class="form-control" placeholder="Occupation *" value="" />
                                        </div>
                                        <div class="form-group">
										<input type="date" class="form-control" id="inputbdate" name="bdate" value ="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Age *" value="" />
                                        </div>
										<div class="form-group">                      
                                    		<select name="sex" class="form-control input-lg"> 
												<option disabled selected hidden value="">Sex</option>
								        		<option value = "0">Female</option>
                                        		<option value = "1">Male</option>
						            		</select>
                            			</div>
										<div class="form-group">
                                    		<select name="civilStatus" class="form-control input-lg"> 
												<option disabled selected hidden value="">Blood Type</option>
								        		<option value = "AB+">AB+</option>
                                        		<option value ="AB-">AB-</option>
								        		<option value = "A+">A+</option>
								        		<option value = "A-">A-</option>
								        		<option value = "B+">B+</option>
								        		<option value = "B-">B-</option>
								        		<option value = "O+">O+</option>
								        		<option value = "O-">O-</option>
							        		</select>        
                            			</div>  
                                        <div class="form-group">
											<input type="text" class="form-control" placeholder="Nationality *" value="" />
                                        </div>
										<div class="form-group">
											<input class="form-control" id="inputHmember" type="number" min="1" name="numHouseHold" placeholder="No. of Household Members" value="">
										</div>
                                        <div class="form-group">
                                            <select class="form-control">
													<option disabled selected hidden value="">Educational Attainment</option>
                                                	<option value = "Not Applicable">Not Applicable</option>
                                					<option value = "Elementary Level">Elementary Level</option>
													<option value = "Elementary Graduate">Elementary Graduate</option>
                                					<option value = "Completer">Completer</option>
													<option value = "Senior High School">Senior High School</option>
                                					<option value = "College Level">College Level</option>
                                					<option value = "Vocational/TVET">Vocational/TVET</option>
                                					<option value = "Undergraduate (Bachelor’s Degree)">Undergraduate (Bachelor’s Degree)</option>
                                					<option value = "Postgraduate (Master’s Degree)">Postgraduate (Master’s Degree)</option>
                                					<option value = "Doctorate Degree (PhD)">Doctorate Degree (PhD)</option>
                                            </select>
                                        </div>
										<div class="form-group">
						    				<select name="voterStatus" class="form-control"> 
												<option disabled selected hidden value="">Voter Status</option>
												<option value = "Active">Active</option>
                								<option value = "Inactive">Inactive</option>
												<option value = "Cancelled">Cancelled</option>
                                				<option value = "Not Registered">Not Registered</option>
						    				</select>				
					        			</div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username *" value="" />
                                        </div>
										<div class="form-group">
                                            <input type="text" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister" value="Register"/>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>