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
						try{
							$result = $admin->runQuery("INSERT INTO products(category_id, product_name, product_desc, product_rate, product_image) VALUES('$cat_id', '$product_name', '$description', '$product_rate', '$product_image')");
							$result->execute();
							if($result){
								echo "<p>Data Inserted.</p>";
							}
						}catch(PDOException $ex){
							echo $ex->getMessage();
						}	
					}else{
					echo $error;
					}
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