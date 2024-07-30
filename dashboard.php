<?php include_once 'dbfun.php'; ?>
<?php include_once 'dheader.php'; ?>
<style>
    .card {
        transition: all 0.3s ease-in-out;
    }
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
    }
</style>
<div class="container">
    <h2 class="heading">Owner Dashboard</h2>
    <div class="container" style="padding-top: 20px;">
        <div class="row">
            <div class="col-sm-3 mb-2 text-center">
                <a href="theatres.php">
                    <div class="card bg-danger shadow">
                        <h4 style="color:white; padding:7px"><i class="fas fa-film"></i> Theaters</h4>
                        <h4 style="color:white; padding:7px"><?= countrecords("theatre")?></h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-2 text-center">
                <a href="movies.php">
                    <div class="card bg-warning shadow">
                        <h4 style="color:white; padding:7px"><i class="fas fa-video"></i> Movies</h4>
                        <h4 style="color:white; padding:7px"><?= countrecords("movie")?></h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-2 text-center">
                <a href="shows.php">
                    <div class="card bg-primary shadow">
                        <h4 style="color:white; padding:7px"><i class="fas fa-video"></i> Shows</h4>
                        <h4 style="color:white; padding:7px"><?= countrecords("shows")?></h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-2 text-center">
                <a href="snack.php">
                    <div class="card bg-info shadow">
                        <h4 style="color:white; padding:7px"><i class="fas fa-cookie"></i> Snacks</h4>
                        <h4 style="color:white; padding:7px"><?= countrecords("snacks")?></h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-2 text-center" style="padding-top: 20px;">
                <a href="offer.php">
                    <div class="card bg-secondary shadow">
                        <h4 style="color:white; padding:7px"><i class="fas fa-tags"></i> Offers</h4>
                        <h4 style="color:white; padding:7px"><?= countrecords("offer")?></h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-2 text-center" style="padding-top: 20px;">
                <a href="customers.php">
                    <div class="card bg-success shadow">
                        <h4 style="color:white; padding:7px"><i class="fas fa-users"></i> Customers</h4>
                        <h4 style="color:white; padding:7px"><?= countrecords("customers")?></h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-2 text-center" style="padding-top: 20px;">
                <a href="bookings.php">
                    <div class="card bg-danger shadow">
                        <h4 style="color:white; padding:7px"><i class="fas fa-book"></i> Bookings</h4>
                        <h4 style="color:white; padding:7px"><?= countrecords("booking") ?></h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-2 text-center" style="padding-top: 20px;">
                <a href="enquiry.php">
                    <div class="card bg-warning shadow">
                        <h4 style="color:white; padding:7px"><i class="fas fa-book"></i> Enquiry</h4>
                        <h4 style="color:white; padding:7px"><?= countrecords("enquiry")?></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include_once 'dfooter.php'; ?>
