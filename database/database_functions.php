<?php
/**
 * Database Helper Functions for ChachuKiBiryani
 * Functions to work with the database using the new configuration
 */

require_once 'config.php';

/**
 * Get menu items by category
 * @param string $category Category name
 * @return array Array of menu items
 */
function getMenuItemsByCategory($category) {
    $db = Database::getInstance();
    $category = $db->escape($category);
    
    $sql = "SELECT * FROM menu_items WHERE category = '$category' AND is_available = TRUE ORDER BY is_featured DESC, name";
    $result = $db->query($sql);
    
    $items = [];
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
    
    return $items;
}

/**
 * Get all available menu items
 * @return array Array of all menu items
 */
function getAllMenuItems() {
    $db = Database::getInstance();
    
    $sql = "SELECT * FROM menu_items WHERE is_available = TRUE ORDER BY category, name";
    $result = $db->query($sql);
    
    $items = [];
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
    
    return $items;
}

/**
 * Get featured menu items
 * @return array Array of featured menu items
 */
function getFeaturedMenuItems() {
    $db = Database::getInstance();
    
    $sql = "SELECT * FROM menu_items WHERE is_featured = TRUE AND is_available = TRUE ORDER BY category, name";
    $result = $db->query($sql);
    
    $items = [];
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
    
    return $items;
}

/**
 * Get menu item by ID
 * @param int $id Menu item ID
 * @return array|null Menu item data or null if not found
 */
function getMenuItemById($id) {
    $db = Database::getInstance();
    $id = (int)$id;
    
    $sql = "SELECT * FROM menu_items WHERE id = $id AND is_available = TRUE";
    $result = $db->query($sql);
    
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    }
    
    return null;
}

/**
 * Get testimonials
 * @param bool $approved_only Only get approved testimonials
 * @param int $limit Limit number of results
 * @return array Array of testimonials
 */
function getTestimonials($approved_only = true, $limit = 10) {
    $db = Database::getInstance();
    $limit = (int)$limit;
    
    $sql = "SELECT * FROM testimonials";
    if ($approved_only) {
        $sql .= " WHERE is_approved = TRUE";
    }
    $sql .= " ORDER BY is_featured DESC, created_at DESC LIMIT $limit";
    
    $result = $db->query($sql);
    
    $testimonials = [];
    while ($row = $result->fetch_assoc()) {
        $testimonials[] = $row;
    }
    
    return $testimonials;
}

/**
 * Get site settings
 * @param string $key Setting key (optional)
 * @return array|string Setting value(s)
 */
function getSiteSettings($key = null) {
    $db = Database::getInstance();
    
    if ($key) {
        $key = $db->escape($key);
        $sql = "SELECT setting_value, setting_type FROM site_settings WHERE setting_key = '$key'";
        $result = $db->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return convertSettingValue($row['setting_value'], $row['setting_type']);
        }
        
        return null;
    } else {
        $sql = "SELECT setting_key, setting_value, setting_type FROM site_settings";
        $result = $db->query($sql);
        
        $settings = [];
        while ($row = $result->fetch_assoc()) {
            $settings[$row['setting_key']] = convertSettingValue($row['setting_value'], $row['setting_type']);
        }
        
        return $settings;
    }
}

/**
 * Convert setting value based on type
 * @param string $value Setting value
 * @param string $type Setting type
 * @return mixed Converted value
 */
function convertSettingValue($value, $type) {
    switch ($type) {
        case 'number':
            return is_numeric($value) ? (float)$value : 0;
        case 'boolean':
            return filter_var($value, FILTER_VALIDATE_BOOLEAN);
        case 'json':
            return json_decode($value, true);
        default:
            return $value;
    }
}

/**
 * Create new order
 * @param array $orderData Order data
 * @param array $items Order items
 * @return int|false Order ID or false on failure
 */
