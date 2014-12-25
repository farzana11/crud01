<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 4:33 PM
 */
$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "form");

$query = "DELETE FROM `form`.`emails` WHERE `users`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');