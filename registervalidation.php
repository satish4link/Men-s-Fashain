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
                    include_once ('config/config.php');
                    include_once ('config/init.php');
                    $error = "";
                    if (isset($_POST["register"])) {
                        $fname = trim($_POST["fname"]);
                        $lname = trim($_POST["lname"]);
                        $email = trim($_POST["email"]);
                        $password = trim($_POST["password"]);
                        $repassword = trim($_POST["repassword"]);
                        $hash = md5(rand(0, 1000));
                    
                        if ($fname == "" || $lname == "" || $email == "" || $password == "" || $repassword == "") {
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
                            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
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
                                    require 'PHPMailer/PHPMailerAutoload.php';
                                    $mail = new PHPMailer;
                                    
                                    $mail->isSMTP();                                   // Set mailer to use SMTP
                                    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
                                    $mail->SMTPAuth = true;                            // Enable SMTP authentication
                                    $mail->Username = 'satish4link@gmail.com';          // SMTP username
                                    $mail->Password = 'leaked55'; // SMTP password
                                    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
                                    $mail->Port = 587;                                 // TCP port to connect to
                                    
                                    $mail->setFrom('satish4link@gmail.com', 'MensFashain');
                                    //$mail->addReplyTo('satish4link@gmail.com', 'MensFashain');
                                    $mail->addAddress('gamer4link@gmail.com');   // Add a recipient
                                    //$mail->addCC('cc@example.com');
                                    //$mail->addBCC('bcc@example.com');
                                    
                                    $mail->isHTML(true);  // Set email format to HTML
                                    
                                    $bodyContent = nl2br('Thanks for signing up!
                                                    Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                                                     
                                                    ---------------------------------------------
                                                    Name: '.$fname.' '.$lname.'
                                                    Email: '.$email.'
                                                    Password: '.$password.'
                                                    ---------------------------------------------
                                                     
                                                    Please click this link to activate your account:
                                                    http://localhost/men/emailVerification.php?email='.$email.'&hash='.$hash.'
                                                     
                                                    ');
                                    
                                    $mail->Subject = 'Signup | Verification';
                                    $mail->Body    = $bodyContent;
                                    
                                    if(!$mail->send()) {
                                        echo 'Message could not be sent.';
                                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                                    } else {
                                        echo "<h1>Welcome, You are registered. Now you can check your email for email verification.</h1>";
                                    }
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
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3"></div>
        </div>
    </div>
</section>
</body>
</html>