<!doctype html>
<html lang="en">

<head>
    <title>Edit Profile - ChachuKiBiryani</title>
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
            background: url('images/restaurant-slider-1.jpg') center/cover;
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

        /* Edit Profile Section */
        .edit-profile-modern {
            padding: 100px 0;
            background: #FFF8F0;
            min-height: 70vh;
        }

        /* Profile Form */
        .profile-form-modern {
            background: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
            width: 100%;
        }

        /* Profile Image Section */
        .profile-image-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .profile-image-wrapper {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #FF6B35;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .image-upload-overlay {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 3px solid white;
        }

        .image-upload-overlay:hover {
            transform: scale(1.1);
        }

        .image-upload-overlay i {
            color: white;
            font-size: 1rem;
        }

        .file-input {
            display: none;
        }

        .upload-label {
            color: #6B7280;
            font-size: 0.9rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .upload-label:hover {
            color: #FF6B35;
        }

        /* Form Groups */
        .form-group-modern {
            margin-bottom: 25px;
        }

        .input-group-modern {
            position: relative;
            display: flex;
            align-items: center;
        }

        .form-control-modern {
            width: 100%;
            padding: 15px 20px 15px 50px;
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

        .input-icon {
            position: absolute;
            left: 20px;
            color: #6B7280;
            font-size: 1.1rem;
            z-index: 2;
        }

        textarea.form-control-modern {
            padding-left: 20px;
            resize: vertical;
            min-height: 100px;
        }

        /* Form Grid */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-grid .form-group-modern:last-child {
            grid-column: 1 / -1;
        }

        /* Submit Button */
        .btn-update-modern {
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

        .btn-update-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        /* Success Message */
        .success-message {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 15px 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            text-align: center;
            display: none;
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
            
            .profile-form-modern {
                padding: 40px 20px;
                margin: 0 15px;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
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
        .custom-form {
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
                        <a href="#">
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
                        <i class="fa fa-user-edit"></i>
                    </div>
                    <h1 class="page-cover-title">Edit Profile</h1>
                    <p class="page-cover-subtitle">Update your personal information</p>
                </div>
            </div>
        </div>

        <!--========= MODERN EDIT PROFILE SECTION =========-->
        <section class="edit-profile-modern">
            <div class="container">
                <div data-aos="fade-up">
                    <h2 class="page-heading">Update Your Profile</h2>
                    <div class="page-heading-line"></div>
                </div>

                <div class="profile-form-modern" data-aos="fade-up" data-aos-delay="200">
                    <div class="success-message" id="successMessage">
                        <i class="fa fa-check-circle"></i> Profile updated successfully!
                    </div>

                    <form id="profileForm">
                        <!-- Profile Image Section -->
                        <div class="profile-image-section">
                            <div class="profile-image-wrapper">
                                <img src="images/user-profile.jpg" alt="Profile" class="profile-image" id="profileImage">
                                <div class="image-upload-overlay" onclick="document.getElementById('profileFile').click()">
                                    <i class="fa fa-camera"></i>
                                </div>
                            </div>
                            <input type="file" class="file-input" id="profileFile" accept="image/*">
                            <div class="upload-label" onclick="document.getElementById('profileFile').click()">
                                Click to change profile picture
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="form-grid">
                            <div class="form-group-modern">
                                <div class="input-group-modern">
                                    <i class="fa fa-user input-icon"></i>
                                    <input type="text" class="form-control-modern" placeholder="Full Name" value="John Doe" required>
                                </div>
                            </div>

                            <div class="form-group-modern">
                                <div class="input-group-modern">
                                    <i class="fa fa-envelope input-icon"></i>
                                    <input type="email" class="form-control-modern" placeholder="Email Address" value="john.doe@example.com" required>
                                </div>
                            </div>

                            <div class="form-group-modern">
                                <div class="input-group-modern">
                                    <i class="fa fa-phone input-icon"></i>
                                    <input type="tel" class="form-control-modern" placeholder="Phone Number" value="+1 234 567 8900" required>
                                </div>
                            </div>

                            <div class="form-group-modern">
                                <div class="input-group-modern">
                                    <i class="fa fa-globe input-icon"></i>
                                    <input type="text" class="form-control-modern" placeholder="Country" value="United States" required>
                                </div>
                            </div>

                            <div class="form-group-modern">
                                <div class="input-group-modern">
                                    <i class="fa fa-map-marker-alt input-icon"></i>
                                    <input type="text" class="form-control-modern" placeholder="State/Region" value="California" required>
                                </div>
                            </div>

                            <div class="form-group-modern">
                                <div class="input-group-modern">
                                    <i class="fa fa-map-pin input-icon"></i>
                                    <input type="text" class="form-control-modern" placeholder="Postal Code" value="90210" required>
                                </div>
                            </div>

                            <div class="form-group-modern">
                                <textarea class="form-control-modern" placeholder="Full Address" rows="4">123 Main Street, Beverly Hills, CA 90210</textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn-update-modern">
                            <i class="fa fa-save"></i> Update Profile
                        </button>
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

        // Profile Image Upload
        document.getElementById('profileFile').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profileImage').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Form Submission
        document.getElementById('profileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.btn-update-modern');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Updating...';
            submitBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(function() {
                // Show success message
                document.getElementById('successMessage').style.display = 'block';
                
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Hide success message after 3 seconds
                setTimeout(function() {
                    document.getElementById('successMessage').style.display = 'none';
                }, 3000);
            }, 2000);
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>