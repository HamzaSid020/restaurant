<!doctype html>
<html lang="zxx">

<head>
    <title>Checkout</title>
    <?php include 'includes/head.php'; ?>

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
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
        <?php include 'includes/header.php'; ?>

        <!--========= PAGE-COVER =========-->
        <div class="page-cover">
            <div class="container-fluid">
                <h3><span class="cover-left-icon float-start"><i class="fa fa-thumbs-up"></i></span>Checkout<span
                        class="cover-right-icon float-end"><i class="fa fa-thumbs-up"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="checkout-page">
                <div class="container-fluid">
                    <div class="innerpage-heading text-center">
                        <h3>Your Order</h3>
                        <a href="shopping-cart.html" class="btn btn-orange">View Shopping Cart</a>
                    </div><!-- end innerpage-heading -->

                    <div class="order-list">
                        <ul class="list-unstyled">
                            <li>
                                <div class="order">
                                    <div class="order-item">
                                        <div class="order-item-info">
                                            <h4><a href="#">Breakfast-3</a></h4>
                                            <p>Lorem ipsum, dolor</p>
                                            <p class="order-item-price"><span>Price : $45</span> , Qty : 1</p>
                                        </div><!-- end order-item-info -->

                                        <div class="order-item-img">
                                            <a href="#"><img src="images/dish-breakfast-3.png" class="img-fluid"
                                                    alt="order-img" /></a>
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
                                            <p>Lorem ipsum, dolor</p>
                                            <p class="order-item-price"><span>Price : $45</span> , Qty : 1</p>
                                        </div><!-- end order-item-info -->

                                        <div class="order-item-img">
                                            <a href="#"><img src="images/dish-dinner-4.png" class="img-fluid"
                                                    alt="order-img" /></a>
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
                    </div>

                    <form class="custom-form">
                        <h4>Fill in the form:</h4>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" required />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" required />
                        </div>

                        <div class="form-group">
                            <select class="form-control">
                                <option selected>Choose Payment</option>
                                <option>VISA</option>
                                <option>Credit Card</option>
                                <option>Paypal</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Card Number" required />
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control dpd" placeholder="Expire Date" required />
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="CVV Code" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Additional Message"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">I agree that i have read and
                                    accepted the <a href="#">terms & conditions</a></label>
                            </div>
                        </div>

                        <button class="btn btn-orange btn-radius">Submit</button>
                    </form>
                </div><!-- end container-fluid -->
            </div><!-- end checkout-page -->
        </section><!-- end page-wrapper -->

        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    </div><!-- end canvas -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <!-- Page Scripts Ends -->

</body>

</html>