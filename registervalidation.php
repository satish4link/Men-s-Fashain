<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Men's Fashain</title>
	<!-- css link -->
	<link rel="stylesheet" type="text/css" href="assests\css\reset.css" />
    <link rel="stylesheet" type="text/css" href="assests/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assests/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assests\css\style.css" />
        
	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="assests\css\font-awesome\css\font-awesome.min.css" />

	<!-- bootstrap link -->
	<link rel="stylesheet" type="text/css" href="assests/css/bootstrap/css/bootstrap.min.css" />

	<!-- google font link-->
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css' />

	<!-- jQuery link-->
	<script src="assests/js/jquery-1.12.2.js"></script>
	<script src="assests/js/isotope.pkgd.min.js"></script>
	<script src="assests/js/custom.js"></script>

</head> 
<body>
<section class="emailVerification">
    <div class="row">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-3"></div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="email-content">
                <?php
                    session_start();
                    require_once 'include/classes/class.user.php';
                    $user = new USER;
                    
                    if (isset($_POST["register"])) {
                        $fname = trim($_POST["fname"]);
                        $lname = trim($_POST["lname"]);
                        $email = trim($_POST["email"]);
                        $password = trim($_POST["password"]);
                        $repassword = trim($_POST["repassword"]);
                        $hash = md5(uniqid(rand()));
                    
                        if ($fname == "" || $lname == "" || $email == "" || $password == "" || $repassword == "") {
                            $_SESSION["message"] = 'Must fill all the above fields.';
                            $user->redirect("register.php");
                            exit;
                        } else {
                            if (strlen($fname) < 2 || strlen($lname) < 2) {
                                $_SESSION["message"] = "Name must be more than 2 characters";
                                $user->redirect("register.php");
                                exit;
                            }
                            if (!ctype_alpha($fname) || !ctype_alpha($lname)) {
                                $_SESSION["message"] = "Name must contains only charactors";
                                $user->redirect("register.php");
                                exit;
                            }
                            
                            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                $_SESSION["message"] = "Invalid email address.";
                		      $user->redirect("register.php");
                                exit;
                            }
                     
                    #	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
                    #	     $_SESSION["message"] = "Invalid Email";
                    #		header('location: register.php');
                    #		die();
                    #	}
                            
                            if ($password == $repassword) {
                                
                                $result = $user->register($fname, $lname, $email, $password, $hash);
                                if($result){
                                    $id = $user->lastID();
                                    $key = base64_encode($id);
                                    $id = $key;
                                    
                                    $message = nl2br('Thanks for signing up!
                                                    Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                                                     
                                                    ---------------------------------------------
                                                    Name: '.$fname.' '.$lname.'
                                                    Email: '.$email.'
                                                    Password: '.$password.'
                                                    ---------------------------------------------
                                                     
                                                    Please click this link to activate your account:
                                                    http://localhost/men-s-fashain/emailVerification.php?id='.$id.'&hash='.$hash.'
                                                     
                                                    ');
                                                    
                                    $subject = 'Signup | Verification';
                                    $user->send_mail($email, $message, $subject);
                                    
                                    echo "<h2><strong>Success!</strong> You are registered. We've sent an email to $email. Now you can check your email for email verification.</h2>";  
                                }else{
                                    echo '<h2>Message could not be sent. Please try again. Thank You.</h2>';
                                }
                            } else {
                                $_SESSION["message"] = 'Password did not match.';
                                $user->redirect("register.php");
                                exit;
                            }
                        }
                    }
                ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3"></div>
        </div>
    </div>
</section>
</body>
</html>