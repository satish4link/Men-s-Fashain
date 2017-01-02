<?php
$error = "";
if (isset($_POST["contactus"])) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($name == "" || $email == "" || $message == "") {
        $_SESSION["message"] = 'Must fill all the above fields.';
        header('location: register.php');
    } else {
        if (strlen($fname) < 2 || strlen($lname) < 2) {
            $_SESSION["message"] = "Name must be more than 2 characters";
            header('location: register.php');
            die();
        }
        if (!ctype_alpha($fname) || !ctype_alpha($lname)) {
            $_SESSION["message"] = "Name must contains only charactors";
            header('location: register.php');
            die();
        }

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["message"] = "Invalid email address.";
            header('location: register.php');
            die();
        }

        #	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
        #	     $_SESSION["message"] = "Invalid Email";
        #		header('location: register.php');
        #		die();
        #	}

        if ($password == $repassword) {
            $result = $mysqli->query("INSERT INTO users(firstname, lastname, password, email, hash) VALUES('$fname', '$lname', '$password', '$email', '$hash')");
            if ($result) {
                echo "Welcome, You are registered. Now you can check your email for email verification.";
            } else {
                echo $mysqli->error;
            }
        } else {
            $_SESSION["message"] = 'Password did not match.';
            header('location: register.php');
        }
    }
}
?>