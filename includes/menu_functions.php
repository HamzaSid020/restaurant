<?php
/**
 * Menu Functions for ChachuKiBiryani
 * Functions to fetch and display menu items from database
 */

require_once __DIR__ . '/../database/config.php';

/**
 * Get menu items by category
 */
function getMenuItemsByCategory($category = null, $limit = null) {
    try {
        $db = Database::getInstance();
        
        $sql = "SELECT * FROM menu_items";
        $params = [];
        $types = "";
        
        if ($category) {
            $sql .= " WHERE category = ?";
            $params[] = $category;
            $types .= "s";
        }
        
        $sql .= " ORDER BY name ASC";
        
        if ($limit) {
            $sql .= " LIMIT ?";
            $params[] = $limit;
            $types .= "i";
        }
        
        $stmt = $db->prepare($sql);
        
        if (!empty($params)) {
            $stmt->bind_param($types, ...$params);
        }
        
        $stmt->execute();
        $result = $stmt->get_result();
        
        $items = [];
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
        
        return $items;
        
    } catch (Exception $e) {
        error_log("Error fetching menu items: " . $e->getMessage());
        return [];
    }
}

/**
 * Get featured menu items
 */
function getFeaturedMenuItems($limit = 6) {
    try {
        $db = Database::getInstance();
        
        $sql = "SELECT * FROM menu_items WHERE is_featured = 1 ORDER BY name ASC LIMIT ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $items = [];
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
        
        return $items;
        
    } catch (Exception $e) {
        error_log("Error fetching featured menu items: " . $e->getMessage());
        return [];
    }
}

/**
 * Get menu item by ID
 */
function getMenuItemById($id) {
    try {
        $db = Database::getInstance();
        
        $sql = "SELECT * FROM menu_items WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result->fetch_assoc();
        
    } catch (Exception $e) {
        error_log("Error fetching menu item: " . $e->getMessage());
        return null;
    }
}

/**
 * Get all categories
 */
function getMenuCategories() {
    try {
        $db = Database::getInstance();
        
        $sql = "SELECT DISTINCT category FROM menu_items ORDER BY category ASC";
        $result = $db->query($sql);
        
        $categories = [];
        while ($row = $result->fetch_assoc()) {
            $categories[] = $row['category'];
        }
        
        return $categories;
        
    } catch (Exception $e) {
        error_log("Error fetching categories: " . $e->getMessage());
        return [];
    }
}

/**
 * Display menu item HTML
 */
function displayMenuItem($item) {
    $html = '<div class="grid">';
    $html .= '<div class="dish-list">';
    $html .= '<a href="menu-detail.php?id=' . $item['id'] . '">';
    $html .= '<img src="' . htmlspecialchars($item['image']) . '" class="img-fluid" alt="' . htmlspecialchars($item['name']) . '" />';
    $html .= '</a>';
    $html .= '<div class="dish-list-text">';
    $html .= '<h4><a href="menu-detail.php?id=' . $item['id'] . '">' . htmlspecialchars($item['name']) . '</a></h4>';
    $html .= '<h5>$' . number_format($item['price'], 2) . '</h5>';
    $html .= '<p>' . htmlspecialchars($item['description']) . '</p>';
    $html .= '<button class="btn add-to-cart" data-id="' . $item['id'] . '" data-name="' . htmlspecialchars($item['name']) . '" data-price="' . $item['price'] . '">';
    $html .= 'Add to cart<span><i class="fa fa-shopping-cart"></i></span>';
    $html .= '</button>';
    $html .= '</div>'; // end dish-list-text
    $html .= '</div>'; // end dish-list
    $html .= '</div>'; // end grid
    
    return $html;
}

/**
 * Display menu items by category in carousel format
 */
