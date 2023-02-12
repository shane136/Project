<?php 
    require($_SERVER['DOCUMENT_ROOT']."/Project/connection/connection.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $firstName = $_POST['fname'];
		$middleName = $_POST['mname'];
		$lastName = $_POST['lname'];
		$place = $_POST['place'];
		$zone = $_POST['zone'];
        $brgy = $_POST['brgy'];
        $cstatus = $_POST['cstatus'];
        $occupation = $_POST['occupation'];
        $bdate = $_POST['bdate'];
        $photo = $_POST['photo'];
        $age = $_POST['age'];
        $gender = $_POST['sex'];
        $bloodType = $_POST['btype'];
        $nationality = $_POST['nationality'];
        $member = $_POST['member'];
        $education = $_POST['education'];
        $voter = $_POST['voter'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO resident VALUES(NULL, '$firstName',  '$lastName', '$middleName', '$bdate', '$bplace', '$age', '$zone',
                '$member', '$occupation', '$cstatus', '$education', '$bloodType' , '$nationality', '$gender', '$brgy', 'Not Registered', 
                ' ')";
        mysqli_query($con, $sql);

        $residentId = $con->insert_id; 
        
        $addUser = "INSERT INTO user VALUES(NULL, '$username', '$password', '0', NOW(),  '$residentId')";
    
        mysqli_query($con,$addUser);
        
        header("Location: \Project\connection\signup.php");
    }

?>
