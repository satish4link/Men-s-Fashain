<?php
include('../include/classes/class.user.php');
$sql="select * from products";
$objdb=new User();
$result = $objdb->runQuery($sql);
$result->execute();

$data = $result->fetchAll(PDO::FETCH_ASSOC);

//$data=$objdb->fetchAllRecords();

$xml= new DOMDocument("1.0");
$xml->formatOutput=true;
$strings=$xml->createElement("strings");
$xml->appendChild($strings);

foreach($data as $row){
 $products=$xml->createElement("products");
 $strings->appendChild($products);

 $prod_id = $row['product_id'];
 $cat_id = $row['category_id'];
 $prod_name = $row['product_name'];
 $prod_desc = $row['product_desc'];
 $prod_rate = $row['product_rate'];

 $product_id=$xml->createElement("ProductID", $prod_id);
 $products->appendChild($product_id);
 $category_id=$xml->createElement("CategoryID", $cat_id);
 $products->appendChild($category_id);
 $product_name=$xml->createElement("ProductName", $prod_name);
 $products->appendChild($product_name);
 $desc=$xml->createElement("ProductDESC", $prod_desc);
 $products->appendChild($desc);
 $rate=$xml->createElement("ProductRate", $prod_rate);
 $products->appendChild($rate);
}

echo"<xmp>".$xml->saveXML()."</xml>";
$xml->save("strings.xml");

?>