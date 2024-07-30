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

// Insert data into database if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $offercode = $_POST['offercode'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $offeramt = $_POST['offeramt'];
    $status = $_POST['status'];
        // Insert data into database
        $sql = "INSERT INTO offer (offercode, startdate, enddate, offeramt,status	
        ) VALUES ('$offercode', '$startdate', '$enddate', '$offeramt', '$status')";

        if ($conn->query($sql) === TRUE) {
          //  echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }


// Fetch data from database
$sql = "SELECT * FROM offer";
$result = $conn->query($sql);
?>

<?php include_once 'dheader.php'; ?>
<?php include_once 'dbfun.php'; ?>
<div class="container">
    <h3 class="text-center heading">Add New Offer</h3>
    <div class="row">
        <div class="col-sm-7">
            <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Offer Code</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="offercode" placeholder="Offer Code">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Start Date</label>
                    <div class="col-sm-8">
                        <input type="date"  
                               required class="form-control" name="startdate" placeholder="Start Date">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">End Date</label>
                    <div class="col-sm-8">
                        <input type="date"  required class="form-control" name="enddate"  placeholder="End Date">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Amount</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="offeramt" placeholder="Offer Amount">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Status </label>
                    <div class="col-sm-8">
									<select name="status" class="form-control">
										<option value=''>Select</option>
										<option value='Active'>Active</option>
										<option value='Inactive'>Inactive</option>
                                    </select>
                    </div>
                </div>
                
                <input type="submit" class="btn btn-success" value="Add Snack">            
            </form>
        </div>
    </div>
</div>
<?php include_once 'dfooter.php'; ?>