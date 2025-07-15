-- Create menu_items table
CREATE TABLE menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255),
    category ENUM('breakfast', 'lunch', 'dinner') NOT NULL,
    is_available BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO menu_items (name, description, price, image, category) VALUES
('Breakfast-1', 'Anda Paratha + Karak Chai, Dolor', 5.00, 'images/dish-breakfast-1.png', 'breakfast'),
-- ('Breakfast-2', 'Lorem ipsum, Dolor', 45.00, 'images/dish-breakfast-2.png', 'breakfast'),
-- ('Breakfast-3', 'Lorem ipsum, Dolor', 45.00, 'images/dish-breakfast-3.png', 'breakfast'),
-- ('Breakfast-4', 'Lorem ipsum, Dolor', 45.00, 'images/dish-breakfast-4.png', 'breakfast'),
-- ('Breakfast-5', 'Lorem ipsum, Dolor', 45.00, 'images/dish-breakfast-5.png', 'breakfast'),
-- ('Breakfast-6', 'Lorem ipsum, Dolor', 45.00, 'images/dish-breakfast-6.png', 'breakfast'),
('Lunch-1', 'Lorem ipsum, Dolor', 45.00, 'images/dish-lunch-1.png', 'lunch'),
('Lunch-2', 'Lorem ipsum, Dolor', 45.00, 'images/dish-lunch-2.png', 'lunch'),
('Lunch-3', 'Lorem ipsum, Dolor', 45.00, 'images/dish-lunch-3.png', 'lunch'),
('Lunch-4', 'Lorem ipsum, Dolor', 45.00, 'images/dish-lunch-4.png', 'lunch'),
('Lunch-5', 'Lorem ipsum, Dolor', 45.00, 'images/dish-lunch-5.png', 'lunch'),
('Lunch-6', 'Lorem ipsum, Dolor', 45.00, 'images/dish-lunch-6.png', 'lunch'),
('Dinner-1', 'Lorem ipsum, Dolor', 45.00, 'images/dish-dinner-1.png', 'dinner'),
('Dinner-2', 'Lorem ipsum, Dolor', 45.00, 'images/dish-dinner-2.png', 'dinner'),
('Dinner-3', 'Lorem ipsum, Dolor', 45.00, 'images/dish-dinner-3.png', 'dinner'),
('Dinner-4', 'Lorem ipsum, Dolor', 45.00, 'images/dish-dinner-4.png', 'dinner'),
('Dinner-5', 'Lorem ipsum, Dolor', 45.00, 'images/dish-dinner-5.png', 'dinner'),
('Dinner-6', 'Lorem ipsum, Dolor', 45.00, 'images/dish-dinner-6.png', 'dinner'); 