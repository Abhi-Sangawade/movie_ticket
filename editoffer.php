<?php

include_once 'dheader.php';
include_once 'dbfun.php';

// Validate and get the offerid parameter
if (!isset($_GET["offerid"]) || empty($_GET["offerid"])) {
    $_SESSION["msg"] = "Offer ID is required.";
    header("location: offer.php");
    exit;
}

$offerid = $_GET["offerid"];
$s = single("offer", "offerid=$offerid");

if (!$s) {
    $_SESSION["msg"] = "Offer not found.";
    header("location: offer.php");
    exit;
}
?>
<div class="container">
    <h3 class="text-center heading">Edit Offer</h3>
    <div class="row">
        <div class="col-sm-7">
            <form method="post" enctype="multipart/form-data" action="updateoffer.php">
                <input type="hidden" name="offerid" value="<?= htmlspecialchars($s["offerid"]) ?>">
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Offer Code</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="offercode" value="<?= htmlspecialchars($s["offercode"]) ?>">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Start Date</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="startdate" value="<?= htmlspecialchars($s["startdate"]) ?>">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">End Date</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="enddate" value="<?= htmlspecialchars($s["enddate"]) ?>">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Offer Amount</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="offeramt" value="<?= htmlspecialchars($s["offeramt"]) ?>">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Status</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="status" value="<?= htmlspecialchars($s["status"]) ?>">
                    </div>
                </div>
                
                <input type="submit" class="btn btn-success" value="Save Offer">
                <a href="offer.php" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
<?php include_once 'dfooter.php'; ?>
