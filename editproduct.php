<?php include_once 'dheader.php'; ?>
<?php include_once 'dbfun.php'; 
$id = $_GET["id"];
$s = single("snacks", "id=$id");
?>
<div class="container">
    <h3 class="text-center heading">Edit Snack</h3>
    <div class="row">
        <div class="col-sm-7">
            <form method="post" enctype="multipart/form-data" action="updatesnack.php">
                <input type="hidden" name="id" value="<?= $s["id"] ?>">
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Snack Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" value="<?= $s["name"] ?>">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Description</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="description" value="<?= $s["description"] ?>">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Price</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="price" value="<?= $s["price"] ?>">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Snack Image</label>
                    <div class="col-sm-8">
                        <input type="file" accept=".jpg" class="form-control-file" name="image_path">
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="Save Snack">
                <a href="snack.php" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
<?php include_once 'dfooter.php'; ?>
