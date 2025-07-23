<?php
/**
 * AJAX Handler for Adding Items to Cart
 */

// Start session
session_start();

// Include database connection
require_once __DIR__ . '/../includes/db_connect.php';

// Set content type to JSON
header('Content-Type: application/json');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method'
    ]);
    exit;
}

// Get POST data
$item_id = isset($_POST['item_id']) ? (int)$_POST['item_id'] : 0;
$item_name = isset($_POST['item_name']) ? trim($_POST['item_name']) : '';
$item_price = isset($_POST['item_price']) ? (float)$_POST['item_price'] : 0;
$quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

// Validate input
if ($item_id <= 0 || empty($item_name) || $item_price <= 0 || $quantity <= 0) {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid item data provided'
    ]);
    exit;
}

try {
    // Initialize cart if not exists
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    // Check if item already exists in cart
    $item_exists = false;
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $item_id) {
            // Update quantity
            $_SESSION['cart'][$key]['quantity'] += $quantity;
            $item_exists = true;
            break;
        }
    }
    
    // If item doesn't exist, add it
    if (!$item_exists) {
        $_SESSION['cart'][] = [
            'id' => $item_id,
            'name' => $item_name,
            'price' => $item_price,
            'quantity' => $quantity
        ];
    }
    
    // Calculate total cart count
    $cart_count = 0;
    foreach ($_SESSION['cart'] as $item) {
        $cart_count += $item['quantity'];
    }
    
    echo json_encode([
        'success' => true,
        'message' => 'Item added to cart successfully',
        'cart_count' => $cart_count,
        'cart_total' => count($_SESSION['cart'])
    ]);
    
} catch (Exception $e) {
    echo json_encode(handleDatabaseError($e));
}
?> 