<!doctype html>
<html lang="zxx">

<head>
    <title>Menu Detail</title>
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
                <h3><span class="cover-left-icon float-start"><i class="fa fa-info-circle"></i></span>Menu Detail<span
                        class="cover-right-icon float-end"><i class="fa fa-info-circle"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="menu-detail-page">
                <div class="container-fluid">
                    <div class="menu-detail">
                        <div class="menu-title">
                            <div class="menu-name">
                                <p>Product Name</p>
                                <h3>Breakfast-3</h3>
                            </div>
                            <div class="menu-price">
                                <p>Price</p>
                                <h3>$45</h3>
                            </div>
                        </div><!-- end menu-title -->

                        <ul id="menu-gallery" class="gallery list-unstyled cS-hidden menu-gallery text-center">
                            <li data-thumb="images/dish-breakfast-3.png">
                                <div class="p-img">
                                    <img src="images/dish-breakfast-3.png" alt="menu-detail-img" />
                                </div>
                            </li>
                            <li data-thumb="images/dish-breakfast-3.png">
                                <div class="p-img">
                                    <img src="images/dish-breakfast-3.png" alt="menu-detail-img" />
                                </div>
                            </li>
                            <li data-thumb="images/dish-breakfast-3.png">
                                <div class="p-img">
                                    <img src="images/dish-breakfast-3.png" alt="menu-detail-img" />
                                </div>
                            </li>
                        </ul>

                        <div class="menu-info">
                            <ul class="list-unstyled list-inline star-rating">
                                <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit faucibus
                                mattis. Donec pharetra odio convalli. Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</p>
                            <button class="btn btn-orange">Add to cart <span><i
                                        class="fa fa-shopping-cart"></i></span></button>
                        </div><!-- end menu-info -->

                        <ul class="nav nav-tabs justify-content-center">
                            <li class="nav-item"><a class="nav-link active" href="#description"
                                    data-bs-toggle="tab"><span><i class="fa fa-info"></i></span>Description</a></li>
                            <li class="nav-item"><a class="nav-link" href="#reviews" data-bs-toggle="tab"><span><i
                                            class="fa fa-comments"></i></span>Reviews</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="description" class="tab-pane active">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit faucibus
                                    mattis. Donec pharetra odio convalli. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</p>
                                <p> Maecenas blandit faucibus mattis. Donec pharetra odio convalli. Lorem ipsum dolor
                                    sit amet, consectetur adipiscing elit.</p>
                            </div>

                            <div id="reviews" class="tab-pane fade">
                                <div class="comments-wrapper">
                                    <div class="comment-block">
                                        <h4>James Anderson</h4>
                                        <ul class="list-unstyled list-inline star-rating">
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit aecenas blandit.</p>
                                        <a href="#"><span><i class="fa fa-reply"></i></span>Reply</a>
                                    </div><!-- end comment-block -->

                                    <div class="comment-block reply-block">
                                        <h4>Elliot Jones</h4>
                                        <ul class="list-unstyled list-inline star-rating">
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit aecenas blandit.</p>
                                        <a href="#"><span><i class="fa fa-reply"></i></span>Reply</a>
                                    </div><!-- end comment-block -->

                                    <div class="comment-block">
                                        <h4>James Anderson</h4>
                                        <ul class="list-unstyled list-inline star-rating">
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                            <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit aecenas blandit.</p>
                                        <a href="#"><span><i class="fa fa-reply"></i></span>Reply</a>
                                    </div><!-- end comment-block -->
                                </div>

                                <form class="custom-form">
                                    <h3>Add Review</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" required />
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" required />
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                                    </div>
                                    <button class="btn btn-orange btn-radius">Submit</button>
                                </form>
                            </div><!-- end reviews -->
                        </div><!-- end tab-content -->
                    </div>
                </div><!-- end container-fluid -->
            </div><!-- end menu-detail-page -->
        </section><!-- end page-wrapper -->

        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    </div><!-- end canvas -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/lightslider.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-lightslider.js"></script>
    <!-- Page Scripts Ends -->

</body>

</html>