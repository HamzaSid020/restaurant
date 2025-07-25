<!doctype html>
<html lang="en">
<head>
    <title>Debug Cart - ChachuKiBiryani</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shopping-cart-optimized.css">
</head>
<body class="page-body shopping-cart-page">
    
    <!--====== LOADER =====-->
    <div class="loader"></div>

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
                </div>
            </div>
        </div>

        <!--========= PAGE-COVER =========-->
        <section class="page-cover-modern">
            <div class="container-fluid">
                <div class="page-cover-content">
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
                    <div class="col-12 text-center mb-5">
                        <h2 class="page-heading">Your Cart</h2>
                        <div class="page-heading-line"></div>
                        <p class="cart-lead">Review your items and proceed to checkout</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-item-modern">
                            <div class="item-image">
                                <img src="images/dish-breakfast-3.png" alt="Chicken Biryani">
                            </div>
                            <div class="item-details">
                                <h4 class="item-name">Chicken Biryani</h4>
                                <p class="item-description">Aromatic basmati rice with tender chicken and authentic spices</p>
                                <div class="quantity-controls">
                                    <button class="quantity-btn">-</button>
                                    <input type="number" class="quantity-input" value="1" min="1">
                                    <button class="quantity-btn">+</button>
                                </div>
                                <div class="item-price">$45.00</div>
                            </div>
                            <div class="item-total">$45.00</div>
                            <button class="remove-btn">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="cart-summary">
                            <h3 class="summary-title">Order Summary</h3>
                            <div class="summary-item">
                                <span class="summary-label">Items (1)</span>
                                <span class="summary-value">1</span>
                            </div>
                            <div class="summary-item">
                                <span class="summary-label">Total</span>
                                <span class="summary-value">$45.00</span>
                            </div>
                            <div class="cart-actions">
                                <a href="#" class="btn-continue">Continue Shopping</a>
                                <a href="#" class="btn-checkout">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    
    <script>
        // Simple loader removal
        $(document).ready(function() {
            console.log('Document ready');
            
            // Hide loader immediately
            $('.loader').fadeOut('slow');
            
            // Fallback after 2 seconds
            setTimeout(function() {
                $('.loader').hide();
                console.log('Loader hidden');
            }, 2000);
        });
        
        // Also hide loader when window loads
        $(window).on('load', function() {
            console.log('Window loaded');
            $('.loader').hide();
        });
    </script>
</body>
</html> 