<?php include_once 'header.php'; ?>
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <?php foreach(allrecords("movie order by mid desc limit 4") as $m) { ?>
            <div class="item">
                <li>
                    <div class="info banner-view bg bg2" style="background: url('<?= $m["banner"] ?>'); background-size:100% 100%;">
                        <div class="banner-info">
                            <h3><?= $m["mname"]?> Trailers</h3>
                            <p><?= $m["descr"] ?>.</span></p>
                            <a href="trailer.php?mid=<?= $m["mid"] ?>" class="play-view1">
                                <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span>
                                <h6>Watch Trailer</h6>
                            </a>
                            <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                                <?= $m["trailer"] ?>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- //banner-slider-->
<!-- main-slider -->
<!--grids-sec1-->
<section class="w3l-grids">
    <div class="grids-main py-5">
        <div class="container py-lg-3">
            <div class="headerhny-title">
                <div class="w3l-title-grids">
                    <div class="headerhny-left">
                        <h3 class="hny-title">Popular Movies</h3>
                    </div>
                    <div class="headerhny-right text-lg-right">
                        <h4><a class="show-title" href="movielist.php">Show all</a></h4>
                    </div>
                </div>
            </div>
            <div class="w3l-populohny-grids">
                <?php foreach(allrecords("movie limit 4") as $m) { ?>
                <div class="item vhny-grid">
                    <div class="box16">
                        <a href="mdetails.php?mid=<?= $m["mid"] ?>">
                            <figure>
                                <img class="img-fluid" style="height:350px;" src="<?= $m["poster"] ?>" alt="">
                            </figure>
                            <div class="box-content">
                                <h3 class="title"><?= $m["mname"] ?></h3>
                                <h4>
                                    <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min</span>
                                    <span class="post fa fa-heart text-right"></span>
                                </h4>
                            </div>
                            <span class="fa fa-play video-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!--//grids-sec1-->
<!--grids-sec2-->
<section class="w3l-grids">
    <div class="grids-main py-5">
        <div class="container py-lg-3">
            <div class="headerhny-title">
                <div class="w3l-title-grids">
                    <div class="headerhny-left">
                        <h3 class="hny-title">New Releases</h3>
                    </div>
                    <div class="headerhny-right text-lg-right">
                        <h4><a class="show-title" href="movielist.php">Show all</a></h4>
                    </div>
                </div>
            </div>
            <div class="owl-three owl-carousel owl-theme">
                <?php foreach(allrecords("movie order by mid desc") as $m) { ?>
                <div class="item vhny-grid">
                    <div class="box16 mb-0">
                        <a href="mdetails.php?mid=<?= $m["mid"] ?>">
                            <figure>
                                <img class="img-fluid" style="height:350px;" src="<?= $m["poster"] ?>" alt="">
                            </figure>
                            <div class="box-content">
                                <h4>
                                    <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min</span>
                                    <span class="post fa fa-heart text-right"></span>
                                </h4>
                            </div>
                            <span class="fa fa-play video-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    <h3><a class="title-gd" href="mdetails.php?mid=<?= $m["mid"] ?>"><?= $m["mname"] ?></a></h3>
                    <p><?= $m["actor"] ?> and <?= $m["actress"] ?></p>
                    <div class="button-center text-center mt-4">
                        <a href="mdetails.php?mid=<?= $m["mid"] ?>" class="btn watch-button">Watch now</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!--grids-sec2-->
<!--mid-slider -->
<section class="w3l-mid-slider position-relative">
    <div class="companies20-content">
        <div class="owl-mid owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info mid-view bg bg2">
                        <div class="container">
                            <div class="mid-info">
                                <span class="sub-text">Comedy</span>
                                <h3>Jumanji: The Next Level</h3>
                                <p>2019 ‧ Comedy/Action ‧ 2h 3m</p>
                                <a class="watch" href="genre.html">
                                    <span class="fa fa-play" aria-hidden="true"></span>
                                    Watch Trailer
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info mid-view mid-top1 bg bg2">
                        <div class="container">
                            <div class="mid-info">
                                <span class="sub-text">Adventure</span>
                                <h3>Dolittle</h3>
                                <p>2020 ‧ Family/Adventure ‧ 1h 41m</p>
                                <a class="watch" href="genre.html">
                                    <span class="fa fa-play" aria-hidden="true"></span>
                                    Watch Trailer
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info mid-view mid-top2 bg bg2">
                        <div class="container">
                            <div class="mid-info">
                                <span class="sub-text">Action</span>
                                <h3>Bad Boys for Life</h3>
                                <p>2020 ‧ Comedy/Action ‧ 2h 4m</p>
                                <a class="watch" href="genre.html">
                                    <span class="fa fa-play" aria-hidden="true"></span>
                                    Watch Trailer
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
</section>
<!-- //mid-slider-->
<!--/tabs-->
<!-- //tabs-->
<?php include_once 'footer.php'; ?>

<!-- Include jQuery and Owl Carousel scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Initialize Owl Carousels with autoplay disabled -->
<!-- Include jQuery and Owl Carousel scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Initialize Owl Carousels with autoplay enabled -->
<script>
$(document).ready(function(){
    $('.owl-one').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000, // 3 seconds
        autoplayHoverPause: true
    });
    
    $('.owl-three').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000, // 3 seconds
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $('.owl-mid').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000, // 3 seconds
        autoplayHoverPause: true
    });
});
</script>
