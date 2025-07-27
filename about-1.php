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
       /* Modern Custom Styles - Orange, Red & White Theme */
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
    letter-spacing: 2px;
    text-transform: uppercase;
    color:#ff6b35;
}

.page-cover-icon {
    font-size: 2rem;
    margin: 0 20px;
    opacity: 0.8;
}
/* About Section */
.about-modern {
    padding: 120px 0;
    background: #ffffff;
    position: relative;
}

.about-modern::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(255, 69, 0, 0.05) 0%, transparent 70%);
    border-radius: 50%;
}

.about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 100px;
    align-items: center;
    margin-top: 80px;
}

.about-text h2 {
    font-size: 3.5rem;
    margin-bottom: 32px;
    color: #1a1a1a;
    background: linear-gradient(135deg, #ff4500 0%, #dc143c 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1.1;
}

.about-text p {
    font-size: 1.125rem;
    line-height: 1.8;
    color: #4a5568;
    margin-bottom: 32px;
    font-weight: 400;
}

.about-image {
    position: relative;
}

.about-image img {
    width: 100%;
    border-radius: 24px;
    box-shadow: 0 25px 50px rgba(255, 69, 0, 0.15);
    transition: all 0.3s ease;
}

.about-image:hover img {
    transform: translateY(-8px);
    box-shadow: 0 35px 70px rgba(255, 69, 0, 0.25);
}

.about-image::before {
    content: '';
    position: absolute;
    top: -24px;
    left: -24px;
    width: 100%;
    height: 100%;
    border: 3px solid #ff6b35;
    border-radius: 24px;
    z-index: -1;
    opacity: 0.6;
}

/* Story Section */
.story-section {
    padding: 120px 0;
    background: linear-gradient(135deg, #ff0000 0%, #2d2d2d 100%);
    position: relative;
}

.story-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="%23ff4500" opacity="0.03"/><circle cx="80" cy="80" r="1" fill="%23dc143c" opacity="0.03"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    z-index: 1;
}
.page-heading2{
    color: white;
    font-size: 3.5rem;
    font-weight: 900;
}
.lead2{
    color: white;
    font-weight: 600;
    font-size: 1.125rem;
    margin-bottom: 24px;
}

.story-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 48px;
    margin-top: 80px;
    position: relative;
    z-index: 2;
}

.story-card {
    background: #ffffff;
    padding: 48px 40px;
    border-radius: 24px;
    text-align: center;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid rgba(255, 69, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.story-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, #ff4500 0%, #dc143c 100%);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.story-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 30px 60px rgba(255, 69, 0, 0.15);
    border-color: #ff6b35;
}

.story-card:hover::before {
    transform: scaleX(1);
}

.story-icon {
    width: 88px;
    height: 88px;
    background: linear-gradient(135deg, #ff4500 0%, #dc143c 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 32px;
    font-size: 2.25rem;
    color: white;
    box-shadow: 0 8px 32px rgba(255, 69, 0, 0.3);
}

.story-card h4 {
    font-size: 1.5rem;
    margin-bottom: 16px;
    color: #1a1a1a;
}

.story-card p {
    color: #4a5568;
    line-height: 1.7;
    font-weight: 400;
}

/* Values Section */
.values-section {
    padding: 120px 0;
    background: linear-gradient(135deg, #ff0000 0%, #ff6b35 50%, #dc143c 100%);
    color: white;
    position: relative;
    overflow: hidden;
}
.page-heading1{
    color: white;
    font-size: 3.5rem;
    font-weight: 900;
}
.lead1{
    color: white;
    font-weight: 600;
    font-size: 1.125rem;
    margin-bottom: 24px;
}

.values-section::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -25%;
    width: 50%;
    height: 200%;
    background: radial-gradient(ellipse, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
    transform: rotate(15deg);
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 48px;
    margin-top: 80px;
    position: relative;
    z-index: 2;
}

.value-card {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(20px);
    padding: 48px 40px;
    border-radius: 24px;
    text-align: center;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.value-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.05);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.value-card:hover {
    transform: translateY(-8px);
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}

.value-card:hover::before {
    opacity: 1;
}

.value-icon {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.25);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    font-size: 2rem;
    color: white;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
}

.value-card h4 {
    font-size: 1.375rem;
    margin-bottom: 16px;
    font-weight: 600;
}

.value-card p {
    opacity: 0.95;
    line-height: 1.7;
    font-weight: 400;
}

/* Team Section */
.team-section {
    padding: 120px 0;
    background: #ffffff;
    position: relative;
}

.team-section::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(220, 20, 60, 0.05) 0%, transparent 70%);
    border-radius: 50%;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 48px;
    margin-top: 80px;
}

