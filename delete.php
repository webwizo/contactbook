<?php

require('config/connection.php');

$sql = "DELETE FROM records WHERE id = :id";
$query = $conn->prepare($sql);
$query->execute([
    ':id' => $_GET['id']
]);

header("Location: index.php?deleted=yes");
exit;