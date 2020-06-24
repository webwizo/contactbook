<?php

require("config/connection.php");

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    
    $sql = "UPDATE records SET fullname = :fullname, email = :email, mobile_number = :mobile_number WHERE id = :id";
    $updateQuery = $conn->prepare($sql);
    $updateQuery->execute([
        ':fullname' => $_POST['name'],
        ':email' => $_POST['email'],
        ':mobile_number' => $_POST['mobile_number'],
        ':id' => $_GET['id']
    ]);

    header("Location: index.php");
    exit;
}

$sql = "SELECT * FROM records WHERE id = :id";
$query = $conn->prepare($sql);
$query->execute([
    ':id' =>  $_GET['id']
]);

$record = $query->fetch(PDO::FETCH_ASSOC);


include("views/edit.view.php");