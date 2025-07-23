<?php
// Set page-specific variables
$page_title = "ChachuKiBiryani - Authentic Indian Cuisine";
$page_description = "Experience the authentic taste of Indian cuisine at ChachuKiBiryani. Fresh ingredients, traditional recipes, and exceptional service.";

// Include database connection
require_once 'includes/db_connect.php';

// Get featured menu items for the homepage
try {
    $featured_items = getFeaturedMenuItems();
    $all_categories = getMultipleRows("SELECT DISTINCT category FROM menu_items WHERE is_available = TRUE ORDER BY category");
} catch (Exception $e) {
    $featured_items = [];
    $all_categories = [];
    error_log("Error fetching menu items: " . $e->getMessage());
}

// Include header
include 'includes/header.php';
?>

<!-- slider section -->
<section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                                <h1>
                                    Authentic Indian Biryani
                                </h1>
                                <p>
                                    Experience the rich flavors and aromatic spices of traditional Indian cuisine. Our biryani is prepared with the finest ingredients and authentic recipes passed down through generations.
                                </p>
                                <div class="btn-box">
                                    <a href="menu.php" class="btn1">
                                        Order Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                                <h1>
                                    Fresh & Delicious
                                </h1>
                                <p>
                                    Every dish is prepared fresh to order using the highest quality ingredients. From our signature biryani to our flavorful curries, every bite is a culinary delight.
                                </p>
                                <div class="btn-box">
                                    <a href="menu.php" class="btn1">
                                        Explore Menu
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                                <h1>
                                    Fast Delivery
                                </h1>
                                <p>
                                    Enjoy our delicious food at home with our fast and reliable delivery service. Hot, fresh, and delivered right to your doorstep.
                                </p>
                                <div class="btn-box">
                                    <a href="book.php" class="btn1">
                                        Book Table
                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</section>
<!-- end slider section -->

<!-- offer section -->
<section class="offer_section layout_padding-bottom">
    <div class="offer_container">
        <div class="container ">
            <div class="row">
                <div class="col-md-6  ">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/o1.jpg" alt="Special Offer">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Biryani Special
                            </h5>
                            <h6>
                                <span>20%</span> Off
                            </h6>
                            <a href="menu.php">
                                Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
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
                <div class="col-md-6  ">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/o2.jpg" alt="Weekend Special">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Weekend Special
                            </h5>
                            <h6>
                                <span>15%</span> Off
                            </h6>
                            <a href="menu.php">
                                Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
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
    </div>
</section>
<!-- end offer section -->

<!-- food section -->
<section class="food_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our Featured Menu
            </h2>
        </div>

        <?php if (!empty($all_categories)): ?>
        <ul class="filters_menu">
            <li class="active" data-filter="*">All</li>
            <?php foreach ($all_categories as $category): ?>
            <li data-filter=".<?php echo strtolower(str_replace(' ', '-', $category['category'])); ?>">
                <?php echo htmlspecialchars($category['category']); ?>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <div class="filters-content">
            <div class="row grid">
                <?php if (!empty($featured_items)): ?>
                    <?php foreach ($featured_items as $item): ?>
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
                    <div class="col-sm-6 col-lg-4 all biryani">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <img src="images/f1.png" alt="Chicken Biryani">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Chicken Biryani
                                    </h5>
                                    <p>
                                        Aromatic basmati rice cooked with tender chicken, fragrant spices, and herbs. A traditional Indian delicacy.
                                    </p>
                                    <div class="options">
                                        <h6>
                                            $18.99
                                        </h6>
                                        <a href="menu.php">
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
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end food section -->

<!-- about section -->
<section class="about_section layout_padding">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                    <img src="images/about-img.png" alt="About ChachuKiBiryani">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            We Are ChachuKiBiryani
                        </h2>
                    </div>
                    <p>
                        Welcome to ChachuKiBiryani, where tradition meets taste. We specialize in authentic Indian cuisine, with our signature biryani being the star of our menu. Our recipes have been passed down through generations, ensuring that every dish carries the authentic flavors of India.
                    </p>
                    <p>
                        We use only the finest ingredients, fresh spices, and traditional cooking methods to bring you the most delicious and authentic Indian food experience. Whether you're dining in or ordering for delivery, we guarantee a memorable culinary journey.
                    </p>
                    <a href="about.php">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about section -->

<!-- client section -->
<section class="client_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container heading_center psudo_white_primary mb_45">
            <h2>
                What Says Our Customers
            </h2>
        </div>
        <div class="carousel-wrap row ">
            <div class="col owl-carousel client_owl-carousel">
                <div class="item">
                    <div class="box">
                        <div class="detail-box">
                            <p>
                                The biryani here is absolutely amazing! The flavors are authentic and the portion size is generous. Highly recommended!
                            </p>
                            <h6>
                                Sarah Johnson
                            </h6>
                            <p>
                                Regular Customer
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="detail-box">
                            <p>
                                Best Indian food in town! The spices are perfectly balanced and the service is excellent. Will definitely come back!
                            </p>
                            <h6>
                                Michael Chen
                            </h6>
                            <p>
                                Food Enthusiast
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="detail-box">
                            <p>
                                Authentic taste that reminds me of home. The chicken biryani is my favorite. Great value for money!
                            </p>
                            <h6>
                                Priya Patel
                            </h6>
                            <p>
                                Local Resident
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end client section -->

<?php
// Include footer
include 'includes/footer.php';
?> 