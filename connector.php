<?php

$servername = "localhost";
$username = "Leon";
$password = "Leon";
$db = "restaurantpizza";

$dns = "mysql:host=$servername;dbname=$db;charset=UTF8";

try {
    $pdo = new PDO($dns, $username, $password);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
