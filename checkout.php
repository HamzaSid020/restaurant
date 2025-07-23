<?php
// Set page-specific variables
$page_title = "Checkout - ChachuKiBiryani";
$page_description = "Complete your order and payment at ChachuKiBiryani.";

// Start session
session_start();

// Include database connection
require_once 'includes/db_connect.php';

// Check if cart is empty
if (empty($_SESSION['cart'])) {
    header('Location: cart.php');
    exit;
}

// Process checkout form
$checkout_message = '';
$checkout_success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_name = trim($_POST['customer_name'] ?? '');
    $customer_email = trim($_POST['customer_email'] ?? '');
    $customer_phone = trim($_POST['customer_phone'] ?? '');
    $delivery_address = trim($_POST['delivery_address'] ?? '');
    $delivery_city = trim($_POST['delivery_city'] ?? '');
    $delivery_state = trim($_POST['delivery_state'] ?? '');
    $delivery_zip = trim($_POST['delivery_zip'] ?? '');
    $delivery_instructions = trim($_POST['delivery_instructions'] ?? '');
    $payment_method = trim($_POST['payment_method'] ?? '');
    
    // Validate input
    $errors = [];
    
    if (empty($customer_name)) $errors[] = 'Name is required';
    if (empty($customer_email) || !filter_var($customer_email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
    if (empty($customer_phone)) $errors[] = 'Phone number is required';
    if (empty($delivery_address)) $errors[] = 'Delivery address is required';
    if (empty($delivery_city)) $errors[] = 'City is required';
    if (empty($delivery_state)) $errors[] = 'State is required';
    if (empty($delivery_zip)) $errors[] = 'ZIP code is required';
    if (empty($payment_method)) $errors[] = 'Payment method is required';
    
    if (empty($errors)) {
        try {
            // Calculate totals
            $subtotal = 0;
            foreach ($_SESSION['cart'] as $item) {
                $subtotal += $item['price'] * $item['quantity'];
            }
            $tax = $subtotal * 0.085;
            $delivery_fee = $subtotal > 25 ? 0 : 5;
            $total = $subtotal + $tax + $delivery_fee;
            
            // Create order
            $order_data = [
                'customer_name' => $customer_name,
                'customer_email' => $customer_email,
                'customer_phone' => $customer_phone,
                'delivery_address' => $delivery_address,
                'delivery_city' => $delivery_city,
                'delivery_state' => $delivery_state,
                'delivery_zip' => $delivery_zip,
                'delivery_instructions' => $delivery_instructions,
                'subtotal' => $subtotal,
                'tax' => $tax,
                'delivery_fee' => $delivery_fee,
                'total' => $total,
                'payment_method' => $payment_method,
                'status' => 'pending'
            ];
            
            // Insert order into database
            $sql = "INSERT INTO orders (customer_name, customer_email, customer_phone, delivery_address, delivery_city, delivery_state, delivery_zip, delivery_instructions, subtotal, tax, delivery_fee, total, payment_method, status, created_at) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
            
            $order_id = insertData($sql, [
                $order_data['customer_name'],
                $order_data['customer_email'],
                $order_data['customer_phone'],
                $order_data['delivery_address'],
                $order_data['delivery_city'],
                $order_data['delivery_state'],
                $order_data['delivery_zip'],
                $order_data['delivery_instructions'],
                $order_data['subtotal'],
                $order_data['tax'],
                $order_data['delivery_fee'],
                $order_data['total'],
                $order_data['payment_method']
            ]);
            
            if ($order_id) {
                // Insert order items
                foreach ($_SESSION['cart'] as $item) {
                    $item_sql = "INSERT INTO order_items (order_id, menu_item_id, item_name, quantity, price) VALUES (?, ?, ?, ?, ?)";
                    insertData($item_sql, [
                        $order_id,
                        $item['id'],
                        $item['name'],
                        $item['quantity'],
                        $item['price']
                    ]);
                }
                
                // Clear cart
                unset($_SESSION['cart']);
                
                $checkout_success = true;
                $checkout_message = "Order placed successfully! Your order number is #$order_id. We'll send you a confirmation email shortly.";
                
                // Redirect to order confirmation page
                header("Location: order-confirmation.php?order_id=$order_id");
                exit;
            } else {
                $checkout_message = 'Sorry, there was an error processing your order. Please try again.';
            }
        } catch (Exception $e) {
            error_log("Checkout error: " . $e->getMessage());
            $checkout_message = 'Sorry, there was an error processing your order. Please try again.';
        }
    } else {
        $checkout_message = 'Please correct the following errors: ' . implode(', ', $errors);
    }
}

// Calculate cart totals
$cart_items = $_SESSION['cart'] ?? [];
$total_items = 0;
$subtotal = 0;

foreach ($cart_items as $item) {
    $total_items += $item['quantity'];
    $subtotal += $item['price'] * $item['quantity'];
}

$tax = $subtotal * 0.085;
$delivery_fee = $subtotal > 25 ? 0 : 5;
$total = $subtotal + $tax + $delivery_fee;

// Include header
include 'includes/header.php';
?>

<!-- checkout section -->
<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Checkout
            </h2>
        </div>
        
        <?php if ($checkout_message && !$checkout_success): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo htmlspecialchars($checkout_message); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
        
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Delivery Information</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_name">Full Name *</label>
                                        <input type="text" class="form-control" id="customer_name" name="customer_name" 
                                               value="<?php echo htmlspecialchars($_POST['customer_name'] ?? ''); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_email">Email *</label>
                                        <input type="email" class="form-control" id="customer_email" name="customer_email" 
                                               value="<?php echo htmlspecialchars($_POST['customer_email'] ?? ''); ?>" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="customer_phone">Phone Number *</label>
                                <input type="tel" class="form-control" id="customer_phone" name="customer_phone" 
                                       value="<?php echo htmlspecialchars($_POST['customer_phone'] ?? ''); ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="delivery_address">Delivery Address *</label>
                                <input type="text" class="form-control" id="delivery_address" name="delivery_address" 
                                       value="<?php echo htmlspecialchars($_POST['delivery_address'] ?? ''); ?>" required>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="delivery_city">City *</label>
                                        <input type="text" class="form-control" id="delivery_city" name="delivery_city" 
                                               value="<?php echo htmlspecialchars($_POST['delivery_city'] ?? ''); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="delivery_state">State *</label>
                                        <input type="text" class="form-control" id="delivery_state" name="delivery_state" 
                                               value="<?php echo htmlspecialchars($_POST['delivery_state'] ?? ''); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="delivery_zip">ZIP Code *</label>
                                        <input type="text" class="form-control" id="delivery_zip" name="delivery_zip" 
                                               value="<?php echo htmlspecialchars($_POST['delivery_zip'] ?? ''); ?>" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="delivery_instructions">Delivery Instructions (Optional)</label>
                                <textarea class="form-control" id="delivery_instructions" name="delivery_instructions" rows="3"><?php echo htmlspecialchars($_POST['delivery_instructions'] ?? ''); ?></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="payment_method">Payment Method *</label>
                                <select class="form-control" id="payment_method" name="payment_method" required>
                                    <option value="">Select Payment Method</option>
                                    <option value="cash" <?php echo (isset($_POST['payment_method']) && $_POST['payment_method'] == 'cash') ? 'selected' : ''; ?>>Cash on Delivery</option>
                                    <option value="card" <?php echo (isset($_POST['payment_method']) && $_POST['payment_method'] == 'card') ? 'selected' : ''; ?>>Credit/Debit Card</option>
                                </select>
                            </div>
                            
                            <div class="text-right">
                                <a href="cart.php" class="btn btn-secondary">Back to Cart</a>
                                <button type="submit" class="btn btn-primary">Place Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Order Summary</h5>
                    </div>
                    <div class="card-body">
                        <?php foreach ($cart_items as $item): ?>
                        <div class="d-flex justify-content-between mb-2">
                            <span><?php echo htmlspecialchars($item['name']); ?> x <?php echo $item['quantity']; ?></span>
                            <span>$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></span>
                        </div>
                        <?php endforeach; ?>
                        
                        <hr>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal:</span>
                            <span>$<?php echo number_format($subtotal, 2); ?></span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tax (8.5%):</span>
                            <span>$<?php echo number_format($tax, 2); ?></span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Delivery Fee:</span>
                            <span>$<?php echo number_format($delivery_fee, 2); ?></span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <strong>Total:</strong>
                            <strong>$<?php echo number_format($total, 2); ?></strong>
                        </div>
                        
                        <?php if ($delivery_fee > 0): ?>
                        <div class="alert alert-info">
                            <small>Add $<?php echo number_format(25 - $subtotal, 2); ?> more to your order for free delivery!</small>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end checkout section -->

<?php
// Include footer
include 'includes/footer.php';
?> 