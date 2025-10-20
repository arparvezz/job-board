<?php

$connect = new mysqli("localhost","root","","jobs");
if(!$connect){
    echo "DB not connected";
}

class DB {
    public static function login($email,$password){
        global $connect;
        $q = "SELECT * FROM users";
        $connect = mysqli_query($connect, $q);
        while($row = mysqli_fetch_assoc($connect)){
            echo "<pre>";
            var_dump($row);
            echo "</pre>";
        }
        
    }
}