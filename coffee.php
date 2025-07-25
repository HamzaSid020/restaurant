<?php
require_once __DIR__.'/includes/auth.php';
startSession();
?>
<!doctype html>
<html lang="zxx">

<head>
    <title>Coffee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300%7CRoboto+Condensed:400,400i,700,700i%7CGreat+Vibes"
        rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap-5.3.2.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/orange.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Flex Slider Stylesheets -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- OWL Stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>

<body id="coffee-homepage" class="page-body">

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--============ SIDE-NAV =============-->
    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <div id="web-name">
                <h2><span><i class="far fa-star"></i></span> <br /> <span>Res</span>taurant</h2>
                <ul class="main-menu-social list-inline list-unstyled text-center">
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-facebook-f"></i></span></a></li>
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-pinterest"></i></span></a></li>
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-dribbble"></i></span></a></li>
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-google-plus-g"></i></span></a></li>
                </ul>
            </div><!-- end web-name -->

            <div id="main-menu">
                <div class="sidenav-closebtn">
                    <button class="btn btn-default" id="sidenav-close">&times;</button>
                </div><!-- end sidenav-closebtn -->

                <div class="list-group">
                    <a href="#homepage-links" class="list-group-item active" data-bs-toggle="collapse"><span><i
                                class="fa fa-home sidebar-icon"></i></span>Homepages<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="homepage-links" data-bs-parent="#main-menu">
                        <a href="restaurant.html" class="list-group-item">Restaurant</a>
                        <a href="pizza.html" class="list-group-item">Pizza</a>
                        <a href="bakery.html" class="list-group-item">Bakery</a>
                        <a href="#" class="list-group-item active">Coffee</a>
                        <a href="fast-food.html" class="list-group-item">Fast Food</a>
                        <a href="ice-parlour.html" class="list-group-item">Ice Parlour</a>
                    </div><!-- end sub-menu -->

                    <a href="#menu-links" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-utensils sidebar-icon"></i></span>Menu<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="menu-links" data-bs-parent="#main-menu">
                        <a href="menu-grid.html" class="list-group-item">Menu Grid</a>
                        <a href="menu-list.html" class="list-group-item">Menu List</a>
                        <a href="menu-detail.html" class="list-group-item">Menu Detail</a>
                    </div><!-- end sub-menu -->

                    <a href="#chef-links" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-users sidebar-icon"></i></span>Chef<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="chef-links" data-bs-parent="#main-menu">
                        <a href="chef-1.html" class="list-group-item">Chef 1</a>
                        <a href="chef-2.html" class="list-group-item">Chef 2</a>
                    </div><!-- end sub-menu -->

                    <a href="reservation.html" class="list-group-item"><span><i
                                class="fa fa-pencil-alt sidebar-icon"></i></span>Reservation</a>

                    <a href="#gallery-links" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-images sidebar-icon"></i></span>Gallery<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="gallery-links" data-bs-parent="#main-menu">
                        <a href="gallery-1-column.html" class="list-group-item">Gallery 1-Column</a>
                        <a href="gallery-2-columns.html" class="list-group-item">Gallery 2-Columns</a>
                        <a href="gallery-masonry.html" class="list-group-item">Gallery Masonry</a>
                    </div><!-- end sub-menu -->

                    <a href="#user-links" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-user sidebar-icon"></i></span>User<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="user-links" data-bs-parent="#main-menu">
                        <a href="user-profile.html" class="list-group-item">User Profile</a>
                        <a href="edit-profile.html" class="list-group-item">Edit Profile</a>
                        <a href="reset-password.html" class="list-group-item">Reset Password</a>
                    </div><!-- end sub-menu -->

                    <a href="#shop-links" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-shopping-cart sidebar-icon"></i></span>Shop<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="shop-links" data-bs-parent="#main-menu">
                        <a href="shopping-cart.html" class="list-group-item">Shopping Cart</a>
                        <a href="checkout.html" class="list-group-item">Checkout</a>
                        <a href="order-history.html" class="list-group-item">Order History</a>
                    </div><!-- end sub-menu -->

                    <a href="#features-links" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-puzzle-piece sidebar-icon"></i></span>Features<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu mega-sub-menu" id="features-links" data-bs-parent="#main-menu">
                        <a href="#header-style-links" class="list-group-item" data-bs-toggle="collapse">Header<span><i
                                    class="fa fa-caret-down arrow"></i></span></a>
                        <div class="collapse sub-menu mega-sub-menu-links" id="header-style-links">
                            <a href="feature-header-1.html" class="list-group-item">Header 1</a>
                            <a href="feature-header-2.html" class="list-group-item">Header 2</a>
                            <a href="feature-header-3.html" class="list-group-item">Header 3</a>
                        </div>
                        <a href="#page-title-style-links" class="list-group-item" data-bs-toggle="collapse">Page
                            Title<span><i class="fa fa-caret-down arrow"></i></span></a>
                        <div class="collapse sub-menu mega-sub-menu-links" id="page-title-style-links">
                            <a href="feature-page-cover-1.html" class="list-group-item">Page Cover 1</a>
                            <a href="feature-page-cover-2.html" class="list-group-item">Page Cover 2</a>
                            <a href="feature-page-cover-3.html" class="list-group-item">Page Cover 3</a>
                            <a href="feature-page-cover-4.html" class="list-group-item">Page Cover 4</a>
                            <a href="feature-page-cover-5.html" class="list-group-item">Page Cover 5</a>
                        </div>
                        <a href="#footer-style-links" class="list-group-item" data-bs-toggle="collapse">Footer<span><i
                                    class="fa fa-caret-down arrow"></i></span></a>
                        <div class="collapse sub-menu mega-sub-menu-links" id="footer-style-links">
                            <a href="feature-footer-1.html" class="list-group-item">Footer 1</a>
                            <a href="feature-footer-2.html" class="list-group-item">Footer 2</a>
                            <a href="feature-footer-3.html" class="list-group-item">Footer 3</a>
                        </div>
                        <a href="#form-style-links" class="list-group-item" data-bs-toggle="collapse">Forms<span><i
                                    class="fa fa-caret-down arrow"></i></span></a>
                        <div class="collapse sub-menu mega-sub-menu-links" id="form-style-links">
                            <a href="login-1.html" class="list-group-item">Login 1</a>
                            <a href="login-2.html" class="list-group-item">Login 2</a>
                            <a href="register-1.html" class="list-group-item">Register 1</a>
                            <a href="register-2.html" class="list-group-item">Register 2</a>
                            <a href="forget-password-1.html" class="list-group-item">Forget Password 1</a>
                            <a href="forget-password-2.html" class="list-group-item">Forget Password 2</a>
                        </div>
                    </div><!-- end sub-menu -->

                    <a href="#components-links" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-clone sidebar-icon"></i></span>Components<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="components-links" data-bs-parent="#main-menu">
                        <a href="components-notifications.html" class="list-group-item">Notifications</a>
                        <a href="components-toasts.html" class="list-group-item">Toast</a>
                        <a href="components-dialog-box.html" class="list-group-item">Dialog Box</a>
                        <a href="components-alert-boxes.html" class="list-group-item">Alert Box</a>
                        <a href="components-action-sheets.html" class="list-group-item">Action Sheets</a>
                        <a href="components-modal.html" class="list-group-item">Modas</a>
                        <a href="components-panels.html" class="list-group-item">Panels</a>
                        <a href="components-list-view.html" class="list-group-item">List View</a>
                        <a href="components-multiple-list-view.html" class="list-group-item">Multiple List View</a>
                        <a href="components-timeline.html" class="list-group-item">Timeline</a>
                        <a href="components-accordian.html" class="list-group-item">Accordian</a>
                        <a href="components-badges.html" class="list-group-item">Badges</a>
                        <a href="components-buttons.html" class="list-group-item">Buttons</a>
                        <a href="components-cards.html" class="list-group-item">Cards</a>
                        <a href="components-carousel.html" class="list-group-item">Carousel</a>
                        <a href="components-chips.html" class="list-group-item">Chips</a>
                        <a href="components-icons.html" class="list-group-item">Icons</a>
                        <a href="components-pagination.html" class="list-group-item">Paginations</a>
                        <a href="components-progress-bar.html" class="list-group-item">Progressbar</a>
                        <a href="components-tables-.html" class="list-group-item">Tables </a>
                        <a href="components-tooltips-popovers.html" class="list-group-item">Tooltips</a>
                        <a href="components-typography.html" class="list-group-item">Typography</a>
                        <a href="components-grid.html" class="list-group-item">Grid</a>
                        <a href="components-back-to-top.html" class="list-group-item">Back to Top</a>
                    </div><!-- end sub-menu -->

                    <a href="#pages-links" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-clone sidebar-icon"></i></span>Pages<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="pages-links" data-bs-parent="#main-menu">
                        <a href="about-1.html" class="list-group-item">About Us 1</a>
                        <a href="about-2.html" class="list-group-item">About Us 2</a>
                        <a href="services-1.html" class="list-group-item">Services 1</a>
                        <a href="services-2.html" class="list-group-item">Services 2</a>
                        <a href="testimonials-1.html" class="list-group-item">Testimonials 1</a>
                        <a href="testimonials-2.html" class="list-group-item">Testimonials 2</a>
                        <a href="error-page-1.html" class="list-group-item">Error Page 1</a>
                        <a href="error-page-2.html" class="list-group-item">Error Page 2</a>
                        <a href="coming-soon-1.html" class="list-group-item">Coming Soon 1</a>
                        <a href="coming-soon-2.html" class="list-group-item">Coming Soon 2</a>
                        <a href="blog.html" class="list-group-item">Blog List</a>
                        <a href="blog-detail.html" class="list-group-item">Blog Detail</a>
                        <a href="pricing-1.html" class="list-group-item">Pricing 1</a>
                        <a href="pricing-2.html" class="list-group-item">Pricing 2</a>
                        <a href="faq-1.html" class="list-group-item">FAQ 1</a>
                        <a href="faq-2.html" class="list-group-item">FAQ 2</a>
                    </div><!-- end sub-menu -->

                    <a href="#navigation-links" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-list-ul sidebar-icon"></i></span>Navigations<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="navigation-links" data-bs-parent="#main-menu">
                        <a href="#" class="list-group-item">Sidebar Navigation</a>
                        <a href="javascript:void(0)" id="sidenav-2-open" class="list-group-item">Sidebar Navigation
                            2</a>
                        <a href="javascript:void(0)" id="fullscr-open" class="list-group-item">FullScreen Navigation</a>
                    </div><!-- end sub-menu -->

                    <a href="#contact-links" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-phone sidebar-icon"></i></span>Contact Us<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="contact-links" data-bs-parent="#main-menu">
                        <a href="contact-1.html" class="list-group-item">Contact Us 1</a>
                        <a href="contact-2.html" class="list-group-item">Contact Us 2</a>
                    </div><!-- end sub-menu -->

                </div><!-- end list-group -->
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div><!-- end sidenav-content -->


    <!--============ SIDE-NAV-2 =============-->
    <div class="sidenav-content">
        <div class="sidenav-2 sidenav-pane">
            <div class="sidenav-2-top clearfix">
                <ul class="list-inline list-unstyled">
                    <li class="list-inline-item float-start">
                        <h4><span><i class="far fa-star"></i></span><span>Res</span>taurant</h4>
                    </li>
                    <li class="list-inline-item float-end"><button class="btn btn-default"
                            id="sidenav-2-close">&times;</button></li>
                </ul>
            </div><!-- end web-name -->

            <div class="sidenav-2-user text-center">
                <img src="images/user-profile.jpg" class="img-fluid rounded-circle" alt="user-profile" />
                <h3>James Anderson</h3>
            </div><!-- end user-prf-sidebar-img -->

            <div class="white-menu">

                <div class="list-group">
                    <a href="#homepage-links-2" class="list-group-item active" data-bs-toggle="collapse"><span><i
                                class="fa fa-home sidebar-icon"></i></span>Homepages<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="homepage-links-2" data-bs-parent=".white-menu">
                        <a href="restaurant.html" class="list-group-item">Restaurant</a>
                        <a href="pizza.html" class="list-group-item">Pizza</a>
                        <a href="bakery.html" class="list-group-item">Bakery</a>
                        <a href="#" class="list-group-item active">Coffee</a>
                        <a href="fast-food.html" class="list-group-item">Fast Food</a>
                        <a href="ice-parlour.html" class="list-group-item">Ice Parlour</a>
                    </div><!-- end sub-menu -->

                    <a href="#menu-links-2" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-utensils sidebar-icon"></i></span>Menu<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="menu-links-2" data-bs-parent=".white-menu">
                        <a href="menu-grid.html" class="list-group-item">Menu Grid</a>
                        <a href="menu-list.html" class="list-group-item">Menu List</a>
                        <a href="menu-detail.html" class="list-group-item">Menu Detail</a>
                    </div><!-- end sub-menu -->

                    <a href="#chef-links-2" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-users sidebar-icon"></i></span>Chef<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="chef-links-2" data-bs-parent=".white-menu">
                        <a href="chef-1.html" class="list-group-item">Chef 1</a>
                        <a href="chef-2.html" class="list-group-item">Chef 2</a>
                    </div><!-- end sub-menu -->

                    <a href="reservation.html" class="list-group-item"><span><i
                                class="fa fa-pencil-alt sidebar-icon"></i></span>Reservation</a>

                    <a href="#gallery-links-2" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-images sidebar-icon"></i></span>Gallery<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="gallery-links-2" data-bs-parent=".white-menu">
                        <a href="gallery-1-column.html" class="list-group-item">Gallery 1-Column</a>
                        <a href="gallery-2-columns.html" class="list-group-item">Gallery 2-Columns</a>
                        <a href="gallery-masonry.html" class="list-group-item">Gallery Masonry</a>
                    </div><!-- end sub-menu -->

                    <a href="#user-links-2" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-user sidebar-icon"></i></span>User<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="user-links-2" data-bs-parent=".white-menu">
                        <a href="user-profile.html" class="list-group-item">User Profile</a>
                        <a href="edit-profile.html" class="list-group-item">Edit Profile</a>
                        <a href="reset-password.html" class="list-group-item">Reset Password</a>
                    </div><!-- end sub-menu -->

                    <a href="#shop-links-2" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-shopping-cart sidebar-icon"></i></span>Shop<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="shop-links-2" data-bs-parent=".white-menu">
                        <a href="shopping-cart.html" class="list-group-item">Shopping Cart</a>
                        <a href="checkout.html" class="list-group-item">Checkout</a>
                        <a href="order-history.html" class="list-group-item">Order History</a>
                    </div><!-- end sub-menu -->

                    <a href="#features-links-2" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-puzzle-piece sidebar-icon"></i></span>Features<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu mega-sub-menu" id="features-links-2" data-bs-parent=".white-menu">
                        <a href="#header-style-links-2" class="list-group-item" data-bs-toggle="collapse">Header<span><i
                                    class="fa fa-caret-down arrow"></i></span></a>
                        <div class="collapse sub-menu mega-sub-menu-links" id="header-style-links-2">
                            <a href="feature-header-1.html" class="list-group-item">Header 1</a>
                            <a href="feature-header-2.html" class="list-group-item">Header 2</a>
                            <a href="feature-header-3.html" class="list-group-item">Header 3</a>
                        </div>
                        <a href="#page-title-style-links-2" class="list-group-item" data-bs-toggle="collapse">Page
                            Title<span><i class="fa fa-caret-down arrow"></i></span></a>
                        <div class="collapse sub-menu mega-sub-menu-links" id="page-title-style-links-2">
                            <a href="feature-page-cover-1.html" class="list-group-item">Page Cover 1</a>
                            <a href="feature-page-cover-2.html" class="list-group-item">Page Cover 2</a>
                            <a href="feature-page-cover-3.html" class="list-group-item">Page Cover 3</a>
                            <a href="feature-page-cover-4.html" class="list-group-item">Page Cover 4</a>
                            <a href="feature-page-cover-5.html" class="list-group-item">Page Cover 5</a>
                        </div>
                        <a href="#footer-style-links-2" class="list-group-item" data-bs-toggle="collapse">Footer<span><i
                                    class="fa fa-caret-down arrow"></i></span></a>
                        <div class="collapse sub-menu mega-sub-menu-links" id="footer-style-links-2">
                            <a href="feature-footer-1.html" class="list-group-item">Footer 1</a>
                            <a href="feature-footer-2.html" class="list-group-item">Footer 2</a>
                            <a href="feature-footer-3.html" class="list-group-item">Footer 3</a>
                        </div>
                        <a href="#form-style-links-2" class="list-group-item" data-bs-toggle="collapse">Forms<span><i
                                    class="fa fa-caret-down arrow"></i></span></a>
                        <div class="collapse sub-menu mega-sub-menu-links" id="form-style-links-2">
                            <a href="login-1.html" class="list-group-item">Login 1</a>
                            <a href="login-2.html" class="list-group-item">Login 2</a>
                            <a href="register-1.html" class="list-group-item">Register 1</a>
                            <a href="register-2.html" class="list-group-item">Register 2</a>
                            <a href="forget-password-1.html" class="list-group-item">Forget Password 1</a>
                            <a href="forget-password-2.html" class="list-group-item">Forget Password 2</a>
                        </div>
                    </div><!-- end sub-menu -->

                    <a href="#components-links" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-clone sidebar-icon"></i></span>Components<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="components-links" data-bs-parent="#main-menu">
                        <a href="components-notifications.html" class="list-group-item">Notifications</a>
                        <a href="components-toasts.html" class="list-group-item">Toast</a>
                        <a href="components-dialog-box.html" class="list-group-item">Dialog Box</a>
                        <a href="components-alert-boxes.html" class="list-group-item">Alert Box</a>
                        <a href="components-action-sheets.html" class="list-group-item">Action Sheets</a>
                        <a href="components-modal.html" class="list-group-item">Modas</a>
                        <a href="components-panels.html" class="list-group-item">Panels</a>
                        <a href="components-list-view.html" class="list-group-item">List View</a>
                        <a href="components-multiple-list-view.html" class="list-group-item">Multiple List View</a>
                        <a href="components-timeline.html" class="list-group-item">Timeline</a>
                        <a href="components-accordian.html" class="list-group-item">Accordian</a>
                        <a href="components-badges.html" class="list-group-item">Badges</a>
                        <a href="components-buttons.html" class="list-group-item">Buttons</a>
                        <a href="components-cards.html" class="list-group-item">Cards</a>
                        <a href="components-carousel.html" class="list-group-item">Carousel</a>
                        <a href="components-chips.html" class="list-group-item">Chips</a>
                        <a href="components-icons.html" class="list-group-item">Icons</a>
                        <a href="components-pagination.html" class="list-group-item">Paginations</a>
                        <a href="components-progress-bar.html" class="list-group-item">Progressbar</a>
                        <a href="components-tables-.html" class="list-group-item">Tables </a>
                        <a href="components-tooltips-popovers.html" class="list-group-item">Tooltips</a>
                        <a href="components-typography.html" class="list-group-item">Typography</a>
                        <a href="components-grid.html" class="list-group-item">Grid</a>
                        <a href="components-back-to-top.html" class="list-group-item">Back to Top</a>
                    </div><!-- end sub-menu -->

                    <a href="#pages-links-2" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-clone sidebar-icon"></i></span>Pages<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="pages-links-2" data-bs-parent=".white-menu">
                        <a href="about-1.html" class="list-group-item">About Us 1</a>
                        <a href="about-2.html" class="list-group-item">About Us 2</a>
                        <a href="services-1.html" class="list-group-item">Services 1</a>
                        <a href="services-2.html" class="list-group-item">Services 2</a>
                        <a href="testimonials-1.html" class="list-group-item">Testimonials 1</a>
                        <a href="testimonials-2.html" class="list-group-item">Testimonials 2</a>
                        <a href="error-page-1.html" class="list-group-item">Error Page 1</a>
                        <a href="error-page-2.html" class="list-group-item">Error Page 2</a>
                        <a href="coming-soon-1.html" class="list-group-item">Coming Soon 1</a>
                        <a href="coming-soon-2.html" class="list-group-item">Coming Soon 2</a>
                        <a href="blog.html" class="list-group-item">Blog List</a>
                        <a href="blog-detail.html" class="list-group-item">Blog Detail</a>
                        <a href="pricing-1.html" class="list-group-item">Pricing 1</a>
                        <a href="pricing-2.html" class="list-group-item">Pricing 2</a>
                        <a href="faq-1.html" class="list-group-item">FAQ 1</a>
                        <a href="faq-2.html" class="list-group-item">FAQ 2</a>
                    </div><!-- end sub-menu -->

                    <a href="#navigation-links-2" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-list-ul sidebar-icon"></i></span>Navigations<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="navigation-links-2" data-bs-parent=".white-menu">
                        <a href="javascript:void(0)" class="sidenav-open list-group-item">Sidebar Navigation</a>
                        <a href="#" class="list-group-item">Sidebar Navigation 2</a>
                        <a href="javascript:void(0)" class="fullscr-open list-group-item">FullScreen Navigation</a>
                    </div><!-- end sub-menu -->

                    <a href="#contact-links-2" class="list-group-item" data-bs-toggle="collapse"><span><i
                                class="fa fa-phone sidebar-icon"></i></span>Contact Us<span><i
                                class="fa fa-caret-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="contact-links-2" data-bs-parent=".white-menu">
                        <a href="contact-1.html" class="list-group-item">Contact Us 1</a>
                        <a href="contact-2.html" class="list-group-item">Contact Us 2</a>
                    </div><!-- end sub-menu -->

                </div><!-- end list-group -->
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div><!-- end sidenav-content -->


    <!--=============== FULLSCR-NAV ==============-->
    <div id="fullscr-nav" class="fullscr-navigation">
        <button id="fullscr-close"><span><i class="fa fa-times"></i></span></button>
        <ul class="list-unstyled">
            <li><a href="restaurant.html"><span><i class="fullscr-nav-icon fas fa-home"></i></span>Home</a><span
                    class="border-shape"></span></li>
            <li><a href="about-1.html"><span><i class="fullscr-nav-icon fas fa-info"></i></span>About</a><span
                    class="border-shape"></span></li>
            <li><a href="menu-grid.html"><span><i class="fullscr-nav-icon fas fa-list-ul"></i></span>Menu</a><span
                    class="border-shape"></span></li>
            <li><a href="gallery-2-columns.html"><span><i
                            class="fullscr-nav-icon far fa-images"></i></span>Gallery</a><span
                    class="border-shape"></span></li>
            <li><a href="reservation.html"><span><i class="fullscr-nav-icon far fa-edit"></i></span>Reservation</a></li>
            <li><a href="testimonials-1.html"><span><i class="fullscr-nav-icon fas fa-user"></i></span>Testimonial</a>
            </li>
            <li><a href="contact-1.html"><span><i class="fullscr-nav-icon fas fa-phone"></i></span>Contact Us</a></li>
            <li><a href="login-1.html"><span><i class="fullscr-nav-icon fas fa-lock"></i></span>Login</a></li>
        </ul>
    </div><!-- end fullscr-nav -->


    <!--================ SHOPPING-CART ==============-->
    <div id="shopping-cart-sidebar" class="shc-sidebar">
        <ul class="list-unstyled cart-list">
            <li>
                <div class="cart-item">
                    <div class="item-text dish-list-text">
                        <h4><a href="#">Coffee-3</a></h4>
                        <p>Lorem ipsum,dolor</p>
                        <h5>Qty: <input type="number" class="form-control" min="1" value="1"> x $45</h5>
                    </div><!-- end item-text -->

                    <div class="item-img">
                        <a href="#"><img src="images/coffee-3.png" class="img-fluid" alt="cart-item-img" /></a>
                    </div><!-- end item-img -->

                    <h4 class="total">Total: <span>$45</span></h4>

                    <div class="item-close">
                        <button class="btn"><span><i class="fa fa-times-circle"></i></span></button>
                    </div><!-- end item-close -->
                </div><!-- end cart-item -->
            </li>

            <li>
                <div class="cart-item">
                    <div class="item-text dish-list-text">
                        <h4><a href="#">Coffee-4</a></h4>
                        <p>Lorem ipsum,dolor</p>
                        <h5>Qty: <input type="number" class="form-control" min="1" value="1"> x $45</h5>
                    </div><!-- end item-text -->

                    <div class="item-img">
                        <a href="#"><img src="images/coffee-4.png" class="img-fluid" alt="cart-item-img" /></a>
                    </div><!-- end item-img -->

                    <h4 class="total">Total: <span>$45</span></h4>

                    <div class="item-close">
                        <button class="btn"><span><i class="fa fa-times-circle"></i></span></button>
                    </div><!-- end item-close -->
                </div><!-- end cart-item -->
            </li>
        </ul>

        <div class="cart-info text-end">
            <h4>Item(s) : <span>2</span></h4>
            <h4>Total Price: <span>$90.00</span></h4>
            <a href="shopping-cart.html" class="btn btn-black">View Cart</a>
            <a href="checkout.html" class="btn btn-orange">Checkout</a>
        </div><!-- end cart-info -->
    </div><!-- shopping-cart-sidebar -->


    <!--============== USER-PROFILE-SIDEBAR =============-->
    <div id="user-profile-sidebar" class="user-prf-sidebar">
        <div class="user-prf-sidebar-img text-center" style="background:url('images/usr-prf-back-coffee.jpg') center center;
	background-size:cover;">
            <div class="overlay">
                <img src="images/user-profile.jpg" class="img-fluid rounded-circle" alt="user-profile" />
                <h3>-- James Anderson --</h3>
            </div>
        </div><!-- end user-prf-sidebar-img -->

        <div class="user-prf-sidebar-links">
            <ul class="list-unstyled">
                <li><a href="user-profile.html"><span><i class="fa fa-user"></i></span>My Profile</a></li>
                <li><a href="edit-profile.html"><span><i class="fa fa-pencil-alt"></i></span>Edit Profile</a></li>
                <li><a href="forget-password-1.html"><span><i class="fa fa-question"></i></span>Forget Password</a></li>
                <li><a href="reset-password.html"><span><i class="fa fa-sync"></i></span>Reset Password</a></li>
                <li><a href="#"><span><i class="fa fa-sign-out-alt"></i></span>Sign Out</a></li>
            </ul>
        </div><!-- end user-prf-sidebar-links -->
    </div><!-- end user-profile-sidebar -->


    <div class="canvas">

        <div class="overlay-black"></div>

        <!--========= HEADER =========-->
        <div class="header">
            <div class="fixed-header">
                <div class="container-fluid">
                    <div class="header-logo">
                        <a href="#">
                            <h4><span><i class="far fa-star"></i>Res</span>taurant</h4>
                        </a>
                    </div><!-- end header-logo -->

                    <div class="header-links">
                        <ul class="list-unstyled list-inline">

                            <li class="list-inline-item shopping-cart"><a href="javascript:void(0)"
                                    id="shc-side-open"><span><i class="fa fa-shopping-cart"></i></span><span
                                        class="cart-badge">2</span></a></li>
                            <li class="list-inline-item user-link"><a href="javascript:void(0)"
                                    id="usr-side-open"><span><i class="fa fa-user"></i></span></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" id="sidenav-open"><span><i
                                            class="fa fa-bars"></i></span></a></li>
                        </ul>
                    </div><!-- end header-links -->
                </div><!-- end container-fluid -->
            </div><!-- end fixed-header -->
        </div><!-- end header -->


        <!--=========== SLIDER ==========-->
        <div class="flexslider" id="slider">
            <ul class="slides">

                <li class="item-1"
                    style="background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/coffee-slider-1.jpg') center center; background-size:cover;">
                    <div class="container text-center meta">
                        <p>Delicious Place</p>
                        <h1>Its Time to Taste</h1>
                        <button class="btn btn-orange btn-radius">Read More</button>
                    </div>
                </li><!-- end item-1 -->

                <li class="item-2"
                    style="background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/coffee-slider-2.jpg') center center; background-size:cover;">
                    <div class="container text-center meta">
                        <p>Delicious Place</p>
                        <h1>Its Time to Taste</h1>
                        <button class="btn btn-orange btn-radius">Read More</button>
                    </div>
                </li><!-- end item-2 -->

            </ul>
        </div><!-- end flexslider -->


        <!--=============== SERVICES ===============-->
        <section id="services" class="section-padding">
            <div class="container-fluid">

                <div class="owl-carousel owl-theme" id="owl-services">
                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-thumbs-up service-icon-border"></i></span>
                            <h4>Quality Serve</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-user service-icon-border"></i></span>
                            <h4>Best Chefs</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-rocket service-icon-border"></i></span>
                            <h4>Free Deilvery</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="service-block">
                            <span><i class="fa fa-building service-icon-border"></i></span>
                            <h4>Clean Spot</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div><!-- end service-block -->
                    </div><!-- end item -->
                </div><!-- end owl-services -->

            </div><!-- end container -->
        </section><!-- end services -->


        <!--=============== ABOUT-US ===============-->
        <section id="about-us" class="section-padding">
            <div class="container-fluid text-center">
                <h3 class="page-heading">About Us</h3>
                <hr class="page-heading-line" />
                <img src="images/about-img-coffee.png" class="img-fluid" alt="about-img" />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit faucibus mattis. Donec
                    pharetra odio convalli. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit
                    faucibus mattis. Donec pharetra odio convalli.</p>
            </div><!-- end container-fluid -->
        </section><!-- end about-us -->


        <!--===================== MENU ====================-->
        <section class="menu black-menu section-padding">
            <div class="container-fluid text-center">
                <h3 class="page-heading white-heading">Delicious Menu</h3>
                <hr class="page-heading-line" />

                <div class="owl-carousel owl-theme owl-menu">
                    <div>
                        <div class="grid">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/coffee-1.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Coffee-1</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn btn-orange">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/coffee-2.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Coffee-2</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn btn-orange">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end grid -->
                    </div>

                    <div>
                        <div class="grid">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/coffee-3.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Coffee-3</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn btn-orange">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/coffee-4.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Coffee-4</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn btn-orange">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end grid -->
                    </div>

                    <div>
                        <div class="grid">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/coffee-5.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Coffee-5</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn btn-orange">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end grid -->

                        <div class="grid">
                            <div class="dish-list">
                                <a href="menu-detail.html"><img src="images/coffee-6.png" class="img-fluid"
                                        alt="dish-menu" /></a>
                                <div class="dish-list-text">
                                    <h4><a href="menu-detail.html">Coffee-6</a></h4>
                                    <h5>$45</h5>
                                    <p>Lorem ipsum, Dolor</p>
                                    <button class="btn btn-orange">Add to cart<span><i
                                                class="fa fa-shopping-cart"></i></span></button>
                                </div><!-- end dish-list-text -->
                            </div><!-- end dish-list -->
                        </div><!-- end grid -->
                    </div>
                </div><!-- end owl-menu -->

            </div><!-- end container-fluid -->
        </section><!-- end menu -->


        <!--=================== PAGE-WRAPPER ================-->
        <section id="gallery-section" class="section-padding">
            <div class="container-fluid text-center">
                <h3 class="page-heading">Our Gallery</h3>
                <hr class="page-heading-line" />

                <div id="filter-buttons" class="text-center">
                    <button class="btn filter-button active" data-filter="filter">All</button>
                    <button class="btn filter-button" data-filter="place">Places</button>
                    <button class="btn filter-button" data-filter="meeting">Meeting</button>
                    <button class="btn filter-button" data-filter="coffee">Coffee</button>
                    <button class="btn filter-button" data-filter="seed">Seed</button>
                </div><!-- end filter-buttons -->

                <div id="gallery-filter" class="two-column">
                    <div class="row">
                        <div class="gallery-product col-6 filter coffee no-padding">
                            <div class="gallery-block">
                                <a href="images/coffee-gallery-1.jpg" title="image-1" class="with-caption image-link">
                                    <div class="gallery-img">
                                        <img class="img-fluid" src="images/coffee-gallery-1.jpg" alt="image-1">
                                    </div><!-- end gallery-img -->
                                </a>
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->

                        <div class="gallery-product col-6 filter meeting place no-padding">
                            <div class="gallery-block">
                                <a href="images/coffee-gallery-2.jpg" title="image-2" class="with-caption image-link">
                                    <div class="gallery-img">
                                        <img class="img-fluid" src="images/coffee-gallery-2.jpg" alt="image-2">
                                    </div><!-- end gallery-img -->
                                </a>
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->

                        <div class="gallery-product col-6 filter meeting no-padding">
                            <div class="gallery-block">
                                <a href="images/coffee-gallery-3.jpg" title="image-3" class="with-caption image-link">
                                    <div class="gallery-img">
                                        <img class="img-fluid" src="images/coffee-gallery-3.jpg" alt="image-3">
                                    </div><!-- end gallery-img -->
                                </a>
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->

                        <div class="gallery-product col-6 filter coffee place seed  no-padding">
                            <div class="gallery-block">
                                <a href="images/coffee-gallery-4.jpg" title="image-4" class="with-caption image-link">
                                    <div class="gallery-img">
                                        <img class="img-fluid" src="images/coffee-gallery-4.jpg" alt="image-4">
                                    </div><!-- end gallery-img -->
                                </a>
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->

                        <div class="gallery-product col-6 filter meeting no-padding">
                            <div class="gallery-block">
                                <a href="images/coffee-gallery-5.jpg" title="image-5" class="with-caption image-link">
                                    <div class="gallery-img">
                                        <img class="img-fluid" src="images/coffee-gallery-5.jpg" alt="image-5">
                                    </div><!-- end gallery-img -->
                                </a>
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->

                        <div class="gallery-product col-6 filter place seed no-padding">
                            <div class="gallery-block">
                                <a href="images/coffee-gallery-6.jpg" title="image-6" class="with-caption image-link">
                                    <div class="gallery-img">
                                        <img class="img-fluid" src="images/coffee-gallery-6.jpg" alt="image-6">
                                    </div><!-- end gallery-img -->
                                </a>
                            </div><!-- end gallery-block -->
                        </div><!-- end gallery-product -->
                    </div><!-- end row -->
                </div><!-- end gallery-filter -->
            </div><!-- end container-fluid -->
        </section><!-- end gallery-page-2 -->


        <!--======================= TESTIMONIAL =====================-->
        <section id="testimonial" class="section-padding no-pad-top">
            <div class="container-fluid">
                <h3 class="page-heading">Testimonials</h3>
                <hr class="page-heading-line" />
                <div class="owl-carousel owl-theme" id="owl-testimonial">

                    <div class="item">
                        <div class="review-block">

                            <div class="reviewer-text">
                                <ul class="list-unstyled list-inline star-rating">
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                </ul>

                                <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua ut enim ad.
                                    <footer class="blockquote-footer">Andrew</footer>
                                </blockquote>
                            </div><!-- end reviewer-text -->

                            <div class="reviewer-img">
                                <img src="images/reviewer-1.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="review-block">

                            <div class="reviewer-text">
                                <ul class="list-unstyled list-inline star-rating">
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                </ul>

                                <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua ut enim ad.
                                    <footer class="blockquote-footer">Andrew</footer>
                                </blockquote>
                            </div><!-- end reviewer-text -->

                            <div class="reviewer-img">
                                <img src="images/reviewer-2.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="review-block">

                            <div class="reviewer-text">
                                <ul class="list-unstyled list-inline star-rating">
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                </ul>

                                <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua ut enim ad.
                                    <footer class="blockquote-footer">Andrew</footer>
                                </blockquote>
                            </div><!-- end reviewer-text -->

                            <div class="reviewer-img">
                                <img src="images/reviewer-3.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="review-block">

                            <div class="reviewer-text">
                                <ul class="list-unstyled list-inline star-rating">
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                    <li class="list-inline-item"><span><i class="fa fa-star"></i></span></li>
                                </ul>

                                <blockquote> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua ut enim ad.
                                    <footer class="blockquote-footer">Andrew</footer>
                                </blockquote>
                            </div><!-- end reviewer-text -->

                            <div class="reviewer-img">
                                <img src="images/reviewer-4.jpg" alt="reviewer-image" class="rounded-circle">
                            </div><!-- end reviewer-img -->
                        </div><!-- end review-block -->
                    </div><!-- end item -->

                </div><!-- end owl-testimonial -->
            </div><!-- end container-fluid -->
        </section><!-- end testimonial -->


        <!--=============== FOOTER ===============-->
        <section id="footer" class="section-padding">
            <div class="container-fluid text-center">
                <h3><span><i class="far fa-star"></i>Res</span>taurant</h3>
                <ul class="footer-contact list-unstyled">
                    <li><span><i class="fa fa-map-marker-alt"></i></span>Street # 3, Lorem ipsum dolor , California.
                    </li>
                    <li><span><i class="fa fa-envelope"></i></span>info@starrestaurant.com</li>
                    <li><span><i class="fa fa-phone"></i></span>+123 1234 123456</li>
                </ul>

                <ul class="footer-social list-unstyled list-inline">
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-facebook-f"></i></span></a></li>
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-instagram"></i></span></a></li>
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-pinterest"></i></span></a></li>
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-twitter"></i></span></a></li>
                    <li class="list-inline-item"><a href="#"><span><i class="fab fa-dribbble"></i></span></a></li>
                </ul>
                <p class="copyright">© 2018 <a href="#"><span><i class="far fa-star"></i></span>Restaurant</a>. All
                    rights reserved.</p>
            </div><!-- end container-fluid -->
        </section><!-- end footer -->

    </div><!-- end canvas -->


    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-gallery.js"></script>
    <!-- Page Scripts Ends -->

</body>

</html>