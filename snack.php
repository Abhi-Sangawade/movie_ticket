<?php include_once 'dheader.php'; ?>
<?php include_once 'dbfun.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    
    </style>
</head>
<body>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT * FROM snacks";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
    // Your code for displaying data goes here
}
?>
<a href="addsnack.php" class="btn btn-sm btn-primary float-right m-2">Add New Snack</a>
<div class='clearfix'></div>
<div class="container-fluid">
    <?php include_once 'msg.php'; ?>    
    <div class="row">
        <div class="col mx-auto">
            <h3 class="text-center heading">All Snacks</h3>
            <table class="table table-bordered table-sm table-striped">
                <thead class='table-danger'>
                    <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
     <tbody>
     <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $row["s_id"] ?></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["description"] ?></td>
            <td><?= $row["price"] ?></td>
            <td><img src='<?= $row["image_path"] ?>' alt='Product Image' style='max-width: 100px; max-height: 100px;'></td>
            <td class='action-buttons'>
                <a href='editproduct.php?id=<?= $row["s_id"] ?>'><button class="btn btn-primary btn-sm">Edit</button></a>
                <a href='delsnack.php?id=<?= $row["s_id"] ?>' onclick='return confirm("Are you sure you want to delete this product?")'><button class="btn btn-primary btn-sm">Delete</button></a>
            </td>
        </tr>
        <?php
    }
} else {
    echo "<tr><td colspan='6'>0 results</td></tr>";
}
?>
</tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
