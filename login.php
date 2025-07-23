<?php
require_once 'includes/auth.php';
startSession();
if (isLoggedIn()) { header('Location: index.php'); exit; }
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';
    if (login($user, $pass)) {
        header('Location: index.php'); exit;
    } else {
        $error = 'Invalid login.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - ChachuKiBiryani</title>
    <?php include 'includes/head.php'; ?>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif !important;
            background: linear-gradient(135deg, rgba(44, 24, 16, 0.8) 0%, rgba(255, 107, 53, 0.6) 100%), url('images/restaurant-slider-1.jpg') center/cover no-repeat;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: rgba(255,255,255,0.97);
            border-radius: 24px;
            box-shadow: 0 8px 32px rgba(44,24,16,0.15);
            padding: 48px 32px 32px 32px;
            max-width: 400px;
            width: 100%;
            margin: 40px 0;
            text-align: center;
        }
        .login-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 900;
            color: #FF6B35;
            margin-bottom: 12px;
        }
        .login-subtitle {
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 32px;
            font-weight: 400;
        }
        .form-group {
            margin-bottom: 22px;
            text-align: left;
        }
        .form-label {
            font-weight: 500;
            color: #222;
            margin-bottom: 6px;
            display: block;
        }
        .form-control {
            width: 100%;
            padding: 12px 16px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 1rem;
            margin-bottom: 2px;
        }
        .btn-login {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 50px;
            padding: 12px 0;
            width: 100%;
            margin-top: 10px;
            transition: background 0.2s;
        }
        .btn-login:hover {
            background: linear-gradient(135deg, #F7931E 0%, #FF6B35 100%);
        }
        .login-error {
            color: #fff;
            background: #ff6b35;
            border-radius: 8px;
            padding: 10px 0;
            margin-bottom: 18px;
            font-weight: 500;
        }
        .login-footer {
            margin-top: 24px;
            font-size: 1rem;
        }
        .login-footer a {
            color: #FF6B35;
            text-decoration: underline;
        }
        @media (max-width: 600px) {
            .login-card { padding: 32px 10px; }
            .login-title { font-size: 2rem; }
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-title">Welcome Back!</div>
        <div class="login-subtitle">Sign in to your ChachuKiBiryani account</div>
        <?php if ($error): ?>
            <div class="login-error"><?=htmlspecialchars($error)?></div>
        <?php endif; ?>
        <form method="post" autocomplete="off">
            <div class="form-group">
                <label class="form-label" for="user">Username or Email</label>
                <input class="form-control" id="user" name="user" required autofocus>
            </div>
            <div class="form-group">
                <label class="form-label" for="pass">Password</label>
                <input class="form-control" type="password" id="pass" name="pass" required>
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
        <div class="login-footer">
            Don't have an account? <a href="register-1.php">Register</a><br>
            <a href="forget-password-1.php">Forgot your password?</a>
        </div>
    </div>
</body>
</html> 