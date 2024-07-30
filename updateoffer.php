<?php
session_start();
include_once 'dbfun.php';

extract($_POST);

$link = connect();

// Validate required fields
if (empty($offerid) || empty($offercode) || empty($startdate) || empty($enddate) || empty($offeramt) || empty($status)) {
    $_SESSION["msg"] = "All fields are required.";
    header("location: editoffer.php?offerid=$offerid");
    exit;
}

$query = "UPDATE offer SET 
            offercode='$offercode', 
            startdate='$startdate', 
            enddate='$enddate', 
            offeramt='$offeramt', 
            status='$status' 
          WHERE offerid=$offerid";

mysqli_query($link, $query) or die("Error: " . mysqli_error($link));

$_SESSION["msg"] = "Offer updated successfully.";
header("location: offer.php");
?>
