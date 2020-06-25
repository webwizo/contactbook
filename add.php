<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST') {

    // print_r($_FILES['avatar']);
    
    // $filename = md5($_FILES['avatar']['name'] . time());
    // echo $filename;


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

    $filename = "";

    if ($_FILES['avatar']['error'] === 0) {
        $fileinfo = pathinfo($_FILES['avatar']['name']);
        $filename = md5($fileinfo['basename'] . time()) . '.' . $fileinfo['extension'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/' . $filename);
    }
    
    try {
        $query = $conn->prepare($sql);
        // $query->execute();
        $query->execute([
            ':fullname' => $name,
            ':email' => $email,
            ':mobile_number' => $mobile_number,
            ':avatar' => $filename,
            ':created_at' => $now,
            ':updated_at' => $now
        ]);
        $message = "Your record has been added.";

        header("Location: index.php?added=yes");
        exit;
    } catch (PDOException $ex) {
        if ($_FILES['avatar']['error'] === 0) {
            unlink("uploads/" . $filename);
        }
        die($ex->getMessage());
    }
}

include('views/add.view.php');
