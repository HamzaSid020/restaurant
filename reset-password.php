<!doctype html>
<html lang="en">

<head>
    <title>Reset Password - ChachuKiBiryani</title>
    <?php include 'includes/head.php'; ?>
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/resetpassword.css" rel="stylesheet">
    
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