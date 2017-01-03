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
            require_once '../include/classes/class.admin.php';
            $admin=new ADMIN;
            
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
					try{
						if($error == ""){
							if(is_uploaded_file($_FILES['prod_image']['tmp_name'])){
								move_uploaded_file($_FILES['prod_image']['tmp_name'],"../assests/images/".$_FILES['prod_image']['name']);
								$product_image = $_FILES['prod_image']['name'];
							}
							$result = $admin->runQuery("UPDATE products SET category_id = '$cat_id',  product_name = '$product_name', product_desc = '$description', product_rate = '$product_rate', product_image = '$product_image' WHERE product_id = '$id'");
							$result->execute();
						}else{
				             $result = $admin->runQuery("UPDATE products SET category_id = '$cat_id',  product_name = '$product_name', product_desc = '$description', product_rate = '$product_rate' WHERE product_id = '$id'");
				             $result->execute();
						}
	                    if($result){
						   echo "<p>Data Updated.</p>";
						}
					}catch(PDOException $ex){
						echo $ex->getMessage();
					}
						
                }else{
					echo $error;
                } 
				$result = $admin->runQuery(" SELECT * FROM products where product_id='$id'");
				$result->execute();
				while($row = $result->fetch(PDO::FETCH_ASSOC)){
					$cat_id = $row['category_id'];
					$product_name = $row['product_name'];
                    $description = $row['product_desc'];
					$product_rate = $row['product_rate'];
                    $product_image = $row['product_image'];
				}
			?>
        <form method="post" enctype="multipart/form-data"> 
            <select name="cat_id" id="cat_id" style="width:300px;">
						<option value="">---Select Category---</option>
						<?php
							$sql1 = "SELECT * FROM category";
							$result1 = $admin->runQuery($sql1);
							$result1->execute();
							while ($row = $result1->fetch(PDO::FETCH_ASSOC)) {
								if ($cat_id == $row['cat_id']) {
									echo "<option value='" . $cat_id . "' selected>" . $row['cat_name'] . "</option>";
								} else {
									echo "<option value='" . $cat_id . "'>" . $row['cat_name'] . "</option>";
								}
							}
						?>
			</select><br />
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