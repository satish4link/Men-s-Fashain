<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Admin panel</title>
	<!-- css link -->
	<link rel="stylesheet" type="text/css" href="..\assests\css\reset.css" />
	<link rel="stylesheet" type="text/css" href="..\assests\css\adminstyle.css" />

	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="..\assests\css\font-awesome\css\font-awesome.min.css" />

	<!-- bootstrap link -->
	<link rel="stylesheet" type="text/css" href="../assests/css/bootstrap/css/bootstrap.min.css" />

	<!-- google font link-->
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css' />
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-10 col-md-10">
                    <div class="admin">
                        <h1>admin panel</h1>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 col-md-2">
                    <a href="../index.php">back to front-end</a>
                </div>
            </div>
        </div>
    </header>
    <section class="form-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-4"></div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="form">
                        <h3>admin login</h3>
                        <form method="post" action="validation.php">
                            <input type="text" name="username" placeholder="USERNAME"/>
                            <input type="password" name="password" placeholder="PASSWORD"/>
                            <?php
                                if(isset($_SESSION['message'])){
                                    echo "<p style='color:red;'>".$_SESSION['message']."</p>";
                                }
                            ?>
                            <input type="submit" value="login" name="login"/>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-4"></div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row footer-top-border">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="copyright">
                        <p>&copy;2016 - men's fashain</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="terms-help">
                        <a href="#">terms</a>
                        <a href="#">help</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>