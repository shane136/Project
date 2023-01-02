<?php 
    session_start();
    include("connection.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $residentID = $_SESSION['residentData']['id'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $mName = $_POST['mName'];
        $bPlace = $_POST['bPlace'];
        $bdate = $_POST['bdate'];
        $zone = $_POST['zone'];
        $barangay = $_POST['barangay'];
        $civilStatus = $_POST['civilStatus'];
        $occupation = $_POST['occupation'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $bloodType = $_POST['bloodType'];
        $nationality = $_POST['nationality'];
        $numHouseHold = $_POST['numHouseHold'];
        $educationalAttainment = $_POST['educationalAttainment'];
        $voterStat = $_POST['voterStatus'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    $updateData = " UPDATE resident SET 
                        fname = '$fName', 
                        lname = '$lName', 
                        mname = '$mName', 
                        bplace ='$bPlace', 
                        barangay = '$barangay',
                        age = '$age',
                        zone = '$zone',
                        bdate = '$bdate',
                        status = '$voterStat',
                        num_household = '$numHouseHold',
                        occupation = '$occupation',
                        civil_status = '$civilStatus',
                        educational_attainment = '$educationalAttainment',
                        blood_type = '$bloodType',
                        nationality = '$nationality',
                        sex = '$sex'                      
                    WHERE id = '$residentID'
                  ";
    $updateUser =  "UPDATE user SET username  = '$username', password = '$password' where resident_id = '$residentID' && type = '0'";
    $result = mysqli_query($con,$updateData);
    $resultUser = mysqli_query($con, $updateUser);
    
    if($result){
        $residentData = "SELECT * FROM resident WHERE id = '$residentID' limit 1";
        $residentResultData = mysqli_fetch_assoc(mysqli_query($con,$residentData));
        $_SESSION['residentData'] = $residentResultData;
        $_SESSION['updateSuccess'] = "Successfully Updated User's Profile";
        header("Location: \\Project\\user\\profile.php");
        die; 
    }

    

?>