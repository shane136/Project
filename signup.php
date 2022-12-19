<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>SIGN UP</title>
	
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="../assets/css/admin_style.css" type="text/css">
	<script type="text/javascript" src="../assets/js/validation.js"> </script>

</head>
<body>

<div class="container" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form name="RegForm" method="post" class="form" role="form" onsubmit="return validateForm()">   
			<legend><h3>Please fill out the provided form.</h3></legend>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="fname" value="" class="form-control input-lg" placeholder="First Name"  />         
						</div>
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="mname" value="" class="form-control input-lg" placeholder="Middle Name"  />                      
						</div>
						<div class="col-xs-6 col-md-6">
                            <input type="text" name="lname" value="" class="form-control input-lg" placeholder="Last Name"  />                      
						</div>
						<div class="col-xs-6 col-md-6">
                            <input type="text" name="religion" value="" class="form-control input-lg" placeholder="Religion"  />                      
						</div>
                    </div>

					<input type="text" name="bplace" value="" class="form-control input-lg" placeholder="Birthplace"  />

					<div class="row">
                        <div class="col-xs-7 col-md-7">
                            <input type="text" name="brgy" value="" class="form-control input-lg" placeholder="Barangay"  />         
						</div>
					
                        <div class="col-xs-5">
							<select name="zone" class="form-control input-lg"> 
								<option disabled selected hidden>Zone</option>
								<option>Zone 1</option>
                                <option>Zone 2</option>
								<option>Zone 3</option>
								<option>Zone 4</option>
							</select>                         
						</div>
					

						<div class="col-xs-6 col-md-6">
							<select name="cstatus" class="form-control input-lg"> 
								<option disabled selected hidden>Civil Status</option>
								<option>Single</option>
                                <option>Married</option>
								<option>Widowed</option>
								<option>Separated</option>
								<option>Divorced</option>
							</select>                    
						</div>

						<div class="col-xs-6 col-md-6">
                            <input type="text" name="occupation" value="" class="form-control input-lg" placeholder="Occupation"  />                      
						</div>

						<div class="col-xs-4"> 
                            <input type="text" name="age" value="" class="form-control input-lg" placeholder="Age"  />   
						</div>

						<div class="col-xs-4">
							<select name="btype" class="form-control input-lg"> 
								<option disabled selected hidden>Blood Type</option>
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

						<div class="col-xs-4">
                            <input type="text" name="nationality" value="" class="form-control input-lg" placeholder="Nationality"  />                      
						</div>
									
					</div>

				<div class="form-group row">
					<div class="col-xs-7"> 
						<input name="" type="number" min="1" value="" class="form-control input-lg" placeholder="No. of Household Members"/>
					</div>

					<div class="col-xs-5">
						<select name="sex" class="form-control input-lg"> 
								<option disabled selected hidden>Sex</option>
								<option>Female</option>
                                <option>Male</option>
						</select>
					</div>
				</div>
					<div class="form-group">
                            <select name="education" class="form-control input-lg">
                                <option selected></option>
								<option disabled selected hidden>Educational Attainment</option>
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
	
					<div class="form-group"> 
								<select name="voter" id="voter" class="form-control input-lg"> 
									<option disabled selected hidden>Voter Status</option>
									<option>Active</option>
                					<option>Inactive</option>
									<option>Cancelled</option>
									<option>Not Registered</option>
								</select>
					</div>

                    <input type="text" name="username" value="" class="form-control input-lg" placeholder="Username"  />
					<input type="password" name="password" value="" autocomplete="current-password" id="text" class="form-control input-lg" placeholder="Password"  />
					
					<span class="viewer"> 
					<i class="fa fa-eye-slash" aria-hidden="true" onclick="managePassword()" id="iconPassword"></i> 
					</span>
					
                   
					<label>Birth Date</label>                
					<div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select name="month" class = "form-control input-lg">
								
							    <option disabled selected hidden>Month</option>
								<option value="01">Jan</option>
								<option value="02">Feb</option>
								<option value="03">Mar</option>
								<option value="04">Apr</option>
								<option value="05">May</option>
								<option value="06">Jun</option>
								<option value="07">Jul</option>
								<option value="08">Aug</option>
								<option value="09">Sep</option>
								<option value="10">Oct</option>
								<option value="11">Nov</option>
								<option value="12">Dec</option>
							</select>                      
						</div>

 						<div class="col-xs-4 col-md-4">
    						<select name="day" class = "form-control input-lg">
								
							    <option disabled selected hidden>Day</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>

							</select>                      
						</div>

						<div class="col-xs-4 col-md-4">
   							 <select name="year" class = "form-control input-lg">

								<option disabled selected hidden>Year</option>
							 	<option value="1935">1935</option>
								<option value="1936">1936</option>
								<option value="1937">1937</option>
								<option value="1938">1938</option>
								<option value="1939">1939</option>
								<option value="1940">1940</option>
								<option value="1941">1941</option>
								<option value="1942">1942</option>
								<option value="1943">1943</option>
								<option value="1944">1944</option>
								<option value="1945">1945</option>
								<option value="1946">1946</option>
								<option value="1947">1947</option>
								<option value="1948">1948</option>
								<option value="1949">1949</option>
								<option value="1950">1950</option>
								<option value="1951">1951</option>
								<option value="1952">1952</option>
								<option value="1953">1953</option>
								<option value="1954">1954</option>
								<option value="1955">1955</option>
								<option value="1956">1956</option>
								<option value="1957">1957</option>
								<option value="1958">1958</option>
								<option value="1959">1959</option>
								<option value="1960">1960</option>
								<option value="1961">1961</option>
								<option value="1962">1962</option>
								<option value="1963">1963</option>
								<option value="1964">1964</option>
								<option value="1965">1965</option>
								<option value="1966">1966</option>
								<option value="1967">1967</option>
								<option value="1968">1968</option>
								<option value="1969">1969</option>
								<option value="1970">1970</option>
								<option value="1971">1971</option>
								<option value="1972">1972</option>
								<option value="1973">1973</option>
								<option value="1974">1974</option>
								<option value="1975">1975</option>
								<option value="1976">1976</option>
								<option value="1977">1977</option>
								<option value="1978">1978</option>
								<option value="1979">1979</option>
								<option value="1980">1980</option>
								<option value="1981">1981</option>
								<option value="1982">1982</option>
								<option value="1983">1983</option>
								<option value="1984">1984</option>
								<option value="1985">1985</option>
								<option value="1986">1986</option>
								<option value="1987">1987</option>
								<option value="1988">1988</option>
								<option value="1989">1989</option>
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
							</select>                       
						</div>
                        
</div>

<!-- upload file -->

<label>Upload 2x2 Photo (.png, .jpg, & .jpeg)</label><br>
	<div class="col-md-6">
        <input 		
		type="file" 
		class="form-control"
		accept=".jpg, .jpeg, .png"/><br>   
    </div>
     		
			
<div style="padding:10px;">
	<button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">Register</button>	
	<a href="login.php" class="btn btn-lg btn-primary btn-block " type="submit">Login</a>	  
</div>

				</form>          
			</div>
		</div>            
	</div>
</div>

</body>


</html>