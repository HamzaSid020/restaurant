<?php
require_once __DIR__ . '/../database/config.php';

function startSession() {
    if (session_status() === PHP_SESSION_NONE) session_start();
}

function login($usernameOrEmail, $password) {
    startSession();
    $db = Database::getInstance();
    $sql = "SELECT * FROM users WHERE (username = ? OR email = ?) AND is_active = 1 LIMIT 1";
    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bind_param('ss', $usernameOrEmail, $usernameOrEmail);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'role' => $user['role'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name']
            ];
            return true;
        }
    }
    return false;
}

function logout() {
    startSession();
    $_SESSION = [];
    session_destroy();
}

function isLoggedIn() {
    startSession();
    return isset($_SESSION['user']);
}

function currentUser() {
    startSession();
    return $_SESSION['user'] ?? null;
} 