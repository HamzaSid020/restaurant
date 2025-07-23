<?php
// Set page-specific variables
$page_title = "Login - ChachuKiBiryani";
$page_description = "Login to your ChachuKiBiryani account to manage your orders and profile.";

// Include authentication functions
require_once 'includes/auth_functions.php';

// Check if user is already logged in
if (isLoggedIn()) {
    header('Location: index.php');
    exit();
}

$error_message = '';
$success_message = '';

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_or_email = trim($_POST['username_or_email'] ?? '');
    $password = $_POST['password'] ?? '';
    
    if (empty($username_or_email) || empty($password)) {
        $error_message = 'Please enter both username/email and password.';
    } else {
        $result = loginUser($username_or_email, $password);
        
        if ($result['success']) {
            // Redirect based on user role
            if (isAdmin()) {
                header('Location: admin/');
            } else {
                header('Location: index.php');
            }
            exit();
        } else {
            $error_message = $result['message'];
        }
    }
}

// Include header
include 'includes/header.php';
?>

<!-- Login Section -->
<section class="food_section layout_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h2 class="mb-0">Login</h2>
                    </div>
                    <div class="card-body p-4">
                        <?php if ($error_message): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo htmlspecialchars($error_message); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($success_message): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo htmlspecialchars($success_message); ?>
                            </div>
                        <?php endif; ?>
                        
                        <form method="POST" action="login.php">
                            <div class="form-group mb-3">
                                <label for="username_or_email" class="form-label">Username or Email</label>
                                <input type="text" class="form-control" id="username_or_email" name="username_or_email" 
                                       value="<?php echo htmlspecialchars($_POST['username_or_email'] ?? ''); ?>" 
                                       required>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </div>
                        </form>
                        
                        <div class="text-center mt-3">
                            <p class="mb-2">Don't have an account? <a href="register.php" class="text-primary">Register here</a></p>
                            <p class="mb-0"><a href="index.php" class="text-muted">Back to Home</a></p>
                        </div>
                        
                        <div class="mt-4 p-3 bg-light rounded">
                            <h6 class="text-muted">Demo Accounts:</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <small class="text-muted">Admin:</small><br>
                                    <small>Username: admin</small><br>
                                    <small>Password: admin123</small>
                                </div>
                                <div class="col-md-6">
                                    <small class="text-muted">Customer:</small><br>
                                    <small>Username: john_doe</small><br>
                                    <small>Password: password123</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 