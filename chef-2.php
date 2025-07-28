<?php
require_once __DIR__.'/includes/auth.php';
startSession();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Our Chefs - ChachuKiBiryani</title>
    <?php include 'includes/head.php'; ?>
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/chef.css" rel="stylesheet">

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
        <section class="page-cover-modern">
            <div class="container-fluid">
                <div class="page-cover-content" data-aos="fade-up" data-aos-duration="1000">
                    <!-- <span class="page-cover-icon"><i class="fab fa-free-code-camp"></i></span> -->
                    <h1 class="page-cover-title">Meet Chachu</h1>
                    <p class="page-cover-subtitle">Meet The Master</p>
                    <span class="page-cover-icon"><i class="fab fa-free-code-camp"></i></span>
                </div>
            </div>
        </section>

        <!--=================== CHEFS SECTION ================-->
        <section class="chefs-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">One Brilliant Chef</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">Meet our passionate culinary expert who bring the authentic flavors of Pakistan to your table</p>
                    </div>
                </div>
                
                <div class="chef-grid">
                    <div class="chef-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="chef-image">
                            <img src="images/chef-1.png" alt="Chef Rajesh">
                            <div class="chef-overlay">
                                <div class="chef-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="chef-content">
                            <h4 class="chef-name">Chachu</h4>
                            <p class="chef-role">Head Chef</p>
                            <p class="chef-description">With over 15 years of experience in traditional Pakistani cuisine, Chef Rajesh leads our kitchen with passion and expertise. His mastery of authentic biryani recipes has made him a legend in the culinary world.</p>
                            <div class="chef-specialties">
                                <span class="chef-specialty">Biryani</span>
                                <span class="chef-specialty">Curries</span>
                                <span class="chef-specialty">Tandoor</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
</div>
        <!--=================== STATS SECTION ================-->
        <section class="stats-section">
            <div class="container-fluid">
                <div class="stats-grid">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Signature Dishes</div>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-number">1000+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="stat-number">25+</div>
                        <div class="stat-label">Awards Won</div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    </div><!-- end canvas -->

    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>