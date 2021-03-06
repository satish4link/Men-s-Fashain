<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8"); 
 
// include database and object files 
include_once '../include/classes/class.user.php';
$user = new USER;
  
// query products
$stmt = $user->runQuery("SELECT * FROM products");
$stmt->execute();
$num = $stmt->rowCount();
  
$data="";
 
// check if more than 0 record found
if($num>0){
      
    $x=1;
      
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        $name = $row['product_name'];
        $id = $row['product_id'];
        $description = $row['product_desc'];
        $price = $row['product_rate'];
          
        $data .= '{';
            $data .= '"id":"'  . $id . '",';
            $data .= '"name":"' . $name . '",';
            $data .= '"description":"' . html_entity_decode($description) . '",';
            $data .= '"price":"' . $price . '"';
        $data .= '}'; 
          
        $data .= $x<$num ? ',' : ''; $x++; } 
} 
 
// json format output 
echo $json_response = json_encode($data);
?>