<?php
require_once __DIR__.'/includes/auth.php';
startSession();
?>
<!doctype html>
<html lang="en">

<head>
    <title>About Us - ChachuKiBiryani</title>
    <?php include 'includes/head.php'; ?>
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
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
                    <!-- <span class="page-cover-icon"><i class="fa fa-info"></i></span> -->
                    <h1 class="page-cover-title">About Us</h1>
                    <p class="page-cover-subtitle">Discover Our Story</p>
                    <span class="page-cover-icon"><i class="fa fa-info"></i></span>
                </div>
            </div>
        </section>

        <!--=================== ABOUT SECTION ================-->
        <section class="about-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Who We Are</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">It all started with Chachu's secret recipe and a dream to share it with the world.</p>
                    </div>
                </div>
                
                <div class="about-content">
                    <div class="about-text" data-aos="fade-right">
                        <h2>A Legacy of Flavor</h2>
                        <p>We're the flavor storytellers behind Chachu Ki Biryani — a family-run kitchen serving legendary biryani crafted with love, tradition, and a pinch of nostalgia.</p>
                        <p>For over three generations, our family has been perfecting the art of biryani making. Every dish tells a story of passion, heritage, and the perfect blend of spices that have been passed down through the ages.</p>
                        <p>Our commitment to authenticity goes beyond just recipes. We source the finest ingredients, use traditional cooking methods, and pour our hearts into every dish we serve. This isn't just food; it's an experience that connects you to the rich culinary heritage of India.</p>
                    </div>
                    <div class="about-image" data-aos="fade-left">
                        <img src="images/chachu.jpg" alt="ChachuKiBiryani Chef">
                    </div>
                </div>
            </div>
        </section>

        <!--=================== STORY SECTION ================-->
        <section class="story-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading2">Our Journey</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead2">From humble beginnings to culinary excellence</p>
                    </div>
                </div>
                
                <div class="story-grid">
                    <div class="story-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="story-icon">
                            <i class="fa fa-seedling"></i>
                        </div>
                        <h4>Our Beginning</h4>
                        <p>Started in a small kitchen with Chachu's secret family recipe, we began our journey to bring authentic biryani to food lovers everywhere.</p>
                    </div>
                    
                    <div class="story-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="story-icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h4>Passion & Love</h4>
                        <p>Every dish is prepared with the same love and care that Chachu put into his original recipe. We believe food tastes better when made with passion.</p>
                    </div>
                    
                    <div class="story-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="story-icon">
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>Excellence</h4>
                        <p>Today, we continue to maintain the highest standards of quality and authenticity, ensuring every customer experiences the true taste of India.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--=================== VALUES SECTION ================-->
        <section class="values-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading1" style="color: white;">Our Values</h2>
                        <div class="page-heading-line" style="background: white;"></div>
                        <p class="lead1" >The principles that guide everything we do</p>
                    </div>
                </div>
                
                <div class="values-grid">
                    <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="value-icon">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <h4>Authenticity</h4>
                        <p>We stay true to traditional recipes and cooking methods, ensuring every dish is authentic to its roots.</p>
                    </div>
                    
                    <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="value-icon">
                            <i class="fa fa-gem"></i>
                        </div>
                        <h4>Quality</h4>
                        <p>Only the finest ingredients make it into our kitchen. We never compromise on quality for any reason.</p>
                    </div>
                    
                    <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="value-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h4>Community</h4>
                        <p>We believe in building relationships with our customers and creating a sense of family around our food.</p>
                    </div>
                    
                    <div class="value-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="value-icon">
                            <i class="fa fa-handshake"></i>
                        </div>
                        <h4>Integrity</h4>
                        <p>Honest pricing, transparent practices, and genuine care for our customers' satisfaction.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--=================== TEAM SECTION ================-->
        <section class="team-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Meet Chachu</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">The Master behind every delicious dish</p>
                    </div>
                </div>
        <div class="team-card" data-aos="fade-up">
    <div class="team-image">
        <img src="images/chef-1.png" alt="Head Chef">
    </div>
    <div class="team-content">
        <h4 class="team-name">Chachu</h4>
        <p class="team-role">Head Chef</p>
        <p class="team-description">With 15 years of experience, Chef Rajesh leads our kitchen with passion and expertise, ensuring every dish meets our high standards.</p>
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