<?php 

session_start();

	include("connection.php");
	include("functions.php");
	include("css.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
	
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header('location: ../Project/admin/index.php');
						die;
					}
				}
			}

			echo '<script> alert("WRONG PASSWORD OR USERNAME!")</script>'; 
		}else

		{
			echo '<script> alert("WRONG PASSWORD OR USERNAME!")</script>';
		}
	}

?>

	<div id="box">
		
		<form method="post">

			<div style="font-size: 20px; margin: 10px;color: black;">LOGIN</div>
            
			<div style="display: flex; flex-direction:row; align-items: center; padding: 15px; justify-content:center;"> 
				<input type="text" name="user_name" autofocus="" autocapitalize="none" autocomplete="username" required="" class="text" placeholder="username">
			</div>
            
            <div style="display: flex; flex-direction:row; align-items: center; padding: 15px; justify-content:center; margin: auto;">
				<input type="password" name="password" autocomplete="current-password" required="" id="text" class="text" placeholder="password">
				<span class="p-viewer"> 
					<i class="fa fa-eye" aria-hidden="true" onclick="managePassword()" id="iconPassword"></i> 
				</span>
			</div>
			
            <button type="submit" class="btn btn-primary" >Login</button> <br><br>
		
			<a href="signup.php">Click to Signup</a>
		</form>
	</div>
</body>
</html>

<script> 

	function managePassword(){

		var password = document.getElementById("text");
		
		if(password.type === "password"){
			password.type = 'text';
			document.getElementById("iconPassword").className= "fa fa-eye-slash";
		}else{
			password.type = 'password';
			document.getElementById("iconPassword").className= "fa fa-eye";
		}
	}
</script>