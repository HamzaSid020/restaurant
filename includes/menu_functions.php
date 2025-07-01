<?php
// Include the menu data
require_once 'menu_data.php';

/**
 * Render a single menu item
 * @param array $item Menu item data
 * @return string HTML for the menu item
 */
function renderMenuItem($item) {
    $html = '<li>';
    $html .= '<div class="dish-list">';
    $html .= '<a href="menu-detail.php?id=' . $item['id'] . '">';
    $html .= '<img src="' . $item['image'] . '" class="img-fluid" alt="' . $item['name'] . '" />';
    $html .= '</a>';
    $html .= '<div class="dish-list-text">';
    $html .= '<h4><a href="menu-detail.php?id=' . $item['id'] . '">' . $item['name'] . '</a></h4>';
    $html .= '<h5>$' . number_format($item['price'], 2) . '</h5>';
    $html .= '<p>' . $item['description'] . '</p>';
    $html .= '<button class="btn" data-item-id="' . $item['id'] . '">Add to cart<span><i class="fa fa-shopping-cart"></i></span></button>';
    $html .= '</div><!-- end dish-list-text -->';
    $html .= '</div><!-- end dish-list -->';
    $html .= '</li>';
    
    return $html;
}

/**
 * Render all menu items for a specific category
 * @param string $category Category name (breakfast, lunch, dinner)
 * @return string HTML for all menu items in the category
 */
function renderMenuCategory($category) {
    $items = getMenuItemsByCategory($category);
    $html = '<ul class="list-unstyled">';
    
    foreach ($items as $item) {
        $html .= renderMenuItem($item);
    }
    
    $html .= '</ul>';
    return $html;
}

/**
 * Render menu items in grid format
 * @param string $category Category name
 * @return string HTML for grid layout
 */
function renderMenuGrid($category) {
    $items = getMenuItemsByCategory($category);
    $html = '';
    
    foreach ($items as $item) {
        $html .= '<div class="grid">';
        $html .= '<div class="dish-list">';
        $html .= '<a href="menu-detail.php?id=' . $item['id'] . '">';
        $html .= '<img src="' . $item['image'] . '" class="img-fluid" alt="' . $item['name'] . '" />';
        $html .= '</a>';
        $html .= '<div class="dish-list-text">';
        $html .= '<h4><a href="menu-detail.php?id=' . $item['id'] . '">' . $item['name'] . '</a></h4>';
        $html .= '<h5>$' . number_format($item['price'], 2) . '</h5>';
        $html .= '<p>' . $item['description'] . '</p>';
        $html .= '<button class="btn" data-item-id="' . $item['id'] . '">Add to cart<span><i class="fa fa-shopping-cart"></i></span></button>';
        $html .= '</div><!-- end dish-list-text -->';
        $html .= '</div><!-- end dish-list -->';
        $html .= '</div><!-- end grid -->';
    }
    
    return $html;
}

/**
 * Get menu item details for menu-detail.php
 * @param int $id Menu item ID
 * @return array|null Menu item data or null if not found
 */
function getMenuItemDetails($id) {
    return getMenuItemById($id);
}
?> 