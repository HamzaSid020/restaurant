<!doctype html>
<html lang="zxx">

<head>
    <title>Contact Us 2</title>
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


        <iframe class="map mb-0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554"
            allowfullscreen></iframe>


        <!--======================== PAGE-WRAPPER ===================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="contact-page-2">
                <div class="container-fluid text-center">

                    <div class="contact-block-2">
                        <h4><span><i class="fa fa-map-marker-alt"></i></span>Find Us</h4>
                        <p>988 Burnhamthorpe Rd E, Mississauga, ON L4Y 2X6</p>
                    </div><!-- end contact-block-2 -->

                    <div class="contact-block-2">
                        <h4><span><i class="fa fa-phone"></i></span>Call Us</h4>
                        <p>+1 (905) 897-6226</p>
                        <!-- <p>+123 12345 123457</p> -->
                    </div><!-- end contact-block-2 -->

                    <div class="contact-block-2">
                        <h4><span><i class="fa fa-envelope"></i></span>Email Us</h4>
                        <p>ChachukiBiryani@gmail.com</p>
                        <!-- <p>support@loremipsum.com</p> -->
                    </div><!-- end contact-block-2 -->

                    <div class="innerpage-heading mt-5">
                        <h3>Send Us a Message</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit faucibus mattis.
                        </p> -->
                    </div><!-- end innerpage-heading -->

                    <form class="custom-form" id="contact-form" name="contact-form" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="txt_name" id="txt_name" />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="txt_email"
                                id="txt_email" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" name="txt_phone"
                                id="txt_phone" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="txt_subject"
                                id="txt_subject" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Your Message" name="txt_message"
                                id="txt_message"></textarea>
                        </div>
                        <div class="col-sm-12 text-center" id="result_msg"></div>
                        <button class="btn btn-orange btn-radius" name="submit" id="submit">Submit</button>
                    </form>
                </div><!-- end container-fluid -->
            </div><!-- end contact-page-2 -->
        </section><!-- end page-wrapper -->


        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    </div><!-- end canvas -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/custom-validation.js"></script>

    <!-- Page Scripts Ends -->

</body>

</html>