<?php

$email = $_POST['email'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "form");

$query="INSERT INTO `form`.`emails` (

`email` ,
`created`
)
VALUES ( '$email', NOW( )
);";

mysqli_query($link, $query);

header('location:list.php');