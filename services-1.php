<!doctype html>
<html lang="en">

<head>
    <title>Our Services - ChachuKiBiryani</title>
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

        /* Services Section */
        .services-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        /* Service Cards */
        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .service-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            text-align: center;
            position: relative;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .service-icon-wrapper {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 40px auto 30px;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon-wrapper {
            transform: scale(1.1) rotate(5deg);
        }

        .service-icon {
            font-size: 2.5rem;
            color: white;
        }

        .service-content {
            padding: 0 30px 40px;
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #2C1810;
        }

        .service-description {
            color: #6B7280;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .service-features {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }

        .service-features li {
            padding: 8px 0;
            color: #6B7280;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-features li::before {
            content: '✓';
            color: #FF6B35;
            font-weight: bold;
        }

        /* Stats Section */
        .stats-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
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
            color: #FFD23F;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Why Choose Us Section */
        .why-choose-section {
            padding: 100px 0;
            background: white;
        }

        .feature-card {
            background: #f8f9fa;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            margin-bottom: 30px;
            border: 2px solid transparent;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            border-color: #FF6B35;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .feature-icon {
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

        .feature-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2C1810;
        }

        .feature-description {
            color: #6B7280;
            line-height: 1.6;
        }

        /* Page Headings */
        .page-heading {
            font-family: 'Playfair Display', serif !important;
            font-weight: 700;
            font-size: 3.5rem;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
            margin-bottom: 20px;
        }

        .page-heading-line {
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
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
            
            .service-grid {
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
        .service-block {
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
                    <span class="page-cover-icon"><i class="fa fa-cogs"></i></span>
                    <h1 class="page-cover-title">Our Services</h1>
                    <p class="page-cover-subtitle">What We Provide</p>
                    <span class="page-cover-icon"><i class="fa fa-cogs"></i></span>
                </div>
            </div>
        </section>

        <!--=================== SERVICES SECTION ================-->
        <section class="services-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">What We Provide</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">We believe in more than just food, we deliver a full experience. From carefully crafted meals to exceptional service, here's what sets us apart:</p>
                    </div>
                </div>
                
                <div class="service-grid">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon-wrapper">
                            <i class="fa fa-thumbs-up service-icon"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Quality Service</h3>
                            <p class="service-description">Every dish is prepared with the finest ingredients and delivered with attention to detail. Our team is trained to ensure your dining experience is as delightful as the food itself.</p>
                            <ul class="service-features">
                                <li>Fresh ingredients daily</li>
                                <li>Hygienic preparation</li>
                                <li>Consistent quality</li>
                                <li>Professional staff</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-icon-wrapper">
                            <i class="fa fa-user service-icon"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Expert Chefs</h3>
                            <p class="service-description">Our chefs bring passion and creativity to the kitchen, blending traditional flavors with modern techniques to serve up dishes that are both comforting and innovative.</p>
                            <ul class="service-features">
                                <li>Experienced culinary team</li>
                                <li>Traditional recipes</li>
                                <li>Modern techniques</li>
                                <li>Creative presentations</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-icon-wrapper">
                            <i class="fa fa-rocket service-icon"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Free Delivery</h3>
                            <p class="service-description">Enjoy your favorite meals from the comfort of your home. We offer fast, reliable, and completely free delivery, because great food should come to you effortlessly.</p>
                            <ul class="service-features">
                                <li>Free delivery on all orders</li>
                                <li>Fast delivery times</li>
                                <li>Real-time tracking</li>
                                <li>Contactless delivery</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-icon-wrapper">
                            <i class="fa fa-building service-icon"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Clean Environment</h3>
                            <p class="service-description">Your health is our priority. We maintain the highest hygiene standards in both our kitchen and dining areas to give you a clean, safe, and welcoming environment.</p>
                            <ul class="service-features">
                                <li>Regular sanitization</li>
                                <li>Hygiene protocols</li>
                                <li>Clean dining areas</li>
                                <li>Food safety standards</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=================== STATS SECTION ================-->
        <section class="stats-section">
            <div class="container-fluid">
                <div class="stats-grid">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Signature Dishes</div>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Customer Support</div>
                    </div>
                </div>
            </div>
        </section>

        <!--=================== WHY CHOOSE US SECTION ================-->
        <section class="why-choose-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Why Choose ChachuKiBiryani?</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">Discover what makes us the preferred choice for authentic Indian cuisine</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fa fa-heart"></i>
                            </div>
                            <h4 class="feature-title">Made with Love</h4>
                            <p class="feature-description">Every dish is prepared with passion and care, ensuring you get the authentic taste of home-cooked Indian food.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fa fa-clock"></i>
                            </div>
                            <h4 class="feature-title">Quick Service</h4>
                            <p class="feature-description">We understand your time is valuable. Our efficient service ensures your food is ready and delivered promptly.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fa fa-star"></i>
                            </div>
                            <h4 class="feature-title">Premium Quality</h4>
                            <p class="feature-description">We use only the finest ingredients and maintain strict quality standards to deliver exceptional taste.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fa fa-smile"></i>
                            </div>
                            <h4 class="feature-title">Customer Satisfaction</h4>
                            <p class="feature-description">Your satisfaction is our priority. We go above and beyond to ensure every customer has a memorable experience.</p>
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