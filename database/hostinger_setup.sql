-- =====================================================
-- ChachuKiBiryani Database Setup for Hostinger
-- =====================================================

-- Create database (if not exists)
-- Note: You'll need to create the database manually in Hostinger cPanel
-- Database name: your_hostinger_db_name

-- Set character set
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- =====================================================
-- MENU ITEMS TABLE
-- =====================================================
CREATE TABLE IF NOT EXISTS `menu_items` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `price` DECIMAL(10,2) NOT NULL,
    `image` VARCHAR(255),
    `category` ENUM('breakfast', 'lunch', 'dinner', 'dessert', 'beverages') NOT NULL,
    `is_available` BOOLEAN DEFAULT TRUE,
    `is_featured` BOOLEAN DEFAULT FALSE,
    `calories` INT,
    `preparation_time` INT COMMENT 'Preparation time in minutes',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX `idx_category` (`category`),
    INDEX `idx_available` (`is_available`),
    INDEX `idx_featured` (`is_featured`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- USERS TABLE
-- =====================================================
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) UNIQUE NOT NULL,
    `email` VARCHAR(100) UNIQUE NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `first_name` VARCHAR(50),
    `last_name` VARCHAR(50),
    `phone` VARCHAR(20),
    `address` TEXT,
    `city` VARCHAR(50),
    `postal_code` VARCHAR(10),
    `country` VARCHAR(50) DEFAULT 'Canada',
    `role` ENUM('customer', 'admin', 'staff') DEFAULT 'customer',
    `is_active` BOOLEAN DEFAULT TRUE,
    `email_verified` BOOLEAN DEFAULT FALSE,
    `verification_token` VARCHAR(255),
    `reset_token` VARCHAR(255),
    `reset_token_expires` TIMESTAMP NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX `idx_email` (`email`),
    INDEX `idx_username` (`username`),
    INDEX `idx_role` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- ORDERS TABLE
-- =====================================================
CREATE TABLE IF NOT EXISTS `orders` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT,
    `order_number` VARCHAR(20) UNIQUE NOT NULL,
    `total_amount` DECIMAL(10,2) NOT NULL,
    `tax_amount` DECIMAL(10,2) DEFAULT 0.00,
    `delivery_fee` DECIMAL(10,2) DEFAULT 0.00,
    `discount_amount` DECIMAL(10,2) DEFAULT 0.00,
    `final_amount` DECIMAL(10,2) NOT NULL,
    `status` ENUM('pending', 'confirmed', 'preparing', 'ready', 'delivered', 'cancelled') DEFAULT 'pending',
    `payment_status` ENUM('pending', 'paid', 'failed', 'refunded') DEFAULT 'pending',
    `payment_method` ENUM('cash', 'card', 'online') DEFAULT 'cash',
    `delivery_address` TEXT,
    `delivery_instructions` TEXT,
    `estimated_delivery_time` TIMESTAMP NULL,
    `actual_delivery_time` TIMESTAMP NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE SET NULL,
    INDEX `idx_order_number` (`order_number`),
    INDEX `idx_user_id` (`user_id`),
    INDEX `idx_status` (`status`),
    INDEX `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- ORDER ITEMS TABLE
-- =====================================================
CREATE TABLE IF NOT EXISTS `order_items` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `order_id` INT NOT NULL,
    `menu_item_id` INT NOT NULL,
    `quantity` INT NOT NULL DEFAULT 1,
    `unit_price` DECIMAL(10,2) NOT NULL,
    `total_price` DECIMAL(10,2) NOT NULL,
    `special_instructions` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`) ON DELETE CASCADE,
    FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items`(`id`) ON DELETE CASCADE,
    INDEX `idx_order_id` (`order_id`),
    INDEX `idx_menu_item_id` (`menu_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- CART TABLE (for guest users)
