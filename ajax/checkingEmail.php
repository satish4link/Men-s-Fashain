<?php

include('../include/classes/class.user.php');
$user = new USER;

if(isset($_POST['email']))
{
 $emailId=$_POST['email'];
 
$stmt = $user->runQuery("SELECT email FROM users WHERE email=:email");
$stmt->execute(array(":email"=>$emailId));
if($stmt->rowCount() == 1){
	echo"Email Already Exists";
}
else{
	echo"OK";
}
 
}
?>