.team-card {
    background: white;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(255, 69, 0, 0.08);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid rgba(255, 69, 0, 0.1);
    position: relative;
    max-width: 400px;
    margin: 0 auto;
}

.team-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 30px 60px rgba(255, 69, 0, 0.15);
    border-color: #ff6b35;
}

.team-image {
    height: 280px;
    background: linear-gradient(135deg, #ff4500 0%, #ff6b35 100%);
    position: relative;
    overflow: hidden;
}

.team-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.team-card:hover .team-image img {
    transform: scale(1.05);
}

.team-content {
    padding: 40px;
    text-align: center;
}

.team-name {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 8px;
    color: #1a1a1a;
}

.team-role {
    color: #ff4500;
    font-weight: 600;
    margin-bottom: 16px;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.team-description {
    color: #4a5568;
    line-height: 1.7;
    font-weight: 400;
}

/* Page Headings */
.page-heading {
    font-family: 'Inter', 'Playfair Display', serif !important;
    font-weight: 800;
    font-size: 4rem;
    background: linear-gradient(135deg, #ff4500 0%, #dc143c 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-align: center;
    margin-bottom: 24px;
    line-height: 1.1;
    letter-spacing: -0.02em;
}

.page-heading-line {
    width: 100px;
    height: 5px;
    background: linear-gradient(135deg, #ff4500 0%, #dc143c 100%);
    border-radius: 3px;
    margin: 32px auto 48px;
    box-shadow: 0 4px 12px rgba(255, 69, 0, 0.3);
}

/* Modern Button Styles */
.btn-modern {
    background: linear-gradient(135deg, #ff4500 0%, #dc143c 100%);
    color: white;
    border: none;
    padding: 16px 32px;
    border-radius: 50px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 8px 32px rgba(255, 69, 0, 0.3);
    position: relative;
    overflow: hidden;
}

.btn-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn-modern:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 40px rgba(255, 69, 0, 0.4);
}

.btn-modern:hover::before {
    left: 100%;
}

/* Responsive Design */
@media (max-width: 768px) {
    .page-cover-title {
        font-size: 3rem;
    }
    
    .page-cover-subtitle {
        font-size: 1rem;
        letter-spacing: 2px;
    }
    
    .about-content {
        grid-template-columns: 1fr;
        gap: 60px;
    }
    
    .about-text h2 {
        font-size: 2.75rem;
    }
    
    .story-grid,
    .values-grid,
    .team-grid {
        grid-template-columns: 1fr;
        gap: 32px;
    }
    
    .page-heading {
        font-size: 2.75rem;
    }
    
    .story-card,
    .value-card,
    .team-content {
        padding: 32px 24px;
    }
    
    .about-modern,
    .story-section,
    .values-section,
    .team-section {
        padding: 80px 0;
    }
}

@media (max-width: 480px) {
    .page-cover-title {
        font-size: 2.5rem;
    }
    
    .about-text h2 {
        font-size: 2.25rem;
    }
    
    .page-heading {
        font-size: 2.25rem;
    }
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}

/* Enhanced Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in-up {
    animation: fadeInUp 0.8s ease-out;
}

/* Override existing styles */
.section-padding {
    padding: 60px 0;
}

.container-fluid {
    padding-left: 20px;
    padding-right: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(135deg, #ff4500 0%, #dc143c 100%);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(135deg, #dc143c 0%, #ff4500 100%);
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