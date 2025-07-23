<?php
require_once __DIR__.'/includes/auth.php';
startSession();
?>
<!doctype html>
<html lang="en">

<head>
    <title>ChachuKiBiryani - Authentic Indian Biryani Experience</title>
    <?php include 'includes/head.php'; ?>
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        /* Reset and Base Styles */
        body {
            font-family: 'Poppins', sans-serif !important;
            line-height: 1.6;
            color: #333;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif !important;
            font-weight: 700;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(44, 24, 16, 0.8) 0%, rgba(255, 107, 53, 0.6) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('images/restaurant-slider-1.jpg') center/cover;
            z-index: -1;
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            font-weight: 300;
            margin-bottom: 20px;
            opacity: 0.9;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .hero-title {
            font-size: 4.5rem;
            font-weight: 900;
            margin-bottom: 30px;
            line-height: 1.1;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-description {
            font-size: 1.3rem;
            margin-bottom: 40px;
            opacity: 0.95;
            line-height: 1.6;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-hero-primary {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            color: white !important;
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-decoration: none;
            display: inline-block;
        }

        .btn-hero-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            color: white !important;
            text-decoration: none;
        }

        .btn-hero-secondary {
            background: transparent;
            border: 2px solid white;
            padding: 15px 40px;
            border-radius: 50px;
            color: white !important;
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-hero-secondary:hover {
            background: white;
            color: #2C1810 !important;
            transform: translateY(-3px);
            text-decoration: none;
        }

        /* Floating Elements */
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .floating-element {
            position: absolute;
            opacity: 0.1;
            font-size: 3rem;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* Banner Section */
        .banner-modern {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            padding: 30px 0;
            color: white;
        }

        .banner-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .banner-item {
            text-align: center;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .banner-icon {
            font-size: 2rem;
            background: rgba(255,255,255,0.2);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .banner-text h4 {
            margin: 0;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .banner-text p {
            margin: 0;
            opacity: 0.9;
            font-size: 0.9rem;
        }

        /* About Section */
        .about-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-text h2 {
            font-size: 3rem;
            margin-bottom: 30px;
            color: #2C1810;
        }

        .about-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #6B7280;
            margin-bottom: 30px;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #FF6B35;
            display: block;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #6B7280;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .about-image {
            position: relative;
        }

        .about-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        /* Services Section */
        .services-modern {
            padding: 100px 0;
            background: white;
        }

        .service-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
            border: 1px solid #f0f0f0;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .service-icon {
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

        .service-card h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #2C1810;
        }

        .service-card p {
            color: #6B7280;
            line-height: 1.6;
        }

        /* Menu Section */
        .menu-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        .menu-tabs-modern {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .menu-tab-modern {
            background: white;
            border: 2px solid transparent;
            padding: 12px 30px;
            border-radius: 50px;
            color: #6B7280;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .menu-tab-modern.active,
        .menu-tab-modern:hover {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
            border-color: #FF6B35;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .menu-item-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .menu-item-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .menu-item-image {
            height: 200px;
            background: linear-gradient(135deg, #FFD23F 0%, #FF6B35 100%);
            position: relative;
            overflow: hidden;
        }

        .menu-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .menu-item-content {
            padding: 25px;
        }

        .menu-item-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #2C1810;
        }

        .menu-item-description {
            color: #6B7280;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .menu-item-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #FF6B35;
            margin-bottom: 15px;
        }

        .menu-item-button {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .menu-item-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            color: white;
            text-decoration: none;
        }

        /* Testimonials Section */
        .testimonials-modern {
            padding: 100px 0;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
        }

        .testimonial-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            margin: 20px;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .testimonial-stars {
            color: #FFD23F;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .testimonial-text {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 25px;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .testimonial-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 3px solid white;
        }

        .testimonial-info h5 {
            margin: 0;
            font-weight: 600;
        }

        .testimonial-info p {
            margin: 0;
            opacity: 0.8;
            font-size: 0.9rem;
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

        .page-heading.white-heading {
            color: white !important;
            -webkit-text-fill-color: white;
        }

        .page-heading-line.white-line {
            background: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }
            
            .page-heading {
                font-size: 2.5rem;
            }
            
            .about-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .banner-content {
                flex-direction: column;
                gap: 30px;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .about-stats {
                grid-template-columns: 1fr;
                gap: 20px;
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

        /* Fix for existing menu system */
        .menu .nav-tabs {
            display: none;
        }

        .menu .tab-content {
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
        <?php 
        include 'includes/header.php';
        include 'includes/menu_functions.php';
        ?>

        <!--=========== HERO SECTION ==========-->
        <section class="hero-section">
            <div class="hero-bg"></div>
            <div class="floating-elements">
                <div class="floating-element">🍛</div>
                <div class="floating-element">🌶️</div>
                <div class="floating-element">🍚</div>
            </div>
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                <p class="hero-subtitle">Authentic Indian Cuisine</p>
                <h1 class="hero-title">Experience the Magic of ChachuKiBiryani</h1>
                <p class="hero-description">Discover the perfect blend of aromatic spices, tender meat, and fragrant basmati rice. Every bite tells a story of tradition and passion.</p>
                <div class="hero-buttons">
                    <a href="#menu" class="btn-hero-primary">Explore Menu</a>
                    <a href="#about" class="btn-hero-secondary">Our Story</a>
                </div>
            </div>
        </section>

        <!--======= MODERN BANNER ========-->
        <section class="banner-modern">
            <div class="container-fluid">
                <div class="banner-content">
                    <div class="banner-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="banner-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="banner-text">
                            <h4>Mon - Fri</h4>
                            <p>10:00 AM - 11:00 PM</p>
                        </div>
                    </div>
                    <div class="banner-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="banner-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="banner-text">
                            <h4>Sat - Sun</h4>
                            <p>11:00 AM - 08:00 PM</p>
                        </div>
                    </div>
                    <div class="banner-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="banner-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="banner-text">
                            <h4>Call Us</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== ABOUT US ===============-->
        <section id="about" class="about-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Our Story</h2>
                        <div class="page-heading-line"></div>
                    </div>
                </div>
                <div class="about-content">
                    <div class="about-text" data-aos="fade-right">
                        <h2>A Legacy of Flavor</h2>
                        <p>For over three generations, ChachuKiBiryani has been crafting the most authentic and delicious biryani dishes. Our secret recipes, passed down through family traditions, combine the finest ingredients with time-honored cooking techniques.</p>
                        <p>Every dish is prepared with love, using traditional spices and methods that have been perfected over decades. We take pride in serving not just food, but an experience that connects you to the rich culinary heritage of India.</p>
                        <div class="about-stats">
                            <div class="stat-item">
                                <span class="stat-number">25+</span>
                                <span class="stat-label">Years Experience</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">50+</span>
                                <span class="stat-label">Unique Dishes</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">1000+</span>
                                <span class="stat-label">Happy Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="about-image" data-aos="fade-left">
                        <img src="images/chachu.jpg" alt="ChachuKiBiryani Chef">
                    </div>
                </div>
            </div>
        </section>

        <!--=============== SERVICES ===============-->
        <section class="services-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Why Choose Us</h2>
                        <div class="page-heading-line"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <h4>Premium Quality</h4>
                            <p>We use only the finest ingredients, carefully selected to ensure every dish meets our high standards of quality and taste.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <h4>Expert Chefs</h4>
                            <p>Our master chefs bring decades of experience and passion to create authentic flavors that transport you to India.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h4>Fast Delivery</h4>
                            <p>Enjoy our delicious biryani at your doorstep with our quick and reliable delivery service across the city.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-building"></i>
                            </div>
                            <h4>Clean Environment</h4>
                            <p>Dine in our hygienic and welcoming atmosphere where cleanliness and comfort are our top priorities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--============= MENU ============-->
        <section id="menu" class="menu-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Our Delicious Menu</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">Explore our carefully curated selection of authentic Indian dishes</p>
                    </div>
                </div>
                
                            <div class="menu-tabs-modern" data-aos="fade-up">
                <div class="menu-tab-modern active" data-category="all">All Dishes</div>
                <?php 
                $categories = getMenuCategories();
                foreach ($categories as $category): 
                ?>
                <div class="menu-tab-modern" data-category="<?php echo $category; ?>"><?php echo ucfirst($category); ?></div>
                <?php endforeach; ?>
            </div>

            <div class="menu-grid">
                <?php 
                $featuredItems = getFeaturedMenuItems(8);
                foreach ($featuredItems as $index => $item): 
                    $delay = ($index + 1) * 100;
                ?>
                <div class="menu-item-card" data-category="<?php echo $item['category']; ?>" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                    <div class="menu-item-image">
                        <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                        <?php if ($item['is_featured']): ?>
                        <div class="featured-badge"><i class="fa fa-star"></i> Featured</div>
                        <?php endif; ?>
                    </div>
                    <div class="menu-item-content">
                        <h4 class="menu-item-title"><?php echo htmlspecialchars($item['name']); ?></h4>
                        <p class="menu-item-description"><?php echo htmlspecialchars($item['description']); ?></p>
                        <div class="menu-item-price">$<?php echo number_format($item['price'], 2); ?></div>
                        <a href="menu-detail.php?id=<?php echo $item['id']; ?>" class="menu-item-button">View Details</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            </div>
        </section>

        <!--=============== TESTIMONIAL ===============-->
        <section class="testimonials-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading white-heading">What Our Customers Say</h2>
                        <div class="page-heading-line white-line"></div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="owl-testimonial">
                    <div class="item" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-text">"The best biryani I've ever tasted! The flavors are perfectly balanced and the rice is cooked to perfection. A must-try for all biryani lovers!"</p>
                            <div class="testimonial-author">
                                <img src="images/reviewer-1.jpg" alt="Sarah Johnson" class="testimonial-avatar">
                                <div class="testimonial-info">
                                    <h5>Sarah Johnson</h5>
                                    <p>Food Blogger</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-text">"Authentic taste that reminds me of home. The spices are just right and the portion sizes are generous. Highly recommended!"</p>
                            <div class="testimonial-author">
                                <img src="images/reviewer-2.jpg" alt="Michael Chen" class="testimonial-avatar">
                                <div class="testimonial-info">
                                    <h5>Michael Chen</h5>
                                    <p>Regular Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-text">"Outstanding service and incredible food quality. The delivery was prompt and the food was still piping hot. Will definitely order again!"</p>
                            <div class="testimonial-author">
                                <img src="images/reviewer-3.jpg" alt="Emily Rodriguez" class="testimonial-avatar">
                                <div class="testimonial-info">
                                    <h5>Emily Rodriguez</h5>
                                    <p>Food Enthusiast</p>
                                </div>
                            </div>
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
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Modern Menu Tabs
        $(document).ready(function() {
            $('.menu-tab-modern').click(function() {
                $('.menu-tab-modern').removeClass('active');
                $(this).addClass('active');
                
                const category = $(this).data('category');
                if (category === 'all') {
                    $('.menu-item-card').show();
                } else {
                    $('.menu-item-card').hide();
                    $('.menu-item-card[data-category="' + category + '"]').show();
                }
            });

            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);
                }
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>