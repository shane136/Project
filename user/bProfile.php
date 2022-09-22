<?php 
session_start();

	include("../connection/connection.php");
	include("../functions.php");
	

	$user_data = check_login($con);

?>

