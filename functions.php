<?php
session_start();

include ("db.php");

// ============================================================================================= //
// ================================ USER MANAGEMENT START ====================================== //
// ============================================================================================= //

// User login function
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["operation"] == "user-login"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    User::login($email,$password);
}


// User logout function
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["operation"] == "user-logout"){
    session_destroy();
    header("location: login.php");
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
            User::registerUser($name,$email,$password,$confirmPassword,$role);
        }else{
            header("location: registration.php?msg=password and confirm password didn't match");
            die();
        }
    }else{
        header("location: registration.php?msg=please fill all the forms");
        die();
    }
}

// User Info update
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["operation"] == "user-info-update"){
    $userId = $_POST["profile-id"];
    $name = $_POST["profile-name"];
    $email = $_POST["profile-email"];
    $password = $_POST["profile-password"];
    if($name != "" && $email != "" && $password != ""){
            User::updateUserInfo($userId,$name,$email,$password);
            header("location: dashboard.php?content=my-account&msg=profile info updated!&success=true");
    }else{
        echo $name . " " . $email . " " . $password;
        header("location: dashboard.php?content=my-account&msg=Some field value missing!&success=false");
        die();
    }
}

// ============================================================================================= //
// ================================== USER MANAGEMENT END ====================================== //
// ============================================================================================= //




// ============================================================================================= //
// ================================== JOB MANAGEMENT START ===================================== //
// ============================================================================================= //


if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["operation"] == "add-new-job"){
    $filesDirectory = "./imgs/";
    $title = $_POST["job-title"];
    $description = $_POST["job-description"];
    $category = $_POST["job-category"];
    $posted_by = $_SESSION['userId'];
    $thumbnail = $_FILES;
    $thumbnailName = $thumbnail['job-thumb']['name'];

    if($title != "" && $description != "" && $thumbnailName != ""){
        move_uploaded_file($thumbnail['job-thumb']['tmp_name'], "$filesDirectory/$thumbnailName");
        Posts::addPost($thumbnailName,$title,$description,$category,$posted_by);
    }else{
        header("location: /job-board/dashboard.php?content=add-new-job&msg=field info missing!&success=false");
    }

}

// ============================================================================================= //
// =================================== JOB MANAGEMENT END ====================================== //
// ============================================================================================= //