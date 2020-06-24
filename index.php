<?php

require("config/connection.php");

$sql = "SELECT * FROM records";

$query = $conn->prepare($sql);
$query->execute();

$records = $query->fetchAll(PDO::FETCH_ASSOC);

include('views/index.view.php');