<?php 
    session_start();
    include("connection.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $residentID = $_SESSION['residentData']['id'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $mName = $_POST['mName'];
        $bPlace = $_POST['bPlace'];
        $zone = $_POST['zone'];
        $barangay = $_POST['barangay'];
        $civilStatus = $_POST['civilStatus'];
        $occupation = $_POST['occupation'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $bloodType = $_POST['bloodType'];
        $nationality = $_POST['nationality'];
        $numHouseHold = $_POST['numHouseHold'];
        $educationalAttainment = $_POST['educationalAttainment'];
    }
    $updateData = " UPDATE resident SET 
                        fname = '$fName', 
                        lname = '$lName', 
                        mname = '$mName', 
                        bplace ='$bPlace', 
                        zone = '$zone',
                        num_household = '$numHouseHold',
                        occupation = '$occupation',
                        civil_status = '$civilStatus',
                        educational_attainment = '$educationalAttainment',
                        blood_type = '$bloodType',
                        nationality = '$nationality'
                    WHERE id = '$residentID'
                  ";
    $result = mysqli_query($con,$updateData);
    
    if($result){
        $residentData = "SELECT * FROM resident WHERE id = '$residentID' limit 1";
        $residentResultData = mysqli_fetch_assoc(mysqli_query($con,$residentData));
        $_SESSION['residentData'] = $residentResultData;
        $_SESSION['updateSuccess'] = "Successfully Updated User's Profile";
        header("Location: \\Project\\user\\profile.php");
        die; 
    }

    

?>
