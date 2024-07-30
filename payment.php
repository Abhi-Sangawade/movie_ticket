<?php

include_once 'dbfun.php';
include_once 'header.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $_SESSION['id'] = $id;
} else {
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    } else {
        die("ID parameter not found.");
    }
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            margin-top: 20px;
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        .card-img-top {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }
        .card-body {
            padding: 15px;
        }
        .card-body input[type="text"] {
            border: none;
            background: transparent;
            width: 100%;
            padding: 5px 0;
            margin-bottom: 5px;
        }
        .creditCardForm {
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background: #f9f9f9;
        }
        .creditCardForm h2 {
            margin-bottom: 20px;
        }
        .creditCardForm .form-group {
            margin-bottom: 15px;
        }
        .creditCardForm .form-control {
            border-radius: 5px;
        }
        .creditCardForm #credit_cards img {
            width: 50px;
            margin-right: 10px;
        }
        .creditCardForm #pay-now {
            margin-top: 20px;
        }
        .btn-success, .btn-primary {
            border-radius: 5px;
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
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "moviedb";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $bookingQuery = "SELECT amount, bid FROM booking ORDER BY bid DESC LIMIT 1";
                $bookingResult = $conn->query($bookingQuery);

                if ($bookingResult === false) {
                    echo "Error: " . $bookingQuery . "<br>" . $conn->error;
                    exit;
                }

                $lastBid = 0;
                $lastAmount = 0;
                if ($bookingResult->num_rows > 0) {
                    $lastRow = $bookingResult->fetch_assoc();
                    $lastBid = $lastRow['bid'];
                    $lastAmount = $lastRow['amount'];
                }

                $sql = "SELECT s.*, $lastAmount AS last_amount FROM snacks s";
                $result = $conn->query($sql);

                if ($result === false) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } else {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <form class="form-horizontal" method="POST" action="addToCart.php">
                                        <img src="<?= htmlspecialchars($row["image_path"]) ?>" class="card-img-top" alt="Product Image"><br>
                                        <div class="card-body">
                                            <input type="hidden" id="ticktamt" name="ticktamt" value="<?= htmlspecialchars($row['last_amount']) ?>" readonly>
                                            <input type="hidden" id="bid" name="bid" value="<?= htmlspecialchars($lastBid) ?>">
                                            <input type="text" id="pname" name="pname" value="<?= htmlspecialchars($row['name']) ?>" readonly>
                                            <input type="text" id="description" name="description" value="<?= htmlspecialchars($row['description']) ?>" readonly>
                                            <input type="text" id="price" name="price" value="<?= htmlspecialchars($row['price']) ?>" readonly>
                                            <button type="submit" class="btn btn-danger btn-block mt-2" name="edit"><i class="fa fa-check-square-o"></i> ADD</button>
                                        </div>
                                    </form>
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

        <!-- Confirm Purchase on the right -->
        <div class="col-md-4">
            <div class="creditCardForm">
                <h2 class="heading">Confirm Purchase</h2>
                <div class="payment row">
                    <div class="col-sm-12">
                        <form id="creditCardForm" action="showticket.php" method="post">
                            <div class="form-group owner">
                                <label for="owner">Name on Card</label>
                                <input type="text" required class="form-control" id="owner" name="owner">
                            </div>
                            <div class="form-group CVV">
                                <label for="cvv">CVV</label>
                                <input type="text" required maxlength="3" class="form-control" id="cvv" name="cvv">
                            </div>
                            <div class="form-group" id="card-number-field">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" required maxlength="16" class="form-control" id="cardNumber" name="cardNumber">
                            </div>
                            <div class="form-group row" id="expiration-date">
                                <label class="col-sm-4">Expiration Date</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="expiration-month" name="expirationMonth">
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
                                    <select class="form-control" id="expiration-year" name="expirationYear">
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
                            <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
                            <div class="form-group" id="pay-now">
                                <button class="btn btn-primary btn-block" id="confirm-purchase">Confirm Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php include_once 'footer.php'; ?>
