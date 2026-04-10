<?php
session_start();

const admin_username = "admin";
const member_username = "member";
const pswd = "123";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
}

$username = htmlspecialchars($username);
$password = htmlspecialchars($password);

if ($password == pswd){
    $_SESSION["loggedin"] = true;

    if ($username == admin_username){
        $_SESSION["username"] = "admin";
    }elseif ($username == member_username){
        $_SESSION["username"] = "member";
    }else {
        $_SESSION["username"] = "others";
    }

    if ($_SESSION["loggedin"]){
        header("location: dashboard.php");
    }
}else {
    echo "Invalid password, please try again";
}