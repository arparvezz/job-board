<?php
session_start();
$_SESSION['user'] = $_SESSION['user'] ?? "guest";

$connect = new mysqli("localhost","root","","jobs");
if(!$connect){
    echo "DB not connected";
}

class User {


    // login system
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
}