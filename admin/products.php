<?php
include ("header.php");

?>
<div class="col-xs-12 col-sm-11 col-md-11 no-padding main-title">
    <h3>products</h3>
</div>
<div class="col-xs-12 col-sm-11 col-md-11">
    <div class="db-contents">
        <h3>top-wear products <a href="addProduct.php">&#91;&#43;&#93;</a></h3>
        <table>
            <tr></tr>
                <th>product id</th>
                <th>category id</th>
                <th>product name</th>
                <th>product desc</th>
                <th>product rate</th>
                <th>product images</th>
                <th>update/delete</th>
            </tr>
        <?php
            require_once '../include/classes/class.admin.php';
            $admin=new ADMIN;
            
            if(isset($_GET["mode"])){
                $mode = $_GET["mode"];
                if($mode == "del"){
                    $id = $_GET["id"];
                    $result = $admin->runQuery("DELETE FROM products WHERE product_id = '$id'");
                    $result->execute();
                }
                if($result){
                    echo "<p>1 row deleted.</p>";
                }
            }

            function displayData($result)
            {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    print "<tr >";
                        print "<td>".$row["product_id"] . "</td>";
                        print "<td>".$row["category_id"] . "</td>";
                        print "<td>".$row["product_name"] . "</td>";
                        print "<td>".$row["product_desc"] . "</td>";
                        print "<td>".$row["product_rate"] . "</td>";
                        print "<td><img height='50' width='50' src='../assests/images/".$row["product_image"] . "'></td>";
                        print "<td><a href='updateProduct.php?id=".$row['product_id']."'>update</a> | <a onclick='return confirmDel()' href=?mode=del&id=".$row['product_id'].">delete</a></td>";
                    print "</tr>";
                }
            }
            try{
                $result=$admin->runQuery("SELECT * FROM products");
                $result->execute();
                displayData($result);
            }catch(PDOException $ex){
                echo $ex->getMessage();
            }
        ?>
    </div>
</div>
<?php
include ("footer.php");
?>
