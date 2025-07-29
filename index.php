<?php
require_once __DIR__.'/includes/auth.php';
startSession();
?>
<!doctype html>
<html lang="en">

<head>
    <title>ChachuKiBiryani - Authentic Pakistani Biryani Experience</title>
    <?php include 'includes/head.php'; ?>
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
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
                <p class="hero-subtitle">Authentic Pakistani Cuisine</p>
                <h1 class="hero-title">Experience </br>the Magic of</br> ChachuKiBiryani</h1>
                <p class="hero-description">Discover the perfect blend of aromatic spices,</br> tender meat, and fragrant basmati rice.</p>
                <div class="hero-buttons">
                    <a href="#menu" class="btn-hero-primary">Explore Menu</a>
                    <a href="#about" class="btn-hero-secondary">Our Story</a>
                    <div class = "logos"><img src = "images/doordashlogo.png"> <span><img src="images/ubereatslogo.png"></span></div>
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
                                <span class="stat-number">15+</span>
                                <span class="stat-label">Unique Dishes</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">1000+</span>
                                <span class="stat-label">Happy Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="about-image" data-aos="fade-left">
                        <img src="images/chac.png" alt="ChachuKiBiryani Chef">
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
                            <p>Our master chefs bring decades of experience and passion to create authentic flavors that transport you to Pakistan.</p>
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
                        <p class="lead">Explore our carefully curated selection of authentic Pakistani dishes</p>
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
                        <button class="menu-item-button add-to-cart" 
                                data-id="<?php echo $item['id']; ?>" 
                                data-name="<?php echo htmlspecialchars($item['name']); ?>" 
                                data-price="<?php echo $item['price']; ?>"
                                data-image="<?php echo $item['image'] ?? 'images/dish-breakfast-3.png'; ?>">
                            Add to Cart
                        </button>
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
    <script src="js/cart-manager.js"></script>
    
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