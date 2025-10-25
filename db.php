<?php
if(!isset($_SESSION)){
    session_start();
}


$connect = new mysqli("localhost","root","","jobs");
if(!$connect){
    echo "DB not connected";
}

// User class
class User {

    // login User
    public static function login($email,$password){
        global $connect;
        $q = "SELECT * FROM users";
        $query = mysqli_query($connect, $q);
        $usersArr = [];
        $userFound = false;
        while($row = mysqli_fetch_assoc($query)){
            $usersArr[] = $row;
        }
        mysqli_close($connect);

        foreach($usersArr as $user){
            if($user['email'] == $email && $user['password'] == $password){
                $userFound = true;
                echo "User Found" . " role: " . $user['role'];
                $_SESSION['user'] = $user['role'];
                $_SESSION['userId'] = $user['id'];
                header("location: dashboard.php?user={$user['role']}");
            }
        }

        if(!$userFound){
            header("location: login.php?msg=username or password incorrect");
        }       
    }

    // register user
    public static function registerUser($name, $email, $password, $confirmPassword, $role){
        global $connect;
        $q = "INSERT INTO users(`name`,`email`,`password`,`role`) VALUES('$name','$email','$password', '$role')";
        $query = mysqli_query($connect,$q);
        if($query){
            header("location: login.php");
        }
    }

    // update user Info
    public static function updateUserInfo($userId,$name,$email,$password){
        global $connect;
        $q = "UPDATE users SET `name` = '{$name}', `email` = '{$email}',`password` = '{$password}' WHERE id = '{$userId}' LIMIT 1";
        $query = mysqli_query($connect,$q);
        if($query){
            header("location: my-account.php?msg=user info updated");
        }
    }

    // get User Info
    public static function getUserInfo($userId){
        global $connect;
        $q = "SELECT * FROM users WHERE id = {$userId}";
        $query = mysqli_query($connect,$q);
        while($row = mysqli_fetch_assoc($query)){
            return $row;
        }
    }

}




// Jobs class
class Jobs{


    // Add new job
    public static function addPost($thumb,$title,$description,$category,$posted_by){
        global $connect;
        $q = "INSERT INTO jobs(`thumbnail`,`title`,`description`,`category`,`posted_by`) VALUES('{$thumb}','{$title}','{$description}','{$category}','{$posted_by}')";
        $query = mysqli_query($connect, $q);
        if($query){
            header("location: /job-board/dashboard.php?content=add-new-job&msg=post added!&success=true");
        }
    }

    // Get all jobs
    public static function allJobs(){
        global $connect;
        $q = "SELECT * FROM jobs";
        $query = mysqli_query($connect, $q);
        $data = [];
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
        return $data;
    }

    // Get Specific Job Details
    public static function getJobDetails($jobId){
        global $connect;
        $q = "SELECT * FROM jobs WHERE id = $jobId";
        $query = mysqli_query($connect, $q);
        $data = [];
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
        return $data;
    }


    // Edit Job
    public static function editJob($jobId,$thumb,$title,$description,$category){
        global $connect;
        $q = "UPDATE jobs SET `thumbnail` = '{$thumb}', `title` = '{$title}',`description` = '{$description}',`category` = '{$category}' WHERE id = '{$jobId}' LIMIT 1";
        $query = mysqli_query($connect, $q);
        if($query){
            header("location: /job-board/dashboard.php?content=edit-job&msg=post updated!&success=true&job-id={$jobId}");
        }
    }


    // Delete Job
    public static function deleteJob($jobId){
        global $connect;
        $q = "DELETE FROM jobs WHERE id = '{$jobId}' LIMIT 1";
        $query = mysqli_query($connect, $q);
        if($query){
            header("location: /job-board/dashboard.php?content=all-jobs&msg=Job deleted!&success=true");
        }
    }

}


// Applicant class - will manage application of job-applicants
class Application{
    public static function apply($name,$email,$cv,$jobId){
        global $connect;
        $q = "INSERT INTO application(`name`,`email`,`cv`,`job_id`) VALUES('{$name}','{$email}','{$cv}','{$jobId}')";
        $query = mysqli_query($connect, $q);
        if($query){
            header("location: /job-board/apply.php?msg=Application Done!&success=true");
        }
    }
    public static function getApplications($jobId){
        global $connect;
        $q = "SELECT * FROM application WHERE `job_id` = '{$jobId}'";
        $query = mysqli_query($connect, $q);
        $data = [];
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
        return $data;
    }
}