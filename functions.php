<?php
session_start();
$_SESSION['user'] = $_SESSION['user'] ?? "guest";
include ("db.php");


// User login function
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["operation"] == "user-login"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    DB::login($email,$password);
}

// User Registration function
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["operation"] == "user-registration"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];
    if($name != "" && $email != "" && $password != "" && $confirmPassword != ""){
        if($password == $confirmPassword){
            echo "Name: " . $name . " " . "Email: " . $email . " " . "Role: " . $role . " " . "Password: " . $password . " " . "Confirm Password: " . $confirmPassword;
        }else{
            header("location: registration.php?msg=password and confirm password didn't match");
            die();
        }
    }else{
        header("location: registration.php?msg=please fill all the forms");
        die();
    }
}
