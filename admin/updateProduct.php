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
            
            $id = $_GET['id'];
            
				$error="";
				if(isset($_POST["update"])){
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
						$result = $mysqli->query("UPDATE products SET category_id = '$cat_id',  product_name = '$product_name', product_desc = '$description', product_rate = '$product_rate', product_image = '$product_image' WHERE product_id = '$id'");
					}else{
			             $result = $mysqli->query("UPDATE products SET category_id = '$cat_id',  product_name = '$product_name', product_desc = '$description', product_rate = '$product_rate' WHERE product_id = '$id'");
					}
                    if($result){
					   echo "<p>Data Updated.</p>";
					}else{
					   echo $mysqli->error;
					}	
                }else{
					echo $error;
                } 
				$result = $mysqli->query(" SELECT * FROM products where product_id='$id'");
				while($row = mysqli_fetch_assoc($result)){
					$cat_id = $row['category_id'];
					$product_name = $row['product_name'];
                    $description = $row['product_desc'];
					$product_rate = $row['product_rate'];
                    $product_image = $row['product_image'];
				}
			?>
        <form method="post" enctype="multipart/form-data"> 
            <input type="text" name="cat_id" value="<?php echo $cat_id ?>" /><br />
            <input type="text" name="prod_name" value="<?php echo $product_name?>" /><br />
            <textarea placeholder="Product description" name="prod_desc" rows="5"><?php echo $description ?></textarea><br />
            <input type="text" name="prod_rate" value="<?php echo $product_rate ?>" /><br />
            <?php echo "<img height='100' width='100' src='../assests/images/$product_image'>";?><input type="file" name="prod_image" value="photo" /><br />
            <input type="submit" name="update" value="UPDATE" />
        </form>
    </div>
</div>
<?php
include ("footer.php");
?>