function displayMenuCarousel($category, $itemsPerSlide = 2) {
    $items = getMenuItemsByCategory($category);
    
    if (empty($items)) {
        return '<p>No items found in this category.</p>';
    }
    
    $html = '<div class="owl-carousel owl-theme owl-menu">';
    
    // Group items into slides
    $slides = array_chunk($items, $itemsPerSlide);
    
    foreach ($slides as $slide) {
        $html .= '<div>';
        foreach ($slide as $item) {
            $html .= displayMenuItem($item);
        }
        $html .= '</div>';
    }
    
    $html .= '</div>';
    
    return $html;
}

/**
 * Display featured menu items
 */
function displayFeaturedMenu() {
    $items = getFeaturedMenuItems(6);
    
    if (empty($items)) {
        return '<p>No featured items available.</p>';
    }
    
    $html = '<div class="owl-carousel owl-theme" id="owl-featured-menu">';
    
    foreach ($items as $item) {
        $html .= '<div class="item">';
        $html .= displayMenuItem($item);
        $html .= '</div>';
    }
    
    $html .= '</div>';
    
    return $html;
}

/**
 * Display menu categories as tabs
 */
function displayMenuTabs() {
    $categories = getMenuCategories();
    
    if (empty($categories)) {
        return '<p>No categories available.</p>';
    }
    
    $html = '<ul class="nav nav-tabs justify-content-center">';
    
    foreach ($categories as $index => $category) {
        $active = ($index === 0) ? ' active' : '';
        $categoryId = str_replace(' ', '-', $category) . '-dishes';
        
        $html .= '<li class="nav-item">';
        $html .= '<a class="nav-link' . $active . '" href="#' . $categoryId . '" data-bs-toggle="tab">';
        $html .= ucfirst($category);
        $html .= '</a>';
        $html .= '</li>';
    }
    
    $html .= '</ul>';
    
    return $html;
}

/**
 * Display menu content for all categories
 */
function displayMenuContent() {
    $categories = getMenuCategories();
    
    if (empty($categories)) {
        return '<p>No menu content available.</p>';
    }
    
    $html = '';
    
    foreach ($categories as $index => $category) {
        $active = ($index === 0) ? ' active' : '';
        $categoryId = str_replace(' ', '-', $category) . '-dishes';
        
        $html .= '<div id="' . $categoryId . '" class="tab-pane' . $active . '">';
        $html .= displayMenuGrid($category);
        $html .= '</div>';
    }
    
    return $html;
}

/**
 * Display menu items in grid format
 */
function displayMenuGrid($category) {
    $items = getMenuItemsByCategory($category);
    
    if (empty($items)) {
        return '<p>No items found in this category.</p>';
    }
    
    $html = '<div class="row">';
    
    foreach ($items as $item) {
        $html .= '<div class="col-lg-3 col-md-4 col-sm-6 mb-4">';
        $html .= '<div class="dish-list">';
        $html .= '<a href="menu-detail.php?id=' . $item['id'] . '">';
        $html .= '<img src="' . htmlspecialchars($item['image']) . '" class="img-fluid" alt="' . htmlspecialchars($item['name']) . '" />';
        $html .= '</a>';
        $html .= '<div class="dish-list-text">';
        $html .= '<h4><a href="menu-detail.php?id=' . $item['id'] . '">' . htmlspecialchars($item['name']) . '</a></h4>';
        $html .= '<h5>$' . number_format($item['price'], 2) . '</h5>';
        $html .= '<p>' . htmlspecialchars($item['description']) . '</p>';
        $html .= '<button class="btn add-to-cart" data-id="' . $item['id'] . '" data-name="' . htmlspecialchars($item['name']) . '" data-price="' . $item['price'] . '">';
        $html .= 'Add to cart<span><i class="fa fa-shopping-cart"></i></span>';
        $html .= '</button>';
        $html .= '</div>'; // end dish-list-text
        $html .= '</div>'; // end dish-list
        $html .= '</div>'; // end col
    }
    
    $html .= '</div>'; // end row
    
    return $html;
}
?> 