<!doctype html>
<html lang="en">

<head>
    <title>Login - ChachuKiBiryani</title>
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

        /* Login Section */
        .login-modern {
            padding: 100px 0;
            background: #FFF8F0;
            min-height: 70vh;
            display: flex;
            align-items: center;
        }

        /* Login Form */
        .login-form-modern {
            background: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 0 auto;
            width: 100%;
        }

        .form-group-modern {
            margin-bottom: 25px;
        }

        .input-group-modern {
            position: relative;
            display: flex;
            align-items: center;
        }

        .form-control-modern {
            width: 100%;
            padding: 15px 20px 15px 50px;
            border: 2px solid #f0f0f0;
            border-radius: 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #fafafa;
        }

        .form-control-modern:focus {
            outline: none;
            border-color: #FF6B35;
            background: white;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
        }

        .form-control-modern::placeholder {
            color: #9CA3AF;
        }

        .input-icon {
            position: absolute;
            left: 20px;
            color: #6B7280;
            font-size: 1.1rem;
            z-index: 2;
        }

        .btn-login-modern {
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
            width: 100%;
        }

        .btn-login-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        /* Social Login */
        .social-login {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #f0f0f0;
        }

        .social-login h4 {
            text-align: center;
            margin-bottom: 20px;
            color: #2C1810;
            font-size: 1.2rem;
        }

        .social-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-social {
            flex: 1;
            min-width: 120px;
            padding: 12px 20px;
            border: 2px solid #f0f0f0;
            border-radius: 15px;
            background: white;
            color: #6B7280;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-social:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            text-decoration: none;
        }

        .btn-social.facebook:hover {
            border-color: #1877F2;
            color: #1877F2;
        }

        .btn-social.google:hover {
            border-color: #DB4437;
            color: #DB4437;
        }

        /* Form Links */
        .form-links {
            margin-top: 30px;
            text-align: center;
        }

        .form-links a {
            color: #FF6B35;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .form-links a:hover {
            color: #F7931E;
            text-decoration: none;
        }

        .form-links p {
            margin: 10px 0;
            color: #6B7280;
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
            
            .login-form-modern {
                padding: 40px 20px;
                margin: 0 15px;
            }
            
            .social-buttons {
                flex-direction: column;
            }
            
            .btn-social {
                min-width: auto;
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
        .custom-form {
            display: none;
        }

        .form-page-links {
            display: none;
        }

        .form-page-connect-social {
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