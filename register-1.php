<!doctype html>
<html lang="zxx">

<head>
    <title>Register</title>
    <?php include 'includes/head.php'; ?>
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
                            <h4><span><i class="far fa-star"></i>Chachu</span>Ki Biryani</h4>
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


        <!--========= PAGE-COVER =========-->
        <div class="page-cover">
            <div class="container-fluid">
                <h3><span class="cover-left-icon float-start"><i class="fa fa-user-plus"></i></span>Register<span
                        class="cover-right-icon float-end"><i class="fa fa-user-plus"></i></span></h3>
            </div><!-- end container-fluid -->
        </div><!-- end page-cover -->
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
                echo "<div class='alert alert-danger'>$error</div>";
            }
            }
            else{
                
                $sql = "INSERT INTO register (Name, Email, Password) VALUES(?,?,?)";
                $stmt = mysqli_stmt_init($concc);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if($prepareStmt){
                    mysqli_stmt_bind_param($stmt, "sss", $Name, $Email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class = 'alert alert-success'>Registration successful!</div>";
                } 
                else{
                    die("Something went wrong");
                }
        }
    }
        ?>

        <!--=================== PAGE-WRAPPER ================-->
        <section class="page-wrapper innerpage-section-padding">
            <div id="register-page">
                <div class="container-fluid text-center">
                    <div class="innerpage-heading">
                        <h3>Register Now</h3>
                        <p>Register now and be the first to enjoy special deals, updates, and of course — mouthwatering biryani!
                        </p>
                    </div><!-- end innerpage-heading -->
                    <form class="custom-form" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name= "Name" placeholder="Name" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control" name = "Email" placeholder="Email" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" name = "Password" placeholder="Password" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" name = "Confirm_Password" placeholder="Confirm Password" required />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-orange btn-radius" name = "Register">Register</button>
                    </form>

                    <div class="form-page-links">
                        <p>Already Have An Account ? <a href="login.php">Login Now</a></p>
                    </div><!-- end form-page-links -->
                </div><!-- end container-fluid -->
            </div><!-- end register-page -->
        </section><!-- end page-wrapper -->


        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    </div><!-- end canvas -->
    
    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->

</body>

</html>