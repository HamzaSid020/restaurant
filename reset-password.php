<!doctype html>
<html lang="en">

<head>
    <title>Reset Password - ChachuKiBiryani</title>
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

        /* Reset Password Section */
        .reset-password-modern {
            padding: 100px 0;
            background: #FFF8F0;
            min-height: 70vh;
            display: flex;
            align-items: center;
        }

        /* Reset Password Form */
        .reset-form-modern {
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

        .btn-reset-modern {
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

        .btn-reset-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        /* Password Strength Indicator */
        .password-strength {
            margin-top: 10px;
            padding: 10px;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .strength-weak {
            background: rgba(220, 53, 69, 0.1);
            color: #dc3545;
            border: 1px solid rgba(220, 53, 69, 0.2);
        }

        .strength-medium {
            background: rgba(255, 193, 7, 0.1);
            color: #ffc107;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .strength-strong {
            background: rgba(40, 167, 69, 0.1);
            color: #28a745;
            border: 1px solid rgba(40, 167, 69, 0.2);
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

        /* Alert Messages */
        .alert-modern {
            padding: 15px 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            border: none;
            font-weight: 500;
        }

        .alert-success-modern {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
        }

        .alert-danger-modern {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            color: white;
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
            
            .reset-form-modern {
                padding: 40px 20px;
                margin: 0 15px;
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
                    <span class="page-cover-icon"><i class="fa fa-key"></i></span>
                    <h1 class="page-cover-title">Reset Password</h1>
                    <p class="page-cover-subtitle">Secure Your Account</p>
                    <span class="page-cover-icon"><i class="fa fa-key"></i></span>
                </div>
            </div>
        </section>

        <!--=================== RESET PASSWORD SECTION ================-->
        <section class="reset-password-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Reset Your Password</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">Enter your new password to secure your account</p>
                    </div>
                </div>
                
                <div class="reset-form-modern" data-aos="fade-up" data-aos-delay="200">
                    <form id="reset-form-modern">
                        <div class="form-group-modern">
                            <div class="input-group-modern">
                                <i class="fa fa-lock input-icon"></i>
                                <input type="password" class="form-control-modern" id="oldPassword" placeholder="Current Password" required />
                            </div>
                        </div>

                        <div class="form-group-modern">
                            <div class="input-group-modern">
                                <i class="fa fa-lock input-icon"></i>
                                <input type="password" class="form-control-modern" id="newPassword" placeholder="New Password" required />
                            </div>
                            <div class="password-strength" id="passwordStrength" style="display: none;"></div>
                        </div>

                        <div class="form-group-modern">
                            <div class="input-group-modern">
                                <i class="fa fa-lock input-icon"></i>
                                <input type="password" class="form-control-modern" id="confirmPassword" placeholder="Confirm New Password" required />
                            </div>
                        </div>

                        <button type="submit" class="btn-reset-modern">
                            <i class="fa fa-key me-2"></i>Update Password
                        </button>
                    </form>

                    <div class="form-links">
                        <p>Remember your password? <a href="login-1.php">Sign In Here</a></p>
                        <p>Need help? <a href="contact-2.php">Contact Support</a></p>
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

        // Password Strength Checker
        function checkPasswordStrength(password) {
            let strength = 0;
            let feedback = '';
            
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/)) strength++;
            if (password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^a-zA-Z0-9]/)) strength++;
            
            const strengthDiv = $('#passwordStrength');
            
            if (strength < 3) {
                strengthDiv.removeClass('strength-medium strength-strong').addClass('strength-weak');
                strengthDiv.text('Weak password');
            } else if (strength < 5) {
                strengthDiv.removeClass('strength-weak strength-strong').addClass('strength-medium');
                strengthDiv.text('Medium strength password');
            } else {
                strengthDiv.removeClass('strength-weak strength-medium').addClass('strength-strong');
                strengthDiv.text('Strong password');
            }
            
            strengthDiv.show();
        }

        // Modern Reset Password Form
        $(document).ready(function() {
            $('#newPassword').on('input', function() {
                const password = $(this).val();
                if (password.length > 0) {
                    checkPasswordStrength(password);
                } else {
                    $('#passwordStrength').hide();
                }
            });

            $('#reset-form-modern').submit(function(e) {
                e.preventDefault();
                
                const oldPassword = $('#oldPassword').val();
                const newPassword = $('#newPassword').val();
                const confirmPassword = $('#confirmPassword').val();
                
                // Basic validation
                if (newPassword !== confirmPassword) {
                    alert('New passwords do not match!');
                    return;
                }
                
                if (newPassword.length < 8) {
                    alert('Password must be at least 8 characters long!');
                    return;
                }
                
                // Show loading state
                $('.btn-reset-modern').text('Updating...').prop('disabled', true);
                
                // Simulate password update
                setTimeout(function() {
                    $('.btn-reset-modern').text('Password Updated!').css('background', '#28a745');
                    setTimeout(function() {
                        window.location.href = 'login-1.php';
                    }, 2000);
                }, 2000);
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>