<?php
session_start();
?><!DOCTYPE html>
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
    <script src="slick/slick.min.js"></script>

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
				<div class="col-xs-6 col-sm-6 col-md-7">
                    <div class="menubar">
                        <ul>
                            <li><a href="topwear.php">top wear</a></li>
                            <li><a href="#">foot wear</a></li>
                            <li><a href="accessories.php">accessories</a></li>
                            <li><a href="#">contact us</a></li>
                        </ul>
                    </div>
				</div>
                <div class="col-xs-3 col-sm-3 col-md-2">
                    <div class="user-account">
                        <ul>
                            <li><a href="login.php">log in</a></li>
                            <li><a href="register.php">register</a></li>
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
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form">
                        <h3>register</h3>
                        <form method="post" action="registervalidation.php">
                            <input name="fname" type="text" placeholder="FIRST NAME" />
                            <input name="lname" type="text" placeholder="LAST NAME" />
                            <input name="email" type="text" placeholder="EMAIL" />
                            <input name="password" type="password" placeholder="PASSWORD" />
                            <input name="repassword" type="password" placeholder="CONFIRM PASSWORD"/>
                            <?php
if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>";
} else
    if (isset($_SESSION['resmessage'])) {
        echo "<span style = 'color=green;'>" . $_SESSION['remessage'] . "</span>";
    }
?>
                            <input type="submit" name="register" value="REGISTER"/>  
                        </form>
                        <ul>
                            <li>already have an account? <a href="login.php">sign in.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="banner-content">
                        <p>&quot;Fashain is not necessarily about labels. It's not about brands. It's about something else that comes from within you."</p>
                        <p class="author">&#45; ralph lauren</p>
                        <a href="#">show products.</a>
                    </div>
                </div>
            </div>
       </div>
    </section>
<!-- banner section ends -->
<!-- isotopes section starts -->
    <section class="isotopes">
        <div class="container-fluid">
 			<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="isotopes-content">
                        <ul>
							<li class="active" data-filter="*"><a href="">all</a></li>
							<li data-filter=".latest"><a href="">latest products</a></li>
							<li  data-filter=".popular"><a href="">popular products</a></li>
						</ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-1"></div>
                <div class="col-xs-12 col-sm-12 col-md-10">
					<div class="product-items">
						<div class="single-item latest">
							<img src="assests/images/7ed80e5772d6328829c7add2928b3542.jpg" alt="work1 image" />
						</div>
						<div class="single-item popular">
							<img src="assests/images/1.0x0.jpg" alt="work1 image" />
						</div>
						<div class="single-item latest">
							<img src="assests/images/1438728825207-P-2916320.jpg" alt="work1 image" />
						</div>
						<div class="single-item popular">
							<img src="assests/images/1443050487403-P-3164497.jpg" alt="work1 image" />
						</div>
						<div class="single-item latest">
							<img src="assests/images/1447812673525-P-3464558.jpg" alt="work1 image" />
						</div>
						<div class="single-item popular">
							<img src="assests/images/20160906101300_35902.jpg" alt="work1 image" />
						</div>
						<div class="single-item latest">
							<img src="assests/images/Dioufond-New-Pullover-font-b-Men-b-font-Gradient-O-Neck-font-b-Mens-b-font.jpg" alt="work1 image" />
						</div>
						<div class="single-item popular">
							<img src="assests/images/-font-b-Men-b-font-font-b-Polo-b-font-font-b-Sweater-b-font.jpg" alt="work1 image" />
						</div>
					</div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-1"></div>
            </div>
       </div>
    </section>
<!-- isotopes section ends -->


<!-- products section starts -->
    <section class="products">
        <div class="container">
 			<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="products-content">
                        <h2>check this out.</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="wear">
                        <h3>hoodie</h3>
                        <p>stremm life white</p>
                        <a href="#">see more.. &gt;</a>
                        <a href="#">buy &gt;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="items-product">
                        <img src="assests/images/redhoodie.jpg" alt="hoodie" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="items-product">
                        <img src="assests/images/jeans.png" alt="jeans" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="wear">
                        <h3>jeans</h3>
                        <a href="#">see more.. &gt;</a>
                        <a href="#">buy &gt;</a>
                    </div>
                </div>
            </div>
       </div>
    </section>
<!-- products section ends -->


<!-- slide section starts -->
    <section class="slider">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="slick-slider-heading">
                        <h2>accesories</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="slick-slider">
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/1.0x0.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/7ed80e5772d6328829c7add2928b3542.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/1438728825207-P-2916320.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/1443050487403-P-3164497.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/1447812673525-P-3464558.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/20160906101300_35902.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/Dioufond-New-Pullover-font-b-Men-b-font-Gradient-O-Neck-font-b-Mens-b-font.jpg" alt="work1 image" /></div>
                        <div class="col-xs-12 col-sm-4 col-md-4"><img src="assests/images/-font-b-Men-b-font-font-b-Polo-b-font-font-b-Sweater-b-font.jpg" alt="work1 image" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- slide section ends -->
    <script type="text/javascript" src="assests/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.slick-slider').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 2000,
            });
        });
    </script>
<?php
include ('contactus.php');
include ('footer.php');
?>