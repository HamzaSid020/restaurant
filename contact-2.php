<?php
require_once __DIR__.'/includes/auth.php';
startSession();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Contact Us - ChachuKiBiryani</title>
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

        /* Contact Section */
        .contact-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        /* Contact Info Cards */
        .contact-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 80px;
        }

        .contact-info-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .contact-info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .contact-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            color: white;
        }

        .contact-info-card h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #2C1810;
        }

        .contact-info-card p {
            color: #6B7280;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Contact Form */
        .contact-form-modern {
            background: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            max-width: 800px;
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
            background: #fafafa;
        }

        .form-control-modern:focus {
            outline: none;
            border-color: #FF6B35;
            background: white;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
        }

        .form-control-modern::placeholder {
            color: #9CA3AF;
        }

        textarea.form-control-modern {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit-modern {
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

        .btn-submit-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        /* Map Section */
        .map-section {
            padding: 0;
            margin-bottom: 0;
        }

        .map-modern {
            width: 100%;
            height: 400px;
            border: none;
            border-radius: 0;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-cover-title {
                font-size: 2.5rem;
            }
            
            .page-heading {
                font-size: 2.5rem;
            }
            
            .contact-info-grid {
                grid-template-columns: 1fr;
            }
            
            .contact-form-modern {
                padding: 40px 20px;
                margin: 0 15px;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Override existing styles */
        .section-padding {
            padding: 40px 0;
        }

        .container-fluid {
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Hide original elements */
        .contact-block-2 {
            display: none;
        }

        .custom-form {
            display: none;
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
        <?php include 'includes/header.php'; ?>

        <!--========= PAGE-COVER =========-->
        <section class="page-cover-modern">
            <div class="container-fluid">
                <div class="page-cover-content" data-aos="fade-up" data-aos-duration="1000">
                    <span class="page-cover-icon"><i class="fa fa-envelope"></i></span>
                    <h1 class="page-cover-title">Contact Us</h1>
                    <p class="page-cover-subtitle">Get In Touch</p>
                    <span class="page-cover-icon"><i class="fa fa-envelope"></i></span>
                </div>
            </div>
        </section>

        <!--========= MAP SECTION =========-->
        <section class="map-section">
            <iframe class="map-modern"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554"
                allowfullscreen></iframe>
        </section>

        <!--=================== CONTACT SECTION ================-->
        <section class="contact-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Get In Touch</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                    </div>
                </div>
                
                <div class="contact-info-grid">
                    <div class="contact-info-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <h4>Visit Us</h4>
                        <p>988 Burnhamthorpe Rd E<br>Mississauga, ON L4Y 2X6<br>Canada</p>
                    </div>
                    
                    <div class="contact-info-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h4>Call Us</h4>
                        <p>+1 (905) 897-6226<br>+1 (555) 123-4567</p>
                    </div>
                    
                    <div class="contact-info-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h4>Email Us</h4>
                        <p>ChachukiBiryani@gmail.com<br>info@chachukibiryani.com</p>
                    </div>
                </div>
                
                <div class="contact-form-modern" data-aos="fade-up" data-aos-delay="400">
                    <div class="row">
                        <div class="col-12 text-center mb-4">
                            <h3 style="color: #2C1810; margin-bottom: 10px;">Send Us a Message</h3>
                            <p style="color: #6B7280;">Fill out the form below and we'll get back to you as soon as possible.</p>
                        </div>
                    </div>
                    
                    <form id="contact-form-modern" name="contact-form" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <input type="text" class="form-control-modern" placeholder="Your Name" name="txt_name" id="txt_name" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <input type="email" class="form-control-modern" placeholder="Your Email" name="txt_email" id="txt_email" required />
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <input type="tel" class="form-control-modern" placeholder="Your Phone" name="txt_phone" id="txt_phone" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <input type="text" class="form-control-modern" placeholder="Subject" name="txt_subject" id="txt_subject" required />
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group-modern">
                            <textarea class="form-control-modern" rows="5" placeholder="Your Message" name="txt_message" id="txt_message" required></textarea>
                        </div>
                        
                        <div class="col-12 text-center" id="result_msg"></div>
                        
                        <button type="submit" class="btn-submit-modern" name="submit" id="submit">
                            <i class="fa fa-paper-plane me-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    </div><!-- end canvas -->

    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/custom-validation.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Modern Contact Form
        $(document).ready(function() {
            $('#contact-form-modern').submit(function(e) {
                e.preventDefault();
                
                // Get form data
                var formData = {
                    name: $('#txt_name').val(),
                    email: $('#txt_email').val(),
                    phone: $('#txt_phone').val(),
                    subject: $('#txt_subject').val(),
                    message: $('#txt_message').val()
                };
                
                // Show loading state
                $('#submit').text('Sending...').prop('disabled', true);
                
                // Simulate form submission (replace with actual AJAX call)
                setTimeout(function() {
                    $('#result_msg').html('<div class="alert alert-success">Thank you! Your message has been sent successfully.</div>');
                    $('#contact-form-modern')[0].reset();
                    $('#submit').text('Send Message').prop('disabled', false);
                }, 2000);
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>