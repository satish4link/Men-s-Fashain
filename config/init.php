<?php
$mysqli = new mysqli($db['hostname'], $db['dbuser'], $db['dbpassword'], $db['dbname']);

if ($mysqli->connect_errno) { //check the connection
    print "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

#function __autoload($class_name) {
#  require_once 'include/classes/'.$class_name . '.php';
#}

?>
     