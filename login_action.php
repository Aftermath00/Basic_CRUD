<?php
session_start();

include "connection.php";

// Get data from login form
$username = $_POST["username"];
$password = $_POST["password"];

// Query from database
$query = mysqli_query($connection, "SELECT * FROM users where username='$username' and password = '$password'");

// Checking
$cek=mysqli_num_rows($query);
    if($cek==TRUE){
            $_SESSION['username']=$username; 
            header("location:https://aftermath00.github.io/WebProgrammingLab-UTS/");}
    else{
    echo "<script> alert('Username atau Password Salah'); window.location = 'login.php'; </script>";
    }
?>