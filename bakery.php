<?php
require_once __DIR__.'/includes/auth.php';
startSession();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Desserts & Sweets - ChachuKiBiryani</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap-5.3.2.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/orange.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Flex Slider Stylesheets -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- OWL Stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

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

        /* Hero Section */
        .hero-modern {
            background: linear-gradient(135deg, rgba(44, 24, 16, 0.9) 0%, rgba(255, 107, 53, 0.8) 100%);
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-modern::before {
            content: '';
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
            position: relative;
            z-index: 2;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-description {
            font-size: 1.3rem;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .btn-hero {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            color: white;
            text-decoration: none;
        }

        /* Best Sellers Section */
        .best-sellers-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        .section-heading {
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

        .section-line {
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border-radius: 2px;
            margin: 20px auto 60px;
        }

        /* Menu Cards */
        .menu-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .menu-card-image {
            height: 250px;
            background: linear-gradient(135deg, #FFD23F 0%, #FF6B35 100%);
            position: relative;
            overflow: hidden;
        }

        .menu-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .menu-card:hover .menu-card-image img {
            transform: scale(1.1);
        }

        .menu-card-content {
            padding: 25px;
            text-align: center;
        }

        .menu-card-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #2C1810;
        }

        .menu-card-price {
            font-size: 1.6rem;
            font-weight: 700;
            color: #FF6B35;
            margin-bottom: 15px;
        }

        .menu-card-description {
            color: #6B7280;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .btn-add-cart {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
        }

        .btn-add-cart:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            color: white;
            text-decoration: none;
        }

        /* About Section */
        .about-modern {
            padding: 100px 0;
            background: white;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-text h3 {
            font-size: 2.5rem;
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

        /* Menu Tabs */
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
            text-decoration: none;
        }

        .menu-tab-modern.active,
        .menu-tab-modern:hover {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
            border-color: #FF6B35;
            text-decoration: none;
        }

        /* Services Section */
        .services-modern {
            padding: 100px 0;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
        }

        .service-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .service-card:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.15);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            color: #FFD23F;
        }

        .service-card h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .service-card p {
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Testimonials Section */
        .testimonials-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        .testimonial-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .testimonial-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
        }

        .testimonial-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .star-rating {
            color: #FFD23F;
            margin-bottom: 20px;
        }

        .testimonial-text {
            font-style: italic;
            color: #6B7280;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .testimonial-author {
            font-weight: 600;
            color: #2C1810;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-heading {
                font-size: 2.5rem;
            }
            
            .about-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .menu-tabs-modern {
                flex-direction: column;
                align-items: center;
            }
            
            .menu-tab-modern {
                width: 200px;
                text-align: center;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Hide original elements */
        .flexslider {
            display: none;
        }

        .nav-tabs {
            display: none;
        }

        .tab-content {
            display: none;
        }
    </style>
</head>

<body id="bakery-homepage" class="page-body">

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

        <!--=========== HERO SECTION ==========-->
        <section class="hero-modern">
            <div class="container">
                <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                    <p class="hero-subtitle">Sweet Endings</p>
                    <h1 class="hero-title">Traditional Pakistani Desserts</h1>
                    <p class="hero-description">Discover our authentic collection of traditional Pakistani sweets and desserts, crafted with love and the finest ingredients.</p>
                    <a href="#menu-section" class="btn-hero">Explore Desserts</a>
                </div>
            </div>
        </section>

        <!--=============== BEST SELLERS ===============-->
        <section id="best-sellers" class="best-sellers-modern">
            <div class="container">
                <h2 class="section-heading" data-aos="fade-up">Best Sellers</h2>
                <div class="section-line" data-aos="fade-up"></div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="menu-card">
                            <div class="menu-card-image">
                                <img src="images/sweet-cupcake-1.png" alt="Gulab Jamun">
                            </div>
                            <div class="menu-card-content">
                                <h4 class="menu-card-title">Gulab Jamun</h4>
                                <div class="menu-card-price">$6.99</div>
                                <p class="menu-card-description">Sweet milk dumplings soaked in rose-flavored sugar syrup. A classic Pakistani dessert.</p>
                                <button class="btn-add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="menu-card">
                            <div class="menu-card-image">
                                <img src="images/sweet-donut-1.png" alt="Rasmalai">
                            </div>
                            <div class="menu-card-content">
                                <h4 class="menu-card-title">Rasmalai</h4>
                                <div class="menu-card-price">$7.99</div>
                                <p class="menu-card-description">Soft cottage cheese patties soaked in sweetened, thickened milk flavored with cardamom.</p>
                                <button class="btn-add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="menu-card">
                            <div class="menu-card-image">
                                <img src="images/sweet-cookie-1.png" alt="Kheer">
                            </div>
                            <div class="menu-card-content">
                                <h4 class="menu-card-title">Kheer</h4>
                                <div class="menu-card-price">$5.99</div>
                                <p class="menu-card-description">Traditional rice pudding made with milk, sugar, and aromatic spices like cardamom and saffron.</p>
                                <button class="btn-add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== ABOUT SECTION ===============-->
        <section id="about-us" class="about-modern">
            <div class="container">
                <div class="about-content">
                    <div class="about-text" data-aos="fade-right">
                        <h3>Sweet Traditions</h3>
                        <p>Our dessert collection celebrates the rich culinary heritage of India, bringing you authentic sweets that have been perfected over generations.</p>
                        <p>Every dessert is crafted with the finest ingredients, traditional recipes, and a touch of modern presentation. From the classic Gulab Jamun to the creamy Rasmalai, each sweet tells a story of tradition and taste.</p>
                        <p>We believe that a meal is incomplete without a sweet ending, and our desserts are designed to provide the perfect conclusion to your ChachuKiBiryani experience.</p>
                    </div>
                    <div class="about-image" data-aos="fade-left">
                        <img src="images/about-img-bakery.png" alt="Traditional Pakistani Desserts">
                    </div>
                </div>
            </div>
        </section>

        <!--============= MENU SECTION ============-->
        <section id="menu-section" class="best-sellers-modern">
            <div class="container">
                <h2 class="section-heading" data-aos="fade-up">Our Dessert Menu</h2>
                <div class="section-line" data-aos="fade-up"></div>
                
                <div class="menu-tabs-modern" data-aos="fade-up">
                    <a href="#" class="menu-tab-modern active" data-category="all">All Desserts</a>
                    <a href="#" class="menu-tab-modern" data-category="traditional">Traditional</a>
                    <a href="#" class="menu-tab-modern" data-category="modern">Modern</a>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-category="traditional" data-aos="fade-up" data-aos-delay="100">
                        <div class="menu-card">
                            <div class="menu-card-image">
                                <img src="images/sweet-cupcake-2.png" alt="Jalebi">
                            </div>
                            <div class="menu-card-content">
                                <h4 class="menu-card-title">Jalebi</h4>
                                <div class="menu-card-price">$4.99</div>
                                <p class="menu-card-description">Crispy, spiral-shaped sweet made from deep-fried batter soaked in sugar syrup.</p>
                                <button class="btn-add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-category="traditional" data-aos="fade-up" data-aos-delay="200">
                        <div class="menu-card">
                            <div class="menu-card-image">
                                <img src="images/sweet-donut-2.png" alt="Barfi">
                            </div>
                            <div class="menu-card-content">
                                <h4 class="menu-card-title">Barfi</h4>
                                <div class="menu-card-price">$6.99</div>
                                <p class="menu-card-description">Sweet confectionery made from condensed milk and sugar, flavored with cardamom.</p>
                                <button class="btn-add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-category="modern" data-aos="fade-up" data-aos-delay="300">
                        <div class="menu-card">
                            <div class="menu-card-image">
                                <img src="images/sweet-cookie-2.png" alt="Fusion Dessert">
                            </div>
                            <div class="menu-card-content">
                                <h4 class="menu-card-title">Fusion Dessert</h4>
                                <div class="menu-card-price">$8.99</div>
                                <p class="menu-card-description">Modern twist on traditional flavors, combining Pakistani spices with contemporary presentation.</p>
                                <button class="btn-add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== SERVICES ===============-->
        <section id="services" class="services-modern">
            <div class="container">
                <h2 class="section-heading" style="color: white;" data-aos="fade-up">Why Choose Our Desserts</h2>
                <div class="section-line" style="background: white;" data-aos="fade-up"></div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <h4>Authentic Recipes</h4>
                            <p>Traditional recipes passed down through generations, ensuring authentic taste and quality.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-leaf"></i>
                            </div>
                            <h4>Fresh Ingredients</h4>
                            <p>Only the finest and freshest ingredients are used in our dessert preparation.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-heart"></i>
                            </div>
                            <h4>Made with Love</h4>
                            <p>Every dessert is crafted with passion and care, just like our main dishes.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-star"></i>
                            </div>
                            <h4>Premium Quality</h4>
                            <p>High-quality standards maintained throughout the preparation process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====================== TESTIMONIAL ======================-->
        <section id="testimonial" class="testimonials-modern">
            <div class="container">
                <h2 class="section-heading" data-aos="fade-up">What Our Customers Say</h2>
                <div class="section-line" data-aos="fade-up"></div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-card">
                            <div class="testimonial-image">
                                <img src="images/reviewer-1.jpg" alt="Customer">
                            </div>
                            <div class="star-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-text">"The Gulab Jamun here is absolutely divine! It's the perfect ending to a delicious biryani meal."</p>
                            <h5 class="testimonial-author">Sarah Johnson</h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-card">
                            <div class="testimonial-image">
                                <img src="images/reviewer-2.jpg" alt="Customer">
                            </div>
                            <div class="star-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-text">"Authentic Pakistani desserts that remind me of home. The Kheer is creamy and perfectly sweetened."</p>
                            <h5 class="testimonial-author">Raj Patel</h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-card">
                            <div class="testimonial-image">
                                <img src="images/reviewer-3.jpg" alt="Customer">
                            </div>
                            <div class="star-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-text">"The fusion desserts are amazing! A perfect blend of traditional flavors with modern presentation."</p>
                            <h5 class="testimonial-author">Emily Chen</h5>
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
            $('.menu-tab-modern').click(function(e) {
                e.preventDefault();
                $('.menu-tab-modern').removeClass('active');
                $(this).addClass('active');
                
                const category = $(this).data('category');
                if (category === 'all') {
                    $('[data-category]').show();
                } else {
                    $('[data-category]').hide();
                    $('[data-category="' + category + '"]').show();
                }
            });

            // Add to cart functionality
            $('.btn-add-cart').click(function() {
                $(this).text('Added!').css('background', '#28a745');
                setTimeout(() => {
                    $(this).text('Add to Cart').css('background', 'linear-gradient(135deg, #FF6B35 0%, #F7931E 100%)');
                }, 2000);
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>