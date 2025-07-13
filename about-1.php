<!doctype html>
<html lang="zxx">

<head>
    <title>About Us</title>
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
                            <h4><span><i class="far fa-star"></i>Res</span>taurant</h4>
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
                <h3><span class="cover-left-icon float-start"><i class="fa fa-info"></i></span>About Us<span
                        class="cover-right-icon float-end"><i class="fa fa-info"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="about-page">
                <div class="container-fluid text-center">
                    <div class="innerpage-heading">
                        <h3>Who We Are</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit faucibus mattis.
                        </p>
                    </div><!-- end innerpage-heading -->

                    <img src="images/chefs.png" class="img-fluid" alt="about-img" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit faucibus mattis. Donec
                        pharetra odio convalli. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                        blandit faucibus mattis. Donec pharetra odio convalli.</p>
                </div><!-- end container-fluid -->
            </div><!-- end about-page -->
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