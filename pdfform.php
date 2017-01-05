<?php
    require_once 'include/classes/class.admin.php';
    $admin=new ADMIN;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Men's Fashain</title>
	<!-- css link -->
	<link rel="stylesheet" type="text/css" href="assests\css\reset.css" />
    <link rel="stylesheet" type="text/css" href="assests/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assests/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assests\css\adminstyle.css" />
        
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
    <section class="top-wear-products">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="top-wear-content" style="text-align: center;">
                        <h2>Dynamic conversion and presentation of data to PDF </h2>
                        <h3>Add New Product</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-6" style="padding-top: 20px;">
                    <table>
                        <form method="post" enctype="multipart/form-data" action="include/classes/pdf.php">
                            <tr>
                                <td>Category Name: </td>
                                <td>
                                <select name="category_id" id="cat_id" style="width:300px;">
						<option value="">---Select Category---</option>
						<?php
							$sql1 = "SELECT * FROM category";
							$result1 = $admin->runQuery($sql1);
							$result1->execute();
							while ($row = $result1->fetch(PDO::FETCH_ASSOC)) {
								if ($cat_id == $row['cat_id']) {
    								echo "<option value='" . $row['cat_id'] . "' selected>" . $row['cat_name'] . "</option>";
    							} else {
    								echo "<option value='" . $row['cat_id'] . "'>" . $row['cat_name'] . "</option>";
    							}
							}
						?>
			</select>
                            </td>
                            </tr>
                            <tr>
                                <td>Product Name: </td>
                                <td>
                                    <input type="text" name="prod_name" placeholder="Product Name" style="width:300px;"/><br /><br />
                                </td>
                            </tr>
                            <tr>
                                <td>Description: </td>
                                <td>
                                    <textarea placeholder="Product description" name="prod_desc" rows="3" cols="40"></textarea><br /><br />
                                </td>
                            </tr>
                            <tr>
                                <td>Product Rate: </td>
                                <td>
                                    <input type="text" name="prod_rate" placeholder="Product Rate" style="width:300px;" /><br /><br />
                                </td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="insert" value="INSERT" /></td>
                            </tr>
                        </form>
                   </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3"></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
</body>
</html>