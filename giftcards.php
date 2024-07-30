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
   li:hover {
    background-color: #F84464;
    color: white;
}
li:hover i{
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
.nav-pills .nav-item {
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
  <div class="carousel-inner" style="padding-top: 40px;">
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
          <li class="nav-item">
            <a class="nav-link" data-target="./offer/reward.php"><i class="fa-solid fa-credit-card"></i><br>ALL GIFTS</a>
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
            height: 280px;
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
        <img src="https://in.bmscdn.com/gv/gift_my_show_02282022102856_480x295.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">RELIANCE SBI CARD PRIME</h5>
            <p class="card-text">VALID TILL 31 Mar 2026 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/gv/gift_my_show_02402022094010_480x295.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">SBI SIGNATURE/ELITE</h5>
            <p class="card-text">VALID TILL 31 Feb 2025 23:59</p>
        </div>
    </div>
    
    <div class="card">
        <img src="https://in.bmscdn.com/gv/gift_my_show_02302022103011_480x295.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">RBL BANK POPCORN</h5>
            <p class="card-text">VALID TILL 31 Jan 2025 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/gv/gift_my_show_02302022123034_480x295.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">RBL BANK YOUNIQUE</h5>
            <p class="card-text">VALID TILL 31 Jun 2025 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/gv/gift_my_show_02412022124146_480x295.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">YES BANK MARQUEE CREDIT</h5>
            <p class="card-text">VALID TILL 31 Apr 2025 23:59</p>
        </div>
    </div> <div class="card">
        <img src="https://in.bmscdn.com/gv/gift_my_show_04232024062337_480x295.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">YES PRIVATE CREDIT CARD</h5>
            <p class="card-text">VALID TILL 31 Nov 2026 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/gv/gift_my_show_02122022101208_480x295.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">AURUM CREDIT CARD</h5>
            <p class="card-text">VALID TILL 31 Oct 2027 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/vouchagram/combo/bms_and_tgi_fridays_combo_20042018040430.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">DBS BANK CREDIT  CARD</h5>
            <p class="card-text">VALID TILL 31 July 2027 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/gv/gift_my_show_02452022124540_480x295.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">FEDRAL BANK CREDIT</h5>
            <p class="card-text">VALID TILL 31 June 2028 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/vouchagram/combo/bms_and_speciality_restaurants_combo_20342018043406.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">IDFC FIRST BANK CARD</h5>
            <p class="card-text">VALID TILL 31 Mar 2026 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/gv/gift_my_show_04232024062337_480x295.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">DBS BANK CARD PRIME</h5>
            <p class="card-text">VALID TILL 31 May 2027 23:59</p>
        </div>
    </div>
    <div class="card">
        <img src="https://in.bmscdn.com/gv/gift_my_show_05572019115712_480x295.jpg" class="card-img-top" alt="...">
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
