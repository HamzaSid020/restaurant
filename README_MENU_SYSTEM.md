# Menu System Documentation

## Overview
This restaurant website now uses a **static array-based menu system** that eliminates repetitive HTML code and makes menu management much easier.

## How It Works

### 1. Menu Data Storage
All menu items are stored in `includes/menu_data.php` as PHP arrays:

```php
$menu_items = [
    'breakfast' => [
        [
            'id' => 1,
            'name' => 'Breakfast-1',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-breakfast-1.png',
            'category' => 'breakfast'
        ],
        // ... more items
    ],
    'lunch' => [
        // lunch items
    ],
    'dinner' => [
        // dinner items
    ]
];
```

### 2. Helper Functions
The `includes/menu_functions.php` file contains functions to:
- `renderMenuItem($item)` - Render a single menu item
- `renderMenuCategory($category)` - Render all items in a category
- `renderMenuGrid($category)` - Render items in grid format
- `getMenuItemDetails($id)` - Get details for menu-detail.php

### 3. Updated Pages
- **menu-list.php** - Now uses `renderMenuCategory()` to display items
- **menu-grid.php** - Now uses `renderMenuGrid()` to display items
- **menu-detail.php** - Now dynamically loads item details based on URL parameter

## Benefits

### ✅ **No More Repetitive Code**
Before: 300+ lines of repetitive HTML for each menu item
After: 3 lines of PHP code per category

### ✅ **Easy to Add New Items**
Just add a new array item to `menu_data.php`:

```php
[
    'id' => 21,
    'name' => 'New Dish',
    'description' => 'Delicious new dish',
    'price' => 18.99,
    'image' => 'images/new-dish.png',
    'category' => 'lunch'
]
```

### ✅ **Consistent Structure**
All menu items follow the same data structure, ensuring consistency.

### ✅ **Easy to Modify**
Change prices, descriptions, or images in one place.

## Admin Interface

Access the admin panel at: `admin/menu-manager.php`

Features:
- View all menu items organized by category
- Add new menu items (form interface)
- Quick links to view individual items
- Item count per category

## File Structure

```
├── includes/
│   ├── menu_data.php          # Menu items data
│   └── menu_functions.php     # Helper functions
├── menu-list.php              # Menu list page
├── menu-grid.php              # Menu grid page
├── menu-detail.php            # Menu detail page
└── admin/
    └── menu-manager.php       # Admin interface
```

## How to Add a New Menu Item

### Method 1: Edit the Data File
1. Open `includes/menu_data.php`
2. Add a new array item to the appropriate category
3. Save the file

### Method 2: Use Admin Interface
1. Go to `admin/menu-manager.php`
2. Fill out the "Add New Menu Item" form
3. Submit (currently shows preview - would save to database in production)

## Example: Adding a New Breakfast Item

```php
// In includes/menu_data.php, add to breakfast array:
[
    'id' => 22,
    'name' => 'Avocado Toast',
    'description' => 'Fresh avocado on artisan bread with sea salt',
    'price' => 14.99,
    'image' => 'images/avocado-toast.png',
    'category' => 'breakfast'
]
```

The item will automatically appear on:
- menu-list.php (breakfast tab)
- menu-grid.php (breakfast tab)
- menu-detail.php (when accessed with ?id=22)

## Future Enhancements

### Database Integration
To move to a database system:
1. Create the database table (see `database/menu_items.sql`)
2. Replace array data with database queries
3. Update helper functions to use database

### Image Management
- Add image upload functionality
- Implement image optimization
- Add multiple images per item

### Advanced Features
- Menu item availability toggle
- Seasonal menu items
- Nutritional information
- Allergen warnings
- Popular items highlighting

## Troubleshooting

### Item Not Showing
- Check that the category name matches exactly (breakfast, lunch, dinner)
- Verify the ID is unique
- Ensure all required fields are present

### Image Not Loading
- Check the image path is correct
- Verify the image file exists in the images/ directory
- Ensure proper file permissions

### Admin Page Not Working
- Check that `includes/menu_data.php` is accessible
- Verify PHP is enabled on your server
- Check for any PHP errors in the logs 