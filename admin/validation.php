<?php
require_once '../include/classes/class.admin.php';
$admin = new ADMIN;

if(isset($_POST['login'])){
	$username = $_POST["username"];
	$password = $_POST["password"];

	if($username=="" || $password==""){
		header("location: index.php?error=1");
		$_SESSION['message'] = "All fields must be filled up";
		exit;
	}else{
		$result = $admin->adminLogin($username, $password);
		if($result){
			$admin->redirect("dashboard.php");
		}
	}
}

?>