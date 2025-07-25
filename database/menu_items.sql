-- Create menu_items table with enhanced fields
CREATE TABLE menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255),
    category ENUM('breakfast', 'lunch', 'dinner', 'desserts', 'beverages') NOT NULL,
    calories INT DEFAULT 0,
    preparation_time INT DEFAULT 15,
    is_available BOOLEAN DEFAULT TRUE,
    is_featured BOOLEAN DEFAULT FALSE,
    ingredients TEXT,
    nutritional_info TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert comprehensive sample data
INSERT INTO menu_items (name, description, price, image, category, calories, preparation_time, is_featured, ingredients, nutritional_info) VALUES
-- Breakfast Items
('Anda Paratha with Karak Chai', 'Flaky paratha stuffed with spiced eggs, served with our signature karak chai. A perfect start to your day with authentic flavors.', 5.99, 'images/dish-breakfast-1.png', 'breakfast', 450, 10, TRUE, 'Whole wheat flour, eggs, onions, green chilies, spices, black tea, cardamom, ginger', 'Protein: 15g, Carbs: 45g, Fat: 18g'),
('Masala Omelette with Toast', 'Fluffy omelette with fresh vegetables and herbs, served with buttered toast. Simple yet satisfying breakfast option.', 4.99, 'images/dish-breakfast-2.png', 'breakfast', 380, 8, FALSE, 'Eggs, tomatoes, onions, green chilies, coriander, bread, butter', 'Protein: 18g, Carbs: 35g, Fat: 22g'),
('Chicken Biryani Breakfast', 'Aromatic basmati rice cooked with tender chicken and aromatic spices. Perfect for a hearty breakfast.', 8.99, 'images/dish-breakfast-3.png', 'breakfast', 650, 25, TRUE, 'Basmati rice, chicken, onions, tomatoes, spices, saffron, ghee', 'Protein: 25g, Carbs: 85g, Fat: 28g'),
('Aloo Paratha with Curd', 'Stuffed paratha with spiced potato filling, served with fresh curd and pickle. Traditional comfort food.', 4.49, 'images/dish-breakfast-4.png', 'breakfast', 420, 12, FALSE, 'Whole wheat flour, potatoes, onions, spices, curd, pickle', 'Protein: 12g, Carbs: 55g, Fat: 15g'),
('Poha with Peanuts', 'Flattened rice cooked with onions, peanuts, and mild spices. Light and nutritious breakfast option.', 3.99, 'images/dish-breakfast-5.png', 'breakfast', 320, 10, FALSE, 'Flattened rice, onions, peanuts, curry leaves, mustard seeds, turmeric', 'Protein: 8g, Carbs: 48g, Fat: 12g'),
('Bread Omelette', 'Classic bread omelette with a twist of Pakistani spices. Quick and delicious breakfast choice.', 3.49, 'images/dish-breakfast-6.png', 'breakfast', 350, 6, FALSE, 'Eggs, bread, onions, tomatoes, green chilies, spices', 'Protein: 16g, Carbs: 32g, Fat: 18g'),

-- Lunch Items
('Chicken Biryani', 'Aromatic basmati rice layered with tender chicken, caramelized onions, and aromatic spices. Our signature dish.', 12.99, 'images/dish-lunch-1.png', 'lunch', 850, 45, TRUE, 'Basmati rice, chicken, onions, tomatoes, spices, saffron, ghee, mint, coriander', 'Protein: 35g, Carbs: 95g, Fat: 32g'),
('Mutton Biryani', 'Traditional biryani with tender mutton pieces, slow-cooked with aromatic spices and fragrant rice.', 14.99, 'images/dish-lunch-2.png', 'lunch', 920, 60, TRUE, 'Basmati rice, mutton, onions, tomatoes, spices, saffron, ghee, mint, coriander', 'Protein: 42g, Carbs: 95g, Fat: 38g'),
('Veg Biryani', 'Aromatic rice cooked with fresh vegetables and aromatic spices. Perfect for vegetarians.', 9.99, 'images/dish-lunch-3.png', 'lunch', 680, 35, FALSE, 'Basmati rice, mixed vegetables, onions, tomatoes, spices, saffron, ghee', 'Protein: 15g, Carbs: 88g, Fat: 25g'),
('Chicken Curry with Rice', 'Tender chicken pieces in rich, aromatic curry sauce, served with steamed basmati rice.', 10.99, 'images/dish-lunch-4.png', 'lunch', 720, 30, FALSE, 'Chicken, onions, tomatoes, spices, coconut milk, rice, ghee', 'Protein: 28g, Carbs: 75g, Fat: 28g'),
('Dal Khichdi', 'Comforting one-pot meal of rice and lentils cooked with mild spices. Simple yet nutritious.', 6.99, 'images/dish-lunch-5.png', 'lunch', 520, 25, FALSE, 'Rice, yellow lentils, onions, tomatoes, spices, ghee', 'Protein: 18g, Carbs: 65g, Fat: 18g'),
('Paneer Tikka', 'Grilled cottage cheese marinated in aromatic spices, served with mint chutney and salad.', 8.99, 'images/dish-lunch-6.png', 'lunch', 480, 20, FALSE, 'Paneer, yogurt, spices, mint chutney, salad vegetables', 'Protein: 22g, Carbs: 25g, Fat: 28g'),

