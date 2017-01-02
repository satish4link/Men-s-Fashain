<?php
session_start();
include_once('config/config.php');
include_once('config/init.php');

$email = trim($_POST['email']);
$password = trim($_POST['password']);

if(empty($email) or empty($password)){
    $_SESSION["message"] = "Must enter Username and Password";
    header('location: login.php');
    die();
}
$email = strip_tags($email);
$password = strip_tags($password);

$result = $mysqli->query("SELECT * FROM users WHERE email = '$email' AND password = '$password' AND active='1'");

if($row = mysqli_fetch_assoc($result)){
    $_SESSION["authenticatedUserName"] = $row['firstname'];
    $_SESSION["userID"] = $row['user_id'];
    header("location: index.php");
}else{
    $_SESSION['message'] = "Could not login as $email";
    header('location: login.php');
}
?>