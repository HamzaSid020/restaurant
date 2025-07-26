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
    /* background: linear-gradient(135deg, rgba(204, 68, 55, 0.9) 0%, rgba(255, 87, 34, 0.9) 100%); */
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
    background: url('images/background1.png') center/cover;
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
    font-weight: 700;
    color:whitesmoke;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.page-cover-icon {
    font-size: 2rem;
    margin: 0 20px;
    opacity: 0.8;
}

/* Chefs Section */
.chefs-modern {
    padding: 100px 0;
    background: #FFFFFF;
}

/* Chef Cards */
.chef-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-top: 60px;
    justify-content: center;
}

.chef-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(255, 87, 34, 0.15);
    transition: all 0.3s ease;
    text-align: center;
    border: 2px solid transparent;
    max-width: 400px;
    margin: 0 auto;
}

.chef-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(255, 87, 34, 0.25);
    border-color: #FF5722;
}

.chef-image {
    height: 300px;
    background: linear-gradient(135deg, #FF5722 0%, #FF8A65 100%);
    position: relative;
    overflow: hidden;
}

.chef-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.chef-card:hover .chef-image img {
    transform: scale(1.1);
}

.chef-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(204, 68, 55, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.chef-card:hover .chef-overlay {
    opacity: 1;
}

.chef-social {
    display: flex;
    gap: 15px;
}

.chef-social a {
    width: 50px;
    height: 50px;
    background: rgba(255,255,255,0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #CC4437;
    text-decoration: none;
    transition: all 0.3s ease;
}

.chef-social a:hover {
    background: white;
    color: #FF5722;
    transform: translateY(-3px);
}

.chef-content {
    padding: 30px;
}

.chef-name {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 10px;
    color: #CC4437;
}

.chef-role {
    color: #FF5722;
    font-weight: 500;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.chef-description {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
}

.chef-specialties {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    justify-content: center;
}

.chef-specialty {
    background: #FFF3E0;
    color: #FF5722;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 500;
    border: 1px solid #FFCCBC;
}

/* Stats Section */
.stats-section {
    padding: 80px 0;
    background: linear-gradient(135deg,#FF0000 0%, #FF5722 100%);
    color: white;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 40px;
    text-align: center;
}

.stat-item {
    padding: 20px;
}

.stat-number {
    font-size: 3rem;
    font-weight: 900;
    margin-bottom: 10px;
    color: white;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
}

.stat-label {
    font-size: 1.1rem;
    opacity: 0.9;
}

/* Page Headings */
.page-heading {
    font-family: 'Playfair Display', serif !important;
    font-weight: 700;
    font-size: 3.5rem;
    background: linear-gradient(135deg, #CC4437 0%, #FF5722 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-align: center;
    margin-bottom: 20px;
}

.page-heading-line {
    width: 80px;
    height: 4px;
    background: linear-gradient(135deg, #CC4437 0%, #FF5722 100%);
    border-radius: 2px;
    margin: 20px auto 40px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .page-cover-title {
        font-size: 2.5rem;
    }
    
    .page-heading {
        font-size: 2.5rem;
    }
    
    .chef-grid {
        grid-template-columns: 1fr;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
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

/* Hide original elements */
.person-block {
    display: none;
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