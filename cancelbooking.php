<?php

$bid=$_GET["bid"];
include_once 'dbfun.php';
$link= connect();
$query="delete from booking where bid=$bid";
mysqli_query($link, $query);
$_SESSION["msg"]="Booking cancelled successfully. We will refund 50% amount within 7 days";
header("location: bhistory.php");

