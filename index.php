<!doctype html>
<html lang="zxx">

<head>
    <title>ChachuKiBiryani</title>
    <?php include 'includes/head.php'; ?>
</head>

<body class="page-body">

    <!--====== LOADER =====-->
    <div class="loader"></div>

    <!--============ SIDE-NAV =============-->
    <?php include 'includes/side_nav.php'; ?>

    <!--============ SIDE-NAV-2 =============-->=
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
        <?php include 'includes/header.php'; ?>

        <!--=========== SLIDER ==========-->
        <div class="flexslider" id="slider">
            <ul class="slides">

                <li class="item-1"
                    style="background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/restaurant-slider-1.jpg'); background-size:cover;">
                    <div class="container text-center meta">
                        <p>Delicious Place</p>
                        <h1>Its Time to Taste</h1>
                        <button class="btn btn-orange btn-radius">Read More</button>
                    </div>
                </li><!-- end item-1 -->

                <li class="item-2"
                    style="background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/restaurant-slider-2.jpg'); background-size:cover;">
                    <div class="container text-center meta">
                        <p>Delicious Place</p>
                        <h1>Its Time to Taste</h1>
                        <button class="btn btn-orange btn-radius">Read More</button>
                    </div>
                </li><!-- end item-2 -->

            </ul>
        </div><!-- end flexslider -->


        <!--======= BANNER-1 ========-->
        <section id="banner-1">
            <div class="container-fluid  text-center overlay section-padding">
                <ul class="list-unstyled">
                    <li><span><i class="far fa-clock"></i>Mon - Fri :</span> 10:00 am - 11:00 pm</li>
                    <li><span><i class="far fa-clock"></i>Sat - Sun :</span> 11:00 am - 08:00 pm</li>
                </ul>
            </div><!-- end container-fluid -->
        </section><!-- end banner-1 -->


        <!--=============== ABOUT-US ===============-->
        <section id="about-us" class="section-padding">
            <div class="container-fluid text-center">
                <h3 class="page-heading">About Us</h3>
                <hr class="page-heading-line" />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit faucibus mattis. Donec
                    pharetra odio convalli. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit
                    faucibus mattis. Donec pharetra odio convalli.</p>
            </div><!-- end container-fluid -->
        </section><!-- end about-us -->


        <!--=============== SERVICES ===============-->
        <section id="services" class="section-padding">
            <div class="container-fluid">

                <div class="owl-carousel owl-theme" id="owl-services">
                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <h4>Quality Serve</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-user"></i></span>
                            <h4>Best Chefs</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-rocket"></i></span>
                            <h4>Free Deilvery</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-building"></i></span>
                            <h4>Clean Spot</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->
                </div><!-- end owl-services -->

            </div><!-- end container -->
        </section><!-- end services -->


        <!--============= MENU ============-->
        <section class="menu section-padding">
            <div class="container-fluid text-center">
                <h3 class="page-heading">Delicious Menu</h3>
                <hr class="page-heading-line" />
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item"><a class="nav-link active" href="#breakfast-dishes"
                            data-bs-toggle="tab">Breakfast</a></li>
                    <li class="nav-item"><a class="nav-link" href="#lunch-dishes" data-bs-toggle="tab">Lunch</a></li>
                    <li class="nav-item"><a class="nav-link" href="#dinner-dishes" data-bs-toggle="tab">Dinner</a></li>
                </ul>

                <div class="tab-content">

                    <div id="breakfast-dishes" class="tab-pane active">
                        <div class="owl-carousel owl-theme owl-menu">
                            <div>
                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-1.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Breakfast-1</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->

                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-2.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Breakfast-2</a></h4>
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
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-3.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Breakfast-3</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->

                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-4.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Breakfast-4</a></h4>
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
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-5.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Breakfast-5</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->

                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-6.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Breakfast-6</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->
                            </div>
                        </div><!-- end owl-menu -->
                    </div><!-- end breakfast-dishes -->

                    <div id="lunch-dishes" class="tab-pane fade">
                        <div class="owl-carousel owl-theme owl-menu">
                            <div>
                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-lunch-1.png" class="img-fluid"
                                                alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Lunch-1</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->

                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-lunch-2.png" class="img-fluid"
                                                alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Lunch-2</a></h4>
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
                                        <a href="menu-detail.html"><img src="images/dish-lunch-3.png" class="img-fluid"
                                                alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Lunch-3</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->

                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-lunch-4.png" class="img-fluid"
                                                alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Lunch-4</a></h4>
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
                                        <a href="menu-detail.html"><img src="images/dish-lunch-5.png" class="img-fluid"
                                                alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Lunch-5</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->

                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-lunch-6.png" class="img-fluid"
                                                alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Lunch-6</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->
                            </div>
                        </div><!-- end owl-menu -->
                    </div><!-- end lunch-dishes -->

                    <div id="dinner-dishes" class="tab-pane fade">
                        <div class="owl-carousel owl-theme owl-menu">
                            <div>
                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-1.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Dinner-1</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->

                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-2.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Dinner-2</a></h4>
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
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-3.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Dinner-3</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->

                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-4.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Dinner-4</a></h4>
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
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-5.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Dinner-5</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->

                                <div class="grid">
                                    <div class="dish-list">
                                        <a href="menu-detail.html"><img src="images/dish-breakfast-6.png"
                                                class="img-fluid" alt="dish-menu" /></a>
                                        <div class="dish-list-text">
                                            <h4><a href="menu-detail.html">Dinner-6</a></h4>
                                            <h5>$45</h5>
                                            <p>Lorem ipsum, Dolor</p>
                                            <button class="btn">Add to cart<span><i
                                                        class="fa fa-shopping-cart"></i></span></button>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list -->
                                </div><!-- end grid -->
                            </div>
                        </div><!-- end owl-menu -->
                    </div><!-- end dinner-dishes -->

                </div><!-- end tab-content -->
            </div><!-- end container-fluid -->
        </section><!-- end menu -->


        <!--=============== TESTIMONIAL ===============-->
        <section id="testimonial" class="section-padding text-white">
            <div class="container-fluid">
                <h3 class="page-heading white-heading">Testimonials</h3>
                <hr class="page-heading-line white-line" />
                <div class="owl-carousel owl-theme" id="owl-testimonial">

                    <div class="item">
                        <div class="review-block">
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

                            <div class="reviewer-img">
                                <img src="images/reviewer-1.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="review-block">
                            <div class="reviewer-text">
                                <ul class="list-unstyled list-inline star-rating">
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                </ul>

                                <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua ut enim ad.
                                    <footer class="blockquote-footer">Andrew</footer>
                                </blockquote>
                            </div><!-- end reviewer-text -->

                            <div class="reviewer-img">
                                <img src="images/reviewer-2.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="review-block">
                            <div class="reviewer-text">
                                <ul class="list-unstyled list-inline star-rating">
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                </ul>

                                <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua ut enim ad.
                                    <footer class="blockquote-footer">Andrew</footer>
                                </blockquote>
                            </div><!-- end reviewer-text -->

                            <div class="reviewer-img">
                                <img src="images/reviewer-3.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="review-block">
                            <div class="reviewer-text">
                                <ul class="list-unstyled list-inline star-rating">
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                </ul>

                                <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua ut enim ad.
                                    <footer class="blockquote-footer">Andrew</footer>
                                </blockquote>
                            </div><!-- end reviewer-text -->

                            <div class="reviewer-img">
                                <img src="images/reviewer-4.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                </div><!-- end owl-testimonial -->
            </div><!-- end container-fluid -->
        </section><!-- end testimonial -->

        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

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