<?php
// Start session without database dependency
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Checkout - ChachuKiBiryani</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300%7CRoboto+Condensed:400,400i,700,700i%7CGreat+Vibes" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap-5.3.2.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/orange.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Checkout Page Optimized CSS -->
    <link rel="stylesheet" href="css/checkout-optimized.css">
    <link rel="stylesheet" href="css/cart-styles.css">
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
</head>

<body class="page-body checkout-page">

    <!--====== LOADER =====-->
    <div class="loader"></div>

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

    <div class="canvas">
        <div class="overlay-black"></div>

        <!--========= PAGE-COVER =========-->
        <section class="page-cover-modern">
            <div class="container-fluid">
                <div class="page-cover-content" data-aos="fade-up" data-aos-duration="1000">
                    <span class="page-cover-icon"><i class="fa fa-credit-card"></i></span>
                    <h1 class="page-cover-title">Checkout</h1>
                    <p class="page-cover-subtitle">Complete Your Order</p>
                    <span class="page-cover-icon"><i class="fa fa-credit-card"></i></span>
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
                        <p class="checkout-lead">Fill in your details and complete your purchase</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-form-modern" data-aos="fade-up" data-aos-delay="100">
                            <form id="checkout-form-modern">
                                <h3 class="form-section-title">Personal Information</h3>
                                
                                <div class="form-row">
                                    <div class="form-group-modern">
                                        <label for="firstName">First Name *</label>
                                        <input type="text" class="form-control-modern" id="firstName" name="firstName" required>
                                    </div>
                                    <div class="form-group-modern">
                                        <label for="lastName">Last Name *</label>
                                        <input type="text" class="form-control-modern" id="lastName" name="lastName" required>
                                    </div>
                                </div>
                                
                                <div class="form-group-modern">
                                    <label for="email">Email Address *</label>
                                    <input type="email" class="form-control-modern" id="email" name="email" required>
                                </div>
                                
                                <div class="form-group-modern">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" class="form-control-modern" id="phone" name="phone" required>
                                </div>
                                
                                <h3 class="form-section-title">Delivery Information</h3>
                                
                                <div class="form-group-modern">
                                    <label for="address">Delivery Address *</label>
                                    <input type="text" class="form-control-modern" id="address" name="address" placeholder="Street Address" required>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group-modern">
                                        <label for="city">City *</label>
                                        <input type="text" class="form-control-modern" id="city" name="city" required>
                                    </div>
                                    <div class="form-group-modern">
                                        <label for="postalCode">Postal Code *</label>
                                        <input type="text" class="form-control-modern" id="postalCode" name="postalCode" required>
                                    </div>
                                </div>
                                
                                <div class="form-group-modern">
                                    <label for="deliveryDate">Preferred Delivery Date *</label>
                                    <input type="date" class="form-control-modern" id="deliveryDate" name="deliveryDate" required>
                                </div>
                                
                                <div class="form-group-modern">
                                    <label for="deliveryTime">Preferred Delivery Time *</label>
                                    <select class="form-control-modern" id="deliveryTime" name="deliveryTime" required>
                                        <option value="">Select Time</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="12:30">12:30 PM</option>
                                        <option value="13:00">1:00 PM</option>
                                        <option value="13:30">1:30 PM</option>
                                        <option value="14:00">2:00 PM</option>
                                        <option value="14:30">2:30 PM</option>
                                        <option value="15:00">3:00 PM</option>
                                        <option value="15:30">3:30 PM</option>
                                        <option value="16:00">4:00 PM</option>
                                        <option value="16:30">4:30 PM</option>
                                        <option value="17:00">5:00 PM</option>
                                        <option value="17:30">5:30 PM</option>
                                        <option value="18:00">6:00 PM</option>
                                        <option value="18:30">6:30 PM</option>
                                        <option value="19:00">7:00 PM</option>
                                        <option value="19:30">7:30 PM</option>
                                        <option value="20:00">8:00 PM</option>
                                        <option value="20:30">8:30 PM</option>
                                        <option value="21:00">9:00 PM</option>
                                    </select>
                                </div>
                                
                                <div class="form-group-modern">
                                    <label for="specialInstructions">Special Instructions (Optional)</label>
                                    <textarea class="form-control-modern" rows="4" id="specialInstructions" name="specialInstructions" placeholder="Any special instructions for delivery..."></textarea>
                                </div>
                                
                                <div class="form-group-modern">
                                    <div class="custom-control">
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
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <p>&copy; 2024 ChachuKiBiryani. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end canvas -->

    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/cart-manager.js"></script>
    <script src="js/custom-date-picker.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Force loader removal - multiple fallbacks
        function hideLoader() {
            $('.loader').fadeOut('slow');
            $('.loader').hide();
            $('.loader').css('display', 'none');
            $('.loader').addClass('hidden');
        }
        
        // Hide loader on document ready
        $(document).ready(function() {
            console.log('Document ready - hiding loader');
            hideLoader();
        });
        
        // Hide loader on window load
        $(window).on('load', function() {
            console.log('Window loaded - hiding loader');
            hideLoader();
        });
        
        // Force hide loader after 1 second
        setTimeout(function() {
            console.log('Timeout - forcing loader hide');
            hideLoader();
        }, 1000);
        
        // Initialize AOS after loader is hidden
        setTimeout(function() {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100
            });
        }, 1500);

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