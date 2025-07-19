<!doctype html>
<html lang="en">

<head>
    <title>Order History - ChachuKiBiryani</title>
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

        /* Order History Section */
        .order-history-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        /* Filter Section */
        .filter-section {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }

        .filter-select {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            padding: 15px 25px;
            border-radius: 15px;
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-select:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.2);
        }

        .filter-select option {
            background: white;
            color: #333;
        }

        /* Order Cards */
        .order-card-modern {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .order-card-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .order-header {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
            padding: 25px 30px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .order-header:hover {
            background: linear-gradient(135deg, #F7931E 0%, #FF6B35 100%);
        }

        .order-id {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .order-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .order-details {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .order-date, .order-time {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .order-status {
            padding: 8px 20px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .status-success {
            background: rgba(40, 167, 69, 0.2);
            color: #28a745;
            border: 2px solid #28a745;
        }

        .status-cancelled {
            background: rgba(220, 53, 69, 0.2);
            color: #dc3545;
            border: 2px solid #dc3545;
        }

        .status-pending {
            background: rgba(255, 193, 7, 0.2);
            color: #ffc107;
            border: 2px solid #ffc107;
        }

        /* Order Items */
        .order-items {
            padding: 30px;
        }

        .order-item-modern {
            display: flex;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .order-item-modern:last-child {
            border-bottom: none;
        }

        .item-image {
            width: 80px;
            height: 80px;
            border-radius: 15px;
            overflow: hidden;
            margin-right: 20px;
        }

        .item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .item-details {
            flex: 1;
        }

        .item-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2C1810;
            margin-bottom: 5px;
        }

        .item-price {
            color: #FF6B35;
            font-weight: 600;
        }

        .item-total {
            text-align: right;
            font-weight: 600;
            color: #2C1810;
        }

        .order-total-section {
            background: #f8f9fa;
            padding: 20px 30px;
            border-top: 1px solid #f0f0f0;
        }

        .order-total {
            text-align: center;
            font-size: 1.3rem;
            font-weight: 700;
            color: #FF6B35;
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
            
            .order-meta {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .order-details {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .order-item-modern {
                flex-direction: column;
                text-align: center;
            }
            
            .item-image {
                margin-right: 0;
                margin-bottom: 15px;
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
        .order-card {
            display: none;
        }

        .form-group {
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
                    <span class="page-cover-icon"><i class="fa fa-file-alt"></i></span>
                    <h1 class="page-cover-title">Order History</h1>
                    <p class="page-cover-subtitle">Track Your Orders</p>
                    <span class="page-cover-icon"><i class="fa fa-file-alt"></i></span>
                </div>
            </div>
        </section>

        <!--=================== ORDER HISTORY SECTION ================-->
        <section class="order-history-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">My Orders</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">Track all your previous orders and their current status</p>
                    </div>
                </div>
                
                <div class="filter-section" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4 style="color: #2C1810; margin-bottom: 0;">Filter Orders</h4>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <select class="filter-select" id="orderFilter">
                                <option value="all">All Orders</option>
                                <option value="recent">Last 6 Days</option>
                                <option value="week">Last 2 Weeks</option>
                                <option value="month">Last Month</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Order 1 - Completed -->
                <div class="order-card-modern" data-aos="fade-up" data-aos-delay="200">
                    <div class="order-header" data-bs-toggle="collapse" data-bs-target="#order1">
                        <div class="order-id">Order #CHB-2024-001</div>
                        <div class="order-meta">
                            <div class="order-details">
                                <div class="order-date">
                                    <i class="fa fa-calendar-alt"></i>
                                    <span>January 15, 2024</span>
                                </div>
                                <div class="order-time">
                                    <i class="fa fa-clock"></i>
                                    <span>12:30 PM</span>
                                </div>
                            </div>
                            <div class="order-status status-success">
                                <i class="fa fa-check"></i>
                                <span>Delivered</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="collapse" id="order1">
                        <div class="order-items">
                            <div class="order-item-modern">
                                <div class="item-image">
                                    <img src="images/dish-breakfast-3.png" alt="Chicken Biryani">
                                </div>
                                <div class="item-details">
                                    <h5 class="item-name">Chicken Biryani</h5>
                                    <p class="item-price">$45.00 × 1</p>
                                </div>
                                <div class="item-total">$45.00</div>
                            </div>
                            
                            <div class="order-item-modern">
                                <div class="item-image">
                                    <img src="images/dish-dinner-4.png" alt="Butter Chicken">
                                </div>
                                <div class="item-details">
                                    <h5 class="item-name">Butter Chicken</h5>
                                    <p class="item-price">$45.00 × 1</p>
                                </div>
                                <div class="item-total">$45.00</div>
                            </div>
                        </div>
                        
                        <div class="order-total-section">
                            <div class="order-total">
                                Total: $90.00
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Order 2 - Cancelled -->
                <div class="order-card-modern" data-aos="fade-up" data-aos-delay="300">
                    <div class="order-header" data-bs-toggle="collapse" data-bs-target="#order2">
                        <div class="order-id">Order #CHB-2024-002</div>
                        <div class="order-meta">
                            <div class="order-details">
                                <div class="order-date">
                                    <i class="fa fa-calendar-alt"></i>
                                    <span>January 12, 2024</span>
                                </div>
                                <div class="order-time">
                                    <i class="fa fa-clock"></i>
                                    <span>2:15 PM</span>
                                </div>
                            </div>
                            <div class="order-status status-cancelled">
                                <i class="fa fa-times"></i>
                                <span>Cancelled</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="collapse" id="order2">
                        <div class="order-items">
                            <div class="order-item-modern">
                                <div class="item-image">
                                    <img src="images/dish-breakfast-3.png" alt="Chicken Biryani">
                                </div>
                                <div class="item-details">
                                    <h5 class="item-name">Chicken Biryani</h5>
                                    <p class="item-price">$45.00 × 1</p>
                                </div>
                                <div class="item-total">$45.00</div>
                            </div>
                        </div>
                        
                        <div class="order-total-section">
                            <div class="order-total">
                                Total: $45.00
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Order 3 - Pending -->
                <div class="order-card-modern" data-aos="fade-up" data-aos-delay="400">
                    <div class="order-header" data-bs-toggle="collapse" data-bs-target="#order3">
                        <div class="order-id">Order #CHB-2024-003</div>
                        <div class="order-meta">
                            <div class="order-details">
                                <div class="order-date">
                                    <i class="fa fa-calendar-alt"></i>
                                    <span>January 18, 2024</span>
                                </div>
                                <div class="order-time">
                                    <i class="fa fa-clock"></i>
                                    <span>6:45 PM</span>
                                </div>
                            </div>
                            <div class="order-status status-pending">
                                <i class="fa fa-clock"></i>
                                <span>Preparing</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="collapse" id="order3">
                        <div class="order-items">
                            <div class="order-item-modern">
                                <div class="item-image">
                                    <img src="images/dish-dinner-4.png" alt="Butter Chicken">
                                </div>
                                <div class="item-details">
                                    <h5 class="item-name">Butter Chicken</h5>
                                    <p class="item-price">$45.00 × 2</p>
                                </div>
                                <div class="item-total">$90.00</div>
                            </div>
                            
                            <div class="order-item-modern">
                                <div class="item-image">
                                    <img src="images/sweet-cupcake-1.png" alt="Gulab Jamun">
                                </div>
                                <div class="item-details">
                                    <h5 class="item-name">Gulab Jamun</h5>
                                    <p class="item-price">$6.99 × 1</p>
                                </div>
                                <div class="item-total">$6.99</div>
                            </div>
                        </div>
                        
                        <div class="order-total-section">
                            <div class="order-total">
                                Total: $96.99
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

        // Order Filter Functionality
        $(document).ready(function() {
            $('#orderFilter').change(function() {
                const filter = $(this).val();
                // Add filter logic here
                console.log('Filtering by:', filter);
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>