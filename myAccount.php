<?php
session_start();
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
                            <li><a href="bottomwear.php">foot wear</a></li>
                            <li><a href="accesories.php">accessories</a></li>
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
<section class="top-wear-products">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="my-profile">
                        <h2>your personal info</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h3>You can manage your basic information &#45; your name, your email, your password, your DOB, your phonenumber, your gender. <a href="updateMyAccount.php?id=<?php echo
$id ?>">here</a></h3>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="my-account-table">
                        <table>
                        <?php
                        
                        require_once 'include/classes/class.user.php';
                        $user = new USER;
                        
                        try {
                            $result = $user->runQuery("SELECT * FROM users WHERE user_id = $id");
                            $result->execute();
                            displayData($result);
                        }
                        catch (PDOException $ex) {
                            echo $ex->getMessage();
                        }
                        
function displayData($result)
{
    $counter = 0;
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        print "<tr>
                                            <td>name</td>
                                            <td>" . $row['firstname'] . " " . $row['lastname'] .
            "</td>
                                        </tr>";
        print "<tr>
                                            <td>email</td>
                                            <td>" . $row['email'] . "</td>
                                        </tr>";
        print "<tr>
                                            <td>password</td>
                                            <td>" . $row['password'] . "</td>
                                        </tr>";
        print "<tr>
                                            <td>dat of birth</td>
                                            <td>" . $row['dob'] . "</td>
                                        </tr>";
        print "<tr>
                                            <td>phone numer</td>
                                            <td>" . $row['phonenumber'] . "</td>
                                        </tr>";
        print "<tr>
                                            <td>gender</td>
                                            <td>" . $row['gender'] . "</td>
                                        </tr>";
    }
}

?>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
include_once ('footer.php');
?>