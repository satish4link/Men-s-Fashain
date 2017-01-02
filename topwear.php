<?php include ('header.php'); 
include_once ("config/config.php");
?>
    <section class="top-wear-products">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="top-wear-content">
                        <h2>top wear products</h2>
                    </div>
                </div>
                    <?php
                        include_once ("config/init.php"); //This creates the table
                        function displayData($result)
                        {
                            $counter = 0;
                            while ($row = $result->fetch_assoc()) {
                                print "<div class='col-xs-12 col-sm-4 col-md-3'>";
                                    print "<div class='product-data'>";
                                        print "<img src='assests/images/".$row["product_image"]."'>";
                                        print "<b>".$row["product_name"] . "</b><br/>";
                                        print "<p>".substr($row['product_desc'],0,60). "</p>";
                                        print "<p>Price: &#8377;".$row["product_rate"]."</p>";
                                    print "</div>";
                                print "</div>";
                                $counter = ++$counter;
                                if(($counter) % 4 == 0){
                                    print "<div class='clearfix'></div>";
                                }
                            }
                        }
                        //Select Data
                        $result = $mysqli->query("SELECT * FROM products");
                        displayData($result);
                    ?>
            </div>
        </div>
    </section>
<?php
include ('contactus.php');
include ('footer.php');
?>