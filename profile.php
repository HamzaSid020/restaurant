<?php
// Set page-specific variables
$page_title = "My Profile - ChachuKiBiryani";
$page_description = "Manage your profile and account settings at ChachuKiBiryani.";

// Include authentication functions
require_once 'includes/auth_functions.php';

// Check if user is logged in
if (!isLoggedIn()) {
    header('Location: login.php');
    exit();
}

$current_user = getCurrentUser();
$error_message = '';
$success_message = '';

// Handle profile update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
    $first_name = trim($_POST['first_name'] ?? '');
    $last_name = trim($_POST['last_name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $address = trim($_POST['address'] ?? '');
    
    if (empty($first_name) || empty($last_name)) {
        $error_message = 'First name and last name are required.';
    } else {
        $result = updateUserProfile($current_user['id'], $first_name, $last_name, $phone, $address);
        
        if ($result['success']) {
            $success_message = $result['message'];
            $current_user = getCurrentUser(); // Refresh user data
        } else {
            $error_message = $result['message'];
        }
    }
}

// Handle password change
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $current_password = $_POST['current_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_new_password = $_POST['confirm_new_password'] ?? '';
    
    if (empty($current_password) || empty($new_password) || empty($confirm_new_password)) {
        $error_message = 'All password fields are required.';
    } elseif (strlen($new_password) < 6) {
        $error_message = 'New password must be at least 6 characters long.';
    } elseif ($new_password !== $confirm_new_password) {
        $error_message = 'New passwords do not match.';
    } else {
        $result = changePassword($current_user['id'], $current_password, $new_password);
        
        if ($result['success']) {
            $success_message = $result['message'];
        } else {
            $error_message = $result['message'];
        }
    }
}

// Get user details from database
$user_details = getUserById($current_user['id']);

// Include header
include 'includes/header.php';
?>

<!-- Profile Section -->
<section class="food_section layout_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">My Profile</h2>
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
                        
                        <!-- Profile Information -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h5>Account Information</h5>
                                <p><strong>Username:</strong> <?php echo htmlspecialchars($current_user['username']); ?></p>
                                <p><strong>Email:</strong> <?php echo htmlspecialchars($current_user['email']); ?></p>
                                <p><strong>Role:</strong> <?php echo ucfirst(htmlspecialchars($current_user['role'])); ?></p>
                                <p><strong>Member Since:</strong> <?php echo date('F j, Y', strtotime($user_details['created_at'])); ?></p>
                            </div>
                            <div class="col-md-6">
                                <h5>Personal Information</h5>
                                <p><strong>Name:</strong> <?php echo htmlspecialchars($current_user['first_name'] . ' ' . $current_user['last_name']); ?></p>
                                <p><strong>Phone:</strong> <?php echo htmlspecialchars($user_details['phone'] ?: 'Not provided'); ?></p>
                                <p><strong>Address:</strong> <?php echo htmlspecialchars($user_details['address'] ?: 'Not provided'); ?></p>
                            </div>
                        </div>
                        
                        <!-- Update Profile Form -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">Update Profile</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="profile.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="first_name" class="form-label">First Name *</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name" 
                                                       value="<?php echo htmlspecialchars($current_user['first_name']); ?>" 
                                                       required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="last_name" class="form-label">Last Name *</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name" 
                                                       value="<?php echo htmlspecialchars($current_user['last_name']); ?>" 
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <input type="tel" class="form-control" id="phone" name="phone" 
                                                       value="<?php echo htmlspecialchars($user_details['phone'] ?? ''); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <textarea class="form-control" id="address" name="address" rows="3"><?php echo htmlspecialchars($user_details['address'] ?? ''); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" name="update_profile" class="btn btn-primary">Update Profile</button>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Change Password Form -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Change Password</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="profile.php">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="current_password" class="form-label">Current Password *</label>
                                                <input type="password" class="form-control" id="current_password" name="current_password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="new_password" class="form-label">New Password *</label>
                                                <input type="password" class="form-control" id="new_password" name="new_password" required>
                                                <small class="form-text text-muted">Minimum 6 characters</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="confirm_new_password" class="form-label">Confirm New Password *</label>
                                                <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" name="change_password" class="btn btn-warning">Change Password</button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <a href="index.php" class="btn btn-secondary">Back to Home</a>
                            <a href="logout.php" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 