<!doctype html>
<html lang="en">

<head>
    <title>FAQ - ChachuKiBiryani</title>
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
            background: url('images/restaurant-slider-1.jpg') center/cover;
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

        /* FAQ Section */
        .faq-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        /* Search Form */
        .search-form-modern {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .search-input-group {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-input {
            width: 100%;
            padding: 20px 25px 20px 60px;
            border: 2px solid #f0f0f0;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            background: #fafafa;
        }

        .search-input:focus {
            outline: none;
            border-color: #FF6B35;
            background: white;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 25px;
            color: #6B7280;
            font-size: 1.2rem;
            z-index: 2;
        }

        .search-btn {
            position: absolute;
            right: 5px;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            padding: 15px 25px;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        /* FAQ Accordion */
        .faq-accordion-modern {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: white;
            border-radius: 20px;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .faq-header {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            padding: 25px 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-header:hover {
            background: linear-gradient(135deg, #F7931E 0%, #FF6B35 100%);
        }

        .faq-title {
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            margin: 0;
            flex: 1;
        }

        .faq-toggle {
            color: white;
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-toggle {
            transform: rotate(180deg);
        }

        .faq-content {
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item.active .faq-content {
            padding: 30px;
            max-height: 500px;
        }

        .faq-text {
            color: #6B7280;
            line-height: 1.8;
            margin: 0;
        }

        /* FAQ Categories */
        .faq-categories {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .category-btn {
            background: white;
            border: 2px solid #FF6B35;
            padding: 12px 25px;
            border-radius: 50px;
            color: #FF6B35;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .category-btn:hover,
        .category-btn.active {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
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

        .page-subtitle {
            text-align: center;
            color: #6B7280;
            font-size: 1.1rem;
            margin-bottom: 60px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-cover-title {
                font-size: 2.5rem;
            }
            
            .page-heading {
                font-size: 2.5rem;
            }
            
            .search-form-modern {
                padding: 30px 20px;
                margin: 0 15px 40px;
            }
            
            .faq-header {
                padding: 20px 25px;
            }
            
            .faq-title {
                font-size: 1.1rem;
            }
            
            .faq-categories {
                gap: 15px;
            }
            
            .category-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Hide original elements */
        .page-cover,
        .page-wrapper,
        .innerpage-heading,
        .faq-form,
        .faq-block {
            display: none !important;
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
        <div class="header">
            <div class="fixed-header">
                <div class="container-fluid">
                    <div class="header-logo">
                        <a href="#">
                            <h4><span><i class="far fa-star"></i>Chachu</span>KiBiryani</h4>
                        </a>
                    </div>

                    <div class="header-links">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item shopping-cart"><a href="javascript:void(0)" id="shc-side-open"><span><i class="fa fa-shopping-cart"></i></span><span class="cart-badge">2</span></a></li>
                            <li class="list-inline-item user-link"><a href="javascript:void(0)" id="usr-side-open"><span><i class="fa fa-user"></i></span></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" id="sidenav-open"><span><i class="fa fa-bars"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--========= MODERN PAGE-COVER =========-->
        <div class="page-cover-modern">
            <div class="container">
                <div class="page-cover-content" data-aos="fade-up">
                    <div class="page-cover-icon">
                        <i class="fa fa-question-circle"></i>
                    </div>
                    <h1 class="page-cover-title">Frequently Asked Questions</h1>
                    <p class="page-cover-subtitle">Everything you need to know about ChachuKiBiryani</p>
                </div>
            </div>
        </div>

        <!--========= MODERN FAQ SECTION =========-->
        <section class="faq-modern">
            <div class="container">
                <div data-aos="fade-up">
                    <h2 class="page-heading">Have Any Questions?</h2>
                    <div class="page-heading-line"></div>
                    <p class="page-subtitle">Find answers to the most commonly asked questions about our delicious biryani and services</p>
                </div>

                <!-- Search Form -->
                <div class="search-form-modern" data-aos="fade-up" data-aos-delay="200">
                    <div class="search-input-group">
                        <i class="fa fa-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Search for questions..." id="faqSearch">
                        <button class="search-btn" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- FAQ Categories -->
                <div class="faq-categories" data-aos="fade-up" data-aos-delay="300">
                    <button class="category-btn active" data-category="all">All Questions</button>
                    <button class="category-btn" data-category="ordering">Ordering</button>
                    <button class="category-btn" data-category="delivery">Delivery</button>
                    <button class="category-btn" data-category="payment">Payment</button>
                    <button class="category-btn" data-category="menu">Menu</button>
                </div>

                <!-- FAQ Accordion -->
                <div class="faq-accordion-modern" data-aos="fade-up" data-aos-delay="400">
                    <div class="faq-item" data-category="ordering">
                        <div class="faq-header">
                            <h4 class="faq-title">How can I place an order online?</h4>
                            <i class="fa fa-chevron-down faq-toggle"></i>
                        </div>
                        <div class="faq-content">
                            <p class="faq-text">You can easily place your order through our website or mobile app. Simply browse our menu, select your favorite biryani dishes, add them to your cart, and proceed to checkout. You can choose between delivery and pickup options based on your preference.</p>
                        </div>
                    </div>

                    <div class="faq-item" data-category="delivery">
                        <div class="faq-header">
                            <h4 class="faq-title">What are your delivery areas and timings?</h4>
                            <i class="fa fa-chevron-down faq-toggle"></i>
                        </div>
                        <div class="faq-content">
                            <p class="faq-text">We deliver to most areas within a 10km radius from our restaurant. Our delivery service is available from 11:00 AM to 10:00 PM daily. Delivery time typically ranges from 30-45 minutes depending on your location and order volume.</p>
                        </div>
                    </div>

                    <div class="faq-item" data-category="payment">
                        <div class="faq-header">
                            <h4 class="faq-title">What payment methods do you accept?</h4>
                            <i class="fa fa-chevron-down faq-toggle"></i>
                        </div>
                        <div class="faq-content">
                            <p class="faq-text">We accept various payment methods including cash on delivery, credit/debit cards, digital wallets (Paytm, PhonePe, Google Pay), and online banking. All online payments are secured with SSL encryption for your safety.</p>
                        </div>
                    </div>

                    <div class="faq-item" data-category="menu">
                        <div class="faq-header">
                            <h4 class="faq-title">Do you offer vegetarian biryani options?</h4>
                            <i class="fa fa-chevron-down faq-toggle"></i>
                        </div>
                        <div class="faq-content">
                            <p class="faq-text">Yes, we offer a variety of vegetarian biryani options including Vegetable Biryani, Paneer Biryani, and Mushroom Biryani. All our vegetarian dishes are prepared separately to maintain their authentic taste and avoid any cross-contamination.</p>
                        </div>
                    </div>

                    <div class="faq-item" data-category="ordering">
                        <div class="faq-header">
                            <h4 class="faq-title">Can I customize my biryani order?</h4>
                            <i class="fa fa-chevron-down faq-toggle"></i>
                        </div>
                        <div class="faq-content">
                            <p class="faq-text">Absolutely! You can customize your biryani by choosing your preferred spice level (mild, medium, hot, extra hot), adding extra toppings like boiled eggs, and selecting your choice of accompaniments like raita, salad, or pickles.</p>
                        </div>
                    </div>

                    <div class="faq-item" data-category="delivery">
                        <div class="faq-header">
                            <h4 class="faq-title">What is your cancellation policy?</h4>
                            <i class="fa fa-chevron-down faq-toggle"></i>
                        </div>
                        <div class="faq-content">
                            <p class="faq-text">You can cancel your order free of charge within 5 minutes of placing it. After that, a cancellation fee may apply depending on the preparation status. For orders that have already been prepared, we cannot accept cancellations to ensure food quality.</p>
                        </div>
                    </div>

                    <div class="faq-item" data-category="menu">
                        <div class="faq-header">
                            <h4 class="faq-title">Do you offer bulk orders for events?</h4>
                            <i class="fa fa-chevron-down faq-toggle"></i>
                        </div>
                        <div class="faq-content">
                            <p class="faq-text">Yes, we specialize in bulk orders for events, parties, and corporate functions. We offer special packages and discounts for large orders. Please contact us at least 24 hours in advance for bulk orders to ensure we can accommodate your requirements.</p>
                        </div>
                    </div>

                    <div class="faq-item" data-category="payment">
                        <div class="faq-header">
                            <h4 class="faq-title">Are there any additional charges?</h4>
                            <i class="fa fa-chevron-down faq-toggle"></i>
                        </div>
                        <div class="faq-content">
                            <p class="faq-text">We have transparent pricing with no hidden charges. Delivery fees are clearly mentioned during checkout and vary based on distance. For orders above ₹500, delivery is free within our standard delivery area. All prices shown include applicable taxes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    </div>

    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // FAQ Accordion Functionality
        $(document).ready(function() {
            $('.faq-header').click(function() {
                const faqItem = $(this).parent();
                const isActive = faqItem.hasClass('active');
                
                // Close all FAQ items
                $('.faq-item').removeClass('active');
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    faqItem.addClass('active');
                }
            });

            // Category Filter
            $('.category-btn').click(function() {
                const category = $(this).data('category');
                
                // Update active button
                $('.category-btn').removeClass('active');
                $(this).addClass('active');
                
                // Filter FAQ items
                if (category === 'all') {
                    $('.faq-item').show();
                } else {
                    $('.faq-item').hide();
                    $(`.faq-item[data-category="${category}"]`).show();
                }
            });

            // Search Functionality
            $('#faqSearch').on('input', function() {
                const searchTerm = $(this).val().toLowerCase();
                
                $('.faq-item').each(function() {
                    const title = $(this).find('.faq-title').text().toLowerCase();
                    const content = $(this).find('.faq-text').text().toLowerCase();
                    
                    if (title.includes(searchTerm) || content.includes(searchTerm)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>