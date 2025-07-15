<!doctype html>
<html lang="zxx">

<head>
    <title>Bakery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300%7CRoboto+Condensed:400,400i,700,700i%7CGreat+Vibes"
        rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap-5.3.2.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/orange.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Flex Slider Stylesheets -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- OWL Stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
</head>

<body id="bakery-homepage" class="page-body">

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--============ SIDE-NAV =============-->
    <?php include 'includes/side_nav.php'; ?>

    <!--============ SIDE-NAV-2 =============-->
    <?php include 'includes/side_nav2.php'; ?>

    <!--=============== FULLSCR-NAV ==============-->
    <?php include 'includes/fullscreen_nav.php'; ?>

    <!--================ SHOPPING-CART ==============-->
    <?php include 'includes/shopping_cart.php'; ?>

    <!--============== USER-PROFILE-SIDEBAR =============-->
    <?php include 'includes/user_profile_sidebar.php'; ?>

    <div class="canvas">

        <div class="overlay-black"></div>

        <!--========= HEADER =========-->
        <div class="header">
            <div class="fixed-header">
                <div class="container-fluid">
                    <div class="header-logo">
                        <a href="#">
                            <h4><span><i class="far fa-star"></i>Chachu</span>Ki Biryani</h4>
                        </a>
                    </div><!-- end header-logo -->

                    <div class="header-links">
                        <ul class="list-unstyled list-inline">

                            <li class="list-inline-item shopping-cart"><a href="javascript:void(0)"
                                    id="shc-side-open"><span><i class="fa fa-shopping-cart"></i></span><span
                                        class="cart-badge">2</span></a></li>
                            <li class="list-inline-item user-link"><a href="javascript:void(0)"
                                    id="usr-side-open"><span><i class="fa fa-user"></i></span></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" id="sidenav-open"><span><i
                                            class="fa fa-bars"></i></span></a></li>
                        </ul>
                    </div><!-- end header-links -->
                </div><!-- end container-fluid -->
            </div><!-- end fixed-header -->
        </div><!-- end header -->


        <!--=========== SLIDER ==========-->
        <div class="flexslider" id="slider">
            <ul class="slides">

                <li class="item-1"
                    style="background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/bakery-slider-1.jpg') center center; background-size:cover;">
                    <div class="container text-center meta">
                        <p>Delicious Place</p>
                        <h1>Its Time to Taste</h1>
                        <button class="btn btn-orange btn-radius">Read More</button>
                    </div>
                </li><!-- end item-1 -->

                <li class="item-2"
                    style="background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/bakery-slider-2.jpg') center center; background-size:cover;">
                    <div class="container text-center meta">
                        <p>Delicious Place</p>
                        <h1>Its Time to Taste</h1>
                        <button class="btn btn-orange btn-radius">Read More</button>
                    </div>
                </li><!-- end item-2 -->

            </ul>
        </div><!-- end flexslider -->


        <!--=============== BEST-SELLERS ===============-->
        <section id="best-sellers" class="section-padding">
            <div class="container-fluid text-center">
                <h3 class="page-heading">Best Sellers</h3>
                <hr class="page-heading-line" />

                <div class="menu">
                    <div class="owl-carousel owl-theme owl-auto-arrow" id="owl-best-sellers">
                        <div class="item">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/sweet-cupcake-1.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Ice Cream</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/sweet-donut-1.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Gulab Jamun Kheer</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end item -->
                    </div><!-- end owl-best-sellers -->
                </div><!-- end menu -->

            </div><!-- end container-fluid -->
        </section><!-- end best-sellers -->


        <!--=============== ABOUT-US ===============-->
        <section id="about-us" class="section-padding">
            <div class="container-fluid text-center">
                <h3 class="page-heading">About Us</h3>
                <hr class="page-heading-line black-line" />
                <img src="images/about-img-bakery.png" class="img-fluid" alt="about-img" />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit faucibus mattis. Donec
                    pharetra odio convalli. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit
                    faucibus mattis. Donec pharetra odio convalli.</p>
            </div><!-- end container-fluid -->
        </section><!-- end about-us -->


        <!--============= MENU ============-->
        <section class="menu section-padding">
            <div class="container-fluid text-center">
                <h3 class="page-heading">Our Products</h3>
                <hr class="page-heading-line" />
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item"><a class="nav-link active" href="#sweet-cupcakes" data-bs-toggle="tab">Ice Cream Flavours</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sweet-donuts" data-bs-toggle="tab">Dessert/Kheer</a></li>
                </ul>

                <div class="tab-content">

