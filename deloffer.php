<?php
session_start();

if (!isset($_GET["offerid"]) || empty($_GET["offerid"])) {
    $_SESSION["msg"] = "Offer ID is required.";
    header("location: offer.php");
    exit;
}

$offerid = $_GET["offerid"];

include_once 'dbfun.php';
$link = connect();

$query = "DELETE FROM offer WHERE offerid=$offerid";
mysqli_query($link, $query) or die("Error: " . mysqli_error($link));

$_SESSION["msg"] = "Offer deleted successfully.";
header("location: offer.php");
exit;
?>
