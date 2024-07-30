<!DOCTYPE html>
<html>
<head>
    <title>Offers List</title>
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
$sql = "SELECT * FROM offer";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
    // Your code for displaying data goes here
}
?>
<?php include_once 'dheader.php'; ?>
<a href="addoffer.php" class="btn btn-sm btn-primary float-right m-2">Add New Offer</a>
<div class='clearfix'></div>
<div class="container-fluid">
    <?php include_once 'msg.php'; ?>    
    <div class="row">
        <div class="col mx-auto">
            <h3 class="text-center heading">All Offers</h3>
            <table class="table table-bordered table-sm table-striped">
                <thead class='table-danger'>
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>    
                <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?= $row["offerid"] ?></td>
                            <td><?= $row["offercode"] ?></td>
                            <td><?= $row["startdate"] ?></td>
                            <td><?= $row["enddate"] ?></td>
                            <td><?= $row["offeramt"] ?></td>
                            <td><?= $row["status"] ?></td>
                            <td class='action-buttons'>
                                <a href='editoffer.php?offerid=<?= $row["offerid"] ?>'><button class="btn btn-primary btn-sm">Edit</button></a>
                                <a href='deloffer.php?offerid=<?= $row["offerid"] ?>' onclick='return confirm("Are you sure you want to delete this offer?")'><button class="btn btn-danger btn-sm">Delete</button></a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='7'>0 results</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
