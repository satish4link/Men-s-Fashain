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
                            <li><a href="bottomwear.php">bottom wear</a></li>
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

    <section class="top-wear-products">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="top-wear-content">
                        <h2>top wear products</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4"></div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="filter-data">
                        <table>
                            <tr>
                            <form method="post">
                                <td><input type="text" placeholder="Search, What are you looking for..." name="search" style="width: 300px; padding: 5px;" /></td>
                                <td><input type="submit" value="Go" name="go" style="padding: 5px 10px;"/></td>
                            </form>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4"></div>
                <div class="clearfix"></div>
                    <?php
require_once 'include/classes/class.user.php';
$user = new USER;

if (isset($_POST['go'])) {

    $search = $_POST['search'];
    try {
        $result = $user->runQuery("SELECT * FROM products WHERE CONCAT (product_name, product_desc, product_rate) LIKE '%" .
            $search . "%' AND category_id = 1");
        $result->execute();
        displayData($result);
    }
    catch (PDOException $ex) {
        echo $ex->getMessage();
    }

} else {
    try {
        $result = $user->runQuery("SELECT * FROM products WHERE category_id = 1");
        $result->execute();
        displayData($result);
    }
    catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

function displayData($result)
{
    $counter = 0;
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        print "<div class='col-xs-12 col-sm-4 col-md-3'>";
        print "<div class='product-data'>";
        print "<img src='assests/images/" . $row["product_image"] . "'>";
        print "<b>" . $row["product_name"] . "</b><br/>";
        print "<p>" . substr($row['product_desc'], 0, 30) . "</p>";
        print "<p>Price: &#8377;" . $row["product_rate"] . "</p>";
        print "</div>";
        print "</div>";
        $counter = ++$counter;
        if (($counter) % 4 == 0) {
            print "<div class='clearfix'></div>";
        }
    }
}
?>
            </div>
        </div>
    </section>
<?php
include ('contactus.php');
include ('footer.php');
?>