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
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

   // Handle image upload
$target_dir = "posters/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    // Image uploaded successfully, continue processing
    $image_path = $target_file;
} else {
    echo "Sorry, there was an error uploading your file.";
}

        // Insert data into database
        $sql = "INSERT INTO snacks (name, description, price, image_path) VALUES ('$name', '$description', $price, '$image_path')";

        if ($conn->query($sql) === TRUE) {
          //  echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }


// Fetch data from database
$sql = "SELECT * FROM snacks";
$result = $conn->query($sql);
?>

<?php include_once 'dheader.php'; ?>
<?php include_once 'dbfun.php'; ?>
<div class="container">
    <h3 class="text-center heading">Add New Snack</h3>
    <div class="row">
        <div class="col-sm-7">
            <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Snack Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" placeholder="Snack Name">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Price</label>
                    <div class="col-sm-8">
                        <input type="Number"  
                               required class="form-control" name="price" placeholder="Price">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Description :</label>
                    <div class="col-sm-8">
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-4 col-form-label">Snack Image</label>
                    <div class="col-sm-8">
                        <input type="file" accept=".jpg" required class="form-control-file" name="image">
                    </div>
                </div>
                
                <input type="submit" class="btn btn-success" value="Add Snack">            
            </form>
        </div>
    </div>
</div>
<?php include_once 'dfooter.php'; ?>