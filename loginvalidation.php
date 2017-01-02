<?php
session_start();
require_once 'include/classes/class.user.php';
$user = new USER;

if($user->is_logged_in()!="")
{
 $user->redirect('index.php');
}

if(isset($_POST['login'])){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    if(empty($email) or empty($password)){
        $_SESSION["message"] = "Must enter Username and Password";
        $user->redirect("login.php");
        exit;
    }
    $email = strip_tags($email);
    $password = strip_tags($password);
    
    if($user->login($email, $password))
	{
		$user->redirect('index.php');
	}else{
        $_SESSION['message'] = "Could not login as $email";
        $user->redirect("login.php");
        exit;
    }
}

?>