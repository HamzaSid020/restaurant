<!doctype html>
<html lang="zxx">

<head>
    <title>Login</title>
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
                <h3><span class="cover-left-icon float-start"><i class="fa fa-lock"></i></span>Login<span
                        class="cover-right-icon float-end"><i class="fa fa-lock"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="login-page">
                <div class="container-fluid text-center">
                    <div class="innerpage-heading">
                        <h3>Login</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit faucibus mattis.
                        </p>
                    </div><!-- end innerpage-heading -->

                    <form class="custom-form">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="User Name or Email" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Password" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-orange btn-radius">Login</button>
                    </form>

                    <div class="form-page-links">
                        <a href="forgot-password.html">Forgot Password ?</a>
                        <p> New Here ? <a href="register.html">Register Now</a></p>
                    </div><!-- end form-page-links -->

                    <div class="form-page-connect-social">
                        <h4>Login with</h4>
                        <ul class="list-unstyled">
                            <li><button class="btn btn-block fb"><span><i
                                            class="fab fa-facebook-f"></i></span>Facebook</button></li>
                            <li><button class="btn btn-block gm"><span><i
                                            class="fab fa-google"></i></span>Gmail</button></li>
                            <li><button class="btn btn-block any">Login With Any Other Account</button></li>
                        </ul>
                    </div><!-- end form-page-connect-social -->
                </div><!-- end container-fluid -->
            </div><!-- end login-page -->
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