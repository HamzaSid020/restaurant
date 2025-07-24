<?php
require_once __DIR__.'/includes/auth.php';
startSession();
?>
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
            /* background: linear-gradient(135deg, rgba(44, 24, 16, 0.9) 0%, rgba(255, 107, 53, 0.8) 100%); */
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
            background: url('images/background1.png') center/cover;
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
            font-weight:700;
            color:#F7931E;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .page-cover-icon {
            font-size: 2rem;
            margin: 0 20px;
            color:white;
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
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(10px);
    padding: 60px 40px;
    border-radius: 25px;
    box-shadow: 0 25px 60px rgba(255, 107, 53, 0.15);
    max-width: 600px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(255, 107, 53, 0.1);
}

/* Add gradient border top */
.register-form-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, #FF6B35, #FF4500, #DC143C);
}

.form-group-modern {
    margin-bottom: 30px;
    position: relative;
}

.input-group-modern {
    position: relative;
    display: flex;
    align-items: center;
}

.form-control-modern {
    width: 100%;
    padding: 18px 20px 18px 55px;
    border: 2px solid #e8e8e8;
    border-radius: 15px;
    font-size: 1rem;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    background: #fafafa;
    color: #333;
}

.form-control-modern:focus {
    outline: none;
    border-color: #FF6B35;
    background: white;
    box-shadow: 0 0 0 4px rgba(255, 107, 53, 0.1);
    transform: translateY(-2px);
}

.form-control-modern:hover {
    border-color: #FF4500;
    background: #fff;
}

.form-control-modern::placeholder {
    color: #aaa;
    font-style: italic;
    transition: color 0.3s ease;
}

.form-control-modern:focus::placeholder {
    color: #ccc;
}

.input-icon {
    position: absolute;
    left: 20px;
    color: #FF6B35;
    font-size: 1.2rem;
    z-index: 2;
    transition: all 0.3s ease;
}

.form-control-modern:focus + .input-icon,
.form-control-modern:hover + .input-icon {
    color: #DC143C;
    transform: scale(1.1);
}

.btn-register-modern {
    background: linear-gradient(135deg, #FF6B35 0%, #FF4500 50%, #DC143C 100%);
    border: none;
    padding: 18px 40px;
    border-radius: 15px;
    color: white;
    font-weight: 600;
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    width: 100%;
    position: relative;
    overflow: hidden;
    margin-top: 10px;
}

/* Add shimmer effect */
.btn-register-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.6s;
}

.btn-register-modern:hover::before {
    left: 100%;
}

.btn-register-modern:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(255, 107, 53, 0.3);
    background: linear-gradient(135deg, #FF4500 0%, #DC143C 50%, #8B0000 100%);
}

.btn-register-modern:active {
    transform: translateY(-2px);
}

/* Form Links */
.form-links {
    margin-top: 35px;
    text-align: center;
}

.form-links a {
    color: #FF6B35;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
}

.form-links a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -2px;
    left: 0;
    background: linear-gradient(90deg, #FF6B35, #DC143C);
    transition: width 0.3s ease;
}

.form-links a:hover::after {
    width: 100%;
}

.form-links a:hover {
    color: #DC143C;
    text-decoration: none;
}

.form-links p {
    margin: 15px 0;
    color: #666;
    font-size: 0.95rem;
}

/* Alert Messages */
.alert-modern {
    padding: 18px 25px;
    border-radius: 15px;
    margin-bottom: 25px;
    border: none;
    font-weight: 500;
    position: relative;
    overflow: hidden;
}

.alert-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: rgba(255,255,255,0.3);
}

.alert-success-modern {
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
    color: white;
    box-shadow: 0 10px 25px rgba(40, 167, 69, 0.2);
}

.alert-danger-modern {
    background: linear-gradient(135deg, #DC143C 0%, #FF6B35 100%);
    color: white;
    box-shadow: 0 10px 25px rgba(220, 20, 60, 0.2);
}

/* Page Headings */
.page-heading {
    font-family: 'Playfair Display', serif !important;
    font-weight: 700;
    font-size: 3.5rem;
    background: linear-gradient(135deg, #FF6B35 0%, #FF4500 50%, #DC143C 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-align: center;
    margin-bottom: 20px;
    letter-spacing: 2px;
    text-shadow: 2px 2px 4px rgba(255, 107, 53, 0.1);
}

.page-heading-line {
    width: 80px;
    height: 4px;
    background: linear-gradient(135deg, #FF6B35 0%, #FF4500 50%, #DC143C 100%);
    border-radius: 2px;
    margin: 20px auto 40px;
    box-shadow: 0 2px 8px rgba(255, 107, 53, 0.3);
}

/* Add subtle animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.register-form-modern {
    animation: fadeInUp 0.8s ease forwards;
}
.lead{
    font-size: 1.2rem;
    font-weight:500;
    color:black;
}

.form-group-modern:nth-child(1) {
    animation: slideInRight 0.6s ease forwards;
    animation-delay: 0.2s;
    opacity: 0;
}

.form-group-modern:nth-child(2) {
    animation: slideInRight 0.6s ease forwards;
    animation-delay: 0.4s;
    opacity: 0;
}

.form-group-modern:nth-child(3) {
    animation: slideInRight 0.6s ease forwards;
    animation-delay: 0.6s;
    opacity: 0;
}

.form-group-modern:nth-child(4) {
    animation: slideInRight 0.6s ease forwards;
    animation-delay: 0.8s;
    opacity: 0;
}

.btn-register-modern {
    animation: fadeInUp 0.6s ease forwards;
    animation-delay: 1s;
    opacity: 0;
}

.form-links {
    animation: fadeInUp 0.6s ease forwards;
    animation-delay: 1.2s;
    opacity: 0;
}

/* Two-column layout for larger screens */
@media (min-width: 769px) {
    .form-row-modern {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 30px;
    }
    
    .form-row-modern .form-group-modern {
        margin-bottom: 0;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .page-cover-title {
        font-size: 2.5rem;
    }
    
    .page-heading {
        font-size: 2.5rem;
        letter-spacing: 1px;
    }
    
    .register-form-modern {
        padding: 40px 25px;
        margin: 0 15px;
        border-radius: 20px;
    }
    
    .form-control-modern {
        padding: 16px 18px 16px 50px;
    }
    
    .input-icon {
        left: 18px;
        font-size: 1.1rem;
    }
    
    .btn-register-modern {
        padding: 16px 30px;
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .page-heading {
        font-size: 2rem;
    }
    
    .register-form-modern {
        padding: 30px 20px;
        margin: 0 10px;
    }
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}

/* Override existing styles */
.section-padding {
    padding: 60px 0;
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

/* Add floating background elements to body */
body.register-page {
    position: relative;
    background: linear-gradient(135deg, #f8f9fa 0%, #fff5f0 50%, #ffffff 100%);
}

body.register-page::before {
    content: '🍛';
    position: fixed;
    top: 15%;
    left: 8%;
    font-size: 40px;
    opacity: 0.08;
    animation: float 8s ease-in-out infinite;
    z-index: 1;
}

body.register-page::after {
    content: '🌶️';
    position: fixed;
    bottom: 20%;
    right: 10%;
    font-size: 35px;
    opacity: 0.08;
    animation: float 8s ease-in-out infinite;
    animation-delay: 4s;
    z-index: 1;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-25px) rotate(180deg); }
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
                    <!-- <span class="page-cover-icon"><i class="fa fa-user-plus"></i></span> -->
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
                        <p>Already Have An Account? <a href="login.php">Sign In Here</a></p>
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