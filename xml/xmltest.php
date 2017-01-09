<?php
include('../include/classes/class.user.php');
$sql="select * from destinations";
$objdb=new Main();
$objdb->query($sql);
$data=$objdb->fetchAllRecords();

$xml= new DOMDocument("1.0");
$xml->formatOutput=true;
$destinationss=$xml->createElement("destinationss");
$xml->appendChild($destinationss);

foreach($data as $row){
 $destinations=$xml->createElement("destinations");
 $destinationss->appendChild($destinations);

 $author=$xml->createElement("Id",$row['id']);
 $destinations->appendChild($author);
 $title=$xml->createElement("City",$row['city']);
 $destinations->appendChild($title);
 $description=$xml->createElement("Description",$row['description']);
 $destinations->appendChild($description);
 $category=$xml->createElement("Price",$row['price']);
 $destinations->appendChild($category);
}

echo"<xmp>".$xml->saveXML()."</xml>";
$xml->save("destinationss.xml");

?>