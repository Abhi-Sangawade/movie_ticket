<?php

const HOST = "localhost";
const USER = "root";
const PASSWORD = "";
const DBNAME = "moviedb";

// Create connection
$conn = new mysqli(HOST, USER, PASSWORD, DBNAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

// Close connection
$conn->close();
?>
