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

                    <?php
                    // Display menu tabs from database
                    echo displayMenuTabs();
                    ?>

                    <div class="tab-content">
                        <?php
                        // Display menu content from database
                        echo displayMenuContent();
                        ?>
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
    
    <!-- Add to cart functionality -->
    <script>
    $(document).ready(function() {
        // Add to cart functionality
        $('.add-to-cart').click(function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var price = $(this).data('price');
            
            // Add to cart logic here
            console.log('Adding to cart:', name, 'Price:', price);
            
            // You can implement cart functionality here
            alert('Added to cart: ' + name);
        });
    });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>