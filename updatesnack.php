<?php

include_once 'dbfun.php';

$link = connect();

// Extract all POST data safely
$id = isset($_POST['id']) ? $_POST['id'] : null;
$name = isset($_POST['name']) ? $_POST['name'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$image_path = null;

if (!$id) {
    die("Error: ID is required.");
}

if (isset($_FILES["image_path"]) && $_FILES["image_path"]["error"] == 0) {
    $image_path = "images/snacks/$id.jpg";
    move_uploaded_file($_FILES["image_path"]["tmp_name"], $image_path);
}

$query = "UPDATE snacks SET name='$name', description='$description', price='$price'";
if ($image_path) {
    $query .= ", image_path='$image_path'";
}
$query .= " WHERE id=$id";

mysqli_query($link, $query) or die("Error: " . mysqli_error($link));

$_SESSION["msg"] = "Snack saved successfully.";

header("location: snack.php");
?>
