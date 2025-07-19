<!doctype html>
<html lang="en">

<head>
    <title><?php echo isset($menu_item) ? htmlspecialchars($menu_item['name']) . ' - ' : ''; ?>ChachuKiBiryani</title>
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

        /* Menu Detail Section */
        .menu-detail-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        /* Product Card */
        .product-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 40px;
        }

        /* Product Image */
        .product-image-section {
            position: relative;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            padding: 40px;
            text-align: center;
        }

        .product-image {
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }

        .product-image:hover {
            transform: scale(1.05);
        }

        .category-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255,255,255,0.9);
            color: #FF6B35;
            padding: 8px 20px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            backdrop-filter: blur(10px);
        }

        /* Product Info */
        .product-info {
            padding: 40px;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-title h1 {
            font-size: 2.5rem;
            color: #2C1810;
            margin-bottom: 10px;
        }

        .product-price {
            text-align: right;
        }

        .price-amount {
            font-size: 2.5rem;
            font-weight: 700;
            color: #FF6B35;
            margin-bottom: 5px;
        }

        .price-label {
            color: #6B7280;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .calories-info {
            color: #6B7280;
            font-size: 0.9rem;
        }

        /* Rating */
        .product-rating {
            margin-bottom: 25px;
        }

        .star-rating {
            color: #FFD23F;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .rating-text {
            color: #6B7280;
            font-size: 0.9rem;
        }

        /* Description */
        .product-description {
            color: #6B7280;
            line-height: 1.8;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        /* Product Details */
        .product-details {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .detail-item {
            text-align: center;
        }

        .detail-label {
            color: #6B7280;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .detail-value {
            color: #2C1810;
            font-weight: 600;
            font-size: 1.1rem;
        }

        /* Add to Cart Button */
        .add-to-cart-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-add-to-cart {
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
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-add-to-cart:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        /* Tabs */
        .product-tabs {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .tab-nav {
            background: #f8f9fa;
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            border-bottom: 1px solid #f0f0f0;
        }

        .tab-nav li {
            flex: 1;
        }

        .tab-nav a {
            display: block;
            padding: 20px;
            text-align: center;
            color: #6B7280;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        .tab-nav a.active {
            color: #FF6B35;
            border-bottom-color: #FF6B35;
            background: white;
        }

        .tab-nav a:hover {
            color: #FF6B35;
            background: rgba(255, 107, 53, 0.05);
        }

        .tab-content {
            padding: 40px;
        }

        .tab-pane {
            display: none;
        }

        .tab-pane.active {
            display: block;
        }

        .tab-pane h4 {
            color: #2C1810;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .tab-pane p {
            color: #6B7280;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .tab-pane ul {
            color: #6B7280;
            line-height: 1.8;
        }

        .tab-pane li {
            margin-bottom: 10px;
        }

        /* Reviews */
        .review-item {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .reviewer-name {
            font-weight: 600;
            color: #2C1810;
        }

        .review-text {
            color: #6B7280;
            line-height: 1.6;
        }

        /* Review Form */
        .review-form {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            margin-top: 30px;
        }

        .form-group-modern {
            margin-bottom: 20px;
        }

        .form-control-modern {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #f0f0f0;
            border-radius: 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-control-modern:focus {
            outline: none;
            border-color: #FF6B35;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
        }

        textarea.form-control-modern {
            resize: vertical;
            min-height: 100px;
        }

        .btn-submit-review {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-submit-review:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
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
            
            .product-header {
                flex-direction: column;
                text-align: center;
            }
            
            .product-price {
                text-align: center;
            }
            
            .product-info {
                padding: 30px 20px;
            }
            
            .product-image-section {
                padding: 30px 20px;
            }
            
            .tab-content {
                padding: 30px 20px;
            }
            
            .tab-nav {
                flex-direction: column;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Hide original elements */
        .page-cover,
        .page-wrapper,
        .menu-detail {
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
        <?php include 'includes/header.php'; ?>

        <?php 
        include 'includes/menu_functions.php';
        
        // Get menu item ID from URL parameter
        $item_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        
        if ($item_id <= 0) {
            // Redirect to menu grid if no valid ID
            header('Location: menu-grid.php');
            exit;
        }
        
        $menu_item = getMenuItemById($item_id);
        
        // If menu item not found, redirect to menu grid
        if (!$menu_item) {
            header('Location: menu-grid.php');
            exit;
        }
        ?>

        <!--========= MODERN PAGE-COVER =========-->
        <div class="page-cover-modern">
            <div class="container">
                <div class="page-cover-content" data-aos="fade-up">
                    <div class="page-cover-icon">
                        <i class="fa fa-utensils"></i>
                    </div>
                    <h1 class="page-cover-title"><?php echo htmlspecialchars($menu_item['name']); ?></h1>
                    <p class="page-cover-subtitle">Discover our authentic flavors</p>
                </div>
            </div>
        </div>

        <!--========= MODERN MENU DETAIL SECTION =========-->
        <section class="menu-detail-modern">
            <div class="container">
                <div class="product-card" data-aos="fade-up">
                    <!-- Product Image Section -->
                    <div class="product-image-section">
                        <div class="category-badge">
                            <?php echo ucfirst($menu_item['category']); ?>
                        </div>
                        <img src="<?php echo htmlspecialchars($menu_item['image']); ?>" alt="<?php echo htmlspecialchars($menu_item['name']); ?>" class="product-image">
                    </div>

                    <!-- Product Info -->
                    <div class="product-info">
                        <div class="product-header">
                            <div class="product-title">
                                <h1><?php echo htmlspecialchars($menu_item['name']); ?></h1>
                            </div>
                            <div class="product-price">
                                <div class="price-amount">$<?php echo number_format($menu_item['price'], 2); ?></div>
                                <div class="price-label">Price</div>
                                <div class="calories-info"><?php echo $menu_item['calories'] ? $menu_item['calories'] . ' calories' : ''; ?></div>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="product-rating">
                            <?php 
                            $rating = getAverageRating($menu_item['id']);
                            $avgRating = round($rating['avg_rating'], 1);
                            $totalReviews = $rating['total_reviews'];
                            ?>
                            <div class="star-rating">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <i class="fa <?php echo ($i <= $avgRating) ? 'fa-star' : 'fa-star-o'; ?>"></i>
                                <?php endfor; ?>
                            </div>
                            <div class="rating-text">
                                <?php if ($avgRating > 0): ?>
                                    <?php echo $avgRating; ?> out of 5 stars (<?php echo $totalReviews; ?> reviews)
                                <?php else: ?>
                                    No reviews yet
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="product-description">
                            <?php echo htmlspecialchars($menu_item['description']); ?>
                        </div>

                        <!-- Product Details -->
                        <div class="product-details">
                            <div class="details-grid">
                                <div class="detail-item">
                                    <div class="detail-label">Category</div>
                                    <div class="detail-value"><?php echo ucfirst($menu_item['category']); ?></div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">Calories</div>
                                    <div class="detail-value"><?php echo $menu_item['calories'] ? $menu_item['calories'] : 'N/A'; ?></div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">Prep Time</div>
                                    <div class="detail-value"><?php echo $menu_item['preparation_time'] ? $menu_item['preparation_time'] . ' min' : 'N/A'; ?></div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-label">Featured</div>
                                    <div class="detail-value"><?php echo isset($menu_item['is_featured']) && $menu_item['is_featured'] ? 'Yes' : 'No'; ?></div>
                                </div>
                            </div>
                        </div>

                        <!-- Add to Cart Button -->
                        <div class="add-to-cart-section">
                            <button class="btn-add-to-cart add-to-cart" data-id="<?php echo $menu_item['id']; ?>" data-name="<?php echo htmlspecialchars($menu_item['name']); ?>" data-price="<?php echo $menu_item['price']; ?>">
                                <i class="fa fa-shopping-cart"></i>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Tabs -->
                <div class="product-tabs" data-aos="fade-up" data-aos-delay="200">
                    <ul class="tab-nav">
                        <li><a href="#description" class="active" data-tab="description"><i class="fa fa-info"></i> Description</a></li>
                        <li><a href="#reviews" data-tab="reviews"><i class="fa fa-comments"></i> Reviews</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="description" class="tab-pane active">
                            <h4>About this dish</h4>
                            <p><?php echo htmlspecialchars($menu_item['description']); ?></p>
                            
                            <h4>Nutritional Information</h4>
                            <ul>
                                <?php if ($menu_item['calories']): ?>
                                <li><strong>Calories:</strong> <?php echo $menu_item['calories']; ?> per serving</li>
                                <?php endif; ?>
                                <?php if ($menu_item['preparation_time']): ?>
                                <li><strong>Preparation Time:</strong> <?php echo $menu_item['preparation_time']; ?> minutes</li>
                                <?php endif; ?>
                                <li><strong>Category:</strong> <?php echo ucfirst($menu_item['category']); ?></li>
                                <?php if (isset($menu_item['is_featured']) && $menu_item['is_featured']): ?>
                                <li><strong>Featured Item:</strong> This is one of our most popular dishes!</li>
                                <?php endif; ?>
                            </ul>
                            
                            <h4>Ingredients</h4>
                            <p>Our <?php echo htmlspecialchars($menu_item['name']); ?> is prepared with the finest ingredients, following traditional recipes to ensure authentic taste and quality.</p>
                        </div>

                        <div id="reviews" class="tab-pane">
                            <div class="comments-wrapper">
                                <?php echo displayTestimonials($menu_item['id']); ?>
                            </div>

                            <div class="review-form">
                                <h4>Add Your Review</h4>
                                <form class="review-form-modern">
                                    <div class="form-group-modern">
                                        <input type="text" class="form-control-modern" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group-modern">
                                        <input type="email" class="form-control-modern" placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group-modern">
                                        <textarea class="form-control-modern" rows="5" placeholder="Your Review"></textarea>
                                    </div>
                                    <button type="submit" class="btn-submit-review">Submit Review</button>
                                </form>
                            </div>
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

        // Tab functionality
        $(document).ready(function() {
            $('.tab-nav a').click(function(e) {
                e.preventDefault();
                
                // Remove active class from all tabs
                $('.tab-nav a').removeClass('active');
                $('.tab-pane').removeClass('active');
                
                // Add active class to clicked tab
                $(this).addClass('active');
                $($(this).attr('href')).addClass('active');
            });

            // Add to cart functionality
            $('.add-to-cart').click(function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var price = $(this).data('price');
                
                // Add to cart logic here
                console.log('Adding to cart:', name, 'Price:', price);
                
                // Show success message
                const btn = $(this);
                const originalText = btn.html();
                btn.html('<i class="fa fa-check"></i> Added to Cart');
                btn.css('background', 'linear-gradient(135deg, #28a745 0%, #20c997 100%)');
                
                setTimeout(function() {
                    btn.html(originalText);
                    btn.css('background', 'linear-gradient(135deg, #FF6B35 0%, #F7931E 100%)');
                }, 2000);
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>