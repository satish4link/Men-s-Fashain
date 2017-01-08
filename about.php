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
	<script src="ajax/ajax.js"></script>

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
                            <li><a href="#">foot wear</a></li>
                            <li><a href="accessories.php">accessories</a></li>
                            <li><a href="#">contact us</a></li>
                        </ul>
                    </div>
				</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="user-account">
                        <ul>
                            <?php
if (isset($_SESSION['authenticatedUserName'])) {
    $user_name = $_SESSION['authenticatedUserName'];
    $user_id = $_SESSION["userID"];
    echo "<li><a href='logout.php'>log out</a></li>
                                    <li><a href='myAccount.php?id=$user_id'>" .
        $user_name . "</a></li>";
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
    <section class="top-wear-products">
        <div class="row">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="top-wear-content">
                        <h2>Contact Us</h2>
                        <p class="result"></p>
                        <h3>Find us on Map</h3>
                    </div>
                </div>
                <div id="map" style="width:100%;height:500px"></div>
                
                <script>
                function myMap() {
                  var mapCanvas = document.getElementById("map");
                  var myCenter = new google.maps.LatLng(27.680999,85.2957863); 
                  var mapOptions = {center: myCenter, zoom: 10};
                  var map = new google.maps.Map(mapCanvas,mapOptions);
                  var marker = new google.maps.Marker({
                    position: myCenter,
                    animation: google.maps.Animation.BOUNCE
                  });
                  marker.setMap(map);
                  
                  //zoom to 15 when clicking on marker
                  
                  google.maps.event.addListener(marker, 'click', function(){
                    map.setZoom(15);
                    map.setCenter(marker.getposition());
                  });
                }
                </script>
                
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIgcrTjFDJCDExP-J3WSonI8Cg0Cu9gSg&callback=myMap"></script>
            </div>
        </div>
    </section>
<?php
include ('contactus.php');
include ('footer.php');
?>
