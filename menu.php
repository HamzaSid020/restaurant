<?php
// Set page-specific variables
$page_title = "Menu - ChachuKiBiryani";
$page_description = "Explore our delicious menu featuring authentic Indian cuisine, biryani, curries, and more. Fresh ingredients and traditional recipes.";

// Include database connection
require_once 'includes/db_connect.php';

// Get all menu items and categories
try {
    $all_items = getAllMenuItems();
    $categories = getMultipleRows("SELECT DISTINCT category FROM menu_items WHERE is_available = TRUE ORDER BY category");
} catch (Exception $e) {
    $all_items = [];
    $categories = [];
    error_log("Error fetching menu items: " . $e->getMessage());
}

// Include header
include 'includes/header.php';
?>

<!-- food section -->
<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our Menu
            </h2>
        </div>

        <?php if (!empty($categories)): ?>
        <ul class="filters_menu">
            <li class="active" data-filter="*">All</li>
            <?php foreach ($categories as $category): ?>
            <li data-filter=".<?php echo strtolower(str_replace(' ', '-', $category['category'])); ?>">
                <?php echo htmlspecialchars($category['category']); ?>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <div class="filters-content">
            <div class="row grid">
                <?php if (!empty($all_items)): ?>
                    <?php foreach ($all_items as $item): ?>
                    <div class="col-sm-6 col-lg-4 all <?php echo strtolower(str_replace(' ', '-', $item['category'])); ?>">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <?php if (!empty($item['image_url'])): ?>
                                        <img src="<?php echo htmlspecialchars($item['image_url']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                                    <?php else: ?>
                                        <img src="images/f1.png" alt="<?php echo htmlspecialchars($item['name']); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        <?php echo htmlspecialchars($item['name']); ?>
                                    </h5>
                                    <p>
                                        <?php echo htmlspecialchars($item['description']); ?>
                                    </p>
                                    <div class="options">
                                        <h6>
                                            $<?php echo number_format($item['price'], 2); ?>
                                        </h6>
                                        <a href="javascript:void(0)" onclick="addToCart(<?php echo $item['id']; ?>, '<?php echo addslashes($item['name']); ?>', <?php echo $item['price']; ?>)" class="add-to-cart-btn">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <!-- Fallback content if no items in database -->
                    <div class="col-12 text-center">
                        <p>No menu items available at the moment. Please check back later!</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end food section -->

<?php
// Include footer
include 'includes/footer.php';
?> 