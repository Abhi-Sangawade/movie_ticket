<?php

$s_id=$_GET["s_id"];
include_once 'dbfun.php';
$link= connect();
$query="delete from snacks where s_id=$s_id";
mysqli_query($link, $query) or die(mysqli_error($link));
$_SESSION["msg"]="Snack delete successfully";
header("location: snack.php");

