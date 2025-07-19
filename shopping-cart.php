<!doctype html>
<html lang="en">

<head>
    <title>Shopping Cart - ChachuKiBiryani</title>
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

        /* Shopping Cart Section */
        .cart-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        /* Cart Items */
        .cart-item-modern {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .cart-item-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .item-image {
            width: 120px;
            height: 120px;
            border-radius: 15px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .item-details {
            flex: 1;
        }

        .item-name {
            font-size: 1.4rem;
            font-weight: 600;
            color: #2C1810;
            margin-bottom: 8px;
        }

        .item-description {
            color: #6B7280;
            margin-bottom: 15px;
        }

        .item-price {
            font-size: 1.2rem;
            font-weight: 600;
            color: #FF6B35;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 15px 0;
        }

        .quantity-btn {
            width: 40px;
            height: 40px;
            border: 2px solid #FF6B35;
            background: white;
            color: #FF6B35;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        .quantity-btn:hover {
            background: #FF6B35;
            color: white;
        }

        .quantity-input {
            width: 60px;
            text-align: center;
            border: 2px solid #f0f0f0;
            border-radius: 10px;
            padding: 8px;
            font-weight: 600;
        }

        .item-total {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2C1810;
            text-align: right;
        }

        .remove-btn {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .remove-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        /* Cart Summary */
        .cart-summary {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: sticky;
            top: 20px;
        }

        .summary-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2C1810;
            margin-bottom: 30px;
            text-align: center;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .summary-item:last-child {
            border-bottom: none;
            font-weight: 700;
            font-size: 1.2rem;
            color: #FF6B35;
        }

        .summary-label {
            color: #6B7280;
        }

        .summary-value {
            font-weight: 600;
            color: #2C1810;
        }

        .cart-actions {
            margin-top: 30px;
        }

        .btn-continue {
            background: white;
            border: 2px solid #FF6B35;
            padding: 15px 30px;
            border-radius: 50px;
            color: #FF6B35;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            text-align: center;
            margin-bottom: 15px;
        }

        .btn-continue:hover {
            background: #FF6B35;
            color: white;
            text-decoration: none;
        }

        .btn-checkout {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            text-align: center;
            width: 100%;
        }

        .btn-checkout:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            color: white;
            text-decoration: none;
        }

        /* Empty Cart */
        .empty-cart {
            text-align: center;
            padding: 80px 20px;
        }

        .empty-cart-icon {
            font-size: 5rem;
            color: #FF6B35;
            margin-bottom: 30px;
        }

        .empty-cart-title {
            font-size: 2rem;
            font-weight: 600;
            color: #2C1810;
            margin-bottom: 15px;
        }

        .empty-cart-text {
            color: #6B7280;
            margin-bottom: 30px;
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
            
            .cart-item-modern {
                flex-direction: column;
                text-align: center;
            }
            
            .item-image {
                margin-bottom: 20px;
            }
            
            .quantity-controls {
                justify-content: center;
            }
            
            .item-total {
                text-align: center;
                margin-top: 15px;
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
        .cart-list {
            display: none;
        }

        .cart-info {
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
                        <p class="lead">Review your items and proceed to checkout</p>
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
            item.style.animation = 'slideOut 0.3s ease-out';
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

        // Add slideOut animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideOut {
                from { transform: translateX(0); opacity: 1; }
                to { transform: translateX(-100%); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>