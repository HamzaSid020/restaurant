<!doctype html>
<html lang="zxx">

<head>
    <title>Shopping Cart</title>
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
                <h3><span class="cover-left-icon float-start"><i class="fa fa-shopping-cart"></i></span>Shopping
                    Cart<span class="cover-right-icon float-end"><i class="fa fa-shopping-cart"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="shopping-cart-page">
                <div class="container-fluid">
                    <div class="innerpage-heading text-center">
                        <h3>Your Cart</h3>
                    </div><!-- end innerpage-heading -->

                    <ul class="list-unstyled cart-list">
                        <li>
                            <div class="cart-item">
                                <div class="item-text dish-list-text">
                                    <h4><a href="#">Breakfast-3</a></h4>
                                    <p>Lorem ipsum,dolor</p>
                                    <h5>Qty: <input type="number" class="form-control" min="1" value="1"> x $45</h5>
                                </div><!-- end item-text -->

                                <div class="item-img">
                                    <a href="#"><img src="images/dish-breakfast-3.png" class="img-fluid"
                                            alt="cart-item-img" /></a>
                                </div><!-- end item-img -->

                                <h4 class="total">Total: <span>$45</span></h4>

                                <div class="item-close">
                                    <button class="btn"><span><i class="fa fa-times-circle"></i></span></button>
                                </div><!-- end item-close -->
                            </div><!-- end cart-item -->
                        </li>

                        <li>
                            <div class="cart-item">
                                <div class="item-text dish-list-text">
                                    <h4><a href="#">Dinner-4</a></h4>
                                    <p>Lorem ipsum,dolor</p>
                                    <h5>Qty: <input type="number" class="form-control" min="1" value="1"> x $45</h5>
                                </div><!-- end item-text -->

                                <div class="item-img">
                                    <a href="#"><img src="images/dish-dinner-4.png" class="img-fluid"
                                            alt="cart-item-img" /></a>
                                </div><!-- end item-img -->

                                <h4 class="total">Total: <span>$45</span></h4>

                                <div class="item-close">
                                    <button class="btn"><span><i class="fa fa-times-circle"></i></span></button>
                                </div><!-- end item-close -->
                            </div><!-- end cart-item -->
                        </li>
                    </ul>

                    <div class="cart-info text-end">
                        <h4>Item(s) : <span>2</span></h4>
                        <h4>Total Price: <span>$90.00</span></h4>
                        <a href="menu-list.html" class="btn btn-black">Continue Shopping</a>
                        <a href="checkout.html" class="btn btn-orange">Checkout</a>
                    </div><!-- end cart-info -->

                </div><!-- end container-fluid -->
            </div><!-- end shopping-cart-page -->
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