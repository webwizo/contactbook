<?php

$servername = "localhost";
$username = "root";
$password = "secret";
$dbname = "contactbook";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $ex) {
    die("Connection failed: " . $ex->getMessage());
}



