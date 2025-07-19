<?php
/**
 * Database Configuration for ChachuKiBiryani
 * Configured for Hostinger hosting
 */

// Environment detection
$is_localhost = in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1', '::1']) || 
                strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;

if ($is_localhost) {
    // Local development settings
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'Chachukibiryani');
} else {
    // Hostinger production settings
    define('DB_HOST', 'localhost');
    define('DB_USER', 'u638930561_chachu_user');
    define('DB_PASS', 'Chachu@13020');
    define('DB_NAME', 'u638930561_chachu_db');
}

// Database connection class
class Database {
    private $connection;
    private static $instance = null;
    
    private function __construct() {
        try {
            $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if ($this->connection->connect_error) {
                throw new Exception("Connection failed: " . $this->connection->connect_error);
            }
            
            // Set charset to utf8mb4 for proper Unicode support
            $this->connection->set_charset("utf8mb4");
            
        } catch (Exception $e) {
            error_log("Database connection error: " . $e->getMessage());
            die("Database connection failed. Please check your configuration.");
        }
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->connection;
    }
    
    public function query($sql) {
        $result = $this->connection->query($sql);
        if (!$result) {
            error_log("Database query error: " . $this->connection->error);
            throw new Exception("Database query failed: " . $this->connection->error);
        }
        return $result;
    }
    
    public function prepare($sql) {
        $stmt = $this->connection->prepare($sql);
        if (!$stmt) {
            error_log("Database prepare error: " . $this->connection->error);
            throw new Exception("Database prepare failed: " . $this->connection->error);
        }
        return $stmt;
    }
    
    public function escape($string) {
        return $this->connection->real_escape_string($string);
    }
    
    public function getLastInsertId() {
        return $this->connection->insert_id;
    }
    
    public function getAffectedRows() {
        return $this->connection->affected_rows;
    }
    
    public function close() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}

// Legacy connection for backward compatibility
function getDatabaseConnection() {
    $db = Database::getInstance();
    return $db->getConnection();
}

// Global database instance
$concc = getDatabaseConnection();

// Test connection
if (!$concc) {
    die("Database connection failed. Please check your configuration.");
}
?> 