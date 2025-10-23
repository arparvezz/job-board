<?php
if(!isset($_SESSION)){
    session_start();
}

include ("db.php");


// ============================================================================================= //
// ================================ UTILITY FUNCTIONS START ====================================== //
// ============================================================================================= //

function truncatewords($str,$length){
    $strArr = explode(" ", $str);
    $truncateArr = array_slice($strArr,0,$length);
    return implode(" ",  $truncateArr) . ".....";
}

// ============================================================================================= //
// ================================ UTILITY FUNCTIONS START ====================================== //
// ============================================================================================= //




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

// Add new Job
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
        Jobs::addPost($thumbnailName,$title,$description,$category,$posted_by);
    }else{
        header("location: /job-board/dashboard.php?content=add-new-job&msg=field info missing!&success=false");
    }

}



// Edit Job
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["operation"] == "edit-job"){
    $filesDirectory = "./imgs/";
    $title = $_POST["job-title"];
    $jobId = $_POST["job-id"];
    $description = $_POST["job-description"];
    $category = $_POST["job-category"];
    $posted_by = $_SESSION['userId'];
    $thumbnail = $_FILES;
    $thumbnailName = $thumbnail['job-thumb']['name'];
    $previousThumb = $_POST["prev-thumb"];

    if($title != "" && $description != ""){
        if($thumbnailName != ""){
            move_uploaded_file($thumbnail['job-thumb']['tmp_name'], "$filesDirectory/$thumbnailName");
            Jobs::editJob($jobId,$thumbnailName,$title,$description,$category);
        }else{
            Jobs::editJob($jobId,$previousThumb,$title,$description,$category);
        }
    }else{
        header("location: /job-board/dashboard.php?content=edit-job&msg=field info missing!&success=false&job-id={$jobId}");
    }

}

// Delete Job after confirm-alert
if(isset($_GET['content']) && $_GET['content'] == 'delete-job'){
    $jobId =  $_GET['job-id'];
    Jobs::deleteJob($jobId);
}

// ============================================================================================= //
// =================================== JOB MANAGEMENT END ====================================== //
// ============================================================================================= //