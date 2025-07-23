<?php
// Start session
session_start();

// Destroy session
session_destroy();

// Redirect to admin login
header('Location: index.php');
exit;
?> 