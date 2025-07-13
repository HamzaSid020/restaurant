<!doctype html>
<html lang="zxx">

<head>
    <title>FAQ 2</title>
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
                <h3><span class="cover-left-icon float-start"><i class="fa fa-question"></i></span>Faq 2<span
                        class="cover-right-icon float-end"><i class="fa fa-question"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="faq-page-2">
                <div class="container-fluid">
                    <div class="innerpage-heading text-center">
                        <h3>Have Any Question</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit faucibus mattis.
                        </p>
                    </div><!-- end innerpage-heading -->

                    <form class="faq-form">
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" placeholder="Search Any Topic" />
                                <div class="input-group-prepend">
                                    <button class="btn" type="button"><span><i class="fa fa-search"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="faq-block faq-block-2">
                        <h4 class="faq-heading">Frequently Asked Question</h4>
                        <div class="accordian" id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a data-bs-toggle="collapse" href="#collapse1">
                                        <h4 class="faq-title">How can i choose multiple products ?</h4>
                                    </a>
                                </div><!-- end card-header -->

                                <div id="collapse1" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu
                                            fugiat nulla pariatur.</p>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <a data-bs-toggle="collapse" href="#collapse2">
                                        <h4 class="faq-title">Are there any extra fees?</h4>
                                    </a>
                                </div><!-- end card-header -->

                                <div id="collapse2" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu
                                            fugiat nulla pariatur.</p>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <a data-bs-toggle="collapse" href="#collapse3">
                                        <h4 class="faq-title">What are the safties related to tours ?</h4>
                                    </a>
                                </div><!-- end card-header -->

                                <div id="collapse3" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu
                                            fugiat nulla pariatur.</p>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <a data-bs-toggle="collapse" href="#collapse4">
                                        <h4 class="faq-title">What is your refund policy ?</h4>
                                    </a>
                                </div><!-- end card-header -->

                                <div id="collapse4" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu
                                            fugiat nulla pariatur.</p>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->
                        </div>
                    </div><!-- end faq-block -->

                </div><!-- end container-fluid -->
            </div><!-- end faq-page-2 -->
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