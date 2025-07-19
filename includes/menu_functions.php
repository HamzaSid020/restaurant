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
        
        $sql = "SELECT * FROM menu_items WHERE is_available = 1";
        $params = [];
        $types = "";
        
        if ($category) {
            $sql .= " AND category = ?";
            $params[] = $category;
            $types .= "s";
        }
        
        $sql .= " ORDER BY is_featured DESC, name ASC";
        
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
        
        $sql = "SELECT * FROM menu_items WHERE is_featured = 1 AND is_available = 1 ORDER BY name ASC LIMIT ?";
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
        
        $sql = "SELECT * FROM menu_items WHERE id = ? AND is_available = 1";
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
        
        $sql = "SELECT DISTINCT category FROM menu_items WHERE is_available = 1 ORDER BY category ASC";
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
 * Get testimonials for a specific menu item
 */
function getTestimonialsByMenuItem($menuItemId, $limit = 5) {
    try {
        $db = Database::getInstance();
        
        $sql = "SELECT * FROM testimonials WHERE menu_item_id = ? AND is_approved = 1 ORDER BY created_at DESC LIMIT ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ii", $menuItemId, $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $testimonials = [];
        while ($row = $result->fetch_assoc()) {
            $testimonials[] = $row;
        }
        
        return $testimonials;
        
    } catch (Exception $e) {
        error_log("Error fetching testimonials: " . $e->getMessage());
        return [];
    }
}

/**
 * Get average rating for a menu item
 */
function getAverageRating($menuItemId) {
    try {
        $db = Database::getInstance();
        
        $sql = "SELECT AVG(rating) as avg_rating, COUNT(*) as total_reviews FROM testimonials WHERE menu_item_id = ? AND is_approved = 1";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $menuItemId);
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result->fetch_assoc();
        
    } catch (Exception $e) {
        error_log("Error fetching average rating: " . $e->getMessage());
        return ['avg_rating' => 0, 'total_reviews' => 0];
    }
}

/**
 * Display menu item HTML with modern styling
 */
function displayMenuItem($item) {
    $rating = getAverageRating($item['id']);
    $avgRating = round($rating['avg_rating'], 1);
    $totalReviews = $rating['total_reviews'];
    
    $html = '<div class="grid" data-aos="fade-up">';
    $html .= '<div class="dish-list modern-dish-card">';
    $html .= '<a href="menu-detail.php?id=' . $item['id'] . '">';
    $html .= '<img src="' . htmlspecialchars($item['image']) . '" class="img-fluid" alt="' . htmlspecialchars($item['name']) . '" />';
    if ($item['is_featured']) {
        $html .= '<div class="featured-badge"><i class="fa fa-star"></i> Featured</div>';
    }
    $html .= '</a>';
    $html .= '<div class="dish-list-text">';
    $html .= '<h4><a href="menu-detail.php?id=' . $item['id'] . '">' . htmlspecialchars($item['name']) . '</a></h4>';
    $html .= '<div class="price-rating">';
    $html .= '<h5>$' . number_format($item['price'], 2) . '</h5>';
    if ($avgRating > 0) {
        $html .= '<div class="star-rating-small">';
        for ($i = 1; $i <= 5; $i++) {
            $starClass = ($i <= $avgRating) ? 'fa-star' : 'fa-star-o';
            $html .= '<i class="fa ' . $starClass . '"></i>';
        }
        $html .= '<span class="rating-text">(' . $totalReviews . ')</span>';
        $html .= '</div>';
    }
    $html .= '</div>';
    $html .= '<p>' . htmlspecialchars($item['description']) . '</p>';
    if ($item['calories'] > 0) {
        $html .= '<div class="calories-info">' . $item['calories'] . ' calories</div>';
    }
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
        $html .= displayMenuItem($item);
        $html .= '</div>'; // end col
    }
    
    $html .= '</div>'; // end row
    
    return $html;
}

/**
 * Display testimonials for a menu item
 */
function displayTestimonials($menuItemId) {
    $testimonials = getTestimonialsByMenuItem($menuItemId, 5);
    
    if (empty($testimonials)) {
        return '<p>No reviews available yet. Be the first to review this dish!</p>';
    }
    
    $html = '';
    foreach ($testimonials as $testimonial) {
        $html .= '<div class="review-item">';
        $html .= '<div class="review-header">';
        $html .= '<div class="reviewer-name">' . htmlspecialchars($testimonial['customer_name']) . '</div>';
        $html .= '<div class="star-rating">';
        for ($i = 1; $i <= 5; $i++) {
            $starClass = ($i <= $testimonial['rating']) ? 'fa-star' : 'fa-star-o';
            $html .= '<i class="fa ' . $starClass . '"></i>';
        }
        $html .= '</div>';
        $html .= '</div>';
        $html .= '<div class="review-text">' . htmlspecialchars($testimonial['review_text']) . '</div>';
        $html .= '<div class="review-date">' . date('M d, Y', strtotime($testimonial['created_at'])) . '</div>';
        $html .= '</div>';
    }
    
    return $html;
}
?> 