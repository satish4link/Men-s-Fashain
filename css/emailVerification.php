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
                        include_once ('config/config.php');
                        include_once ('config/init.php');
                        
                        $email = $_GET['email'];
                        $hash = $_GET['hash'];
                        
                        if(isset($email) && !empty($email) && isset($hash) && !empty($hash)){
                            $result = $mysqli->query("SELECT email, hash, active FROM users WHERE email='$email' AND hash = '$hash' AND active = '0'");
                            if($result){
                                $mysqli->query("UPDATE users SET active ='1' WHERE email='$email' AND hash='$hash' AND active = '0'");
                                echo "<h1>Your account has been activated, you can now login. <a href='login.php'>here</a></h1>";
                            }else{
                                echo "<h1>The url is either invalid or you already have activated your account</h1>";
                            }
                        }else{
                            echo "<h1>Invalid approach, please use the link that has been send to your email.</h1>";
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