<?php 
include_once 'header.php'; 
include_once 'dbfun.php'; 
$cid=$_SESSION["userid"];
?>
<style>
    td{
        color:var(--theme-title);
    }
</style>
<div class="jumbotron bg-dark text-white rounded-0" style="margin-top: 70px;">
    <h2 class="heading">Booking History</h2>
</div>
<div class="container">
    <?php include_once 'msg.php' ?>
    <table class="table table-bordered table-sm">
        <thead class='table-danger'>
            <tr>
                <th style="width:100px">Booking ID</th>
                <th>Movie Name</th>
                <th>Theatre Name</th>
                <th>No. of Tickets</th>
                <th>Seat Numbers</th>
                <th>Amount</th>
                <th>Booking Date</th>
                <th>Action</th>                         
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (findall("booking","cid='$cid'") as $row) {
                $t=single("theatre","tid='{$row["tid"]}'");
                 $s=single("shows","id='{$row["sid"]}'");
                  $m=single("movie","mid='{$row["mid"]}'");
                ?>
                <tr>
                    <td><?= $row["bid"] ?></td>
                    <td><?= $m["mname"] ?></td>
                    <td><?= $t["tname"] ?></td>
                    <td><?= $row["seat"] ?></td>
                    <td><?= $row["seatnums"] ?></td>
                    <td>&#8377;<?= $row["amount"] ?></td>
                    <td><?= date('d-M-Y', strtotime($row["bdate"])) ?></td>
                    <td><a href="cancelbooking.php?bid=<?= $row["bid"] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to cancel booking?')">Cancel Booking</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php include_once 'footer.php'; ?>