<!doctype html>
<html lang="en">

<head>
    <title>Checkout - ChachuKiBiryani</title>
    <?php include 'includes/head.php'; ?>
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
    
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

        /* Checkout Section */
        .checkout-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        /* Order Summary */
        .order-summary-modern {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 40px;
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

        .order-item-image {
            width: 80px;
            height: 80px;
            border-radius: 15px;
            overflow: hidden;
            margin-right: 20px;
        }

        .order-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .order-item-details {
            flex: 1;
        }

        .order-item-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2C1810;
            margin-bottom: 5px;
        }

        .order-item-description {
            color: #6B7280;
            margin-bottom: 5px;
        }

        .order-item-price {
            color: #FF6B35;
            font-weight: 600;
        }

        .order-total {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            margin-top: 20px;
        }

        .order-total h4 {
            margin: 0;
            font-size: 1.5rem;
        }

        /* Checkout Form */
        .checkout-form-modern {
            background: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .form-group-modern {
            margin-bottom: 25px;
        }

        .form-control-modern {
            width: 100%;
            padding: 15px 20px;
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

        .btn-checkout-modern {
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

        .btn-checkout-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .btn-cart-modern {
            background: white;
            border: 2px solid #FF6B35;
            padding: 12px 30px;
            border-radius: 50px;
            color: #FF6B35;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            margin-bottom: 30px;
        }

        .btn-cart-modern:hover {
            background: #FF6B35;
            color: white;
            text-decoration: none;
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
            
            .checkout-form-modern {
                padding: 40px 20px;
                margin: 0 15px;
            }
            
            .order-summary-modern {
                padding: 30px 20px;
                margin: 0 15px 30px;
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

        .order-list {
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
                    <span class="page-cover-icon"><i class="fa fa-thumbs-up"></i></span>
                    <h1 class="page-cover-title">Checkout</h1>
                    <p class="page-cover-subtitle">Complete Your Order</p>
                    <span class="page-cover-icon"><i class="fa fa-thumbs-up"></i></span>
                </div>
            </div>
        </section>

        <!--=================== CHECKOUT SECTION ================-->
        <section class="checkout-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Complete Your Order</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">Review your order and provide payment details to complete your purchase</p>
                        <a href="shopping-cart.php" class="btn-cart-modern">
                            <i class="fa fa-shopping-cart me-2"></i>View Shopping Cart
                        </a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-form-modern" data-aos="fade-up" data-aos-delay="200">
                            <h3 style="color: #2C1810; margin-bottom: 30px;">Payment Information</h3>
                            
                            <form id="checkout-form-modern">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <input type="text" class="form-control-modern" placeholder="Full Name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <input type="email" class="form-control-modern" placeholder="Email Address" required />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group-modern">
                                    <input type="tel" class="form-control-modern" placeholder="Phone Number" required />
                                </div>
                                
                                <div class="form-group-modern">
                                    <select class="form-control-modern">
                                        <option selected>Choose Payment Method</option>
                                        <option>Credit Card</option>
                                        <option>Debit Card</option>
                                        <option>PayPal</option>
                                        <option>Cash on Delivery</option>
                                    </select>
                                </div>
                                
                                <div class="form-group-modern">
                                    <input type="text" class="form-control-modern" placeholder="Card Number" required />
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <input type="text" class="form-control-modern dpd" placeholder="Expiry Date (MM/YY)" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <input type="text" class="form-control-modern" placeholder="CVV Code" required />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group-modern">
                                    <textarea class="form-control-modern" rows="4" placeholder="Special Instructions (Optional)"></textarea>
                                </div>
                                
                                <div class="form-group-modern">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="termsCheck" required>
                                        <label class="custom-control-label" for="termsCheck">
                                            I agree to the <a href="#" style="color: #FF6B35;">Terms & Conditions</a> and <a href="#" style="color: #FF6B35;">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn-checkout-modern">
                                    <i class="fa fa-credit-card me-2"></i>Complete Order
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="order-summary-modern" data-aos="fade-up" data-aos-delay="300">
                            <h3 style="color: #2C1810; margin-bottom: 30px;">Order Summary</h3>
                            
                            <div class="order-item-modern">
                                <div class="order-item-image">
                                    <img src="images/dish-breakfast-3.png" alt="Breakfast-3">
                                </div>
                                <div class="order-item-details">
                                    <h5 class="order-item-title">Chicken Biryani</h5>
                                    <p class="order-item-description">Aromatic basmati rice with tender chicken</p>
                                    <p class="order-item-price">$45.00</p>
                                </div>
                            </div>
                            
                            <div class="order-item-modern">
                                <div class="order-item-image">
                                    <img src="images/dish-dinner-4.png" alt="Dinner-4">
                                </div>
                                <div class="order-item-details">
                                    <h5 class="order-item-title">Butter Chicken</h5>
                                    <p class="order-item-description">Creamy tomato-based curry</p>
                                    <p class="order-item-price">$45.00</p>
                                </div>
                            </div>
                            
                            <div class="order-total">
                                <h4>Total: $90.00</h4>
                                <p style="margin: 5px 0 0 0; opacity: 0.9;">Including taxes and delivery</p>
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
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-date-picker.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Modern Checkout Form
        $(document).ready(function() {
            $('#checkout-form-modern').submit(function(e) {
                e.preventDefault();
                
                // Show loading state
                $('.btn-checkout-modern').text('Processing...').prop('disabled', true);
                
                // Simulate order processing
                setTimeout(function() {
                    alert('Order placed successfully! Thank you for choosing ChachuKiBiryani.');
                    window.location.href = 'index.php';
                }, 3000);
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>