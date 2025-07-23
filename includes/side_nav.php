<div class="sidenav-content">
    <div id="mySidenav" class="sidenav">
        <div id="web-name">
            <h2><span><i class="far fa-star"></i></span> <br /> <span>Chachu</span>kiBiryani</h2>
        </div>
        <div id="main-menu">
            <div class="sidenav-closebtn">
                <button class="btn btn-default" id="sidenav-close">&times;</button>
            </div>
            <div class="list-group">
                <a href="index.php" class="list-group-item"><span><i class="fa fa-home sidebar-icon"></i></span>Home</a>
                <a href="menu-grid.php" class="list-group-item"><span><i class="fa fa-utensils sidebar-icon"></i></span>Menu</a>
                <a href="shopping-cart.php" class="list-group-item"><span><i class="fa fa-shopping-cart sidebar-icon"></i></span>Cart</a>
                <?php if (isLoggedIn()): ?>
                    <a href="user-profile.php" class="list-group-item"><span><i class="fa fa-user sidebar-icon"></i></span>Profile</a>
                    <a href="logout.php" class="list-group-item"><span><i class="fa fa-sign-out sidebar-icon"></i></span>Logout</a>
                <?php else: ?>
                    <a href="login.php" class="list-group-item"><span><i class="fa fa-sign-in sidebar-icon"></i></span>Login</a>
                <?php endif; ?>
                <a href="about-1.php" class="list-group-item"><span><i class="fa fa-info-circle sidebar-icon"></i></span>About</a>
                <a href="contact-2.php" class="list-group-item"><span><i class="fa fa-phone sidebar-icon"></i></span>Contact</a>
            </div>
        </div>
    </div>
</div>