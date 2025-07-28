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
    <link href="css/register.css" rel="stylesheet">
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