<?php
require_once __DIR__ . '/includes/auth.php';
startSession();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Contact Us - ChachuKiBiryani</title>
    <?php include 'includes/head.php'; ?>

    <!-- Contact Page Optimized CSS -->
    <link rel="stylesheet" href="css/contact-optimized.css">

    <!-- Additional Modern Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="page-body contact-page">

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
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.6373515393916!2d-79.61116109999999!3d43.6140919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b47f1d2e81eb9%3A0x32192cdbd6c5df53!2sChachu%20ki%20Biryani!5e0!3m2!1sen!2sca!4v1753417488961!5m2!1sen!2sca"
                class="map-modern" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <!--=================== CONTACT SECTION ================-->
        <section class="contact-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Get In Touch</h2>
                        <div class="page-heading-line"></div>
                        <p class="contact-lead">We'd love to hear from you. Send us a message and we'll respond as soon as
                            possible.</p>
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
                            <h3 class="contact-form-title">Send Us a Message</h3>
                            <p class="contact-form-subtitle">Fill out the form below and we'll get back to you as soon as
                                possible.</p>
                        </div>
                    </div>

                    <form id="contact-form-modern" name="contact-form" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <input type="text" class="form-control-modern" placeholder="Your Name"
                                        name="txt_name" id="txt_name" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <input type="email" class="form-control-modern" placeholder="Your Email"
                                        name="txt_email" id="txt_email" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <input type="tel" class="form-control-modern" placeholder="Your Phone"
                                        name="txt_phone" id="txt_phone" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <input type="text" class="form-control-modern" placeholder="Subject"
                                        name="txt_subject" id="txt_subject" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-group-modern">
                            <textarea class="form-control-modern" rows="5" placeholder="Your Message" name="txt_message"
                                id="txt_message" required></textarea>
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
        $(document).ready(function () {
            $('#contact-form-modern').submit(function (e) {
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
                setTimeout(function () {
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