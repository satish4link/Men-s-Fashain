<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Men's Fashain</title>
	<!-- css link -->
	<link rel="stylesheet" type="text/css" href="assests/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="assests/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assests/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assests/css/style.css" />
        
	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="assests/css/font-awesome/css/font-awesome.min.css" />

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
<!-- header section starts -->
	<header class="header">
		<div class="container">
			<div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="logo">
                        <a href="index.php">mf</a>
                    </div>
                    <span class="menu-trigger">Menu</span>
                </div>
				<div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="menubar">
                        <ul>
                            <li><a href="topwear.php">top wear</a></li>
                            <li><a href="bottomwear.php">foot wear</a></li>
                            <li><a href="accessories.php">accessories</a></li>
                            <li><a href="about.php">contact us</a></li> 
                        </ul>
                    </div>
				</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="user-account">
                        <ul>
                            <?php
                            if (isset($_SESSION['userSessionName'])) {
                                $user_name = $_SESSION['userSessionName'];
                                $user_id = $_SESSION["userSession"];
                                echo "<li><a href='logout.php'>log out</a></li>
                                                                <li><a href='myAccount.php?id=$user_id'>" .$user_name . "</a></li>";
                            } else {
                                echo "<li><a href='login.php'>log in</a></li>
                                                                <li><a href='register.php'>register</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- header section ends -->
<!-- banner section starts -->
    <section class="banner">
        <div class="container">
 			<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="banner-heading">
                        <h1>men's fashain</h1>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="iphone">
                    <h3>responsive design</h3>
                        <img src="assests/images/iphone6.png" alt="iphone" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-1"></div>
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="banner-content">
                        <p>&quot;Fashain is not necessarily about labels. It's not about brands. It's about something else that comes from within you."</p>
                        <p class="author">&#45; ralph lauren</p>
                        <a href="accessories.php">show products.</a>
                    </div>
                </div>
            </div>
       </div>
    </section>
<!-- banner section ends -->