<?php
include_once 'dbfun.php';
include_once 'header.php';
// Check if the 'id' parameter is set in the GET request
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Validate and cast to integer
    $_SESSION['id'] = $id; // Store the id in session
} else {
    // Check if id is already set in session
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    } else {
        // If id is not set in GET or session, handle the error
        die("ID parameter not found.");
    }
}

$info = single("booking", "bid=$id");
extract($info);
$t = single("theatre", "tid=$tid");
$m = single("movie", "mid=$mid");
$s = single("shows", "id=$sid");
//print_r($info);
?>
<style>
    .ticket-container {
        margin-top: 120px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        font-family: 'Arial', sans-serif;
    }
    .ticket-header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        text-align: center;
        border-radius: 10px 10px 0 0;
    }
    .ticket-header h4 {
        margin: 0;
        font-size: 20px;
    }
    .ticket-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }
    .ticket-table th, .ticket-table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .ticket-table th {
        background-color: #f2f2f2;
        font-weight: bold;
        color: var(--theme-title);
    }
    .print-btn {
        display: block;
        width: 100%;
        margin-top: 10px;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
    }
    .print-btn:hover {
        background-color: #0056b3;
    }
</style>

<div class="container ticket-container">
    <div class="ticket-header">
    <tr>
            <td><?= $t["tname"] ?></td>
        </tr>
    </div>
    <table class="ticket-table">
        <tr>
            <th>Booking ID</th>
            <td><?= $bid ?></td>
        </tr>
        <tr>
            <th>Customer Name</th>
            <td><?= $cid ?></td>
        </tr>
        <tr>
            <th>Movie Name</th>
            <td><?= $m["mname"] ?></td>
        </tr>
        <tr>
            <th>Show Name</th>
            <td><?= $s["showname"] ?></td>
        </tr>
        <tr>
            <th>Show Time</th>
            <td><?= $s["showtime"] ?></td>
        </tr>
        <tr>
            <th>Booking Date</th>
            <td><?= $bdate ?></td>
        </tr>
        <tr>
            <th>No of Seats</th>
            <td><?= $seat ?></td>
        </tr>
        <tr>
            <th>Seats</th>
            <td><?= $seatnums ?></td>
        </tr>
        <tr>
            <th>Snack Amount</th>
            <td><?= $snack_id. '-'. $snack_amt?></td>
        </tr>
        <tr>
            <th>Total Amount</th>
            <td>&#8377; <?= $total ?></td>
        </tr>
    </table>
    <button id="print" class="print-btn" onclick="window.print()">Print</button>
</div>
<?php include_once 'dfooter.php'; ?>

