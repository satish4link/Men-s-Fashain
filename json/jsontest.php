<?php

require_once '../include/classes/class.user.php';
$user = new USER;

try {
    $result = $user->runQuery("SELECT * FROM products");
    $result->execute();
    $row = $result->fetchAll(PDO::FETCH_ASSOC);
    header('Content-type: text/javascript');
    echo $json_info = json_encode($row, JSON_PRETTY_PRINT);

}
catch (PDOException $ex) {
    echo $ex->getMessage();
}

?>