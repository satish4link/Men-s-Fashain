<?php

require_once 'include/classes/class.user.php';
$user = new USER;

try {
    $result = $user->runQuery("SELECT * FROM companyinfo");
    $result->execute();
    $row = $result->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($row);

}
catch (PDOException $ex) {
    echo $ex->getMessage();
}

?>