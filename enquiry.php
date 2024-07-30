<?php include_once 'dheader.php'; ?>
<?php include_once 'dbfun.php'; ?>
<div class="container-fluid">
    <h2 class="heading">Enquiries</h2>
    <?php include_once 'msg.php'; ?>
    <table class="table table-bordered table-sm table-striped">
        <thead class='table-danger'>
            <tr>
                <th style="width:100px">ID</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email ID</th> 
                <th>Subject</th>
                <th>Query</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (allrecords("enquiry") as $row) {                                
                ?>
                <tr>
                    <td><?= $row["id"] ?></td>                    
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["phone"] ?></td>
                    <td><?= $row["email"] ?></td> 
                    <td><?= $row["subject"] ?></td>
                    <td><?= $row["query"] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php include_once 'dfooter.php'; ?>