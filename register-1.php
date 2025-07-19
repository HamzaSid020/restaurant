<!doctype html>
<html lang="en">

<head>
    <title>Register - ChachuKiBiryani</title>
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

        /* Register Section */
        .register-modern {
            padding: 100px 0;
            background: #FFF8F0;
            min-height: 70vh;
            display: flex;
            align-items: center;
        }

        /* Register Form */
        .register-form-modern {
            background: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
            width: 100%;
        }

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

        .btn-register-modern {
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

        .btn-register-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        /* Form Links */
        .form-links {
            margin-top: 30px;
            text-align: center;
        }

        .form-links a {
            color: #FF6B35;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .form-links a:hover {
            color: #F7931E;
            text-decoration: none;
        }

        .form-links p {
            margin: 10px 0;
            color: #6B7280;
        }

        /* Alert Messages */
        .alert-modern {
            padding: 15px 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            border: none;
            font-weight: 500;
        }

        .alert-success-modern {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
        }

        .alert-danger-modern {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            color: white;
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
            
            .register-form-modern {
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
        .custom-form {
            display: none;
        }

        .form-page-links {
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
                    <span class="page-cover-icon"><i class="fa fa-user-plus"></i></span>
                    <h1 class="page-cover-title">Register</h1>
                    <p class="page-cover-subtitle">Join Our Family</p>
                    <span class="page-cover-icon"><i class="fa fa-user-plus"></i></span>
                </div>
            </div>
        </section>

        <!--=================== REGISTER SECTION ================-->
        <section class="register-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Join Our Family</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">Register now and be the first to enjoy special deals, updates, and of course — mouthwatering biryani!</p>
                    </div>
                </div>
                
                <div class="register-form-modern" data-aos="fade-up" data-aos-delay="200">
                    <?php
                    if(isset($_POST["Register"])){
                        $Name = $_POST["Name"];
                        $Email = $_POST["Email"];
                        $Password = $_POST["Password"];
                        $Confirm_Password = $_POST["Confirm_Password"];
                        $passwordHash = password_hash($Password, PASSWORD_DEFAULT);
                        $errors = array();
                        
                        if(empty($Name) OR empty($Email) OR empty($Password) OR empty($Confirm_Password)){
                            array_push($errors,"All fields are required.");
                        }
                        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
                            array_push($errors,"Invalid email format.");
                        }
                        if(strlen($Password) < 8){
                            array_push($errors,"Password must be at least 8 characters long");
                        }
                        if($Password !== $Confirm_Password){
                            array_push($errors,"Passwords do not match.");
                        }
                        
                        require_once "database/database.php";
                        $sql = "SELECT * FROM register WHERE Email = '$Email'";
                        $result = mysqli_query($concc,$sql);
                        $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){
                            array_push($errors,"Email already exists. Please use a different email.");
                        }
                        
                        if(count($errors) > 0){
                            foreach($errors as $error){
                                echo "<div class='alert-modern alert-danger-modern'>$error</div>";
                            }
                        } else {
                            $sql = "INSERT INTO register (Name, Email, Password) VALUES(?,?,?)";
                            $stmt = mysqli_stmt_init($concc);
                            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                            if($prepareStmt){
                                mysqli_stmt_bind_param($stmt, "sss", $Name, $Email, $passwordHash);
                                mysqli_stmt_execute($stmt);
                                echo "<div class='alert-modern alert-success-modern'>Registration successful! Welcome to ChachuKiBiryani family!</div>";
                            } else {
                                die("Something went wrong");
                            }
                        }
                    }
                    ?>
                    
                    <form method="post" id="register-form-modern">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <div class="input-group-modern">
                                        <i class="fa fa-user input-icon"></i>
                                        <input type="text" class="form-control-modern" name="Name" placeholder="Your Full Name" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <div class="input-group-modern">
                                        <i class="fa fa-envelope input-icon"></i>
                                        <input type="email" class="form-control-modern" name="Email" placeholder="Your Email Address" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <div class="input-group-modern">
                                        <i class="fa fa-lock input-icon"></i>
                                        <input type="password" class="form-control-modern" name="Password" placeholder="Create Password" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <div class="input-group-modern">
                                        <i class="fa fa-lock input-icon"></i>
                                        <input type="password" class="form-control-modern" name="Confirm_Password" placeholder="Confirm Password" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn-register-modern" name="Register">
                            <i class="fa fa-user-plus me-2"></i>Create Account
                        </button>
                    </form>

                    <div class="form-links">
                        <p>Already Have An Account? <a href="login-1.php">Sign In Here</a></p>
                    </div>
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
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Modern Register Form
        $(document).ready(function() {
            $('#register-form-modern').submit(function(e) {
                // Show loading state
                $('.btn-register-modern').text('Creating Account...').prop('disabled', true);
                
                // Form will submit normally with PHP processing
                setTimeout(function() {
                    $('.btn-register-modern').text('Create Account').prop('disabled', false);
                }, 3000);
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>