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
    
    <style>
        /* Modern Custom Styles */
        body {
            font-family: 'Poppins', sans-serif !important;
            line-height: 1.6;
            color: #333;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif !important;
            font-weight: 700;
        }

        /* Page Cover */
        .page-cover-modern {
            background: linear-gradient(135deg, rgba(44, 24, 16, 0.9) 0%, rgba(255, 107, 53, 0.8) 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .page-cover-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('images/restaurant-slider-2.jpg') center/cover;
            z-index: -1;
        }

        .page-cover-content {
            text-align: center;
            color: white;
            position: relative;
            z-index: 2;
        }

        .page-cover-title {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .page-cover-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .page-cover-icon {
            font-size: 2rem;
            margin: 0 20px;
            opacity: 0.8;
        }

        /* About Section */
        .about-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            margin-top: 60px;
        }

        .about-text h2 {
            font-size: 3rem;
            margin-bottom: 30px;
            color: #2C1810;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .about-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #6B7280;
            margin-bottom: 30px;
        }

        .about-image {
            position: relative;
        }

        .about-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 100%;
            height: 100%;
            border: 3px solid #FF6B35;
            border-radius: 20px;
            z-index: -1;
        }

        /* Story Section */
        .story-section {
            padding: 100px 0;
            background: white;
        }

        .story-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .story-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .story-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .story-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            color: white;
        }

        .story-card h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #2C1810;
        }

        .story-card p {
            color: #6B7280;
            line-height: 1.6;
        }

        /* Values Section */
        .values-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .value-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.15);
        }

        .value-icon {
            width: 70px;
            height: 70px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.8rem;
            color: #FFD23F;
        }

        .value-card h4 {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .value-card p {
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Team Section */
        .team-section {
            padding: 100px 0;
            background: #FFF8F0;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .team-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .team-image {
            height: 250px;
            background: linear-gradient(135deg, #FFD23F 0%, #FF6B35 100%);
            position: relative;
            overflow: hidden;
        }

        .team-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .team-content {
            padding: 30px;
            text-align: center;
        }

        .team-name {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #2C1810;
        }

        .team-role {
            color: #FF6B35;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .team-description {
            color: #6B7280;
            line-height: 1.6;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-cover-title {
                font-size: 2.5rem;
            }
            
            .about-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .about-text h2 {
                font-size: 2.5rem;
            }
            
            .story-grid,
            .values-grid,
            .team-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Override existing styles */
        .section-padding {
            padding: 40px 0;
        }

        .container-fluid {
            padding-left: 15px;
            padding-right: 15px;
        }
    </style>
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
                    <span class="page-cover-icon"><i class="fa fa-info"></i></span>
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
                        <h2 class="page-heading">Our Journey</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">From humble beginnings to culinary excellence</p>
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
                        <h2 class="page-heading" style="color: white;">Our Values</h2>
                        <div class="page-heading-line" style="background: white;"></div>
                        <p class="lead" style="color: white; opacity: 0.9;">The principles that guide everything we do</p>
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
                        <h2 class="page-heading">Meet Our Team</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">The passionate people behind every delicious dish</p>
                    </div>
                </div>
                
                <div class="team-grid">
                    <div class="team-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-image">
                            <img src="images/chef-1.png" alt="Head Chef">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Chef Rajesh</h4>
                            <p class="team-role">Head Chef</p>
                            <p class="team-description">With 15 years of experience, Chef Rajesh leads our kitchen with passion and expertise, ensuring every dish meets our high standards.</p>
                        </div>
                    </div>
                    
                    <div class="team-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-image">
                            <img src="images/chef-2.png" alt="Sous Chef">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Chef Priya</h4>
                            <p class="team-role">Sous Chef</p>
                            <p class="team-description">Chef Priya brings creativity and innovation to our traditional recipes while maintaining their authentic flavors.</p>
                        </div>
                    </div>
                    
                    <div class="team-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-image">
                            <img src="images/chef-3.png" alt="Pastry Chef">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">Chef Amit</h4>
                            <p class="team-role">Pastry Chef</p>
                            <p class="team-description">Specializing in traditional Indian desserts, Chef Amit creates sweet endings that perfectly complement our savory dishes.</p>
                        </div>
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