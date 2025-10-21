<?php
session_start();
$_SESSION['user'] = $_SESSION['user'] ?? "guest";

$connect = new mysqli("localhost","root","","jobs");
if(!$connect){
    echo "DB not connected";
}

class DB {


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
            header("location: login.php?msg=username-or-password-incorrect");
        }       
    }

    // register user
    public static function registerUser($name, $email, $password, $confirmPassword){
        global $connect;
        if($password == $confirmPassword){
            $q = "INSERT INTO users(`name`,`email`,`password`) VALUES('$name','$email','$password')";
            $query = mysqli_query($connect,$q);
            echo $query;
        }

    }
}