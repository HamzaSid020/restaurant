<?php
// Start session for cart functionality
session_start();

// Set default page title if not defined
if (!isset($page_title)) {
    $page_title = "ChachuKiBiryani - Authentic Indian Cuisine";
}

// Set default page description if not defined
if (!isset($page_description)) {
    $page_description = "Experience the authentic taste of Indian cuisine at ChachuKiBiryani. Fresh ingredients, traditional recipes, and exceptional service.";
}

// Get current page for navigation highlighting
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="Indian food, biryani, restaurant, authentic cuisine, delivery, takeaway" />
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>" />
    <meta name="author" content="ChachuKiBiryani" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title><?php echo htmlspecialchars($page_title); ?></title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <!-- Additional CSS for PHP functionality -->
    <style>
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ff6b35;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>

<body<?php echo ($current_page !== 'index') ? ' class="sub_page"' : ''; ?>>

<div class="hero_area">
    <div class="bg-box">
        <img src="images/hero-bg.jpg" alt="ChachuKiBiryani Hero Background">
    </div>
    <!-- header section starts -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.php">
                    <span>
                        ChachuKiBiryani
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item <?php echo ($current_page === 'index') ? 'active' : ''; ?>">
                            <a class="nav-link" href="index.php">Home <?php echo ($current_page === 'index') ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                        </li>
                        <li class="nav-item <?php echo ($current_page === 'menu') ? 'active' : ''; ?>">
                            <a class="nav-link" href="menu.php">Menu <?php echo ($current_page === 'menu') ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                        </li>
                        <li class="nav-item <?php echo ($current_page === 'about') ? 'active' : ''; ?>">
                            <a class="nav-link" href="about.php">About <?php echo ($current_page === 'about') ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                        </li>
                        <li class="nav-item <?php echo ($current_page === 'book') ? 'active' : ''; ?>">
                            <a class="nav-link" href="book.php">Book Table <?php echo ($current_page === 'book') ? '<span class="sr-only">(current)</span>' : ''; ?></a>
                        </li>
                    </ul>
                    <div class="user_option">
                        <a href="login.php" class="user_link">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                        <a class="cart_link" href="cart.php" style="position: relative;">
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
                            <?php
                            // Display cart count
                            $cart_count = 0;
                            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $item) {
                                    $cart_count += $item['quantity'];
                                }
                            }
                            if ($cart_count > 0) {
                                echo '<span class="cart-count">' . $cart_count . '</span>';
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header> 