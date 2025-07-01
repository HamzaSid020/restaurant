<!doctype html>
<html lang="zxx">

<head>
    <title>Menu Grid</title>
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
        <?php include 'includes/header.php'; ?>

        <!--========= PAGE-COVER =========-->
        <div class="page-cover">
            <div class="container-fluid">
                <h3><span class="cover-left-icon float-start"><i class="fa fa-th-large"></i></span>Menu Grid<span
                        class="cover-right-icon float-end"><i class="fa fa-th-large"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <?php include 'includes/menu_functions.php'; ?>
        <section class="page-wrapper innerpage-section-padding">
            <div id="menu-page" class="menu-grid">
                <div class="container-fluid text-center menu">
                    <div class="innerpage-heading">
                        <h3>Delicious Menu</h3>
                    </div><!-- end innerpage-heading -->

                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav-item"><a class="nav-link active" href="#breakfast-dishes"
                                data-bs-toggle="tab">Breakfast</a></li>
                        <li class="nav-item"><a class="nav-link" href="#lunch-dishes" data-bs-toggle="tab">Lunch</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#dinner-dishes" data-bs-toggle="tab">Dinner</a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <div id="breakfast-dishes" class="tab-pane active">
                            <?php echo renderMenuGrid('breakfast'); ?>
                        </div><!-- end breakfast-dishes -->

                        <div id="lunch-dishes" class="tab-pane fade">
                            <?php echo renderMenuGrid('lunch'); ?>
                        </div><!-- end lunch-dishes -->

                        <div id="dinner-dishes" class="tab-pane fade">
                            <?php echo renderMenuGrid('dinner'); ?>
                        </div><!-- end dinner-dishes -->

                    </div><!-- end tab-content -->
                </div><!-- end container-fluid -->
            </div><!-- end menu-page -->
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