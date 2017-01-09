<?php
require_once '../include/classes/class.user.php';
$user = new USER;

    $result = $user->runQuery("SELECT * FROM products");
    $result->execute();
    $row = $result->fetchAll(PDO::FETCH_ASSOC);
    echo $data = json_encode($row);


?>