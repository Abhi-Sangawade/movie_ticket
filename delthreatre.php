<?php

$tid=$_GET["tid"];
include_once 'dbfun.php';
$link= connect();
$query="delete from theatre where tid=$tid";
mysqli_query($link, $query) or die(mysqli_error($link));
$_SESSION["msg"]="Threatre delete successfully";
header("location: theatres.php");

