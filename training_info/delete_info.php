<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "apple777",
    "ftfl");

$query = "DELETE FROM `ftfl`.`traininginfo` WHERE `training`.`id` = $id";

mysqli_query($link, $query);

header('location:list_info.php');