<!doctype html>
<html lang="zxx">

<head>
    <title>Menu Detail</title>
    <?php include 'includes/head.php'; ?>
</head>

<body class="page-body">

    <!--====== LOADER =====-->
    <div class="loader"></div>

    <!--============ SIDE-NAV =============-->
    <?php include 'includes/side_nav.php'; ?>

    <!--============ SIDE-NAV-2 =============-->=
    <?php include 'includes/side_nav2.php'; ?>

    <!--=============== FULLSCR-NAV ==============-->
    <?php include 'includes/fullscreen_nav.php'; ?>

    <!--================ SHOPPING-CART ==============-->
    <?php include 'includes/shopping_cart.php'; ?>

    <!--============== USER-PROFILE-SIDEBAR =============-->
    <?php include 'includes/user_profile_sidebar.php'; ?>


    <div class="canvas">

        <div class="overlay-black"></div>

        <!--========= HEADER =========-->
        <?php include 'includes/header.php'; ?>


        <!--========= PAGE-COVER =========-->
        <div class="page-cover">
            <div class="container-fluid">
                <h3><span class="cover-left-icon float-start"><i class="fa fa-info-circle"></i></span>Menu Detail<span
                        class="cover-right-icon float-end"><i class="fa fa-info-circle"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->


        <!--=================== PAGE-WRAPPER ================-->
        <?php 
        include 'includes/menu_functions.php';
        
        // Get menu item ID from URL parameter
        $item_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        
        if ($item_id <= 0) {
            // Redirect to menu grid if no valid ID
            header('Location: menu-grid.php');
            exit;
        }
        
        $menu_item = getMenuItemById($item_id);
        
        // If menu item not found, redirect to menu grid
        if (!$menu_item) {
            header('Location: menu-grid.php');
            exit;
        }
        ?>
        <section class="page-wrapper innerpage-section-padding">
            <div id="menu-detail-page">
                <div class="container-fluid">
                    <div class="menu-detail">
                        <div class="menu-title">
                            <div class="menu-name">
                                <p>Product Name</p>
                                <h3><?php echo htmlspecialchars($menu_item['name']); ?></h3>
                                <span class="badge bg-primary"><?php echo ucfirst($menu_item['category']); ?></span>
                            </div>
                            <div class="menu-price">
                                <p>Price</p>
                                <h3>$<?php echo number_format($menu_item['price'], 2); ?></h3>
                                <p class="text-muted"><?php echo $menu_item['calories']; ?> calories</p>
                            </div>
                        </div><!-- end menu-title -->

                        <ul id="menu-gallery" class="gallery list-unstyled cS-hidden menu-gallery text-center">
                            <li data-thumb="<?php echo htmlspecialchars($menu_item['image']); ?>">
                                <div class="p-img">
                                    <img src="<?php echo htmlspecialchars($menu_item['image']); ?>" alt="<?php echo htmlspecialchars($menu_item['name']); ?>" />
                                </div>
                            </li>
                            <li data-thumb="<?php echo htmlspecialchars($menu_item['image']); ?>">
                                <div class="p-img">
                                    <img src="<?php echo htmlspecialchars($menu_item['image']); ?>" alt="<?php echo htmlspecialchars($menu_item['name']); ?>" />
                                </div>
                            </li>
                            <li data-thumb="<?php echo htmlspecialchars($menu_item['image']); ?>">
                                <div class="p-img">
                                    <img src="<?php echo htmlspecialchars($menu_item['image']); ?>" alt="<?php echo htmlspecialchars($menu_item['name']); ?>" />
                                </div>
                            </li>
                        </ul>

                        <div class="menu-info">
                            <ul class="list-unstyled list-inline star-rating">
                                <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                            </ul>
                            <p><?php echo htmlspecialchars($menu_item['description']); ?></p>
                            
                            <div class="menu-details mb-3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Category:</strong> <?php echo ucfirst($menu_item['category']); ?>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Calories:</strong> <?php echo $menu_item['calories']; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Prep Time:</strong> <?php echo $menu_item['preparation_time']; ?> min
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Featured:</strong> <?php echo $menu_item['is_featured'] ? 'Yes' : 'No'; ?>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn btn-orange add-to-cart" data-id="<?php echo $menu_item['id']; ?>" data-name="<?php echo htmlspecialchars($menu_item['name']); ?>" data-price="<?php echo $menu_item['price']; ?>">
                                Add to cart <span><i class="fa fa-shopping-cart"></i></span>
                            </button>
                        </div><!-- end menu-info -->

                        <ul class="nav nav-tabs justify-content-center">
                            <li class="nav-item"><a class="nav-link active" href="#description"
                                    data-bs-toggle="tab"><span><i class="fa fa-info"></i></span>Description</a></li>
                            <li class="nav-item"><a class="nav-link" href="#reviews" data-bs-toggle="tab"><span><i
                                            class="fa fa-comments"></i></span>Reviews</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="description" class="tab-pane active">
                                <h4>About this dish</h4>
                                <p><?php echo htmlspecialchars($menu_item['description']); ?></p>
                                
                                <h4>Nutritional Information</h4>
                                <ul>
                                    <li><strong>Calories:</strong> <?php echo $menu_item['calories']; ?> per serving</li>
                                    <li><strong>Preparation Time:</strong> <?php echo $menu_item['preparation_time']; ?> minutes</li>
                                    <li><strong>Category:</strong> <?php echo ucfirst($menu_item['category']); ?></li>
                                    <?php if ($menu_item['is_featured']): ?>
                                    <li><strong>Featured Item:</strong> This is one of our most popular dishes!</li>
                                    <?php endif; ?>
                                </ul>
                                
                                <h4>Ingredients</h4>
                                <p>Our <?php echo htmlspecialchars($menu_item['name']); ?> is prepared with the finest ingredients, following traditional recipes to ensure authentic taste and quality.</p>
                            </div>

                            <div id="reviews" class="tab-pane fade">
                                <div class="comments-wrapper">
                                    <?php
                                    // Get testimonials from database (you can later create a reviews table)
                                    try {
                                        $db = Database::getInstance();
                                        $result = $db->query("SELECT * FROM testimonials ORDER BY rating DESC LIMIT 3");
                                        
                                        if ($result && $result->num_rows > 0) {
                                            while ($testimonial = $result->fetch_assoc()) {
                                                echo '<div class="comment-block">';
                                                echo '<h4>' . htmlspecialchars($testimonial['customer_name']) . '</h4>';
                                                echo '<ul class="list-unstyled list-inline star-rating">';
                                                for ($i = 1; $i <= 5; $i++) {
                                                    $starClass = ($i <= $testimonial['rating']) ? 'fa-star' : 'fa-star-o';
                                                    echo '<li class="list-inline-item"><span><i class="fa ' . $starClass . '"></i></span></li>';
                                                }
                                                echo '</ul>';
                                                echo '<p>' . htmlspecialchars($testimonial['review_text']) . '</p>';
                                                echo '</div><!-- end comment-block -->';
                                            }
                                        } else {
                                            echo '<p>No reviews available yet. Be the first to review this dish!</p>';
                                        }
                                    } catch (Exception $e) {
                                        echo '<p>Unable to load reviews at the moment.</p>';
                                    }
                                    ?>
                                </div>

                                <form class="custom-form">
                                    <h3>Add Review</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" required />
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" required />
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                                    </div>
                                    <button class="btn btn-orange btn-radius">Submit</button>
                                </form>
                            </div><!-- end reviews -->
                        </div><!-- end tab-content -->
                    </div>
                </div><!-- end container-fluid -->
            </div><!-- end menu-detail-page -->
        </section><!-- end page-wrapper -->

        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    </div><!-- end canvas -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/lightslider.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-lightslider.js"></script>
    
    <!-- Add to cart functionality -->
    <script>
    $(document).ready(function() {
        // Add to cart functionality
        $('.add-to-cart').click(function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var price = $(this).data('price');
            
            // Add to cart logic here
            console.log('Adding to cart:', name, 'Price:', price);
            
            // You can implement cart functionality here
            alert('Added to cart: ' + name);
        });
    });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>