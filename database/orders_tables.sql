-- Orders and Payment Tables for ChachuKiBiryani

-- Orders table
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_number VARCHAR(50) UNIQUE NOT NULL,
    user_id INT,
    customer_name VARCHAR(255) NOT NULL,
    customer_email VARCHAR(255) NOT NULL,
    customer_phone VARCHAR(50),
    delivery_address TEXT NOT NULL,
    delivery_city VARCHAR(100) NOT NULL,
    delivery_state VARCHAR(100) NOT NULL,
    delivery_postal_code VARCHAR(20) NOT NULL,
    delivery_country VARCHAR(100) DEFAULT 'US',
    subtotal DECIMAL(10,2) NOT NULL,
    tax_amount DECIMAL(10,2) DEFAULT 0.00,
    delivery_fee DECIMAL(10,2) DEFAULT 0.00,
    total_amount DECIMAL(10,2) NOT NULL,
    status ENUM('pending', 'paid', 'preparing', 'out_for_delivery', 'delivered', 'cancelled', 'refunded', 'payment_failed') DEFAULT 'pending',
    payment_method ENUM('stripe', 'cash', 'other') DEFAULT 'stripe',
    payment_id VARCHAR(255),
    stripe_customer_id VARCHAR(255),
    special_instructions TEXT,
    estimated_delivery_time DATETIME,
    actual_delivery_time DATETIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_user_id (user_id),
    INDEX idx_order_number (order_number),
    INDEX idx_status (status),
    INDEX idx_payment_id (payment_id)
);

-- Order items table
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    menu_item_id INT NOT NULL,
    item_name VARCHAR(255) NOT NULL,
    item_price DECIMAL(10,2) NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    total_price DECIMAL(10,2) NOT NULL,
    special_instructions TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (menu_item_id) REFERENCES menu_items(id) ON DELETE SET NULL,
    INDEX idx_order_id (order_id),
    INDEX idx_menu_item_id (menu_item_id)
);

-- Payment intents table
CREATE TABLE payment_intents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    stripe_payment_intent_id VARCHAR(255) UNIQUE NOT NULL,
    order_id VARCHAR(50),
    amount DECIMAL(10,2) NOT NULL,
    currency VARCHAR(3) DEFAULT 'usd',
    status VARCHAR(50) NOT NULL,
    customer_id VARCHAR(255),
    metadata JSON,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_stripe_payment_intent_id (stripe_payment_intent_id),
    INDEX idx_order_id (order_id),
    INDEX idx_status (status)
);

-- Insert sample order data
INSERT INTO orders (order_number, customer_name, customer_email, customer_phone, delivery_address, delivery_city, delivery_state, delivery_postal_code, subtotal, tax_amount, delivery_fee, total_amount, status) VALUES
('ORD-2024-001', 'Ahmed Khan', 'ahmed@email.com', '+1234567890', '123 Main Street', 'New York', 'NY', '10001', 45.99, 3.68, 5.00, 54.67, 'delivered'),
('ORD-2024-002', 'Sarah Johnson', 'sarah@email.com', '+1234567891', '456 Oak Avenue', 'Los Angeles', 'CA', '90210', 32.50, 2.60, 5.00, 40.10, 'paid'),
('ORD-2024-003', 'Mohammed Ali', 'mohammed@email.com', '+1234567892', '789 Pine Road', 'Chicago', 'IL', '60601', 28.75, 2.30, 5.00, 36.05, 'preparing');

-- Insert sample order items
INSERT INTO order_items (order_id, menu_item_id, item_name, item_price, quantity, total_price) VALUES
(1, 7, 'Chicken Biryani', 12.99, 2, 25.98),
(1, 19, 'Karak Chai', 2.49, 3, 7.47),
(1, 20, 'Masala Chai', 2.99, 2, 5.98),
(1, 21, 'Lassi', 3.49, 2, 6.98),
(2, 8, 'Mutton Biryani', 14.99, 1, 14.99),
(2, 9, 'Veg Biryani', 9.99, 1, 9.99),
(2, 19, 'Karak Chai', 2.49, 3, 7.47),
(3, 7, 'Chicken Biryani', 12.99, 1, 12.99),
(3, 10, 'Chicken Curry with Rice', 10.99, 1, 10.99),
(3, 20, 'Masala Chai', 2.99, 1, 2.99),
(3, 21, 'Lassi', 3.49, 1, 3.49); 