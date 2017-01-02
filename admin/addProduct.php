<?php
include ("header.php");
?>
<div class="col-xs-12 col-sm-11 col-md-11 no-padding main-title">
    <h3>products</h3>
</div>
<div class="col-xs-12 col-sm-11 col-md-11">
    <div class="db-contents">
        <h3>top-wear products</h3>
        <?php
            include_once('../config/config.php');
            include_once('../config/init.php');
				$error="";
				if(isset($_POST["insert"])){
					$cat_id = $_POST["cat_id"];
					$product_name = $_POST["prod_name"];
                    $description = $_POST["prod_desc"];
					$product_rate = $_POST["prod_rate"];
                    $product_image = "";

					if($cat_id  == "" || $product_name == "" || $description == "" || $product_rate == ""){
						$error.= "<p>All fields must be filled up</p>";
					}
					if($error == ""){
						if(is_uploaded_file($_FILES['prod_image']['tmp_name'])){
							move_uploaded_file($_FILES['prod_image']['tmp_name'],"../assests/images/".$_FILES['prod_image']['name']);
							$product_image = $_FILES['prod_image']['name'];
						}
						$result = $mysqli->query("INSERT INTO products(category_id, product_name, product_desc, product_rate, product_image) VALUES('$cat_id', '$product_name', '$description', '$product_rate', '$product_image')");
						if($result){
							echo "<p>Data Inserted.</p>";
						}else{
							echo $mysqli->error;
						}	
					}else{
					echo $error;
					}
				}
			?>
        <form method="post" enctype="multipart/form-data"> 
            <input type="text" name="cat_id" placeholder="Category Id" /><br />
            <input type="text" name="prod_name" placeholder="Product Name" /><br />
            <textarea placeholder="Product description" name="prod_desc" rows="5"></textarea><br />
            <input type="text" name="prod_rate" placeholder="Product Rate" /><br />
            <input type="file" name="prod_image" placeholder="Product Image" /><br />
            <input type="submit" name="insert" value="INSERT" />
        </form>
    </div>
</div>
<?php
include ("footer.php");
?>