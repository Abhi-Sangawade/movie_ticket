<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
   .nav-items:hover {
    background-color: #F84464;
    color: white;
}
.nav-items:hover i{
    color: white;
}
i{
color: black;
}
/* Centering the ul element */
ul.nav-pills {
    display: flex;
    justify-content: center;
}

/* Optional: Adjusting spacing between list items */
.nav-pills .nav-items {
    margin: 0 10px; /* Adjust as needed */
}
.card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* You can adjust the values as needed */
}
.credit {
  display: flex;

}
.card{
    margin-left: 20px;
    margin-top: 30px;
}
.nav-link {
            text-align: center;
        }

        .nav-link .fa-ticket {
            font-size: 2em; /* Change the font size as needed */
            display: block;
            margin-bottom: 5px; /* Adjust spacing between icon and text */
        }
        .nav-link .fa-rupee-sign {
            font-size: 2em; /* Change the font size as needed */
            display: block;
            margin-bottom: 5px; /* Adjust spacing between icon and text */
        }
        .nav-link .fa-wallet {
            font-size: 2em; /* Change the font size as needed */
            display: block;
            margin-bottom: 5px; /* Adjust spacing between icon and text */
        }
        .nav-link .fa-credit-card {
            font-size: 2em; /* Change the font size as needed */
            display: block;
            margin-bottom: 5px; /* Adjust spacing between icon and text */
        }
        .nav-link .fa-debit-card {
            font-size: 2em; /* Change the font size as needed */
            display: block;
            margin-bottom: 5px; /* Adjust spacing between icon and text */
        }
        .nav-link .fa-amazon-pay {
            font-size: 2em; /* Change the font size as needed */
            display: block;
            margin-bottom: 5px; /* Adjust spacing between icon and text */
        }
        .rows {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Adjust shadow properties as needed */
            padding-top: 20px; /* Adjust padding as needed */
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px auto;
            max-width: 1200px; /* Adjust as needed */
        }

        .card {
            width: calc(25% - 20px); /* Adjust as needed */
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 0.9rem;
            color: #888;
        }
</style>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  </div>
  <div class="carousel-inner"style="padding-top: 40px;">
    <div class="carousel-item active">
      <img src="https://assets-in.bmscdn.com/promotions/cms/creatives/1712582661091_123.jpg" class="d-block w-100" alt="...">
    </div>
</div>
<!DOCTYPE html>
<html>
<head>
  <!-- Include necessary CSS and JavaScript libraries -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <div class="container" style="padding-top: 40px;">
    <div class="row">
      <div class="col">
        <h1 style="text-align:center;">FILTERS OFFERS BY</h1>
      </div>
    </div>
    <div class="rows" style="padding-top: 20px;">
      <div class="col">
        <ul class="nav nav-pills">
          <li class="nav-items">
            <a class="nav-link" data-target="./offer/credit.php"><i class="fa-regular fa-credit-card"></i><br>Credit Card</a>
          </li>
          <li class="nav-items">
            <a class="nav-link"  data-target="./offer/debit.php"><i class="fa-regular fa-credit-card"></i><br>Debit Card</a>
          </li>
          <li class="nav-items">
            <a class="nav-link" data-target="./offer/tickettapoff.php"><i class="fa-solid fa-ticket"></i><br>BookShow</a>
          </li>
          <li class="nav-items">
            <a class="nav-link" data-target="./offer/wallet.php"><i class="fa-solid fa-wallet"></i><br>Wallet</a>
          </li>
          <li class="nav-items">
            <a class="nav-link" data-target="./offer/reward.php"><i class="fa-solid fa-rupee-sign"></i><br>Rewards</a>
          </li>
          <li class="nav-items">
            <a class="nav-link"  data-target="./offer/upioffer.php"><i class="fa-brands fa-amazon-pay"></i><br>UPI</a>
          </li>
        </ul>
      </div>
    </div>
    <div id="page-content"></div>
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px auto;
            max-width: 1200px; /* Adjust as needed */
        }

        .card {
            width: calc(25% - 20px); /* Adjust as needed */
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 0.9rem;
            color: #888;
        }
    </style>
</head>
<body>
<div class="card-container">
    <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/yes-bank-apex-international-metal-debit-card-yesapx124.jpg?22032024195410" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">RELIANCE SBI CARD PRIME</h5>
            <p class="card-text">VALID TILL 31 Mar 2026 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/visa-blockbuster-weekends-offer-vsbogo1111.jpg?10012024123028" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">SBI SIGNATURE/ELITE</h5>
            <p class="card-text">VALID TILL 31 Feb 2025 23:59</p>
        </div>
    </div>
    
    <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/csb-bank-rupay-debit-card-offer-csbdc1023.jpg?20112023154214" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">RBL BANK POPCORN</h5>
            <p class="card-text">VALID TILL 31 Jan 2025 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/rupay-sbi-debit-card-offer-sbidc0823.jpg?24042024130110" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">RBL BANK YOUNIQUE</h5>
            <p class="card-text">VALID TILL 31 Jun 2025 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/yes-bank-marquee-credit-card-offer-yesmrq1123.jpg?06022024140523" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">YES BANK MARQUEE CREDIT</h5>
            <p class="card-text">VALID TILL 31 Apr 2025 23:59</p>
        </div>
    </div> <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/yes-private-credit-card-offer-yespr0917.jpg?06022024140547" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">YES PRIVATE CREDIT CARD</h5>
            <p class="card-text">VALID TILL 31 Nov 2026 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/aurum-credit-card-offer-sbispr0420.jpg?19122023130347" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">AURUM CREDIT CARD</h5>
            <p class="card-text">VALID TILL 31 Oct 2027 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/dbs-bank-credit-card-offer-dbscc0623.jpg?10042024115652" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">DBS BANK CREDIT  CARD</h5>
            <p class="card-text">VALID TILL 31 July 2027 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/federal-bank-credit-card-offer-fedcc0722.jpg?31032024075634" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">FEDRAL BANK CREDIT</h5>
            <p class="card-text">VALID TILL 31 June 2028 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/idfc-first-bank-private-credit-card-offer-idfccc0921.jpg?22032024122320" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">IDFC FIRST BANK CARD</h5>
            <p class="card-text">VALID TILL 31 Mar 2026 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/dbs-bank-credit-card-offer-dbscc0623.jpg?10042024115652" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">DBS BANK CARD PRIME</h5>
            <p class="card-text">VALID TILL 31 May 2027 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/offers/offerlisting/hdfc-bank-timescard-offer-htc0314.jpg?20032024123903" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">HDFC CARD PRIME</h5>
            <p class="card-text">VALID TILL 31 Apr 2027 23:59</p>
        </div>
    </div>
</div>

    <script>
      $(document).ready(function() {
        // Handle click event for nav links
        $(".nav-link").click(function(e) {
          e.preventDefault(); // Prevent default behavior
          var target = $(this).data("target"); // Get target page from data attribute
          // Load content from target page
          $("#page-content").load(target);
        });
      });
    </script>
  </div>
</body>
</html>
