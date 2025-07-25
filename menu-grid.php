<!doctype html>
<html lang="en">

<head>
    <title>Our Menu - ChachuKiBiryani</title>
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

        /* Menu Section */
        .menu-modern {
            padding: 100px 0;
            background: #FFF8F0;
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

        /* Menu Grid */
        .menu-grid-modern {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .menu-item-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .menu-item-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .menu-item-image {
            height: 250px;
            background: linear-gradient(135deg, #FFD23F 0%, #FF6B35 100%);
            position: relative;
            overflow: hidden;
        }

        .menu-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .menu-item-card:hover .menu-item-image img {
            transform: scale(1.1);
        }

        .menu-item-content {
            padding: 25px;
        }

        .menu-item-title {
            font-size: 1.4rem;
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
            font-size: 1.6rem;
            font-weight: 700;
            color: #FF6B35;
            margin-bottom: 20px;
        }

        .menu-item-button {
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

        .menu-item-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            color: white;
            text-decoration: none;
        }

        /* Menu Categories */
        .menu-category {
            margin-bottom: 60px;
        }

        .category-title {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #2C1810;
            text-align: center;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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
            
            .menu-grid-modern {
                grid-template-columns: 1fr;
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

        /* Override existing styles */
        .section-padding {
            padding: 40px 0;
        }

        .container-fluid {
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Hide original menu elements */
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

        <!--========= PAGE-COVER =========-->
        <section class="page-cover-modern">
            <div class="container-fluid">
                <div class="page-cover-content" data-aos="fade-up" data-aos-duration="1000">
                    <span class="page-cover-icon"><i class="fa fa-th-large"></i></span>
                    <h1 class="page-cover-title">Our Menu</h1>
                    <p class="page-cover-subtitle">Explore Our Delicious Dishes</p>
                    <span class="page-cover-icon"><i class="fa fa-th-large"></i></span>
                </div>
            </div>
        </section>

        <!--=================== MENU SECTION ================-->
        <section class="menu-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Delicious Menu</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">Discover our carefully curated selection of authentic Pakistani dishes</p>
                    </div>
                </div>
                
                <div class="menu-tabs-modern" data-aos="fade-up">
                    <a href="#" class="menu-tab-modern active" data-category="all">All Dishes</a>
                    <?php 
                    $categories = getMenuCategories();
                    foreach ($categories as $category): 
                    ?>
                    <a href="#" class="menu-tab-modern" data-category="<?php echo $category; ?>"><?php echo ucfirst($category); ?></a>
                    <?php endforeach; ?>
                </div>
                
                <div class="menu-grid-modern">
                    <?php 
                    $allItems = getMenuItemsByCategory();
                    foreach ($allItems as $index => $item): 
                        $delay = ($index + 1) * 100;
                    ?>
                    <div class="menu-item-card" data-category="<?php echo $item['category']; ?>" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                        <div class="menu-item-image">
                            <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                            <?php if (isset($item['is_featured']) && $item['is_featured']): ?>
                            <div class="featured-badge"><i class="fa fa-star"></i> Featured</div>
                            <?php endif; ?>
                        </div>
                        <div class="menu-item-content">
                            <h4 class="menu-item-title"><?php echo htmlspecialchars($item['name']); ?></h4>
                            <p class="menu-item-description"><?php echo htmlspecialchars($item['description']); ?></p>
                            <div class="menu-item-price">$<?php echo number_format($item['price'], 2); ?></div>
                            <div class="menu-item-buttons">
                                <a href="menu-detail.php?id=<?php echo $item['id']; ?>" class="menu-item-button secondary">View Details</a>
                                <button class="menu-item-button add-to-cart" 
                                        data-id="<?php echo $item['id']; ?>" 
                                        data-name="<?php echo htmlspecialchars($item['name']); ?>" 
                                        data-price="<?php echo $item['price']; ?>"
                                        data-image="<?php echo htmlspecialchars($item['image']); ?>">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
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
            $('.menu-tab-modern').click(function(e) {
                e.preventDefault();
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

            // Cart functionality is now handled by CartManager
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>