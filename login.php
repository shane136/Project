<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5"> 

                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img src="../image/wolfie.png" class="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <form method="post">
                    <div class="row px-3 mb-4">
                       
                    </div>

                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Username</h6></label>
                        <input class="mb-4" type="text" name="user_name" required="" placeholder="Enter your Username">
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                        <input type="password" name="password" autocomplete="current-password" id="text" required="" class="text" placeholder="Enter your Password">
                        <span class="p-viewer"> 
                            <i class="fa fa-eye-slash" aria-hidden="true" onclick="managePassword()" id="iconPassword"></i> 
				       </span>
                    </div>
                    <div class="row px-3 mb-4">
                        
                    </div>
                    <div class="row mb-3 px-3">
                         <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="row mb-4 px-3">
                        <small class="font-weight-bold">Don't have an account? <a href="../connection/signup.php">Register here.</a></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
                <div class="row px-3">
                <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. All rights reserved.</small>
                    <div class="social-contact ml-4 ml-sm-auto">
                    
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script> 

	function managePassword(){

		var password = document.getElementById("text");
		
		if(password.type === "password"){
			password.type = 'text';
			document.getElementById("iconPassword").className= "fa fa-eye";
		}else{
			password.type = 'password';
			document.getElementById("iconPassword").className= "fa fa-eye-slash";
		}
	}
</script>
</body>
</html>
