<!doctype html>
<html lang="zxx">

<head>
    <title>Edit Profile</title>
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
                <h3><span class="cover-left-icon float-start"><i class="fa fa-pencil-alt"></i></span>Edit Profile<span
                        class="cover-right-icon float-end"><i class="fa fa-pencil-alt"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="edit-user-page">
                <div class="container-fluid text-center">
                    <div class="innerpage-heading text-center">
                        <h3>Edit Profile</h3>
                    </div><!-- end innerpage-heading -->

                    <form class="custom-form">
                        <div class="form-profile-img">
                            <img src="images/user-profile.jpg" class="img-fluid rounded-circle" alt="user-profile" />

                            <div class="custom-file text-start">
                                <input type="file" class="form-control-sm" id="customFile">
                                <label class="form-label" for="customFile">Change your profile</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Name" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Email" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Phone Number" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Country" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-globe"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="State or Region" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-map-marker-alt"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Postal Code" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-link"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Address"></textarea>
                        </div>

                        <button class="btn btn-orange btn-radius">Update</button>
                    </form>
                </div><!-- end container-fluid -->
            </div><!-- end edit-user-page -->
        </section><!-- end page-wrapper -->


        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->

</body>

</html>