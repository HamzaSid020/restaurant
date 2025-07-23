<?php
/**
 * Logout Page
 * Handles user logout and session cleanup
 */

require_once 'includes/auth_functions.php';

// Perform logout
$result = logoutUser();

// Redirect to home page with message
$message = $result['success'] ? 'Logout successful' : 'Logout failed';
$redirect_url = 'index.php?message=' . urlencode($message);

header('Location: ' . $redirect_url);
exit();
?> 