-- =====================================================
CREATE TABLE IF NOT EXISTS `cart` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `session_id` VARCHAR(255) NOT NULL,
    `menu_item_id` INT NOT NULL,
    `quantity` INT NOT NULL DEFAULT 1,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items`(`id`) ON DELETE CASCADE,
    INDEX `idx_session_id` (`session_id`),
    INDEX `idx_menu_item_id` (`menu_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- TESTIMONIALS TABLE
-- =====================================================
CREATE TABLE IF NOT EXISTS `testimonials` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100),
    `rating` INT NOT NULL CHECK (rating >= 1 AND rating <= 5),
    `comment` TEXT NOT NULL,
    `image` VARCHAR(255),
    `is_approved` BOOLEAN DEFAULT FALSE,
    `is_featured` BOOLEAN DEFAULT FALSE,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE SET NULL,
    INDEX `idx_rating` (`rating`),
    INDEX `idx_approved` (`is_approved`),
    INDEX `idx_featured` (`is_featured`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- CONTACT MESSAGES TABLE
-- =====================================================
CREATE TABLE IF NOT EXISTS `contact_messages` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `phone` VARCHAR(20),
    `subject` VARCHAR(200),
    `message` TEXT NOT NULL,
    `is_read` BOOLEAN DEFAULT FALSE,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX `idx_email` (`email`),
    INDEX `idx_read` (`is_read`),
    INDEX `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- SITE SETTINGS TABLE
-- =====================================================
CREATE TABLE IF NOT EXISTS `site_settings` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `setting_key` VARCHAR(100) UNIQUE NOT NULL,
    `setting_value` TEXT,
    `setting_type` ENUM('text', 'number', 'boolean', 'json') DEFAULT 'text',
    `description` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX `idx_setting_key` (`setting_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- INSERT SAMPLE DATA
-- =====================================================

-- Insert menu items
INSERT INTO `menu_items` (`name`, `description`, `price`, `image`, `category`, `is_featured`, `calories`, `preparation_time`) VALUES
-- Breakfast Items
('Anda Paratha + Karak Chai', 'Flaky paratha with egg and strong masala tea', 8.99, 'images/dish-breakfast-1.png', 'breakfast', TRUE, 450, 15),
('Masala Omelette', 'Spiced omelette with onions and tomatoes', 6.99, 'images/dish-breakfast-2.png', 'breakfast', FALSE, 320, 10),
('Poha with Chai', 'Flattened rice with spices and tea', 5.99, 'images/dish-breakfast-3.png', 'breakfast', FALSE, 280, 12),
('Aloo Paratha', 'Potato-stuffed flatbread with yogurt', 7.99, 'images/dish-breakfast-4.png', 'breakfast', TRUE, 380, 18),
('Bread Omelette', 'Simple bread omelette with chutney', 4.99, 'images/dish-breakfast-5.png', 'breakfast', FALSE, 250, 8),
('Upma', 'Semolina breakfast with vegetables', 5.49, 'images/dish-breakfast-6.png', 'breakfast', FALSE, 300, 15),

-- Lunch Items
('Chicken Biryani', 'Aromatic rice with tender chicken and spices', 16.99, 'images/dish-lunch-1.png', 'lunch', TRUE, 650, 25),
('Mutton Biryani', 'Traditional mutton biryani with basmati rice', 18.99, 'images/dish-lunch-2.png', 'lunch', TRUE, 720, 30),
('Veg Biryani', 'Vegetarian biryani with mixed vegetables', 14.99, 'images/dish-lunch-3.png', 'lunch', FALSE, 480, 20),
('Butter Chicken', 'Creamy tomato-based chicken curry', 15.99, 'images/dish-lunch-4.png', 'lunch', TRUE, 580, 22),
('Dal Makhani', 'Creamy black lentils with butter', 12.99, 'images/dish-lunch-5.png', 'lunch', FALSE, 420, 18),
('Paneer Tikka', 'Grilled cottage cheese with spices', 13.99, 'images/dish-lunch-6.png', 'lunch', FALSE, 380, 15),

-- Dinner Items
('Hyderabadi Biryani', 'Spicy biryani with tender meat', 19.99, 'images/dish-dinner-1.png', 'dinner', TRUE, 680, 28),
('Kashmiri Biryani', 'Mild biryani with dried fruits', 17.99, 'images/dish-dinner-2.png', 'dinner', FALSE, 620, 25),
('Awadhi Biryani', 'Lucknow-style biryani with spices', 20.99, 'images/dish-dinner-3.png', 'dinner', TRUE, 750, 30),
('Malabar Biryani', 'Kerala-style biryani with coconut', 16.99, 'images/dish-dinner-4.png', 'dinner', FALSE, 590, 22),
('Sindhi Biryani', 'Sindh-style biryani with potatoes', 15.99, 'images/dish-dinner-5.png', 'dinner', FALSE, 540, 20),
('Thalassery Biryani', 'Kerala biryani with short-grain rice', 18.99, 'images/dish-dinner-6.png', 'dinner', TRUE, 670, 26);

-- Insert testimonials
INSERT INTO `testimonials` (`name`, `email`, `rating`, `comment`, `image`, `is_approved`, `is_featured`) VALUES
('Andrew Smith', 'andrew@example.com', 5, 'Amazing biryani! The flavors are authentic and the service is excellent. Highly recommended!', 'images/reviewer-1.jpg', TRUE, TRUE),
('Sarah Johnson', 'sarah@example.com', 5, 'Best Pakistani food in Mississauga. The chicken biryani is absolutely delicious!', 'images/reviewer-2.jpg', TRUE, TRUE),
('Michael Brown', 'michael@example.com', 5, 'Great food and friendly staff. The portion sizes are perfect and the prices are reasonable.', 'images/reviewer-3.jpg', TRUE, TRUE),
('Emily Davis', 'emily@example.com', 5, 'Authentic taste of India. The spices are perfectly balanced and the rice is cooked to perfection.', 'images/reviewer-4.jpg', TRUE, TRUE);

-- Insert site settings
INSERT INTO `site_settings` (`setting_key`, `setting_value`, `setting_type`, `description`) VALUES
('site_name', 'ChachuKiBiryani', 'text', 'Website name'),
('site_description', 'Authentic Pakistani Biryani Restaurant in Mississauga', 'text', 'Website description'),
('business_hours_weekdays', '10:00 AM - 11:00 PM', 'text', 'Business hours for weekdays'),
('business_hours_weekend', '11:00 AM - 8:00 PM', 'text', 'Business hours for weekends'),
('contact_phone', '+1 (905) 897-6226', 'text', 'Contact phone number'),
('contact_email', 'ChachukiBiryani@gmail.com', 'text', 'Contact email address'),
('contact_address', '988 Burnhamthorpe Rd E, Mississauga, ON L4Y 2X6', 'text', 'Restaurant address'),
('delivery_fee', '3.99', 'number', 'Standard delivery fee'),
('minimum_order', '15.00', 'number', 'Minimum order amount for delivery'),
('tax_rate', '13.00', 'number', 'Tax rate percentage'),
('free_delivery_threshold', '50.00', 'number', 'Order amount for free delivery'),
('max_delivery_distance', '10', 'number', 'Maximum delivery distance in km'),
('is_online_ordering', 'true', 'boolean', 'Enable online ordering'),
('is_delivery_available', 'true', 'boolean', 'Enable delivery service'),
('is_pickup_available', 'true', 'boolean', 'Enable pickup service');

-- Create admin user (password: admin123)
INSERT INTO `users` (`username`, `email`, `password`, `first_name`, `last_name`, `role`, `is_active`, `email_verified`) VALUES
('admin', 'admin@chachukibiryani.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin', 'User', 'admin', TRUE, TRUE);

SET FOREIGN_KEY_CHECKS = 1;

-- =====================================================
-- CREATE VIEWS FOR COMMON QUERIES
-- =====================================================

-- View for available menu items
CREATE OR REPLACE VIEW `available_menu_items` AS
SELECT * FROM `menu_items` WHERE `is_available` = TRUE ORDER BY `category`, `name`;

-- View for featured menu items
CREATE OR REPLACE VIEW `featured_menu_items` AS
SELECT * FROM `menu_items` WHERE `is_featured` = TRUE AND `is_available` = TRUE ORDER BY `category`, `name`;

-- View for approved testimonials
CREATE OR REPLACE VIEW `approved_testimonials` AS
SELECT * FROM `testimonials` WHERE `is_approved` = TRUE ORDER BY `is_featured` DESC, `created_at` DESC;

-- =====================================================
-- CREATE STORED PROCEDURES
-- =====================================================

DELIMITER //

-- Procedure to get menu items by category
CREATE PROCEDURE `GetMenuItemsByCategory`(IN category_name VARCHAR(50))
BEGIN
    SELECT * FROM `menu_items` 
    WHERE `category` = category_name AND `is_available` = TRUE 
    ORDER BY `is_featured` DESC, `name`;
END //

-- Procedure to calculate order total
CREATE PROCEDURE `CalculateOrderTotal`(IN order_id INT, OUT total DECIMAL(10,2))
BEGIN
    SELECT SUM(`total_price`) INTO total 
    FROM `order_items` 
    WHERE `order_id` = order_id;
END //

-- Procedure to get user orders
CREATE PROCEDURE `GetUserOrders`(IN user_id INT)
BEGIN
    SELECT o.*, COUNT(oi.id) as item_count
    FROM `orders` o
    LEFT JOIN `order_items` oi ON o.id = oi.order_id
    WHERE o.user_id = user_id
    GROUP BY o.id
    ORDER BY o.created_at DESC;
END //

DELIMITER ;

-- =====================================================
-- CREATE TRIGGERS
-- =====================================================

DELIMITER //

-- Trigger to update order total when order items change
CREATE TRIGGER `update_order_total_insert` 
AFTER INSERT ON `order_items`
FOR EACH ROW
BEGIN
    UPDATE `orders` 
    SET `total_amount` = (
        SELECT SUM(`total_price`) 
        FROM `order_items` 
        WHERE `order_id` = NEW.order_id
    ),
    `final_amount` = (
        SELECT SUM(`total_price`) + `tax_amount` + `delivery_fee` - `discount_amount`
        FROM `order_items` oi
        JOIN `orders` o ON oi.order_id = o.id
        WHERE `order_id` = NEW.order_id
    )
    WHERE `id` = NEW.order_id;
END //

CREATE TRIGGER `update_order_total_update` 
AFTER UPDATE ON `order_items`
FOR EACH ROW
BEGIN
    UPDATE `orders` 
    SET `total_amount` = (
        SELECT SUM(`total_price`) 
        FROM `order_items` 
        WHERE `order_id` = NEW.order_id
    ),
    `final_amount` = (
        SELECT SUM(`total_price`) + `tax_amount` + `delivery_fee` - `discount_amount`
        FROM `order_items` oi
        JOIN `orders` o ON oi.order_id = o.id
        WHERE `order_id` = NEW.order_id
    )
    WHERE `id` = NEW.order_id;
END //

CREATE TRIGGER `update_order_total_delete` 
AFTER DELETE ON `order_items`
FOR EACH ROW
BEGIN
    UPDATE `orders` 
    SET `total_amount` = (
        SELECT COALESCE(SUM(`total_price`), 0) 
        FROM `order_items` 
        WHERE `order_id` = OLD.order_id
    ),
    `final_amount` = (
        SELECT COALESCE(SUM(`total_price`), 0) + `tax_amount` + `delivery_fee` - `discount_amount`
        FROM `order_items` oi
        JOIN `orders` o ON oi.order_id = o.id
        WHERE `order_id` = OLD.order_id
    )
    WHERE `id` = OLD.order_id;
END //

DELIMITER ;

-- =====================================================
-- SETUP COMPLETE
-- =====================================================

SELECT 'Database setup completed successfully!' as status; 