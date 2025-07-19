<!doctype html>
<html lang="en">

<head>
    <title>User Profile - ChachuKiBiryani</title>
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

        /* User Profile Section */
        .user-profile-modern {
            padding: 100px 0;
            background: #FFF8F0;
            min-height: 70vh;
        }

        /* Profile Card */
        .profile-card-modern {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Profile Header */
        .profile-header {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            padding: 60px 40px;
            text-align: center;
            color: white;
            position: relative;
        }

        .profile-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('images/usr-prf-back-restaurant.jpg') center/cover;
            opacity: 0.1;
            z-index: 1;
        }

        .profile-header-content {
            position: relative;
            z-index: 2;
        }

        .profile-image-modern {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid rgba(255,255,255,0.3);
            margin: 0 auto 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .profile-image-modern img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-name {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .profile-email {
            opacity: 0.9;
            font-size: 1.1rem;
        }

        .edit-profile-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255,255,255,0.2);
            border: 2px solid rgba(255,255,255,0.3);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .edit-profile-btn:hover {
            background: rgba(255,255,255,0.3);
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
        }

        /* Profile Details */
        .profile-details {
            padding: 40px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.3s ease;
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-item:hover {
            background: #f8f9fa;
            border-radius: 10px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .detail-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .detail-content {
            flex: 1;
        }

        .detail-label {
            font-size: 0.9rem;
            color: #6B7280;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .detail-value {
            font-size: 1.1rem;
            color: #2C1810;
            font-weight: 600;
        }

        /* Stats Section */
        .profile-stats {
            background: #f8f9fa;
            padding: 30px 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            text-align: center;
        }

        .stat-item {
            padding: 20px;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #FF6B35;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #6B7280;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Quick Actions */
        .quick-actions {
            padding: 30px 40px;
            background: white;
            border-top: 1px solid #f0f0f0;
        }

        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .action-btn {
            background: white;
            border: 2px solid #FF6B35;
            color: #FF6B35;
            padding: 12px 20px;
            border-radius: 15px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .action-btn:hover {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
            text-decoration: none;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-cover-title {
                font-size: 2.5rem;
            }
            
            .page-heading {
                font-size: 2.5rem;
            }
            
            .profile-header {
                padding: 40px 20px;
            }
            
            .profile-name {
                font-size: 2rem;
            }
            
            .profile-details {
                padding: 30px 20px;
            }
            
            .detail-item {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            
            .detail-icon {
                margin-right: 0;
            }
            
            .profile-stats {
                padding: 20px;
                grid-template-columns: repeat(2, 1fr);
            }
            
            .quick-actions {
                padding: 20px;
            }
            
            .actions-grid {
                grid-template-columns: 1fr;
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
        .table-responsive,
        .edit-link {
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
                        <i class="fa fa-user-circle"></i>
                    </div>
                    <h1 class="page-cover-title">User Profile</h1>
                    <p class="page-cover-subtitle">Your account information</p>
                </div>
            </div>
        </div>

        <!--========= MODERN USER PROFILE SECTION =========-->
        <section class="user-profile-modern">
            <div class="container">
                <div data-aos="fade-up">
                    <h2 class="page-heading">My Profile</h2>
                    <div class="page-heading-line"></div>
                </div>

                <div class="profile-card-modern" data-aos="fade-up" data-aos-delay="200">
                    <!-- Profile Header -->
                    <div class="profile-header">
                        <a href="edit-profile.php" class="edit-profile-btn">
                            <i class="fa fa-pencil-alt"></i> Edit Profile
                        </a>
                        <div class="profile-header-content">
                            <div class="profile-image-modern">
                                <img src="images/user-profile.jpg" alt="Profile">
                            </div>
                            <h3 class="profile-name">James Anderson</h3>
                            <p class="profile-email">jamesand@lorem.com</p>
                        </div>
                    </div>

                    <!-- Profile Details -->
                    <div class="profile-details">
                        <div class="detail-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="detail-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="detail-content">
                                <div class="detail-label">Full Name</div>
                                <div class="detail-value">James Anderson</div>
                            </div>
                        </div>

                        <div class="detail-item" data-aos="fade-up" data-aos-delay="350">
                            <div class="detail-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="detail-content">
                                <div class="detail-label">Email Address</div>
                                <div class="detail-value">jamesand@lorem.com</div>
                            </div>
                        </div>

                        <div class="detail-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="detail-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="detail-content">
                                <div class="detail-label">Phone Number</div>
                                <div class="detail-value">+123 12345 45678</div>
                            </div>
                        </div>

                        <div class="detail-item" data-aos="fade-up" data-aos-delay="450">
                            <div class="detail-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="detail-content">
                                <div class="detail-label">Country</div>
                                <div class="detail-value">Canada</div>
                            </div>
                        </div>

                        <div class="detail-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="detail-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="detail-content">
                                <div class="detail-label">State / Region</div>
                                <div class="detail-value">Ontario</div>
                            </div>
                        </div>

                        <div class="detail-item" data-aos="fade-up" data-aos-delay="550">
                            <div class="detail-icon">
                                <i class="fa fa-map-pin"></i>
                            </div>
                            <div class="detail-content">
                                <div class="detail-label">Postal Code</div>
                                <div class="detail-value">00000</div>
                            </div>
                        </div>

                        <div class="detail-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="detail-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="detail-content">
                                <div class="detail-label">Address</div>
                                <div class="detail-value">Lorem Ipsum 56, Canada.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Stats -->
                    <div class="profile-stats" data-aos="fade-up" data-aos-delay="650">
                        <div class="stat-item">
                            <div class="stat-number">15</div>
                            <div class="stat-label">Orders</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">4.8</div>
                            <div class="stat-label">Rating</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">2</div>
                            <div class="stat-label">Reviews</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">6</div>
                            <div class="stat-label">Months</div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="quick-actions" data-aos="fade-up" data-aos-delay="700">
                        <div class="actions-grid">
                            <a href="order-history.php" class="action-btn">
                                <i class="fa fa-history"></i>
                                Order History
                            </a>
                            <a href="shopping-cart.php" class="action-btn">
                                <i class="fa fa-shopping-cart"></i>
                                My Cart
                            </a>
                            <a href="edit-profile.php" class="action-btn">
                                <i class="fa fa-edit"></i>
                                Edit Profile
                            </a>
                            <a href="index.php" class="action-btn">
                                <i class="fa fa-home"></i>
                                Back to Home
                            </a>
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
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>