<div id="sweet-cupcakes" class="tab-pane active">
    <div class="owl-carousel owl-theme owl-auto-arrow owl-menu">
        <div>
            <div class="grid">
                <div class="dish-list">
                    <a href="menu-detail.html"><img src="images/sweet-cupcake-1.png"
                            class="img-fluid" alt="dish-menu" /></a>
                    <div class="dish-list-text">
                        <h4><a href="menu-detail.html">Mango Ice Cream</a></h4>
                        <h5>$45</h5>
                        <p>Lorem ipsum, Dolor</p>
                        <button class="btn">Add to cart<span><i
                                    class="fa fa-shopping-cart"></i></span></button>
                    </div><!-- end dish-list-text -->
                </div><!-- end dish-list -->
            </div><!-- end grid -->

            <div class="grid">
                <div class="dish-list">
                    <a href="menu-detail.html"><img src="images/sweet-cupcake-2.png"
                            class="img-fluid" alt="dish-menu" /></a>
                    <div class="dish-list-text">
                        <h4><a href="menu-detail.html">Vanilla Ice Cream</a></h4>
                        <h5>$45</h5>
                        <p>Lorem ipsum, Dolor</p>
                        <button class="btn">Add to cart<span><i
                                    class="fa fa-shopping-cart"></i></span></button>
                    </div><!-- end dish-list-text -->
                </div><!-- end dish-list -->
            </div><!-- end grid -->
        </div>

        <div>
            <div class="grid">
                <div class="dish-list">
                    <a href="menu-detail.html"><img src="images/sweet-cupcake-3.png"
                            class="img-fluid" alt="dish-menu" /></a>
                    <div class="dish-list-text">
                        <h4><a href="menu-detail.html">Fusion of Mango and Vanilla Ice Cream</a></h4>
                        <h5>$45</h5>
                        <p>Lorem ipsum, Dolor</p>
                        <button class="btn">Add to cart<span><i
                                    class="fa fa-shopping-cart"></i></span></button>
                    </div><!-- end dish-list-text -->
                </div><!-- end dish-list -->
            </div><!-- end grid -->
        </div>
    </div><!-- end owl-menu -->
</div><!-- end sweet-cupcakes -->

<div id="sweet-donuts" class="tab-pane fade">
    <div class="owl-carousel owl-theme owl-auto-arrow owl-menu">
        <div>
            <div class="grid">
                <div class="dish-list">
                    <a href="menu-detail.html"><img src="images/sweet-donut-1.png" class="img-fluid"
                            alt="dish-menu" /></a>
                    <div class="dish-list-text">
                        <h4><a href="menu-detail.html">Mango Dessert</a></h4>
                        <h5>$45</h5>
                        <p>Lorem ipsum, Dolor</p>
                        <button class="btn">Add to cart<span><i
                                    class="fa fa-shopping-cart"></i></span></button>
                    </div><!-- end dish-list-text -->
                </div><!-- end dish-list -->
            </div><!-- end grid -->

            <div class="grid">
                <div class="dish-list">
                    <a href="menu-detail.html"><img src="images/sweet-donut-2.png" class="img-fluid"
                            alt="dish-menu" /></a>
                    <div class="dish-list-text">
                        <h4><a href="menu-detail.html">Gulab Jamun Kheer</a></h4>
                        <h5>$45</h5>
                        <p>Lorem ipsum, Dolor</p>
                        <button class="btn">Add to cart<span><i
                                    class="fa fa-shopping-cart"></i></span></button>
                    </div><!-- end dish-list-text -->
                </div><!-- end dish-list -->
            </div><!-- end grid -->
        </div>

        <div>
            <div class="grid">
                <div class="dish-list">
                    <a href="menu-detail.html"><img src="images/sweet-donut-3.png" class="img-fluid"
                            alt="dish-menu" /></a>
                    <div class="dish-list-text">
                        <h4><a href="menu-detail.html">Khoya Kheer</a></h4>
                        <h5>$45</h5>
                        <p>Lorem ipsum, Dolor</p>
                        <button class="btn">Add to cart<span><i
                                    class="fa fa-shopping-cart"></i></span></button>
                    </div><!-- end dish-list-text -->
                </div><!-- end dish-list -->
            </div><!-- end grid -->
        </div>
    </div><!-- end owl-menu -->
