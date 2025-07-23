<?php
require_once __DIR__.'/includes/auth.php';
startSession();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Page Not Found - ChachuKiBiryani</title>
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

        /* Error Page Section */
        .error-page-modern {
            min-height: 100vh;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .error-page-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('images/restaurant-slider-1.jpg') center/cover;
            opacity: 0.1;
            z-index: 1;
        }

        .error-content {
            text-align: center;
            color: white;
            position: relative;
            z-index: 2;
            max-width: 600px;
            padding: 40px;
        }

        /* Error Number */
        .error-number {
            font-size: 12rem;
            font-weight: 900;
            line-height: 1;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            position: relative;
        }

        .error-number::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: rgba(255,255,255,0.3);
            border-radius: 2px;
        }

        .error-zero {
            color: #FFD23F;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        /* Error Message */
        .error-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .error-description {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Action Buttons */
        .error-actions {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-error-primary {
            background: rgba(255,255,255,0.2);
            border: 2px solid rgba(255,255,255,0.3);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn-error-primary:hover {
            background: rgba(255,255,255,0.3);
            color: white;
            text-decoration: none;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .btn-error-secondary {
            background: transparent;
            border: 2px solid rgba(255,255,255,0.5);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .btn-error-secondary:hover {
            background: rgba(255,255,255,0.1);
            color: white;
            text-decoration: none;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
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
            color: rgba(255,255,255,0.1);
            font-size: 2rem;
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
            bottom: 30%;
            left: 20%;
            animation-delay: 4s;
        }

        .floating-element:nth-child(4) {
            top: 40%;
            right: 30%;
            animation-delay: 1s;
        }

        .floating-element:nth-child(5) {
            bottom: 20%;
            right: 10%;
            animation-delay: 3s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Search Box */
        .search-box {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            padding: 15px 25px;
            margin: 30px auto;
            max-width: 400px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-input {
            background: transparent;
            border: none;
            color: white;
            font-size: 1rem;
            flex: 1;
            outline: none;
        }

        .search-input::placeholder {
            color: rgba(255,255,255,0.7);
        }

        .search-btn {
            background: rgba(255,255,255,0.2);
            border: none;
            color: white;
            padding: 10px 15px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            background: rgba(255,255,255,0.3);
            transform: scale(1.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .error-number {
                font-size: 8rem;
            }
            
            .error-title {
                font-size: 2rem;
            }
            
            .error-description {
                font-size: 1rem;
            }
            
            .error-actions {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-error-primary,
            .btn-error-secondary {
                width: 100%;
                max-width: 250px;
                justify-content: center;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Hide original elements */
        .page-cover,
        .page-wrapper,
        .header {
            display: none !important;
        }

        /* Full height body */
        body {
            margin: 0;
            padding: 0;
        }

        .canvas {
            min-height: 100vh;
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

        <!--========= MODERN ERROR PAGE =========-->
        <section class="error-page-modern">
            <!-- Floating Elements -->
            <div class="floating-elements">
                <div class="floating-element">🍽️</div>
                <div class="floating-element">🥘</div>
                <div class="floating-element">🍛</div>
                <div class="floating-element">🌶️</div>
                <div class="floating-element">🍚</div>
            </div>

            <div class="error-content" data-aos="fade-up">
                <div class="error-number" data-aos="zoom-in" data-aos-delay="200">
                    4<span class="error-zero">0</span>4
                </div>
                
                <h1 class="error-title" data-aos="fade-up" data-aos-delay="400">
                    Oops! Page Not Found
                </h1>
                
                <p class="error-description" data-aos="fade-up" data-aos-delay="600">
                    Sorry, we couldn't find the page you're looking for. It might have been moved, deleted, or you entered the wrong URL.
                </p>

                <!-- Search Box -->
                <div class="search-box" data-aos="fade-up" data-aos-delay="800">
                    <input type="text" class="search-input" placeholder="Search for biryani, menu items...">
                    <button class="search-btn">
                        <i class="fa fa-search"></i>
                    </button>
                </div>

                <!-- Action Buttons -->
                <div class="error-actions" data-aos="fade-up" data-aos-delay="1000">
                    <a href="index.php" class="btn-error-primary">
                        <i class="fa fa-home"></i>
                        Go to Homepage
                    </a>
                    <a href="menu-grid.php" class="btn-error-secondary">
                        <i class="fa fa-utensils"></i>
                        Browse Menu
                    </a>
                </div>

                <!-- Additional Help -->
                <div style="margin-top: 40px; opacity: 0.8;" data-aos="fade-up" data-aos-delay="1200">
                    <p style="margin-bottom: 15px;">Need help? Try these popular pages:</p>
                    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                        <a href="about-1.php" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.9rem;">About Us</a>
                        <a href="contact-2.php" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.9rem;">Contact</a>
                        <a href="faq-2.php" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.9rem;">FAQ</a>
                        <a href="services-1.php" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.9rem;">Services</a>
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

        // Search functionality
        document.querySelector('.search-btn').addEventListener('click', function() {
            const searchTerm = document.querySelector('.search-input').value;
            if (searchTerm.trim()) {
                // Redirect to menu page with search
                window.location.href = `menu-grid.php?search=${encodeURIComponent(searchTerm)}`;
            }
        });

        // Enter key search
        document.querySelector('.search-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                document.querySelector('.search-btn').click();
            }
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>