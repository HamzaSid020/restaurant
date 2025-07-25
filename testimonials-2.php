<!doctype html>
<html lang="en">

<head>
    <title>Customer Reviews - ChachuKiBiryani</title>
    <?php include 'includes/head.php'; ?>
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        /* Modern Custom Styles */
        body {
            font-family: 'Poppins', sans-serif !important;
            line-height: 1.6;
            color: #333;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif !important;
            font-weight: 700;
        }

        /* Page Cover */
        .page-cover-modern {
            background: linear-gradient(135deg, rgba(44, 24, 16, 0.9) 0%, rgba(255, 107, 53, 0.8) 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .page-cover-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('images/restaurant-slider-2.jpg') center/cover;
            z-index: -1;
        }

        .page-cover-content {
            text-align: center;
            color: white;
            position: relative;
            z-index: 2;
        }

        .page-cover-title {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .page-cover-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .page-cover-icon {
            font-size: 2rem;
            margin: 0 20px;
            opacity: 0.8;
        }

        /* Testimonials Section */
        .testimonials-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        /* Testimonial Cards */
        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 30px;
            font-size: 4rem;
            color: #FF6B35;
            opacity: 0.1;
            font-family: 'Playfair Display', serif;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .testimonial-rating {
            margin-bottom: 20px;
        }

        .star-rating {
            color: #FFD23F;
            font-size: 1.2rem;
        }

        .testimonial-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #6B7280;
            margin-bottom: 25px;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .author-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #FF6B35;
        }

        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h5 {
            color: #2C1810;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .author-info p {
            color: #6B7280;
            font-size: 0.9rem;
            margin: 0;
        }

        /* Stats Section */
        .stats-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            text-align: center;
        }

        .stat-item {
            padding: 20px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 10px;
            color: #FFD23F;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Featured Review */
        .featured-review {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            color: white;
            padding: 60px 40px;
            border-radius: 20px;
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            overflow: hidden;
        }

        .featured-review::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('images/restaurant-slider-1.jpg') center/cover;
            opacity: 0.1;
            z-index: 1;
        }

        .featured-review-content {
            position: relative;
            z-index: 2;
        }

        .featured-badge {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 20px;
        }

        .featured-text {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 30px;
            font-style: italic;
        }

        .featured-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .featured-author-image {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid rgba(255,255,255,0.3);
        }

        .featured-author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .featured-author-info h5 {
            margin-bottom: 5px;
            font-weight: 600;
        }

        .featured-author-info p {
            opacity: 0.9;
            margin: 0;
        }

        /* Review Form */
        .review-form-section {
            padding: 80px 0;
            background: white;
        }

        .review-form-modern {
            background: #f8f9fa;
            padding: 50px 40px;
            border-radius: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group-modern {
            margin-bottom: 25px;
        }

        .form-control-modern {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #f0f0f0;
            border-radius: 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-control-modern:focus {
            outline: none;
            border-color: #FF6B35;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
        }

        textarea.form-control-modern {
            resize: vertical;
            min-height: 120px;
        }

        .rating-input {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-bottom: 20px;
        }

        .rating-star {
            font-size: 2rem;
            color: #ddd;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .rating-star.active {
            color: #FFD23F;
        }

        .btn-submit-review {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            cursor: pointer;
            width: 100%;
        }

        .btn-submit-review:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        /* Page Headings */
        .page-heading {
            font-family: 'Playfair Display', serif !important;
            font-weight: 700;
            font-size: 3.5rem;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
            margin-bottom: 20px;
        }

        .page-heading-line {
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border-radius: 2px;
            margin: 20px auto 40px;
        }

        .page-subtitle {
            text-align: center;
            color: #6B7280;
            font-size: 1.1rem;
            margin-bottom: 60px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-cover-title {
                font-size: 2.5rem;
            }
            
            .page-heading {
                font-size: 2.5rem;
            }
            
            .testimonial-card {
                padding: 30px 20px;
            }
            
            .featured-review {
                padding: 40px 20px;
            }
            
            .featured-text {
                font-size: 1.1rem;
            }
            
            .review-form-modern {
                padding: 30px 20px;
                margin: 0 15px;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Hide original elements */
        .page-cover,
        .page-wrapper,
        .innerpage-heading,
        .owl-carousel,
        .review-block {
            display: none !important;
        }
    </style>
</head>

<body class="page-body">

    <!--====== LOADER =====-->
    <div class="loader"></div>

    <!--============ SIDE-NAV =============-->
    <?php include 'includes/side_nav.php'; ?>

    <!--============ SIDE-NAV-2 =============-->
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
        <div class="header">
            <div class="fixed-header">
                <div class="container-fluid">
                    <div class="header-logo">
                        <a href="index.php">
                            <h4><span><i class="far fa-star"></i>Chachu</span>KiBiryani</h4>
                        </a>
                    </div>

                    <div class="header-links">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item shopping-cart"><a href="javascript:void(0)" id="shc-side-open"><span><i class="fa fa-shopping-cart"></i></span><span class="cart-badge">2</span></a></li>
                            <li class="list-inline-item user-link"><a href="javascript:void(0)" id="usr-side-open"><span><i class="fa fa-user"></i></span></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" id="sidenav-open"><span><i class="fa fa-bars"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--========= MODERN PAGE-COVER =========-->
        <div class="page-cover-modern">
            <div class="container">
                <div class="page-cover-content" data-aos="fade-up">
                    <div class="page-cover-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <h1 class="page-cover-title">Customer Reviews</h1>
                    <p class="page-cover-subtitle">What our customers say about us</p>
                </div>
            </div>
        </div>

        <!--========= MODERN TESTIMONIALS SECTION =========-->
        <section class="testimonials-modern">
            <div class="container">
                <div data-aos="fade-up">
                    <h2 class="page-heading">What Our Customers Say</h2>
                    <div class="page-heading-line"></div>
                    <p class="page-subtitle">Real reviews from our satisfied customers who love our authentic biryani</p>
                </div>

                <!-- Featured Review -->
                <div class="featured-review" data-aos="fade-up" data-aos-delay="200">
                    <div class="featured-review-content">
                        <div class="featured-badge">Featured Review</div>
                        <p class="featured-text">"The best biryani I've ever tasted! The flavors are perfectly balanced, the rice is fluffy, and the meat is tender. ChachuKiBiryani has become our family's go-to place for authentic Pakistani cuisine. The delivery is always on time and the food arrives piping hot."</p>
                        <div class="featured-author">
                            <div class="featured-author-image">
                                <img src="images/reviewer-1.jpg" alt="Sarah Johnson">
                            </div>
                            <div class="featured-author-info">
                                <h5>Sarah Johnson</h5>
                                <p>Regular Customer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Grid -->
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <div class="star-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">"Amazing taste and quality! The chicken biryani is absolutely delicious with the perfect blend of spices. The portion size is generous and the price is reasonable. Highly recommended!"</p>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="images/reviewer-2.jpg" alt="Michael Chen">
                                </div>
                                <div class="author-info">
                                    <h5>Michael Chen</h5>
                                    <p>Food Blogger</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <div class="star-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">"As a vegetarian, I was skeptical about finding good biryani, but their vegetable biryani exceeded all expectations! The flavors are authentic and the service is excellent."</p>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="images/reviewer-3.jpg" alt="Priya Sharma">
                                </div>
                                <div class="author-info">
                                    <h5>Priya Sharma</h5>
                                    <p>Vegetarian Foodie</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <div class="star-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">"Perfect for corporate events! We ordered 50 plates for our office party and everyone loved it. The food was delivered on time and still hot. Great value for money!"</p>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="images/reviewer-4.jpg" alt="David Wilson">
                                </div>
                                <div class="author-info">
                                    <h5>David Wilson</h5>
                                    <p>Office Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <div class="stats-grid" data-aos="fade-up">
                    <div class="stat-item">
                        <div class="stat-number">5000+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">4.8</div>
                        <div class="stat-label">Average Rating</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Satisfaction Rate</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Review Form Section -->
        <section class="review-form-section">
            <div class="container">
                <div data-aos="fade-up">
                    <h2 class="page-heading">Share Your Experience</h2>
                    <div class="page-heading-line"></div>
                    <p class="page-subtitle">We'd love to hear about your experience with ChachuKiBiryani</p>
                </div>

                <div class="review-form-modern" data-aos="fade-up" data-aos-delay="200">
                    <form id="reviewForm">
                        <div class="form-group-modern">
                            <input type="text" class="form-control-modern" placeholder="Your Name" required>
                        </div>
                        <div class="form-group-modern">
                            <input type="email" class="form-control-modern" placeholder="Your Email" required>
                        </div>
                        <div class="form-group-modern">
                            <div class="rating-input">
                                <span class="rating-star" data-rating="1"><i class="fa fa-star"></i></span>
                                <span class="rating-star" data-rating="2"><i class="fa fa-star"></i></span>
                                <span class="rating-star" data-rating="3"><i class="fa fa-star"></i></span>
                                <span class="rating-star" data-rating="4"><i class="fa fa-star"></i></span>
                                <span class="rating-star" data-rating="5"><i class="fa fa-star"></i></span>
                            </div>
                        </div>
                        <div class="form-group-modern">
                            <textarea class="form-control-modern" placeholder="Share your experience with us..." rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn-submit-review">Submit Review</button>
                    </form>
                </div>
            </div>
        </section>

        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    </div>

    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Rating System
        $(document).ready(function() {
            let selectedRating = 0;

            $('.rating-star').click(function() {
                const rating = $(this).data('rating');
                selectedRating = rating;
                
                $('.rating-star').removeClass('active');
                $('.rating-star').each(function(index) {
                    if (index < rating) {
                        $(this).addClass('active');
                    }
                });
            });

            // Review Form Submission
            $('#reviewForm').submit(function(e) {
                e.preventDefault();
                
                if (selectedRating === 0) {
                    alert('Please select a rating');
                    return;
                }
                
                // Simulate form submission
                const submitBtn = $(this).find('.btn-submit-review');
                const originalText = submitBtn.text();
                
                submitBtn.text('Submitting...').prop('disabled', true);
                
                setTimeout(function() {
                    alert('Thank you for your review! It will be published after moderation.');
                    $('#reviewForm')[0].reset();
                    $('.rating-star').removeClass('active');
                    selectedRating = 0;
                    submitBtn.text(originalText).prop('disabled', false);
                }, 2000);
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>