<?php
/**
 * Local Database Setup Script
 * Run this script to set up your local database for development
 */

echo "=== ChachuKiBiryani Local Database Setup ===\n\n";

// Database configuration for local development
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'chachukibiryani';

echo "Attempting to connect to MySQL...\n";

try {
    // Connect to MySQL without selecting a database
    $mysqli = new mysqli($host, $user, $pass);
    
    if ($mysqli->connect_error) {
        throw new Exception("Connection failed: " . $mysqli->connect_error);
    }
    
    echo "✓ Connected to MySQL successfully\n";
    
    // Create database if it doesn't exist
    $sql = "CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
    if ($mysqli->query($sql)) {
        echo "✓ Database '$dbname' created or already exists\n";
    } else {
        throw new Exception("Failed to create database: " . $mysqli->error);
    }
    
    // Select the database
    $mysqli->select_db($dbname);
    echo "✓ Selected database '$dbname'\n";
    
    // Create menu_items table
    $sql = "CREATE TABLE IF NOT EXISTS `menu_items` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `description` text,
        `price` decimal(10,2) NOT NULL,
        `category` varchar(100) NOT NULL,
        `image_url` varchar(500) DEFAULT NULL,
        `is_available` tinyint(1) DEFAULT 1,
        `is_featured` tinyint(1) DEFAULT 0,
        `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    if ($mysqli->query($sql)) {
        echo "✓ Table 'menu_items' created or already exists\n";
    } else {
        throw new Exception("Failed to create menu_items table: " . $mysqli->error);
    }
    
    // Create orders table
    $sql = "CREATE TABLE IF NOT EXISTS `orders` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `customer_name` varchar(255) NOT NULL,
        `customer_email` varchar(255) NOT NULL,
        `customer_phone` varchar(50) NOT NULL,
        `delivery_address` text NOT NULL,
        `delivery_city` varchar(100) NOT NULL,
        `delivery_state` varchar(100) NOT NULL,
        `delivery_zip` varchar(20) NOT NULL,
        `delivery_instructions` text,
        `subtotal` decimal(10,2) NOT NULL,
        `tax` decimal(10,2) NOT NULL,
        `delivery_fee` decimal(10,2) NOT NULL,
        `total` decimal(10,2) NOT NULL,
        `payment_method` varchar(50) NOT NULL,
        `status` enum('pending','confirmed','preparing','ready','delivered','cancelled') DEFAULT 'pending',
        `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    if ($mysqli->query($sql)) {
        echo "✓ Table 'orders' created or already exists\n";
    } else {
        throw new Exception("Failed to create orders table: " . $mysqli->error);
    }
    
    // Create order_items table
    $sql = "CREATE TABLE IF NOT EXISTS `order_items` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `order_id` int(11) NOT NULL,
        `menu_item_id` int(11) NOT NULL,
        `item_name` varchar(255) NOT NULL,
        `quantity` int(11) NOT NULL,
        `price` decimal(10,2) NOT NULL,
        PRIMARY KEY (`id`),
        KEY `order_id` (`order_id`),
        KEY `menu_item_id` (`menu_item_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    if ($mysqli->query($sql)) {
        echo "✓ Table 'order_items' created or already exists\n";
    } else {
        throw new Exception("Failed to create order_items table: " . $mysqli->error);
    }
    
    // Create table_bookings table
    $sql = "CREATE TABLE IF NOT EXISTS `table_bookings` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `phone` varchar(50) NOT NULL,
        `email` varchar(255) NOT NULL,
        `persons` int(11) NOT NULL,
        `booking_date` date NOT NULL,
        `booking_time` time NOT NULL,
        `special_requests` text,
        `status` enum('pending','confirmed','cancelled') DEFAULT 'pending',
        `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    if ($mysqli->query($sql)) {
        echo "✓ Table 'table_bookings' created or already exists\n";
    } else {
        throw new Exception("Failed to create table_bookings table: " . $mysqli->error);
    }
    
    // Insert sample menu items
    $sample_items = [
        ['Chicken Biryani', 'Aromatic basmati rice cooked with tender chicken and fragrant spices', 18.99, 'Biryani', 1, 1],
        ['Vegetable Biryani', 'Delicious biryani with fresh vegetables and aromatic spices', 16.99, 'Biryani', 1, 1],
        ['Butter Chicken', 'Creamy tomato-based curry with tender chicken pieces', 14.99, 'Curries', 1, 1],
        ['Paneer Tikka', 'Grilled cottage cheese with Indian spices', 12.99, 'Appetizers', 1, 0],
        ['Naan Bread', 'Soft and fluffy Indian bread', 3.99, 'Breads', 1, 0],
        ['Mango Lassi', 'Sweet yogurt drink with mango', 4.99, 'Beverages', 1, 0]
    ];
    
    // Check if menu items already exist
    $result = $mysqli->query("SELECT COUNT(*) as count FROM menu_items");
    $count = $result->fetch_assoc()['count'];
    
    if ($count == 0) {
        echo "Inserting sample menu items...\n";
        
        $stmt = $mysqli->prepare("INSERT INTO menu_items (name, description, price, category, is_available, is_featured) VALUES (?, ?, ?, ?, ?, ?)");
        
        foreach ($sample_items as $item) {
            $stmt->bind_param("ssdsii", $item[0], $item[1], $item[2], $item[3], $item[4], $item[5]);
            $stmt->execute();
        }
        
        echo "✓ Sample menu items inserted\n";
    } else {
        echo "✓ Menu items already exist (skipping sample data)\n";
    }
    
    echo "\n=== Setup Complete! ===\n";
    echo "Your local database is ready for development.\n";
    echo "You can now run: php -S localhost:8000\n";
    echo "And visit: http://localhost:8000\n\n";
    
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
    echo "\nTroubleshooting:\n";
    echo "1. Make sure MySQL/MariaDB is running\n";
    echo "2. Check if the root user has no password (or update the password in this script)\n";
    echo "3. Make sure you have permission to create databases\n";
    echo "4. If using XAMPP/WAMP, make sure the MySQL service is started\n";
}

if (isset($mysqli)) {
    $mysqli->close();
}
?> 