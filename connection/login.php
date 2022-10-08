<?php 

session_start();

	include("connection.php");
    include("../login.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

	
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			
			//read from database
			$query = "SELECT * FROM user WHERE username = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result){
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] == $password){
						$location = ($user_data['type'] == 1 ) ? "Location: \\Project\\admin\\index.php" : "Location: \\Project\\user\\profile.php";
						$_SESSION['userData'] = $user_data;
						$residentID = $user_data['resident_id'];
						$residentData = "SELECT * FROM resident WHERE id = '$residentID' limit 1";
					
						$residentResultData = mysqli_fetch_assoc(mysqli_query($con,$residentData));
						$_SESSION['residentData'] = $residentResultData;
						header($location);
						die; 
					}
				}
			}
		
				// $_SESSION['invalidCredentials'] = "Username or Password is Wrong";
				// header("Location: \\Project\\connection\\login.php");
			
			

		}
	}

?>

