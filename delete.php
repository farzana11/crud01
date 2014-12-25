<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "DELETE FROM `crud01`.`users` WHERE `users`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');