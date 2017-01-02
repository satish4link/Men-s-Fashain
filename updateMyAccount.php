<?php
    session_start();
    include_once('config/config.php');
    include_once('config/init.php');
    $id = $_GET['id'];
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
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
                            <li><a href="footwear.php">foot wear</a></li>
                            <li><a href="accesories.php">accessories</a></li>
                        </ul>
                    </div>
				</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="user-account">
                        <ul>
                            <?php
                                if(isset($_SESSION['authenticatedUserName'])){
                                    $user_name = $_SESSION['authenticatedUserName'];
                                    echo "<li><a href='logout.php'>log out</a></li>
                                    <li><a href='myAccount.php'>".$user_name."</a></li>";
                                }else{
                                    echo "<li><a href='login.php'>log in</a></li>
                                    <li><a href='admin/index.php'>admin panel</a></li>";
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
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="my-profile">
                        <h2>your personal info</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h3>You can manage your basic information &#45; your name, your email, your password, your DOB, your phonenumber, your gender.</h3>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="my-account-table">
                        <?php
            				if(isset($_POST["update"])){
            					$fname = trim($_POST["fname"]);
            					$lname = trim($_POST["lname"]);
                                $email = trim($_POST["email"]);
                                $password = trim($_POST["password"]);
            					$dob = trim($_POST["dob"]);
                                $number = trim($_POST["number"]);
                                $gender = trim($_POST["gender"]);
            
            					if ($fname == "" || $lname == "" || $email == "" || $password == "" || $dob == "" || $number == "" || $gender == "") {
            						echo "<p>All fields must be filled up</p>";
            					}else{
                                   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            						if (strlen($fname) < 2 || strlen($lname) < 2) {
                                        echo "<p>Name must be more than 2 characters</p>";
                                    }else if (!ctype_alpha($fname) || !ctype_alpha($lname)) {
                                        echo "<p>Name must contains only charactors</p>";
                                    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                        echo "<p>Invalid email address.</p>";
                                    }else if(!ctype_digit($number)){
                                        echo "<p>Phone number should be numeric.</p>";
                                    }else{
                                    $result = $mysqli->query("UPDATE users SET firstname = '$fname', lastname = '$lname', email = '$email', password = '$password', dob = '$dob', phonenumber = '$number', gender = '$gender' WHERE user_id = '$id'");
                                        if($result){
                    					   echo "<p>Data Updated.</p>";
                    					}else{
                    					   echo $mysqli->error;
                    					}
                                    }
                                }	
                            }
            			?>
                        <form method="post">
                        <table>
                        <?php
                            function displayData($result)
                            {
                                $counter = 0;
                                while ($row = $result->fetch_assoc()) {
                                    print "<tr>
                                            <td>first name</td>
                                            <td><input name='fname' type='text' value='".$row['firstname']."'/></td>
                                        </tr>";
                                    print "<tr>
                                            <td>first name</td>
                                            <td><input name='lname' type='text' value='".$row['lastname']."'/></td>
                                        </tr>";
                                    print "<tr>
                                            <td>email</td>
                                            <td><input name='email' type='text' value='".$row['email']."'/></td>
                                        </tr>";
                                    print "<tr>
                                            <td>password</td>
                                            <td><input name='password' type='password' value='".$row['password']."'/></td>
                                        </tr>";
                                    print "<tr>
                                            <td>dat of birth</td>
                                            <td><input name='dob' type='text' value='".$row['dob']."'/></td>
                                        </tr>";
                                    print "<tr>
                                            <td>phone numer</td>
                                            <td><input name='number' type='text' value='".$row['phonenumber']."'/></td>
                                        </tr>";
                                    print "<tr>
                                            <td>gender</td>
                                            <td>
                                                <select name='gender'>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>   
                                            </td>
                                        </tr>";
                                }
                            }
                            //Select Data
                            $result = $mysqli->query("SELECT * FROM users WHERE user_id = $id");
                            displayData($result);
                        ?>
                        </table>
                        <input type='submit' value='UPDATE' name='update' />
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
include_once('footer.php');
?>