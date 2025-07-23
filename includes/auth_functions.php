<?php
/**
 * User Authentication Functions
 * Handles user login, registration, session management, and logout
 */

require_once 'db_connect.php';

/**
 * Start session if not already started
 */
function startSession() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

/**
 * Register a new user
 */
function registerUser($username, $email, $password, $first_name, $last_name, $phone = '', $address = '') {
    try {
        $db = Database::getInstance();
        
        // Check if username or email already exists
        $check_sql = "SELECT id FROM users WHERE username = ? OR email = ?";
        $stmt = $db->prepare($check_sql);
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            return ['success' => false, 'message' => 'Username or email already exists'];
        }
        
        // Hash password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert new user
        $insert_sql = "INSERT INTO users (username, email, password, first_name, last_name, phone, address, role) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, 'customer')";
        $stmt = $db->prepare($insert_sql);
        $stmt->bind_param("sssssss", $username, $email, $password_hash, $first_name, $last_name, $phone, $address);
        
        if ($stmt->execute()) {
            return ['success' => true, 'message' => 'Registration successful! You can now login.'];
        } else {
            return ['success' => false, 'message' => 'Registration failed. Please try again.'];
        }
        
    } catch (Exception $e) {
        error_log("Registration error: " . $e->getMessage());
        return ['success' => false, 'message' => 'Registration failed. Please try again.'];
    }
}

/**
 * Login user
 */
function loginUser($username_or_email, $password) {
    try {
        $db = Database::getInstance();
        
        // Find user by username or email
        $sql = "SELECT id, username, email, password, first_name, last_name, role, is_active 
                FROM users WHERE (username = ? OR email = ?) AND is_active = TRUE";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ss", $username_or_email, $username_or_email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            
            // Verify password
            if (password_verify($password, $user['password'])) {
                // Start session and store user data
                startSession();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['logged_in'] = true;
                
                return ['success' => true, 'message' => 'Login successful!', 'user' => $user];
            } else {
                return ['success' => false, 'message' => 'Invalid password'];
            }
        } else {
            return ['success' => false, 'message' => 'User not found or account inactive'];
        }
        
    } catch (Exception $e) {
        error_log("Login error: " . $e->getMessage());
        return ['success' => false, 'message' => 'Login failed. Please try again.'];
    }
}

/**
 * Check if user is logged in
 */
function isLoggedIn() {
    startSession();
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

/**
 * Check if user is admin
 */
function isAdmin() {
    startSession();
    return isLoggedIn() && isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

/**
 * Get current user data
 */
function getCurrentUser() {
    startSession();
    if (isLoggedIn()) {
        return [
            'id' => $_SESSION['user_id'],
            'username' => $_SESSION['username'],
            'email' => $_SESSION['email'],
            'first_name' => $_SESSION['first_name'],
            'last_name' => $_SESSION['last_name'],
            'role' => $_SESSION['role']
        ];
    }
    return null;
}

/**
 * Logout user
 */
function logoutUser() {
    startSession();
    
    // Clear all session variables
    $_SESSION = array();
    
    // Destroy the session
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    session_destroy();
    
    return ['success' => true, 'message' => 'Logout successful'];
}

/**
 * Update user profile
 */
function updateUserProfile($user_id, $first_name, $last_name, $phone, $address) {
    try {
        $db = Database::getInstance();
        
        $sql = "UPDATE users SET first_name = ?, last_name = ?, phone = ?, address = ?, updated_at = CURRENT_TIMESTAMP 
                WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ssssi", $first_name, $last_name, $phone, $address, $user_id);
        
        if ($stmt->execute()) {
            // Update session data
            startSession();
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;
            
            return ['success' => true, 'message' => 'Profile updated successfully'];
        } else {
            return ['success' => false, 'message' => 'Profile update failed'];
        }
        
    } catch (Exception $e) {
        error_log("Profile update error: " . $e->getMessage());
        return ['success' => false, 'message' => 'Profile update failed. Please try again.'];
    }
}

/**
 * Change user password
 */
function changePassword($user_id, $current_password, $new_password) {
    try {
        $db = Database::getInstance();
        
        // Get current password hash
        $sql = "SELECT password FROM users WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            
            // Verify current password
            if (password_verify($current_password, $user['password'])) {
                // Hash new password
                $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                
                // Update password
                $update_sql = "UPDATE users SET password = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?";
                $stmt = $db->prepare($update_sql);
                $stmt->bind_param("si", $new_password_hash, $user_id);
                
                if ($stmt->execute()) {
                    return ['success' => true, 'message' => 'Password changed successfully'];
                } else {
                    return ['success' => false, 'message' => 'Password change failed'];
                }
            } else {
                return ['success' => false, 'message' => 'Current password is incorrect'];
            }
        } else {
            return ['success' => false, 'message' => 'User not found'];
        }
        
    } catch (Exception $e) {
        error_log("Password change error: " . $e->getMessage());
        return ['success' => false, 'message' => 'Password change failed. Please try again.'];
    }
}

/**
 * Get user by ID
 */
function getUserById($user_id) {
    try {
        $db = Database::getInstance();
        
        $sql = "SELECT id, username, email, first_name, last_name, phone, address, role, created_at 
                FROM users WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            return $result->fetch_assoc();
        }
        
        return null;
        
    } catch (Exception $e) {
        error_log("Get user error: " . $e->getMessage());
        return null;
    }
}

/**
 * Get all users (admin only)
 */
function getAllUsers() {
    try {
        $db = Database::getInstance();
        
        $sql = "SELECT id, username, email, first_name, last_name, phone, role, is_active, created_at 
                FROM users ORDER BY created_at DESC";
        $result = $db->query($sql);
        
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        
        return $users;
        
    } catch (Exception $e) {
        error_log("Get all users error: " . $e->getMessage());
        return [];
    }
}
?> 