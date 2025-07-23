<?php
// Set page-specific variables
$page_title = "Shopping Cart - ChachuKiBiryani";
$page_description = "Review your cart items and proceed to checkout at ChachuKiBiryani.";

// Start session
session_start();

// Include database connection
require_once 'includes/db_connect.php';

// Process cart actions
$message = '';
$message_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'update_quantity':
                $item_id = (int)$_POST['item_id'];
                $quantity = (int)$_POST['quantity'];
                
                if ($quantity > 0) {
                    foreach ($_SESSION['cart'] as $key => $item) {
                        if ($item['id'] == $item_id) {
                            $_SESSION['cart'][$key]['quantity'] = $quantity;
                            break;
                        }
                    }
                } else {
                    // Remove item if quantity is 0
                    foreach ($_SESSION['cart'] as $key => $item) {
                        if ($item['id'] == $item_id) {
                            unset($_SESSION['cart'][$key]);
                            break;
                        }
                    }
                }
                $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex array
                $message = 'Cart updated successfully!';
                $message_type = 'success';
                break;
                
            case 'remove_item':
                $item_id = (int)$_POST['item_id'];
                foreach ($_SESSION['cart'] as $key => $item) {
                    if ($item['id'] == $item_id) {
                        unset($_SESSION['cart'][$key]);
                        break;
                    }
                }
                $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex array
                $message = 'Item removed from cart!';
                $message_type = 'success';
                break;
                
            case 'clear_cart':
                unset($_SESSION['cart']);
                $message = 'Cart cleared successfully!';
                $message_type = 'success';
                break;
        }
    }
}

// Calculate cart totals
$cart_items = $_SESSION['cart'] ?? [];
$total_items = 0;
$total_amount = 0;

foreach ($cart_items as $item) {
    $total_items += $item['quantity'];
    $total_amount += $item['price'] * $item['quantity'];
}

// Include header
include 'includes/header.php';
?>

<!-- cart section -->
<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Shopping Cart
            </h2>
        </div>
        
        <?php if ($message): ?>
        <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
            <?php echo htmlspecialchars($message); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
        
        <?php if (empty($cart_items)): ?>
        <div class="text-center py-5">
            <h4>Your cart is empty</h4>
            <p>Add some delicious items from our menu to get started!</p>
            <a href="menu.php" class="btn btn-primary">Browse Menu</a>
        </div>
        <?php else: ?>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Cart Items (<?php echo $total_items; ?> items)</h5>
                    </div>
                    <div class="card-body">
                        <?php foreach ($cart_items as $item): ?>
                        <div class="row mb-3 align-items-center">
                            <div class="col-md-2">
                                <img src="images/f1.png" alt="<?php echo htmlspecialchars($item['name']); ?>" class="img-fluid">
                            </div>
                            <div class="col-md-4">
                                <h6><?php echo htmlspecialchars($item['name']); ?></h6>
                                <p class="text-muted">$<?php echo number_format($item['price'], 2); ?> each</p>
                            </div>
                            <div class="col-md-3">
                                <form method="POST" class="d-inline">
                                    <input type="hidden" name="action" value="update_quantity">
                                    <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
                                    <div class="input-group">
                                        <button type="button" class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(<?php echo $item['id']; ?>, <?php echo $item['quantity'] - 1; ?>)">-</button>
                                        <input type="number" class="form-control form-control-sm text-center" value="<?php echo $item['quantity']; ?>" min="1" max="10" onchange="updateQuantity(<?php echo $item['id']; ?>, this.value)">
                                        <button type="button" class="btn btn-outline-secondary btn-sm" onclick="updateQuantity(<?php echo $item['id']; ?>, <?php echo $item['quantity'] + 1; ?>)">+</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <h6>$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></h6>
                            </div>
                            <div class="col-md-1">
                                <form method="POST" class="d-inline">
                                    <input type="hidden" name="action" value="remove_item">
                                    <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Remove this item from cart?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        
                        <div class="text-right">
                            <form method="POST" class="d-inline">
                                <input type="hidden" name="action" value="clear_cart">
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Clear all items from cart?')">
                                    Clear Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Order Summary</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal:</span>
                            <span>$<?php echo number_format($total_amount, 2); ?></span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tax (8.5%):</span>
                            <span>$<?php echo number_format($total_amount * 0.085, 2); ?></span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Delivery Fee:</span>
                            <span>$<?php echo $total_amount > 25 ? '0.00' : '5.00'; ?></span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <strong>Total:</strong>
                            <strong>$<?php echo number_format($total_amount + ($total_amount * 0.085) + ($total_amount > 25 ? 0 : 5), 2); ?></strong>
                        </div>
                        
                        <div class="d-grid gap-2">
                            <a href="checkout.php" class="btn btn-primary">Proceed to Checkout</a>
                            <a href="menu.php" class="btn btn-outline-secondary">Continue Shopping</a>
                        </div>
                        
                        <?php if ($total_amount < 25): ?>
                        <div class="alert alert-info mt-3">
                            <small>Add $<?php echo number_format(25 - $total_amount, 2); ?> more to your order for free delivery!</small>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- end cart section -->

<script>
function updateQuantity(itemId, quantity) {
    if (quantity < 1) quantity = 1;
    if (quantity > 10) quantity = 10;
    
    // Create form and submit
    var form = document.createElement('form');
    form.method = 'POST';
    form.innerHTML = `
        <input type="hidden" name="action" value="update_quantity">
        <input type="hidden" name="item_id" value="${itemId}">
        <input type="hidden" name="quantity" value="${quantity}">
    `;
    document.body.appendChild(form);
    form.submit();
}
</script>

<?php
// Include footer
include 'includes/footer.php';
?> 