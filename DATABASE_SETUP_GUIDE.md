# Database Setup Guide for ChachuKiBiryani

## Overview
This guide explains how to connect your menu data from the database and link it with the corresponding images. The system has been updated to use a database-driven approach instead of static data.

## What's Been Updated

### 1. Database Structure
- **menu_items table**: Stores all menu items with enhanced fields
- **testimonials table**: Stores customer reviews and ratings
- **Enhanced fields**: calories, preparation time, featured status, ingredients, etc.

### 2. Updated Files
- `database/menu_items.sql` - Complete database schema with sample data
- `includes/menu_functions.php` - Enhanced functions for database operations
- `index.php` - Now displays featured items from database
- `menu-grid.php` - Shows all menu items from database
- `menu-detail.php` - Displays individual item details with reviews
- `setup_database.php` - Automated setup script

## Step-by-Step Setup

### Step 1: Run the Database Setup
1. Open your web browser
2. Navigate to: `http://yourdomain.com/setup_database.php`
3. This will automatically:
   - Create the necessary database tables
   - Insert sample menu items
   - Insert sample testimonials
   - Verify the setup

### Step 2: Upload Your Images
1. Upload your menu item images to the `images/` folder
2. Make sure the image paths in the database match your actual image files
3. Common image formats: `.jpg`, `.png`, `.webp`

### Step 3: Update Image Paths (if needed)
If your image paths don't match the database, you can update them:

```sql
-- Example: Update image path for a specific item
UPDATE menu_items SET image = 'images/your-new-image.jpg' WHERE id = 1;

-- Example: Update all breakfast items
UPDATE menu_items SET image = REPLACE(image, 'old-path', 'new-path') WHERE category = 'breakfast';
```

## Database Schema

### menu_items Table
```sql
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
```

### testimonials Table
```sql
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
```

## How Images Are Connected

### 1. Image Storage
- Images are stored in the `images/` folder
- Image paths are stored in the `image` field of the `menu_items` table
- Example: `images/dish-breakfast-1.png`

### 2. Image Display
The system automatically displays images using the database path:

```php
<img src="<?php echo htmlspecialchars($item['image']); ?>" 
     alt="<?php echo htmlspecialchars($item['name']); ?>">
```

### 3. Image Categories
Images are organized by category:
- **Breakfast**: `images/dish-breakfast-*.png`
- **Lunch**: `images/dish-lunch-*.png`
- **Dinner**: `images/dish-dinner-*.png`
- **Desserts**: `images/sweet-*.png`
- **Beverages**: `images/coffee-*.png`

## Adding New Menu Items

### Method 1: Direct Database Insert
```sql
INSERT INTO menu_items (name, description, price, image, category, calories, preparation_time, is_featured) 
VALUES ('New Dish', 'Description here', 12.99, 'images/new-dish.jpg', 'lunch', 450, 20, TRUE);
```

### Method 2: Using PHP (for admin panel)
```php
require_once 'includes/menu_functions.php';

$newItem = [
    'name' => 'New Dish',
    'description' => 'Description here',
    'price' => 12.99,
    'image' => 'images/new-dish.jpg',
    'category' => 'lunch',
    'calories' => 450,
    'preparation_time' => 20,
    'is_featured' => true
];

// You can create a function to insert items
```

## Key Features

### 1. Dynamic Menu Display
- Menu items are loaded from the database
- Categories are automatically generated
- Featured items are highlighted
- Ratings and reviews are displayed

### 2. Image Management
- Images are linked via database paths
- Automatic alt text generation
- Responsive image display
- Featured badges for special items

### 3. Review System
- Customer reviews stored in database
- Star ratings (1-5 stars)
- Average rating calculation
- Review approval system

### 4. Search and Filter
- Category-based filtering
- Featured item highlighting
- Price and calorie information
- Preparation time details

## Troubleshooting

### Common Issues

1. **Images not displaying**
   - Check if image files exist in the specified path
   - Verify file permissions (readable by web server)
   - Check image path in database

2. **Database connection errors**
   - Verify database credentials in `database/config.php`
   - Check if database server is running
   - Ensure database exists

3. **Menu items not showing**
   - Check if `is_available` is set to TRUE
   - Verify category names match exactly
   - Check for SQL errors in error logs

### Debugging
Add this to your PHP files for debugging:
```php
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

## File Structure
```
ChachuKiBiryani/
├── database/
│   ├── config.php              # Database configuration
│   ├── menu_items.sql          # Database schema and sample data
│   └── database_functions.php  # Database helper functions
├── includes/
│   ├── menu_functions.php      # Menu display functions
│   └── ...
├── images/                     # Menu item images
│   ├── dish-breakfast-1.png
│   ├── dish-lunch-1.png
│   └── ...
├── index.php                   # Homepage with featured menu
├── menu-grid.php              # All menu items
├── menu-detail.php            # Individual item details
├── setup_database.php         # Database setup script
└── DATABASE_SETUP_GUIDE.md    # This guide
```

## Next Steps

1. **Run the setup script**: Visit `setup_database.php` in your browser
2. **Upload images**: Add your menu item images to the `images/` folder
3. **Test the system**: Visit your homepage and menu pages
4. **Add more items**: Use the database or create an admin panel
5. **Customize**: Modify the styling and layout as needed

## Support

If you encounter any issues:
1. Check the error logs
2. Verify database connectivity
3. Ensure all files are properly uploaded
4. Check file permissions
5. Verify image paths and file existence

The system is now fully database-driven and will automatically display your menu items with their corresponding images! 