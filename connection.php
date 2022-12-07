<?php
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "crud_ex";

// Creating connection to database
$connection = mysqli_connect($server_name,$username,$password,$db_name);

// Checking connection
    if (!$connection){
        die("Connection failed : " .mysqli_connect_error());
    }
    echo "Connected Succesfully";
?>