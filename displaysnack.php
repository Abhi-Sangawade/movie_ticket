<?php
// Include necessary files
include_once 'dbfun.php';
include_once 'header.php';

// Check if 'id' parameter is set in GET request
if (isset($_GET['id'])) {
    // Fetch product details based on the 'id'
    $id = $_GET['id'];
    $info = single("snacks", "id=$id");
    // Extract relevant information from the fetched data
    $name = $info['name'];
    $price = $info['price'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Purchase and Product List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            box-shadow: 0 4px 4px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            max-width: 100%; /* Adjust the width to fit 4 cards in a row */
            margin-top:5px;
        }

        .card:hover {
            box-shadow: 0 2px 6px 0 rgba(0,0,0,0.4);
            cursor: pointer;
        }

        .card-img-top {
            width: 100%;
            height: 100px; /* Adjust the height of the image */
            object-fit: cover;
        }

        .card-body {
            padding: 3px; /* Adjust the padding within the card body */
        }

        .creditCardForm {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<?php include_once 'msg.php'; ?>
<div class="container-fluid" style="margin-top: 100px;">
    <div class="row">
        <!-- Product List on the left -->
        <div class="col-md-8">
            <div class="row">
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

                $sql = "SELECT * FROM snacks";
                $result = $conn->query($sql);

                if ($result === false) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } else {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="col-md-3 mb-2"> <!-- Set each column to occupy 3 grid units to fit 4 cards -->
                                <div class="card" style="height:210px;">
                                    <img src="<?= htmlspecialchars($row["image_path"]) ?>" class="card-img-top" alt="Product Image">
                                    <div class="card-body">
                                        <h6 class="card-title"><?= htmlspecialchars($row["name"]) ?></h6>
                                        <p class="card-text"><?= htmlspecialchars($row["description"]) ?></p>
                                        <p class="card-text"><strong>Rs.<?= htmlspecialchars($row["price"]) ?></strong></p>
                                
                                        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
                                        <a href='addTocart.php?id=<?= htmlspecialchars($row["id"]) ?>' class="btn btn-danger btn-sm" style="margin-top:-50px; margin-left: 150px;">Add</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p>No products found.</p>";
                    }
                }
                $conn->close();
                ?>
            </div>
        </div> 
        <!-- Confirm Purchase form on the right -->
        <div class="col-md-4">
            <div class="creditCardForm">    
                <h2 class="heading">Confirm Purchase</h2>
                <div class="payment row">
                    <div class="col-sm-12">
                        <form id="creditCardForm" action="showticket.php">
                            <div class="form-group owner">
                                <label for="owner">Name on Card</label>
                                <input type="text" required class="form-control" id="owner">
                            </div>
                            <div class="form-group CVV">
                                <label for="cvv">CVV</label>
                                <input type="text" required maxlength="3" class="form-control" id="cvv">
                            </div>
                            <div class="form-group" id="card-number-field">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" required maxlength="16" class="form-control" id="cardNumber">
                            </div>
                            <div class="form-group row" id="expiration-date">
                                <label class="col-sm-4">Expiration Date</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="expiration-month">
                                        <option value="">Month</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="form-control" id="expiration-year">
                                        <option value="">Year</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="credit_cards">
                                <img src="images/visa.jpg" id="visa">
                                <img src="images/mastercard.jpg" id="mastercard">
                            </div>
                            <input type="hidden" name="id" value="<?= isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '' ?>">
                            <div class="form-group" id="pay-now">
                                <button class="btn1 btn-danger" style="height: 50px;width:150px;border-radius:5px" id="confirm-purchase"><b>PAY NOW</b></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
