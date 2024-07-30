<?php include_once 'dheader.php'; ?>
<?php include_once 'dbfun.php'; ?>
<a href="addmovie.php" class="btn btn-sm btn-primary float-right m-2">Add New Movie</a>
<div class='clearfix'></div>
<div class="container-fluid">
    <?php include_once 'msg.php'; ?>    
    <div class="row">
        <div class="col mx-auto">
            <h3 class="text-center heading">All Movies</h3>
            <table class="table table-bordered table-sm table-striped">
                <thead class='table-danger'>
                    <tr>
                        <th>Movie ID</th>
                        <th>Movie Name</th>
                        <th>Release Date</th>
                        <th>Director</th>    
                        <th>Actor</th>
                        <th>Actress</th>
                        <th>Details</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach (allrecords("movie") as $row) {
                        ?>
                        <tr>
                            <td><?= $row["mid"] ?></td>
                            <td><?= $row["mname"] ?></td>
                            <td><?= date('d-M-Y', strtotime($row["reldate"])) ?></td>
                            <td><?= $row["director"] ?></td>
                            <td><?= $row["actor"] ?></td>
                            <td><?= $row["actress"] ?></td>
                            <td>
                                <a href="madetails.php?mid=<?= $row["mid"] ?>" class="btn btn-primary btn-sm">Details</a>
                                <a href="editmovie.php?mid=<?= $row["mid"] ?>" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once 'dfooter.php'; ?>