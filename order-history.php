<!doctype html>
<html lang="zxx">

<head>
    <title>Order History</title>
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
                <h3><span class="cover-left-icon float-start"><i class="fa fa-file-alt"></i></span>Order History<span
                        class="cover-right-icon float-end"><i class="fa fa-file-alt"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="order-history-page">
                <div class="container-fluid">
                    <div class="innerpage-heading text-center">
                        <h3>My Orders</h3>
                    </div><!-- end innerpage-heading -->

                    <div class="form-group">
                        <select class="form-control">
                            <option selected>Last 6 Days</option>
                            <option>Last 2 Weeks</option>
                            <option>Last 3 Weeks</option>
                            <option>Last Month</option>
                        </select>
                        <span><i class="fa fa-calendar-alt"></i></span>
                        <span><i class="fa fa-angle-down"></i></span>
                    </div>

                    <div class="card order-card">
                        <a data-bs-toggle="collapse" href="#collapse1" data-bs-parent="#accordion">
                            <div class="card-header">
                                <div class="order-title">
                                    <div class="order-name float-start">
                                        <h3><span>Order ID:</span> #123456</h3>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-calendar-alt"></i>14 Jan 2018
                                            </li>
                                            <li class="list-inline-item"><i class="fa fa-clock"></i>12:00 pm</li>
                                        </ul>
                                    </div>
                                    <span class="order-status success float-end"><i class="fa fa-check"></i><span
                                            class="status-text">Done</span></span>
                                </div>
                            </div><!-- end card-header -->
                        </a>
                        <div id="collapse1" class="collapse">
                            <div class="card-body">
                                <div class="order-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="order">
                                                <div class="order-item">
                                                    <div class="order-item-info">
                                                        <h4><a href="#">Breakfast-3</a></h4>
                                                        <p class="order-item-price"><span>Price : $45</span> , Qty : 1
                                                        </p>
                                                    </div><!-- end order-item-info -->

                                                    <div class="order-item-img">
                                                        <a href="#"><img src="images/dish-breakfast-3.png"
                                                                class="img-fluid" alt="order-img" /></a>
                                                    </div><!-- end order-img -->
                                                </div><!-- end order-item -->

                                                <div class="total">
                                                    <p>1 x $45 = <span>$45</span></p>
                                                </div><!-- end total -->
                                            </div><!-- end order-->
                                        </li>

                                        <li>
                                            <div class="order">
                                                <div class="order-item">
                                                    <div class="order-item-info">
                                                        <h4><a href="#">Dinner-4</a></h4>
                                                        <p class="order-item-price"><span>Price : $45</span> , Qty : 1
                                                        </p>
                                                    </div><!-- end order-item-info -->

                                                    <div class="order-item-img">
                                                        <a href="#"><img src="images/dish-dinner-4.png"
                                                                class="img-fluid" alt="order-img" /></a>
                                                    </div><!-- end order-img -->
                                                </div><!-- end order-item -->

                                                <div class="total">
                                                    <p>1 x $45 = <span>$45</span></p>
                                                </div><!-- end total -->
                                            </div><!-- end order-->
                                        </li>
                                    </ul>
                                    <div class="cart-info text-center">
                                        <h4>Total Price: <span>$90</span></h4>
                                    </div><!-- end cart-info -->
                                </div><!-- end order-list -->
                            </div><!-- end card-body -->
                        </div><!-- end collapse -->
                    </div><!-- end card-default -->

                    <div class="card order-card">
                        <a data-bs-toggle="collapse" href="#collapse2" data-bs-parent="#accordion">
                            <div class="card-header">
                                <div class="order-title">
                                    <div class="order-name float-start">
                                        <h3><span>Order ID:</span> #123456</h3>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-calendar-alt"></i>14 Jan 2018
                                            </li>
                                            <li class="list-inline-item"><i class="fa fa-clock"></i>12:00 pm</li>
                                        </ul>
                                    </div>
                                    <span class="order-status fail float-end"><i class="fa fa-times"></i><span
                                            class="status-text">Cancel</span></span>
                                </div>
                            </div><!-- end card-header -->
                        </a>
                        <div id="collapse2" class="collapse">
                            <div class="card-body">
                                <div class=" order-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="order">
                                                <div class="order-item">
                                                    <div class="order-item-info">
                                                        <h4><a href="#">Breakfast-3</a></h4>
                                                        <p class="order-item-price"><span>Price : $45</span> , Qty : 1
                                                        </p>
                                                    </div><!-- end order-item-info -->

                                                    <div class="order-item-img">
                                                        <a href="#"><img src="images/dish-breakfast-3.png"
                                                                class="img-fluid" alt="order-img" /></a>
                                                    </div><!-- end order-img -->
                                                </div><!-- end order-item -->

                                                <div class="total">
                                                    <p>1 x $45 = <span>$45</span></p>
                                                </div><!-- end total -->
                                            </div><!-- end order-->
                                        </li>

                                        <li>
                                            <div class="order">
                                                <div class="order-item">
                                                    <div class="order-item-info">
                                                        <h4><a href="#">Dinner-4</a></h4>
                                                        <p class="order-item-price"><span>Price : $45</span> , Qty : 1
                                                        </p>
                                                    </div><!-- end order-item-info -->

                                                    <div class="order-item-img">
                                                        <a href="#"><img src="images/dish-dinner-4.png"
                                                                class="img-fluid" alt="order-img" /></a>
                                                    </div><!-- end order-img -->
                                                </div><!-- end order-item -->

                                                <div class="total">
                                                    <p>1 x $45 = <span>$45</span></p>
                                                </div><!-- end total -->
                                            </div><!-- end order-->
                                        </li>
                                    </ul>
                                    <div class="cart-info text-center">
                                        <h4>Total Price: <span>$90</span></h4>
                                    </div><!-- end cart-info -->
                                </div><!-- end order-list -->
                            </div><!-- end card-body -->
                        </div><!-- end collapse -->
                    </div><!-- end card-default -->
                </div><!-- end container-fluid -->
            </div><!-- end order-history-page -->
        </section><!-- end page-wrapper -->


        <!--=============== FOOTER ===============-->
        <?php include'includes/footer.php'; ?>

    </div><!-- end canvas -->
    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->

</body>

</html>