-- Dinner Items
('Special Chicken Biryani', 'Our premium biryani with extra tender chicken, more saffron, and special spice blend. Perfect for dinner.', 15.99, 'images/dish-dinner-1.png', 'dinner', 950, 50, TRUE, 'Premium basmati rice, tender chicken, extra saffron, special spices, ghee, mint, coriander', 'Protein: 38g, Carbs: 98g, Fat: 35g'),
('Lamb Biryani', 'Rich and flavorful biryani with tender lamb pieces, slow-cooked to perfection with aromatic spices.', 16.99, 'images/dish-dinner-2.png', 'dinner', 980, 65, TRUE, 'Basmati rice, lamb, onions, tomatoes, spices, saffron, ghee, mint, coriander', 'Protein: 45g, Carbs: 98g, Fat: 42g'),
('Hyderabadi Biryani', 'Traditional Hyderabadi style biryani with dum cooking technique for maximum flavor.', 13.99, 'images/dish-dinner-3.png', 'dinner', 880, 55, FALSE, 'Basmati rice, chicken, onions, tomatoes, spices, saffron, ghee, mint, coriander', 'Protein: 32g, Carbs: 92g, Fat: 30g'),
('Chicken Tikka Biryani', 'Biryani with tandoori-style chicken tikka pieces for a unique smoky flavor.', 14.99, 'images/dish-dinner-4.png', 'dinner', 920, 45, FALSE, 'Basmati rice, chicken tikka, onions, tomatoes, spices, saffron, ghee', 'Protein: 35g, Carbs: 95g, Fat: 32g'),
('Veg Pulao', 'Fragrant rice cooked with fresh vegetables and mild spices. Light and healthy dinner option.', 7.99, 'images/dish-dinner-5.png', 'dinner', 580, 25, FALSE, 'Basmati rice, mixed vegetables, onions, spices, ghee, mint', 'Protein: 12g, Carbs: 78g, Fat: 20g'),
('Chicken Fried Rice', 'Stir-fried rice with tender chicken pieces, vegetables, and aromatic spices.', 9.99, 'images/dish-dinner-6.png', 'dinner', 680, 20, FALSE, 'Basmati rice, chicken, mixed vegetables, soy sauce, spices, oil', 'Protein: 25g, Carbs: 82g, Fat: 22g'),

-- Desserts
('Gulab Jamun', 'Soft and spongy milk solids dumplings soaked in sugar syrup. Traditional Pakistani dessert.', 3.99, 'images/sweet-donut-1.png', 'desserts', 280, 15, FALSE, 'Milk solids, flour, sugar, cardamom, rose water, ghee', 'Protein: 6g, Carbs: 45g, Fat: 12g'),
('Rasgulla', 'Soft cottage cheese balls soaked in light sugar syrup. Refreshing and light dessert.', 3.49, 'images/sweet-donut-2.png', 'desserts', 220, 12, FALSE, 'Cottage cheese, sugar, cardamom, rose water', 'Protein: 8g, Carbs: 38g, Fat: 8g'),
('Kheer', 'Creamy rice pudding cooked with milk, sugar, and aromatic spices. Rich and comforting.', 4.99, 'images/sweet-donut-3.png', 'desserts', 380, 30, FALSE, 'Rice, milk, sugar, cardamom, saffron, nuts', 'Protein: 12g, Carbs: 52g, Fat: 18g'),

-- Beverages
('Karak Chai', 'Strong black tea with cardamom, ginger, and milk. Our signature beverage.', 2.49, 'images/coffee-1.png', 'beverages', 120, 5, TRUE, 'Black tea, cardamom, ginger, milk, sugar', 'Protein: 4g, Carbs: 18g, Fat: 6g'),
('Masala Chai', 'Traditional spiced tea with aromatic spices and milk. Perfect accompaniment to any meal.', 2.99, 'images/coffee-2.png', 'beverages', 140, 8, FALSE, 'Black tea, cardamom, cinnamon, ginger, cloves, milk, sugar', 'Protein: 4g, Carbs: 20g, Fat: 6g'),
('Lassi', 'Refreshing yogurt-based drink with sugar and cardamom. Cooling and nutritious.', 3.49, 'images/coffee-3.png', 'beverages', 180, 5, FALSE, 'Yogurt, sugar, cardamom, rose water, ice', 'Protein: 8g, Carbs: 25g, Fat: 4g');

-- Create testimonials table for reviews
CREATE TABLE testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    customer_email VARCHAR(255),
    review_text TEXT NOT NULL,
    rating INT NOT NULL CHECK (rating >= 1 AND rating <= 5),
    menu_item_id INT,
    is_approved BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (menu_item_id) REFERENCES menu_items(id) ON DELETE SET NULL
);

-- Insert sample testimonials
INSERT INTO testimonials (customer_name, customer_email, review_text, rating, menu_item_id) VALUES
('Ahmed Khan', 'ahmed@email.com', 'The Chicken Biryani is absolutely amazing! The flavors are perfectly balanced and the rice is so fragrant. Highly recommended!', 5, 7),
('Sarah Johnson', 'sarah@email.com', 'Best biryani I have ever tasted! The chicken is tender and the spices are just right. Will definitely order again.', 5, 7),
('Mohammed Ali', 'mohammed@email.com', 'The Karak Chai is perfect - strong and flavorful. Goes great with the breakfast items.', 5, 19),
('Priya Patel', 'priya@email.com', 'Love the vegetarian options! The Veg Biryani is delicious and the portion size is generous.', 4, 9),
('David Wilson', 'david@email.com', 'Excellent service and amazing food quality. The Mutton Biryani is a must-try!', 5, 8); 