<?php

$sid=$_GET["sid"];
include_once 'dbfun.php';
$link= connect();
$query="delete from shows where id=$sid";
mysqli_query($link, $query) or die(mysqli_error($link));
$_SESSION["msg"]="Show delete successfully";
header("location: shows.php");