<?php

$link = mysqli_connect("localhost",
    "root",
    "apple777",
    "ftfl");

$query="INSERT INTO `ftfl`.`traininginfo` (
                                            `training` ,
                                            `description` ,
                                            `institute` ,
                                            `address` ,
                                            `t_year` ,
                                            `duration` ,
                                            `start` ,
                                            `end_date`
                                            `course` ,
                                            `trainer`
)
VALUES (
      '".$_POST['training']."', '".$_POST['description']."','".$_POST['institute']."',
     '".$_POST['address']."', '".$_POST['t_year']."','".$_POST['duration']."', '".$_POST['start']."','".$_POST['end_date']."','".$_POST['course']."','".$_POST['trainer']."'
);";

mysqli_query($link, $query);

header('location:list_info.php');
?>