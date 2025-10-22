<?php
session_start();


$connect = new mysqli("localhost","root","","jobs");
if(!$connect){
    echo "DB not connected";
}

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
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}