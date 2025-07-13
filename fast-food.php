<!doctype html>
<html lang="zxx">

<head>
    <title>Fast Food</title>
    <?php include 'includes/head.php'; ?>
</head>

<body id="fastfood-homepage" class="page-body">

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
        <?php include 'includes/header.php'; ?>
        <!--=========== SLIDER ==========-->
        <div class="flexslider" id="slider">
            <ul class="slides">

                <li class="item-1"
                    style="background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/fastfood-slider-1.jpg') center center; background-size:cover;">
                    <div class="container text-center meta">
                        <span class="meta-highlight mg-b-20 meta-orange">Delicious Place </span>
                        <h1 class="mg-b-6">Its Time to Taste</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
                    </div>
                </li><!-- end item-1 -->

                <li class="item-2"
                    style="background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/fastfood-slider-2.jpg') center center; background-size:cover;">
                    <div class="container text-center meta">
                        <span class="meta-highlight mg-b-20 meta-orange">Delicious Place</span>
                        <h1 class="mg-b-6">Its Time to Taste</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
                    </div>
                </li><!-- end item-2 -->

            </ul>
        </div><!-- end flexslider -->


        <!--=============== FEATURED-PRODUCTS ===============-->
        <section id="featured-products" class="grey-featured-products section-padding">
            <div class="container-fluid text-center no-pad">
                <h3 class="page-heading">Featured Items</h3>
                <hr class="page-heading-line" />
                <div class="menu box-menu">
                    <ul class="list-unstyled">
                        <li>
                            <a href="menu-grid.html" class="dish-list-link">
                                <div class="dish-list">
                                    <div class="dish-list-tbl-cell">
                                        <img src="images/fast-food-1.png" class="img-fluid" alt="dish-menu" />
                                        <div class="dish-list-text">
                                            <h4>Sandwich</h4>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list-tbl-cell -->
                                </div><!-- end dish-list -->
                            </a>
                        </li>
                        <li>
                            <a href="menu-grid.html" class="dish-list-link">
                                <div class="dish-list">
                                    <div class="dish-list-tbl-cell">
                                        <img src="images/fast-food-2.png" class="img-fluid" alt="dish-menu" />
                                        <div class="dish-list-text">
                                            <h4>Fries</h4>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list-tbl-cell -->
                                </div><!-- end dish-list -->
                            </a>
                        </li>
                        <li>
                            <a href="menu-grid.html" class="dish-list-link">
                                <div class="dish-list">
                                    <div class="dish-list-tbl-cell">
                                        <img src="images/fast-food-3.png" class="img-fluid" alt="dish-menu" />
                                        <div class="dish-list-text">
                                            <h4>Burger</h4>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list-tbl-cell -->
                                </div><!-- end dish-list -->
                            </a>
                        </li>
                        <li>
                            <a href="menu-grid.html" class="dish-list-link">
                                <div class="dish-list">
                                    <div class="dish-list-tbl-cell">
                                        <img src="images/fast-food-4.png" class="img-fluid" alt="dish-menu" />
                                        <div class="dish-list-text">
                                            <h4>Hot Dog</h4>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list-tbl-cell -->
                                </div><!-- end dish-list -->
                            </a>
                        </li>
                        <li>
                            <a href="menu-grid.html" class="dish-list-link">
                                <div class="dish-list">
                                    <div class="dish-list-tbl-cell">
                                        <img src="images/fast-food-5.png" class="img-fluid" alt="dish-menu" />
                                        <div class="dish-list-text">
                                            <h4>Fry Chick</h4>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list-tbl-cell -->
                                </div><!-- end dish-list -->
                            </a>
                        </li>
                        <li>
                            <a href="menu-grid.html" class="dish-list-link">
                                <div class="dish-list">
                                    <div class="dish-list-tbl-cell">
                                        <img src="images/fast-food-6.png" class="img-fluid" alt="dish-menu" />
                                        <div class="dish-list-text">
                                            <h4>Shawarma</h4>
                                        </div><!-- end dish-list-text -->
                                    </div><!-- end dish-list-tbl-cell -->
                                </div><!-- end dish-list -->
                            </a>
                        </li>
                    </ul>
                </div><!-- end menu -->
            </div><!-- end container-fluid -->
        </section><!-- end featured-products -->


        <!--==================== BANNER-2 ====================-->
        <section id="banner-2" style="background:url('images/banner-2-fast-food.jpg'); background-size:cover;">
            <div class="container-fluid section-padding overlay">
                <p>A perfect place for</p>
                <h2>Awesome Taste</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="btn btn-black">Learn More</a>
            </div><!-- end container -->
        </section><!-- end banner-2 -->


        <!--============= MENU ============-->
        <section class="menu section-padding">
            <div class="container-fluid text-center">
                <h3 class="page-heading">Delicious Menu</h3>
                <hr class="page-heading-line" />

                <div class="owl-carousel owl-theme owl-menu">
                    <div>
                        <div class="grid">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/fast-food-1.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Sandwich</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/fast-food-2.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Fries</a></h4>
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
                                <a href="menu-detail.html"><img src="images/fast-food-3.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Hamburger</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/fast-food-4.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Hot Dog</a></h4>
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
                                <a href="menu-detail.html"><img src="images/fast-food-5.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Fry Chick</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/fast-food-6.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Shawarma</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end grid -->
                    </div>
                </div><!-- end owl-menu -->

            </div><!-- end container-fluid -->
        </section><!-- end menu -->


        <!--=============== NEWSLETTER ===============-->
        <section id="newsletter" class="section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h3>Subscribe Our Newsletter</h3>
                        <p>Subscibe to receive our interesting updates</p>
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter your email address"
                                        required />
                                    <div class="input-group-append"><button class="btn"><i
                                                class="fa fa-envelope"></i></button></div>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </section><!-- end newsletter -->


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