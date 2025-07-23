<div class="sidenav-content">
    <div class="sidenav-2 sidenav-pane">
        <div class="sidenav-2-top clearfix">
            <ul class="list-inline list-unstyled">
                <li class="list-inline-item float-start">
                    <h4><span><i class="far fa-star"></i></span><span>Chachu</span>kiBiryani</h4>
                </li>
                <li class="list-inline-item float-end"><button class="btn btn-default" id="sidenav-2-close">&times;</button></li>
            </ul>
        </div>
        <div class="sidenav-2-user text-center">
            <img src="images/user-profile.jpg" class="img-fluid rounded-circle" alt="user-profile" />
            <?php if (isLoggedIn()): ?>
                <h3><?= htmlspecialchars(currentUser()['username']) ?></h3>
            <?php else: ?>
                <h3>Guest</h3>
            <?php endif; ?>
        </div>
        <div class="white-menu">
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