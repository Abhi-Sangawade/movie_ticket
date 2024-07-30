<?php

$mid=$_GET["mid"];
include_once 'dbfun.php';
$link= connect();
$query="delete from movie where mid=$mid";
mysqli_query($link, $query) or die(mysqli_error($link));
$_SESSION["msg"]="Movie delete successfully";
header("location: movies.php");

