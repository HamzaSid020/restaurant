<!doctype html>
<html lang="zxx">

<head>
    <title>Services 1</title>
    <?php include 'includes/head.php'; ?>
</head>

<body class="page-body">

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


        <!--========= PAGE-COVER =========-->
        <div class="page-cover">
            <div class="container-fluid">
                <h3><span class="cover-left-icon float-start"><i class="fa fa-cogs"></i></span>Services<span
                        class="cover-right-icon float-end"><i class="fa fa-cogs"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="services-page">
                <div class="container-fluid text-center">
                    <div class="innerpage-heading">
                        <h3>What We Provide</h3>
                        <p>We believe in more than just food, we deliver a full experience. From carefully crafted meals to exceptional service, here's what sets us apart:
                        </p>
                    </div><!-- end innerpage-heading -->

                    <div id="services" class="no-back">
                        <div class="row">
                            <div class="col-6">
                                <div class="service-block">
                                    <span><i class="fa fa-thumbs-up"></i></span>
                                    <h4>Quality Serve</h4>
                                    <p>Every dish is prepared with the finest ingredients and delivered with attention to detail. Our team is trained to ensure your dining experience is as delightful as the food itself</p>
                                </div><!-- end service-block -->
                            </div><!-- end columns -->

                            <div class="col-6">
                                <div class="service-block">
                                    <span><i class="fa fa-user"></i></span>
                                    <h4>Best Chefs</h4>
                                    <p>Our chefs bring passion and creativity to the kitchen, blending traditional flavors with modern techniques to serve up dishes that are both comforting and innovative.</p>
                                </div><!-- end service-block -->
                            </div><!-- end columns -->

                            <div class="col-6">
                                <div class="service-block">
                                    <span><i class="fa fa-rocket"></i></span>
                                    <h4>Free Deilvery</h4>
                                    <p>Enjoy your favorite meals from the comfort of your home. We offer fast, reliable, and completely free delivery, because great food should come to you effortlessly.</p>
                                </div><!-- end service-block -->
                            </div><!-- end columns -->

                            <div class="col-6">
                                <div class="service-block">
                                    <span><i class="fa fa-building"></i></span>
                                    <h4>Clean Spot</h4>
                                    <p>Your health is our priority. We maintain the highest hygiene standards in both our kitchen and dining areas to give you a clean, safe, and welcoming environment.</p>
                                </div><!-- end service-block -->
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end services -->
                </div><!-- end container-fluid -->
            </div><!-- end services-page -->
        </section><!-- end page-wrapper -->


        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    </div><!-- end canvas -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->

</body>

</html>