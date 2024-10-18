<?php

$host =  "localhost";
$user = "root";
$password = "";
$dbName = "r31";

try {
    $connect = mysqli_connect($host, $user, $password, $dbName);
} catch (Exception $e) {
    echo $e->getMessage();
}
