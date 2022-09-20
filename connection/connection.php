<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "august";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
