<!doctype html>
<html lang="en">

<head>
    <title>Login - ChachuKiBiryani</title>
    <?php include 'includes/head.php'; ?>
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link href="css/login.css" rel="stylesheet"> 


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
                    <span class="page-cover-icon"><i class="fa fa-lock"></i></span>
                    <h1 class="page-cover-title">Login</h1>
                    <p class="page-cover-subtitle">Welcome Back</p>
                    <span class="page-cover-icon"><i class="fa fa-lock"></i></span>
                </div>
            </div>
        </section>

        <!--=================== LOGIN SECTION ================-->
        <section class="login-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Welcome Back</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">Sign in to your account to continue your culinary journey</p>
                    </div>
                </div>
                
                <div class="login-form-modern" data-aos="fade-up" data-aos-delay="200">
                    <form id="login-form-modern">
                        <div class="form-group-modern">
                            <div class="input-group-modern">
                                <i class="fa fa-user input-icon"></i>
                                <input type="text" class="form-control-modern" placeholder="Username or Email" required />
                            </div>
                        </div>

                        <div class="form-group-modern">
                            <div class="input-group-modern">
                                <i class="fa fa-lock input-icon"></i>
                                <input type="password" class="form-control-modern" placeholder="Password" required />
                            </div>
                        </div>

                        <button type="submit" class="btn-login-modern">
                            <i class="fa fa-sign-in-alt me-2"></i>Sign In
                        </button>
                    </form>

                    <div class="form-links">
                        <a href="forget-password-1.php">Forgot Password?</a>
                        <p>New Here? <a href="register-1.php">Create Account</a></p>
                    </div>

                    <div class="social-login">
                        <h4>Or continue with</h4>
                        <div class="social-buttons">
                            <a href="#" class="btn-social facebook">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                            <a href="#" class="btn-social google">
                                <i class="fab fa-google"></i>
                                <span>Google</span>
                            </a>
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

        // Modern Login Form
        $(document).ready(function() {
            $('#login-form-modern').submit(function(e) {
                e.preventDefault();
                
                // Get form data
                var username = $('input[type="text"]').val();
                var password = $('input[type="password"]').val();
                
                // Show loading state
                $('.btn-login-modern').text('Signing In...').prop('disabled', true);
                
                // Simulate login process (replace with actual authentication)
                setTimeout(function() {
                    if (username && password) {
                        // Success - redirect to dashboard or home
                        window.location.href = 'index.php';
                    } else {
                        alert('Please fill in all fields');
                        $('.btn-login-modern').text('Sign In').prop('disabled', false);
                    }
                }, 2000);
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>