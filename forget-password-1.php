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
/*  */
        /* Page Cover */
        .page-cover-modern {
            /* background: linear-gradient(135deg, rgba(44, 24, 16, 0.9) 0%, rgba(255, 107, 53, 0.8) 100%); */
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
            background: url('images/background1.png') center/cover;
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

        /* Forgot Password Section */
.forgot-password-modern {
    padding: 100px 0;
    background: linear-gradient(135deg, #FFF8F0 0%, #FFEBE0 100%);
    min-height: 70vh;
    display: flex;
    align-items: center;
    position: relative;
}

.forgot-password-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 20%, rgba(255, 107, 53, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(220, 38, 38, 0.05) 0%, transparent 50%);
    pointer-events: none;
}

/* Forgot Password Form */
.forgot-form-modern {
    background: white;
    padding: 60px 40px;
    border-radius: 25px;
    box-shadow: 
        0 25px 50px rgba(255, 107, 53, 0.1),
        0 10px 30px rgba(220, 38, 38, 0.05);
    max-width: 500px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    border: 1px solid rgba(255, 107, 53, 0.1);
}

.forgot-form-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #FF6B35 0%, #DC2626 50%, #FF6B35 100%);
    border-radius: 25px 25px 0 0;
}

.forgot-form-title {
    text-align: center;
    color: #DC2626;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 15px;
    background: linear-gradient(135deg, #FF6B35 0%, #DC2626 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.forgot-form-subtitle {
    text-align: center;
    color: #6B7280;
    margin-bottom: 40px;
    font-size: 1rem;
    line-height: 1.5;
}

.form-group-modern {
    margin-bottom: 25px;
}

.form-label-modern {
    display: block;
    margin-bottom: 8px;
    color: #374151;
    font-weight: 600;
    font-size: 0.95rem;
}

.input-group-modern {
    position: relative;
    display: flex;
    align-items: center;
}

.form-control-modern {
    width: 100%;
    padding: 18px 20px 18px 55px;
    border: 2px solid #F3F4F6;
    border-radius: 15px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: #FAFAFA;
    color: #374151;
}

.form-control-modern:focus {
    outline: none;
    border-color: #FF6B35;
    background: white;
    box-shadow: 
        0 0 0 4px rgba(255, 107, 53, 0.1),
        0 4px 12px rgba(255, 107, 53, 0.15);
    transform: translateY(-1px);
}

.form-control-modern:hover {
    border-color: rgba(255, 107, 53, 0.3);
    background: white;
}

.form-control-modern::placeholder {
    color: #9CA3AF;
    font-style: italic;
}

.input-icon {
    position: absolute;
    left: 20px;
    color: #FF6B35;
    font-size: 1.2rem;
    z-index: 2;
    transition: all 0.3s ease;
}

.form-control-modern:focus + .input-icon {
    color: #DC2626;
    transform: scale(1.1);
}

.btn-send-modern {
    background: linear-gradient(135deg, #FF6B35 0%, #DC2626 50%, #B91C1C 100%);
    border: none;
    padding: 18px 40px;
    border-radius: 50px;
    color: white;
    font-weight: 700;
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    transition: all 0.4s ease;
    cursor: pointer;
    width: 100%;
    position: relative;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(255, 107, 53, 0.3);
}

.btn-send-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.6s ease;
}

.btn-send-modern:hover {
    transform: translateY(-3px);
    box-shadow: 
        0 15px 35px rgba(255, 107, 53, 0.4),
        0 5px 15px rgba(220, 38, 38, 0.3);
    background: linear-gradient(135deg, #E55A2B 0%, #B91C1C 50%, #991B1B 100%);
}

.btn-send-modern:hover::before {
    left: 100%;
}

.btn-send-modern:active {
    transform: translateY(-1px);
}

.back-to-login {
    text-align: center;
    margin-top: 30px;
}

.back-to-login a {
    color: #FF6B35;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
}

.back-to-login a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -2px;
    left: 50%;
    background: linear-gradient(90deg, #FF6B35, #DC2626);
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.back-to-login a:hover {
    color: #DC2626;
}

.back-to-login a:hover::after {
    width: 100%;
}

/* Success/Error Messages */
.alert-modern {
    padding: 15px 20px;
    border-radius: 12px;
    margin-bottom: 25px;
    font-weight: 500;
    border-left: 4px solid;
}

.alert-success {
    background: rgba(34, 197, 94, 0.1);
    border-left-color: #22C55E;
    color: #166534;
}

.alert-error {
    background: rgba(220, 38, 38, 0.1);
    border-left-color: #DC2626;
    color: #991B1B;
}

/* Responsive Design */
@media (max-width: 768px) {
    .forgot-password-modern {
        padding: 50px 20px;
    }
    
    .forgot-form-modern {
        padding: 40px 25px;
        border-radius: 20px;
    }
    
    .forgot-form-title {
        font-size: 1.75rem;
    }
    
    .form-control-modern {
        padding: 16px 18px 16px 50px;
    }
    
    .btn-send-modern {
        padding: 16px 30px;
        font-size: 1rem;
    }
}

        /* Success Message */
        .success-message {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 15px 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            text-align: center;
            display: none;
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

        .page-subtitle {
            text-align: center;
            color: #6B7280;
            font-size: 1.1rem;
            margin-bottom: 40px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-cover-title {
                font-size: 2.5rem;
            }
            
            .page-heading {
                font-size: 2.5rem;
            }
            
            .forgot-form-modern {
                padding: 40px 20px;
                margin: 0 15px;
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
        .custom-form {
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