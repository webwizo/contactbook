<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST') {
    require("config/connection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $avatar = "";
    $now = date("Y-m-d H:i:s");

    // $sql = "INSERT INTO records (fullname, email, mobile_number, avatar, created_at, updated_at) 
        // VALUES ('" . $name . "', '" . $email . "', '" . $mobile_number . "', '" . $avatar . "', '" . $now ."', '" . $now . "')";

    $sql = "INSERT INTO records (fullname, email, mobile_number, avatar, created_at, updated_at) 
        VALUES (:fullname, :email, :mobile_number, :avatar, :created_at, :updated_at)";

    $message = null;

    try {
        $query = $conn->prepare($sql);
        // $query->execute();
        $query->execute([
            ':fullname' => $name,
            ':email' => $email,
            ':mobile_number' => $mobile_number,
            ':avatar' => $avatar,
            ':created_at' => $now,
            ':updated_at' => $now
        ]);
        $message = "Your record has been added.";
    } catch (PDOException $ex) {
        die($ex->getMessage());
    }
}

include('views/add.view.php');
