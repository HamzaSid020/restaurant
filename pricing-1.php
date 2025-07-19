<!doctype html>
<html lang="en">

<head>
    <title>Special Packages - ChachuKiBiryani</title>
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

        /* Pricing Section */
        .pricing-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        /* Pricing Cards */
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .pricing-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .pricing-card.featured {
            border: 3px solid #FF6B35;
            transform: scale(1.05);
        }

        .pricing-card.featured::before {
            content: 'Most Popular';
            position: absolute;
            top: 20px;
            right: -30px;
            background: #FF6B35;
            color: white;
            padding: 8px 40px;
            font-size: 0.8rem;
            font-weight: 600;
            transform: rotate(45deg);
            z-index: 10;
        }

        .pricing-header {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .pricing-price {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 10px;
        }

        .pricing-currency {
            font-size: 1.5rem;
            opacity: 0.8;
        }

        .pricing-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .pricing-subtitle {
            opacity: 0.9;
            font-size: 0.9rem;
        }

        .pricing-content {
            padding: 40px 30px;
        }

        .pricing-features {
            list-style: none;
            padding: 0;
            margin: 0 0 30px 0;
        }

        .pricing-features li {
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .pricing-features li:last-child {
            border-bottom: none;
        }

        .feature-icon {
            width: 20px;
            height: 20px;
            background: #FF6B35;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.7rem;
        }

        .feature-text {
            color: #6B7280;
            font-weight: 500;
        }

        .pricing-button {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            cursor: pointer;
            width: 100%;
        }

        .pricing-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .pricing-button.secondary {
            background: white;
            color: #FF6B35;
            border: 2px solid #FF6B35;
        }

        .pricing-button.secondary:hover {
            background: #FF6B35;
            color: white;
        }

        /* Special Offers Section */
        .special-offers {
            padding: 80px 0;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
        }

        .offer-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .offer-card:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.15);
        }

        .offer-icon {
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

        .offer-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .offer-description {
            opacity: 0.9;
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
            
            .pricing-grid {
                grid-template-columns: 1fr;
            }
            
            .pricing-card.featured {
                transform: none;
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
        .p-table-block {
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
                    <span class="page-cover-icon"><i class="fa fa-dollar-sign"></i></span>
                    <h1 class="page-cover-title">Special Packages</h1>
                    <p class="page-cover-subtitle">Value Deals</p>
                    <span class="page-cover-icon"><i class="fa fa-dollar-sign"></i></span>
                </div>
            </div>
        </section>

        <!--=================== PRICING SECTION ================-->
        <section class="pricing-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Our Special Packages</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">Check out these deliciously affordable packages — perfect for any gathering!</p>
                    </div>
                </div>
                
                <div class="pricing-grid">
                    <!-- Package 1 -->
                    <div class="pricing-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-header">
                            <div class="pricing-price">
                                <span class="pricing-currency">$</span>5
                            </div>
                            <h3 class="pricing-title">Special Nashta</h3>
                            <p class="pricing-subtitle">Perfect Morning Start</p>
                        </div>
                        <div class="pricing-content">
                            <ul class="pricing-features">
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">Anda Paratha</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">Karak Chai</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">Fresh Pickles</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">Free Delivery</span>
                                </li>
                            </ul>
                            <button class="pricing-button">Add to Cart</button>
                        </div>
                    </div>
                    
                    <!-- Package 2 - Featured -->
                    <div class="pricing-card featured" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-header">
                            <div class="pricing-price">
                                <span class="pricing-currency">$</span>80
                            </div>
                            <h3 class="pricing-title">Chicken Biryani Daigh</h3>
                            <p class="pricing-subtitle">Family Feast</p>
                        </div>
                        <div class="pricing-content">
                            <ul class="pricing-features">
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">6 to 7 People</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">Daigh Deposit $100</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">Raita & Salad</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">Free Delivery</span>
                                </li>
                            </ul>
                            <button class="pricing-button">Add to Cart</button>
                        </div>
                    </div>
                    
                    <!-- Package 3 -->
                    <div class="pricing-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="pricing-header">
                            <div class="pricing-price">
                                <span class="pricing-currency">$</span>100
                            </div>
                            <h3 class="pricing-title">Veal Biryani Daigh</h3>
                            <p class="pricing-subtitle">Premium Feast</p>
                        </div>
                        <div class="pricing-content">
                            <ul class="pricing-features">
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">6 to 7 People</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">Daigh Deposit $100</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">Premium Raita</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="feature-text">Free Delivery</span>
                                </li>
                            </ul>
                            <button class="pricing-button">Add to Cart</button>
                        </div>
                    </div>
                    
                    <!-- Package 4 -->
                    <div class="pricing-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-header">
                            <div class="pricing-price">
                                <span class="pricing-currency">$</span>0
                            </div>
                            <h3 class="pricing-title">Coming Soon</h3>
                            <p class="pricing-subtitle">Stay Tuned</p>
                        </div>
                        <div class="pricing-content">
                            <ul class="pricing-features">
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-clock"></i>
                                    </div>
                                    <span class="feature-text">New Packages</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-clock"></i>
                                    </div>
                                    <span class="feature-text">Special Offers</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-clock"></i>
                                    </div>
                                    <span class="feature-text">Exclusive Deals</span>
                                </li>
                                <li>
                                    <div class="feature-icon">
                                        <i class="fa fa-clock"></i>
                                    </div>
                                    <span class="feature-text">Limited Time</span>
                                </li>
                            </ul>
                            <button class="pricing-button secondary">Notify Me</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=================== SPECIAL OFFERS SECTION ================-->
        <section class="special-offers">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 style="color: white; font-size: 3rem; margin-bottom: 20px;">Why Choose Our Packages?</h2>
                        <div style="width: 80px; height: 4px; background: white; border-radius: 2px; margin: 20px auto 40px;"></div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="offer-card">
                            <div class="offer-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <h4 class="offer-title">Perfect for Groups</h4>
                            <p class="offer-description">Our daigh packages are designed to serve families and groups, making your gatherings memorable with authentic flavors.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="offer-card">
                            <div class="offer-icon">
                                <i class="fa fa-shipping-fast"></i>
                            </div>
                            <h4 class="offer-title">Free Delivery</h4>
                            <p class="offer-description">Enjoy free delivery on all our packages, ensuring your food arrives fresh and hot at your doorstep.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="offer-card">
                            <div class="offer-icon">
                                <i class="fa fa-star"></i>
                            </div>
                            <h4 class="offer-title">Premium Quality</h4>
                            <p class="offer-description">Every package is prepared with the finest ingredients and authentic recipes, ensuring the best dining experience.</p>
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

        // Pricing Button Functionality
        $(document).ready(function() {
            $('.pricing-button').click(function() {
                const buttonText = $(this).text();
                const originalText = buttonText;
                
                $(this).text('Adding...').prop('disabled', true);
                
                setTimeout(() => {
                    $(this).text('Added!').css('background', '#28a745');
                    setTimeout(() => {
                        $(this).text(originalText).prop('disabled', false).css('background', 'linear-gradient(135deg, #FF6B35 0%, #F7931E 100%)');
                    }, 2000);
                }, 1000);
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>