</div><!-- end sweet-donuts -->

                </div><!-- end tab-content -->
            </div><!-- end container-fluid -->
        </section><!-- end menu -->


        <!--=============== SERVICES ===============-->
        <section id="services" class="section-padding">
            <div class="container-fluid">

                <div class="owl-carousel owl-theme" id="owl-services">
                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-thumbs-up service-icon-border"></i></span>
                            <h4>Quality Serve</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-user service-icon-border"></i></span>
                            <h4>Best Chefs</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-rocket service-icon-border"></i></span>
                            <h4>Free Deilvery</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-building service-icon-border"></i></span>
                            <h4>Clean Spot</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->
                </div><!-- end owl-services -->

            </div><!-- end container -->
        </section><!-- end services -->


        <!--====================== TESTIMONIAL ======================-->
        <section id="testimonial" class="section-padding testimonial-2">
            <div class="container-fluid">
                <h3 class="page-heading">Testimonials</h3>
                <hr class="page-heading-line" />
                <div class="owl-carousel owl-theme" id="owl-testimonial">

                    <div class="item">
                        <div class="review-block">

                            <div class="reviewer-img top-img">
                                <img src="images/reviewer-1.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->

                            <div class="reviewer-text">
                                <ul class="list-unstyled list-inline star-rating">
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                </ul>

                                <blockquote class="blockquote"> Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad.
                                    <footer class="blockquote-footer">Andrew</footer>
                                </blockquote>
                            </div><!-- end reviewer-text -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="review-block">

                            <div class="reviewer-img top-img">
                                <img src="images/reviewer-2.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->

                            <div class="reviewer-text">
                                <ul class="list-unstyled list-inline star-rating">
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                </ul>

                                <blockquote class="blockquote"> Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad.
                                    <footer class="blockquote-footer">Andrew</footer>
                                </blockquote>
                            </div><!-- end reviewer-text -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="review-block">

                            <div class="reviewer-img top-img">
                                <img src="images/reviewer-3.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->

                            <div class="reviewer-text">
                                <ul class="list-unstyled list-inline star-rating">
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                </ul>

                                <blockquote class="blockquote"> Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad.
                                    <footer class="blockquote-footer">Andrew</footer>
                                </blockquote>
                            </div><!-- end reviewer-text -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="review-block">

                            <div class="reviewer-img top-img">
                                <img src="images/reviewer-4.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->

                            <div class="reviewer-text">
                                <ul class="list-unstyled list-inline star-rating">
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                </ul>

                                <blockquote class="blockquote"> Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad.
                                    <footer class="blockquote-footer">Andrew</footer>
                                </blockquote>
                            </div><!-- end reviewer-text -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                </div><!-- end owl-testimonial -->
            </div><!-- end container-fluid -->
        </section><!-- end testimonial -->


        <!--=============== FOOTER ===============-->
        <section id="footer" class="section-padding">
            <div class="container-fluid text-center">
                <h3><span><i class="far fa-star"></i>Res</span>taurant</h3>
                <ul class="footer-contact list-unstyled">
                    <li><span><i class="fa fa-map-marker-alt"></i></span>Street # 3, Lorem ipsum dolor , California.
                    </li>
                    <li><span><i class="fa fa-envelope"></i></span>info@starrestaurant.com</li>
                    <li><span><i class="fa fa-phone"></i></span>+123 1234 123456</li>
                </ul>

                <ul class="footer-social list-unstyled list-inline">
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-facebook-f"></i></span></a></li>
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-instagram"></i></span></a></li>
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-pinterest"></i></span></a></li>
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-twitter"></i></span></a></li>
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-dribbble"></i></span></a></li>
                </ul>
                <p class="copyright">© 2018 <a href="#"><span><i class="far fa-star"></i></span>Restaurant</a>. All
                    rights reserved.</p>
            </div><!-- end container-fluid -->
        </section><!-- end footer -->

    </div><!-- end canvas -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <!-- Page Scripts Ends -->

</body>

</html>