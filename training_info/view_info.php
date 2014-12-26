<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "apple777",
    "ftfl");

$query = "select * from traininginfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>

<a href="list_info.php">Go to Home</a>