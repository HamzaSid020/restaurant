<?php
// Menu data array - all menu items organized by category
$menu_items = [
    'breakfast' => [
        [
            'id' => 1,
            'name' => 'Special Breakfast',
            'description' => 'Anda Paratha + Karak Chai',
            'price' => 5.00,
            'image' => 'images/andaparathachai.jpg',
            'category' => 'breakfast'
        ],
    //     [
    //         'id' => 2,
    //         'name' => 'Breakfast-2',
    //         'description' => 'Lorem ipsum, Dolor',
    //         'price' => 45.00,
    //         'image' => 'images/dish-breakfast-2.png',
    //         'category' => 'breakfast'
    //     ],
    //     [
    //         'id' => 3,
    //         'name' => 'Breakfast-3',
    //         'description' => 'Lorem ipsum, Dolor',
    //         'price' => 45.00,
    //         'image' => 'images/dish-breakfast-3.png',
    //         'category' => 'breakfast'
    //     ],
    //     [
    //         'id' => 4,
    //         'name' => 'Breakfast-4',
    //         'description' => 'Lorem ipsum, Dolor',
    //         'price' => 45.00,
    //         'image' => 'images/dish-breakfast-4.png',
    //         'category' => 'breakfast'
    //     ],
    //     [
    //         'id' => 5,
    //         'name' => 'Breakfast-5',
    //         'description' => 'Lorem ipsum, Dolor',
    //         'price' => 45.00,
    //         'image' => 'images/dish-breakfast-5.png',
    //         'category' => 'breakfast'
    //     ],
    //     [
    //         'id' => 6,
    //         'name' => 'Breakfast-6',
    //         'description' => 'Lorem ipsum, Dolor',
    //         'price' => 45.00,
    //         'image' => 'images/dish-breakfast-6.png',
    //         'category' => 'breakfast'
    //     ],
    //     [
    //         'id' => 19,
    //         'name' => 'Pancakes with Maple Syrup',
    //         'description' => 'Fluffy pancakes served with real maple syrup and butter',
    //         'price' => 12.99,
    //         'image' => 'images/dish-breakfast-1.png',
    //         'category' => 'breakfast'
    //     ],
    //     [
    //         'id' => 20,
    //         'name' => 'Eggs Benedict',
    //         'description' => 'Poached eggs on English muffin with hollandaise sauce',
    //         'price' => 15.99,
    //         'image' => 'images/dish-breakfast-2.png',
    //         'category' => 'breakfast'
    //     ]
    ],
    'lunch' => [
        [
            'id' => 7,
            'name' => 'Lunch-1',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-lunch-1.png',
            'category' => 'lunch'
        ],
        [
            'id' => 8,
            'name' => 'Lunch-2',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-lunch-2.png',
            'category' => 'lunch'
        ],
        [
            'id' => 9,
            'name' => 'Lunch-3',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-lunch-3.png',
            'category' => 'lunch'
        ],
        [
            'id' => 10,
            'name' => 'Lunch-4',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-lunch-4.png',
            'category' => 'lunch'
        ],
        [
            'id' => 11,
            'name' => 'Lunch-5',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-lunch-5.png',
            'category' => 'lunch'
        ],
        [
            'id' => 12,
            'name' => 'Lunch-6',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-lunch-6.png',
            'category' => 'lunch'
        ]
    ],
    'dinner' => [
        [
            'id' => 13,
            'name' => 'Dinner-1',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-dinner-1.png',
            'category' => 'dinner'
        ],
        [
            'id' => 14,
            'name' => 'Dinner-2',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-dinner-2.png',
            'category' => 'dinner'
        ],
        [
            'id' => 15,
            'name' => 'Dinner-3',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-dinner-3.png',
            'category' => 'dinner'
        ],
        [
            'id' => 16,
            'name' => 'Dinner-4',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-dinner-4.png',
            'category' => 'dinner'
        ],
        [
            'id' => 17,
            'name' => 'Dinner-5',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-dinner-5.png',
            'category' => 'dinner'
        ],
        [
            'id' => 18,
            'name' => 'Dinner-6',
            'description' => 'Lorem ipsum, Dolor',
            'price' => 45.00,
            'image' => 'images/dish-dinner-6.png',
            'category' => 'dinner'
        ]
    ]

        ];

// Helper function to get menu items by category
function getMenuItemsByCategory($category) {
    global $menu_items;
    return isset($menu_items[$category]) ? $menu_items[$category] : [];
}

// Helper function to get all menu items
function getAllMenuItems() {
    global $menu_items;
    $all_items = [];
    foreach ($menu_items as $category_items) {
        $all_items = array_merge($all_items, $category_items);
    }
    return $all_items;
}

// Helper function to get a single menu item by ID
function getMenuItemById($id) {
    $all_items = getAllMenuItems();
    foreach ($all_items as $item) {
        if ($item['id'] == $id) {
            return $item;
        }
    }
    return null;
}
?> 