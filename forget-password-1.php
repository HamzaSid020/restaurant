<?php
require_once __DIR__.'/includes/auth.php';
startSession();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Forgot Password - ChachuKiBiryani</title>
    <?php include 'includes/head.php'; ?>
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/forgetpassword.css" rel="stylesheet">
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
                        <a href="index.php">
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
                        <i class="fa fa-key"></i>
                    </div>
                    <h1 class="page-cover-title">Reset Your</br> Password</h1>
                    <p class="page-cover-subtitle">Reset your account password</p>
                </div>
            </div>
        </div>

        <!--========= MODERN FORGOT PASSWORD SECTION =========-->
        <section class="forgot-password-modern">
            <div class="container">
                <div data-aos="fade-up">
                    <h2 class="page-heading">Forgot Your Password?</h2>
                    <div class="page-heading-line"></div>
                    <p class="page-subtitle">Enter your email address and we'll send you a reset link</p>
                </div>

                <div class="forgot-form-modern" data-aos="fade-up" data-aos-delay="200">
                    <div class="success-message" id="successMessage">
                        <i class="fa fa-check-circle"></i> Reset link sent successfully! Check your email.
                    </div>

                    <form id="forgotPasswordForm">
                        <div class="form-group-modern">
                            <div class="input-group-modern">
                                <i class="fa fa-envelope input-icon"></i>
                                <input type="email" class="form-control-modern" placeholder="Enter your email address" required>
                            </div>
                        </div>

                        <button type="submit" class="btn-send-modern">
                            <i class="fa fa-paper-plane"></i> Send Reset Link
                        </button>
                    </form>

                    <div class="form-links">
                        <p>Already have an account? <a href="login.php">Login Now</a></p>
                        <p>New here? <a href="register-1.php">Register Now</a></p>
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

        // Form Submission
        document.getElementById('forgotPasswordForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.btn-send-modern');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(function() {
                // Show success message
                document.getElementById('successMessage').style.display = 'block';
                
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Hide success message after 5 seconds
                setTimeout(function() {
                    document.getElementById('successMessage').style.display = 'none';
                }, 5000);
            }, 2000);
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>