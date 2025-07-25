<?php
// Start session without database dependency
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Shopping Cart - ChachuKiBiryani</title>
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

    <!-- Shopping Cart Page Optimized CSS -->
    <link rel="stylesheet" href="css/shopping-cart-optimized.css">
    <link rel="stylesheet" href="css/cart-styles.css">
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="page-body shopping-cart-page">

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
                    <span class="page-cover-icon"><i class="fa fa-shopping-cart"></i></span>
                    <h1 class="page-cover-title">Shopping Cart</h1>
                    <p class="page-cover-subtitle">Your Order</p>
                    <span class="page-cover-icon"><i class="fa fa-shopping-cart"></i></span>
                </div>
            </div>
        </section>

        <!--=================== CART SECTION ================-->
        <section class="cart-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Your Cart</h2>
                        <div class="page-heading-line"></div>
                        <p class="cart-lead">Review your items and proceed to checkout</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Cart Item 1 -->
                        <div class="cart-item-modern" data-aos="fade-up" data-aos-delay="100">
                            <div class="item-image">
                                <img src="images/dish-breakfast-3.png" alt="Chicken Biryani">
                            </div>
                            <div class="item-details">
                                <h4 class="item-name">Chicken Biryani</h4>
                                <p class="item-description">Aromatic basmati rice with tender chicken and authentic spices</p>
                                <div class="quantity-controls">
                                    <button class="quantity-btn" onclick="updateQuantity(1, -1)">-</button>
                                    <input type="number" class="quantity-input" id="qty1" value="1" min="1" onchange="updateTotal(1)">
                                    <button class="quantity-btn" onclick="updateQuantity(1, 1)">+</button>
                                </div>
                                <div class="item-price">$45.00</div>
                            </div>
                            <div class="item-total" id="total1">$45.00</div>
                            <button class="remove-btn" onclick="removeItem(1)">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                        
                        <!-- Cart Item 2 -->
                        <div class="cart-item-modern" data-aos="fade-up" data-aos-delay="200">
                            <div class="item-image">
                                <img src="images/dish-dinner-4.png" alt="Butter Chicken">
                            </div>
                            <div class="item-details">
                                <h4 class="item-name">Butter Chicken</h4>
                                <p class="item-description">Creamy tomato-based curry with tender chicken pieces</p>
                                <div class="quantity-controls">
                                    <button class="quantity-btn" onclick="updateQuantity(2, -1)">-</button>
                                    <input type="number" class="quantity-input" id="qty2" value="1" min="1" onchange="updateTotal(2)">
                                    <button class="quantity-btn" onclick="updateQuantity(2, 1)">+</button>
                                </div>
                                <div class="item-price">$45.00</div>
                            </div>
                            <div class="item-total" id="total2">$45.00</div>
                            <button class="remove-btn" onclick="removeItem(2)">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="cart-summary" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="summary-title">Order Summary</h3>
                            
                            <div class="summary-item">
                                <span class="summary-label">Items (2)</span>
                                <span class="summary-value">2</span>
                            </div>
                            
                            <div class="summary-item">
                                <span class="summary-label">Subtotal</span>
                                <span class="summary-value" id="subtotal">$90.00</span>
                            </div>
                            
                            <div class="summary-item">
                                <span class="summary-label">Delivery Fee</span>
                                <span class="summary-value">$0.00</span>
                            </div>
                            
                            <div class="summary-item">
                                <span class="summary-label">Tax</span>
                                <span class="summary-value">$9.00</span>
                            </div>
                            
                            <div class="summary-item">
                                <span class="summary-label">Total</span>
                                <span class="summary-value" id="grandTotal">$99.00</span>
                            </div>
                            
                            <div class="cart-actions">
                                <a href="menu-grid.php" class="btn-continue">
                                    <i class="fa fa-arrow-left me-2"></i>Continue Shopping
                                </a>
                                <a href="checkout.php" class="btn-checkout">
                                    <i class="fa fa-credit-card me-2"></i>Proceed to Checkout
                                </a>
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
    <script src="js/custom-navigation.js"></script>
    <script src="js/cart-manager.js"></script>
    
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

        // Cart functionality
        function updateQuantity(itemId, change) {
            const input = document.getElementById(`qty${itemId}`);
            const newQty = Math.max(1, parseInt(input.value) + change);
            input.value = newQty;
            updateTotal(itemId);
        }

        function updateTotal(itemId) {
            const qty = parseInt(document.getElementById(`qty${itemId}`).value);
            const price = 45.00;
            const total = qty * price;
            document.getElementById(`total${itemId}`).textContent = `$${total.toFixed(2)}`;
            updateSummary();
        }

        function removeItem(itemId) {
            const item = document.querySelector(`[onclick="removeItem(${itemId})"]`).closest('.cart-item-modern');
            item.classList.add('slide-out');
            setTimeout(() => {
                item.remove();
                updateSummary();
            }, 300);
        }

        function updateSummary() {
            const totals = document.querySelectorAll('[id^="total"]');
            let subtotal = 0;
            
            totals.forEach(total => {
                const amount = parseFloat(total.textContent.replace('$', ''));
                subtotal += amount;
            });
            
            const tax = subtotal * 0.1;
            const grandTotal = subtotal + tax;
            
            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('grandTotal').textContent = `$${grandTotal.toFixed(2)}`;
        }
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>