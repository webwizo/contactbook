<?php

$servername = "localhost";
$username = "root";
$password = "secret";
$dbname = "contactbook";

$conn = null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    die("Connection failed: " . $ex->getMessage());
}



