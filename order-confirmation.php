<?php
// Set page-specific variables
$page_title = "Order Confirmation - ChachuKiBiryani";
$page_description = "Thank you for your order at ChachuKiBiryani.";

// Include database connection
require_once 'includes/db_connect.php';

// Get order ID from URL
$order_id = (int)($_GET['order_id'] ?? 0);

if (!$order_id) {
    header('Location: index.php');
    exit;
}

// Get order details
try {
    $order = getSingleRow("SELECT * FROM orders WHERE id = ?", [$order_id]);
    if (!$order) {
        header('Location: index.php');
        exit;
    }
    
    $order_items = getMultipleRows("SELECT * FROM order_items WHERE order_id = ?", [$order_id]);
} catch (Exception $e) {
    error_log("Error fetching order: " . $e->getMessage());
    header('Location: index.php');
    exit;
}

// Include header
include 'includes/header.php';
?>

<!-- confirmation section -->
<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Order Confirmation
            </h2>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="fa fa-check-circle text-success" style="font-size: 4rem;"></i>
                        </div>
                        <h3 class="text-success">Thank You for Your Order!</h3>
                        <p class="lead">Your order has been successfully placed and is being prepared.</p>
                        <div class="alert alert-info">
                            <strong>Order Number:</strong> #<?php echo $order['id']; ?><br>
                            <strong>Order Date:</strong> <?php echo date('F j, Y g:i A', strtotime($order['created_at'])); ?>
                        </div>
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-header">
                        <h5>Order Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Customer Information</h6>
                                <p>
                                    <strong>Name:</strong> <?php echo htmlspecialchars($order['customer_name']); ?><br>
                                    <strong>Email:</strong> <?php echo htmlspecialchars($order['customer_email']); ?><br>
                                    <strong>Phone:</strong> <?php echo htmlspecialchars($order['customer_phone']); ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6>Delivery Information</h6>
                                <p>
                                    <?php echo htmlspecialchars($order['delivery_address']); ?><br>
                                    <?php echo htmlspecialchars($order['delivery_city']); ?>, <?php echo htmlspecialchars($order['delivery_state']); ?> <?php echo htmlspecialchars($order['delivery_zip']); ?>
                                    <?php if (!empty($order['delivery_instructions'])): ?>
                                    <br><strong>Instructions:</strong> <?php echo htmlspecialchars($order['delivery_instructions']); ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                        
                        <h6 class="mt-4">Order Items</h6>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($order_items as $item): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($item['item_name']); ?></td>
                                        <td><?php echo $item['quantity']; ?></td>
                                        <td>$<?php echo number_format($item['price'], 2); ?></td>
                                        <td>$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="row justify-content-end">
                            <div class="col-md-4">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Subtotal:</td>
                                        <td class="text-right">$<?php echo number_format($order['subtotal'], 2); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tax (8.5%):</td>
                                        <td class="text-right">$<?php echo number_format($order['tax'], 2); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Delivery Fee:</td>
                                        <td class="text-right">$<?php echo number_format($order['delivery_fee'], 2); ?></td>
                                    </tr>
                                    <tr class="border-top">
                                        <td><strong>Total:</strong></td>
                                        <td class="text-right"><strong>$<?php echo number_format($order['total'], 2); ?></strong></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <div class="alert alert-warning mt-3">
                            <h6>Payment Method</h6>
                            <p class="mb-0">
                                <?php echo ucfirst($order['payment_method']); ?>
                                <?php if ($order['payment_method'] == 'cash'): ?>
                                - Please have exact change ready for delivery
                                <?php endif; ?>
                            </p>
                        </div>
                        
                        <div class="alert alert-info">
                            <h6>What's Next?</h6>
                            <ul class="mb-0">
                                <li>We'll send you a confirmation email shortly</li>
                                <li>Your order will be prepared fresh</li>
                                <li>We'll contact you when your order is ready for delivery</li>
                                <li>Estimated delivery time: 30-45 minutes</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-primary">Return to Home</a>
                    <a href="menu.php" class="btn btn-outline-secondary">Order More Food</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end confirmation section -->

<?php
// Include footer
include 'includes/footer.php';
?> 