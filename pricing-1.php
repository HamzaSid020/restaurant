<!doctype html>
<html lang="zxx">

<head>
    <title>Pricing</title>
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
                            <h4><span><i class="far fa-star"></i>Chachu </span>Ki Biryani</h4>
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
                <h3><span class="cover-left-icon float-start"><i class="fa fa-dollar-sign"></i></span>Special Deals<span
                        class="cover-right-icon float-end"><i class="fa fa-dollar-sign"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="pricing-page">
                <div class="container-fluid text-center">
                    <div class="innerpage-heading">
                        <h3>Our Packages</h3>
                        <p>Check out these deliciously affordable packages — perfect for any gathering!</p>
                    </div><!-- end innerpage-heading -->

                    <div class="row">
                        <div class="col-6">
                            <div class="p-table-block">
                                <div class="p-table-price">
                                    <h2>$5</h2>
                                </div><!-- end p-table-price -->
                                <h4 class="p-table-title">Special Nashta</h4>
                                <ul class="list-unstyled">
                                    <li>Anda Paratha</li>
                                    <li>Karak Chai</li>
                                    <!-- <li>20 GB</li>
                                    <li>Update</li>
                                    <li>Support</li> -->
                                </ul>
                                <button class="btn btn-orange">Add to Cart </button>
                            </div><!-- end p-table-block -->
                        </div><!-- end columns -->

                        <div class="col-6">
                            <div class="p-table-block">
                                <div class="p-table-price">
                                    <h2>$80</h2>
                                </div><!-- end p-table-price -->
                                <h4 class="p-table-title">Chiken Biryani Daigh</h4>
                                <ul class="list-unstyled">
                                    <li>6 to 7 People</li>
                                    <li>Daigh Deposit $100</li>
                                     <!--<li>40 GB</li>
                                    <li>Update</li>
                                    <li>Support</li> -->
                                </ul>
                                <button class="btn btn-orange">Add to Cart </button>
                            </div><!-- end p-table-block -->
                        </div><!-- end columns -->

                        <div class="col-6">
                            <div class="p-table-block mg-top-80">
                                <div class="p-table-price">
                                    <h2>$100</h2>
                                </div><!-- end p-table-price -->
                                <h4 class="p-table-title">Veal Biryani Daigh</h4>
                                <ul class="list-unstyled">
                                <li>6 to 7 People</li>
                                    <li>Daigh Deposit $100</li>
                                     <!--<li>40 GB</li>
                                    <li>Update</li>
                                    <li>Support</li> -->
                                </ul>
                                <button class="btn btn-orange">Add to Cart </button>
                            </div><!-- end p-table-block -->
                        </div><!-- end columns -->

                        <div class="col-6">
                            <div class="p-table-block mg-top-80">
                                <div class="p-table-price">
                                    <h2>$0</h2>
                                </div><!-- end p-table-price -->
                                <h4 class="p-table-title">Coming Soon</h4>
                                <ul class="list-unstyled">
                                    <li>Clean</li>
                                    <li>Responsive</li>
                                    <!-- <li>20 GB</li>
                                    <li>Update</li>
                                    <li>Support</li> -->
                                </ul>
                                <button class="btn btn-orange">Add to Cart </button>
                            </div><!-- end p-table-block -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container-fluid -->
            </div><!-- end pricing-page -->
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