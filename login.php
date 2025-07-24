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
            /* background: linear-gradient(135deg, rgba(44, 24, 16, 0.8) 0%, rgba(255, 107, 53, 0.6) 100%), url('images/restaurant-slider-1.jpg') center/cover no-repeat; */
            background: url('images/background.png') center/cover no-repeat;
            min-height: 100vh;
            margin: 0; 
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(15px);
    border-radius: 25px;
    box-shadow: 0 25px 60px rgba(255, 107, 53, 0.15);
    padding: 50px 40px 40px 40px;
    max-width: 450px;
    width: 100%;
    margin: 40px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(255, 107, 53, 0.1);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Add gradient top border */
.login-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, #FF6B35, #FF4500, #DC143C);
    border-radius: 25px 25px 0 0;
}

.login-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 35px 80px rgba(255, 107, 53, 0.2);
}

.login-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.8rem;
    font-weight: 700;
    background: linear-gradient(135deg, #FF6B35 0%, #FF4500 50%, #DC143C 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 15px;
    letter-spacing: 1px;
    text-shadow: 2px 2px 4px rgba(255, 107, 53, 0.1);
    position: relative;
    z-index: 2;
}

.login-subtitle {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 35px;
    font-weight: 400;
    line-height: 1.5;
}

.form-group {
    margin-bottom: 25px;
    text-align: left;
    position: relative;
}

.form-label {
    font-weight: 500;
    color: #555;
    margin-bottom: 8px;
    display: block;
    font-size: 1rem;
    transition: color 0.3s ease;
}

.form-control {
    width: 100%;
    padding: 16px 20px;
    border-radius: 12px;
    border: 2px solid #e8e8e8;
    font-size: 1rem;
    margin-bottom: 2px;
    background: #fafafa;
    color: #333;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    outline: none;
}

.form-control:focus {
    border-color: #FF6B35;
    background: white;
    box-shadow: 0 0 0 4px rgba(255, 107, 53, 0.1);
    transform: translateY(-2px);
}

.form-control:focus + .form-label,
.form-control:hover + .form-label {
    color: #FF6B35;
}

.form-control:hover {
    border-color: #FF4500;
    background: white;
}

.form-control::placeholder {
    color: #aaa;
    font-style: italic;
}

.btn-login {
    background: linear-gradient(135deg, #FF6B35 0%, #FF4500 50%, #DC143C 100%);
    border: none;
    color: white;
    font-weight: 600;
    font-size: 1.1rem;
    border-radius: 15px;
    padding: 16px 0;
    width: 100%;
    margin-top: 15px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
}

/* Add shimmer effect */
.btn-login::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.6s;
}

.btn-login:hover::before {
    left: 100%;
}

.btn-login:hover {
    background: linear-gradient(135deg, #FF4500 0%, #DC143C 50%, #8B0000 100%);
    transform: translateY(-4px);
    box-shadow: 0 15px 35px rgba(255, 107, 53, 0.3);
}

.btn-login:active {
    transform: translateY(-2px);
}

.login-error {
    color: white;
    background: linear-gradient(135deg, #DC143C 0%, #FF6B35 100%);
    border-radius: 12px;
    padding: 15px 20px;
    margin-bottom: 20px;
    font-weight: 500;
    position: relative;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(220, 20, 60, 0.2);
}

.login-error::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: rgba(255, 255, 255, 0.3);
}

.login-footer {
    margin-top: 30px;
    font-size: 1rem;
    color: #666;
}

.login-footer a {
    color: #FF6B35;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
}

.login-footer a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -2px;
    left: 0;
    background: linear-gradient(90deg, #FF6B35, #DC143C);
    transition: width 0.3s ease;
}

.login-footer a:hover::after {
    width: 100%;
}

.login-footer a:hover {
    color: #DC143C;
    text-decoration: none;
}

/* Add subtle animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.login-card {
    animation: fadeInUp 0.8s ease forwards;
}

.login-title {
    animation: slideInRight 0.6s ease forwards;
    animation-delay: 0.2s;
}

.login-subtitle {
    animation: fadeInUp 0.6s ease forwards;
    animation-delay: 0.4s;
}

.form-group:nth-child(3) {
    animation: slideInRight 0.6s ease forwards;
    animation-delay: 0.6s;
    opacity: 0;
}

.form-group:nth-child(4) {
    animation: slideInRight 0.6s ease forwards;
    animation-delay: 0.8s;
    opacity: 0;
}

.btn-login {
    animation: fadeInUp 0.6s ease forwards;
    animation-delay: 1s;
    opacity: 0;
}

.login-footer {
    animation: fadeInUp 0.6s ease forwards;
    animation-delay: 1.2s;
    opacity: 0;
}

/* Enhanced responsive design */
@media (max-width: 600px) {
    .login-card { 
        padding: 40px 25px 30px 25px;
        border-radius: 20px;
        margin: 20px 0;
    }
    
    .login-title { 
        font-size: 2.2rem;
        letter-spacing: 0.5px;
    }
    
    .login-subtitle {
        font-size: 1rem;
        margin-bottom: 30px;
    }
    
    .form-control {
        padding: 14px 18px;
    }
    
    .btn-login {
        padding: 14px 0;
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .login-card {
        padding: 30px 20px 25px 20px;
        margin: 15px 0;
    }
    
    .login-title {
        font-size: 1.8rem;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
}

/* Add focus-within effect for better UX */
.form-group:focus-within .form-label {
    color: #FF6B35;
    transform: translateY(-2px);
}

/* Improved accessibility */
.form-control:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
}

/* Loading state for button */
.btn-login:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none;
}

.btn-login:disabled:hover {
    transform: none;
    box-shadow: none;
}

/* Success message styling */
.login-success {
    color: white;
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
    border-radius: 12px;
    padding: 15px 20px;
    margin-bottom: 20px;
    font-weight: 500;
    position: relative;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(40, 167, 69, 0.2);
}

.login-success::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: rgba(255, 255, 255, 0.3);
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