function createOrder($orderData, $items) {
    $db = Database::getInstance();
    
    try {
        $db->getConnection()->begin_transaction();
        
        // Generate order number
        $orderNumber = 'ORD' . date('Ymd') . rand(1000, 9999);
        
        // Insert order
        $stmt = $db->prepare("
            INSERT INTO orders (user_id, order_number, total_amount, tax_amount, delivery_fee, 
                               discount_amount, final_amount, delivery_address, delivery_instructions)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");
        
        $stmt->bind_param("isddddsss", 
            $orderData['user_id'],
            $orderNumber,
            $orderData['total_amount'],
            $orderData['tax_amount'],
            $orderData['delivery_fee'],
            $orderData['discount_amount'],
            $orderData['final_amount'],
            $orderData['delivery_address'],
            $orderData['delivery_instructions']
        );
        
        $stmt->execute();
        $orderId = $db->getLastInsertId();
        
        // Insert order items
        foreach ($items as $item) {
            $stmt = $db->prepare("
                INSERT INTO order_items (order_id, menu_item_id, quantity, unit_price, total_price, special_instructions)
                VALUES (?, ?, ?, ?, ?, ?)
            ");
            
            $stmt->bind_param("iiidds",
                $orderId,
                $item['menu_item_id'],
                $item['quantity'],
                $item['unit_price'],
                $item['total_price'],
                $item['special_instructions']
            );
            
            $stmt->execute();
        }
        
        $db->getConnection()->commit();
        return $orderId;
        
    } catch (Exception $e) {
        $db->getConnection()->rollback();
        error_log("Error creating order: " . $e->getMessage());
        return false;
    }
}

/**
 * Get user orders
 * @param int $userId User ID
 * @return array Array of orders
 */
function getUserOrders($userId) {
    $db = Database::getInstance();
    $userId = (int)$userId;
    
    $sql = "
        SELECT o.*, COUNT(oi.id) as item_count
        FROM orders o
        LEFT JOIN order_items oi ON o.id = oi.order_id
        WHERE o.user_id = $userId
        GROUP BY o.id
        ORDER BY o.created_at DESC
    ";
    
    $result = $db->query($sql);
    
    $orders = [];
    while ($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }
    
    return $orders;
}

/**
 * Get order details
 * @param int $orderId Order ID
 * @return array|null Order details or null if not found
 */
function getOrderDetails($orderId) {
    $db = Database::getInstance();
    $orderId = (int)$orderId;
    
    // Get order
    $sql = "SELECT * FROM orders WHERE id = $orderId";
    $result = $db->query($sql);
    
    if ($result->num_rows === 0) {
        return null;
    }
    
    $order = $result->fetch_assoc();
    
    // Get order items
    $sql = "
        SELECT oi.*, mi.name, mi.image
        FROM order_items oi
        JOIN menu_items mi ON oi.menu_item_id = mi.id
        WHERE oi.order_id = $orderId
    ";
    $result = $db->query($sql);
    
    $order['items'] = [];
    while ($row = $result->fetch_assoc()) {
        $order['items'][] = $row;
    }
    
    return $order;
}

/**
 * Update order status
 * @param int $orderId Order ID
 * @param string $status New status
 * @return bool Success status
 */
function updateOrderStatus($orderId, $status) {
    $db = Database::getInstance();
    $orderId = (int)$orderId;
    $status = $db->escape($status);
    
    $sql = "UPDATE orders SET status = '$status', updated_at = CURRENT_TIMESTAMP WHERE id = $orderId";
    $result = $db->query($sql);
    
    return $db->getAffectedRows() > 0;
}

/**
 * Add item to cart
 * @param string $sessionId Session ID
 * @param int $menuItemId Menu item ID
 * @param int $quantity Quantity
 * @return bool Success status
 */
function addToCart($sessionId, $menuItemId, $quantity = 1) {
    $db = Database::getInstance();
    $sessionId = $db->escape($sessionId);
    $menuItemId = (int)$menuItemId;
    $quantity = (int)$quantity;
    
    // Check if item already exists in cart
    $sql = "SELECT id, quantity FROM cart WHERE session_id = '$sessionId' AND menu_item_id = $menuItemId";
    $result = $db->query($sql);
    
    if ($result->num_rows > 0) {
        // Update existing item
        $row = $result->fetch_assoc();
        $newQuantity = $row['quantity'] + $quantity;
        $sql = "UPDATE cart SET quantity = $newQuantity, updated_at = CURRENT_TIMESTAMP WHERE id = " . $row['id'];
    } else {
        // Add new item
        $sql = "INSERT INTO cart (session_id, menu_item_id, quantity) VALUES ('$sessionId', $menuItemId, $quantity)";
    }
    
    $result = $db->query($sql);
    return $db->getAffectedRows() > 0;
}

/**
 * Get cart items
 * @param string $sessionId Session ID
 * @return array Array of cart items
 */
function getCartItems($sessionId) {
    $db = Database::getInstance();
    $sessionId = $db->escape($sessionId);
    
    $sql = "
        SELECT c.*, mi.name, mi.price, mi.image, mi.description
        FROM cart c
        JOIN menu_items mi ON c.menu_item_id = mi.id
        WHERE c.session_id = '$sessionId' AND mi.is_available = TRUE
        ORDER BY c.created_at DESC
    ";
    
    $result = $db->query($sql);
    
    $items = [];
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
    
    return $items;
}

/**
 * Update cart item quantity
 * @param int $cartItemId Cart item ID
 * @param int $quantity New quantity
 * @return bool Success status
 */
function updateCartQuantity($cartItemId, $quantity) {
    $db = Database::getInstance();
    $cartItemId = (int)$cartItemId;
    $quantity = (int)$quantity;
    
    if ($quantity <= 0) {
        // Remove item if quantity is 0 or less
        $sql = "DELETE FROM cart WHERE id = $cartItemId";
    } else {
        $sql = "UPDATE cart SET quantity = $quantity, updated_at = CURRENT_TIMESTAMP WHERE id = $cartItemId";
    }
    
    $result = $db->query($sql);
    return $db->getAffectedRows() > 0;
}

/**
 * Remove cart item
 * @param int $cartItemId Cart item ID
 * @return bool Success status
 */
function removeCartItem($cartItemId) {
    $db = Database::getInstance();
    $cartItemId = (int)$cartItemId;
    
    $sql = "DELETE FROM cart WHERE id = $cartItemId";
    $result = $db->query($sql);
    
    return $db->getAffectedRows() > 0;
}

/**
 * Clear cart
 * @param string $sessionId Session ID
 * @return bool Success status
 */
function clearCart($sessionId) {
    $db = Database::getInstance();
    $sessionId = $db->escape($sessionId);
    
    $sql = "DELETE FROM cart WHERE session_id = '$sessionId'";
    $result = $db->query($sql);
    
    return $db->getAffectedRows() > 0;
}

/**
 * Search menu items
 * @param string $searchTerm Search term
 * @return array Array of matching menu items
 */
function searchMenuItems($searchTerm) {
    $db = Database::getInstance();
    $searchTerm = $db->escape($searchTerm);
    
    $sql = "
        SELECT * FROM menu_items 
        WHERE (name LIKE '%$searchTerm%' OR description LIKE '%$searchTerm%') 
        AND is_available = TRUE 
        ORDER BY is_featured DESC, name
    ";
    
    $result = $db->query($sql);
    
    $items = [];
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
    
    return $items;
}

/**
 * Get order statistics
 * @return array Order statistics
 */
function getOrderStatistics() {
    $db = Database::getInstance();
    
    $stats = [];
    
    // Total orders
    $sql = "SELECT COUNT(*) as total FROM orders";
    $result = $db->query($sql);
    $stats['total_orders'] = $result->fetch_assoc()['total'];
    
    // Today's orders
    $sql = "SELECT COUNT(*) as today FROM orders WHERE DATE(created_at) = CURDATE()";
    $result = $db->query($sql);
    $stats['today_orders'] = $result->fetch_assoc()['today'];
    
    // Total revenue
    $sql = "SELECT SUM(final_amount) as revenue FROM orders WHERE payment_status = 'paid'";
    $result = $db->query($sql);
    $stats['total_revenue'] = $result->fetch_assoc()['revenue'] ?? 0;
    
    // Today's revenue
    $sql = "SELECT SUM(final_amount) as today_revenue FROM orders WHERE DATE(created_at) = CURDATE() AND payment_status = 'paid'";
    $result = $db->query($sql);
    $stats['today_revenue'] = $result->fetch_assoc()['today_revenue'] ?? 0;
    
    return $stats;
}
?> 