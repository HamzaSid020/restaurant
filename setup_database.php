<?php
/**
 * Database Setup Script for ChachuKiBiryani
 * This script will create the necessary tables and insert sample data
 */

// Include database configuration
require_once 'database/config.php';

echo "<h1>ChachuKiBiryani Database Setup</h1>";

try {
    $db = Database::getInstance();
    $connection = $db->getConnection();
    
    echo "<h2>Database Connection Status</h2>";
    if ($connection) {
        echo "<p style='color: green;'>✓ Database connected successfully!</p>";
    } else {
        echo "<p style='color: red;'>✗ Database connection failed!</p>";
        exit;
    }
    
    // Read and execute the SQL file
    $sqlFile = 'database/menu_items.sql';
    if (file_exists($sqlFile)) {
        echo "<h2>Creating Tables and Sample Data</h2>";
        
        $sql = file_get_contents($sqlFile);
        
        // Split SQL into individual statements
        $statements = array_filter(array_map('trim', explode(';', $sql)));
        
        foreach ($statements as $statement) {
            if (!empty($statement)) {
                try {
                    $result = $connection->query($statement);
                    if ($result) {
                        echo "<p style='color: green;'>✓ Executed: " . substr($statement, 0, 50) . "...</p>";
                    } else {
                        echo "<p style='color: orange;'>⚠ Statement executed (may be CREATE TABLE IF EXISTS): " . substr($statement, 0, 50) . "...</p>";
                    }
                } catch (Exception $e) {
                    if (strpos($e->getMessage(), 'already exists') !== false) {
                        echo "<p style='color: blue;'>ℹ Table already exists: " . substr($statement, 0, 50) . "...</p>";
                    } else {
                        echo "<p style='color: red;'>✗ Error: " . $e->getMessage() . "</p>";
                    }
                }
            }
        }
        
        echo "<h2>Verification</h2>";
        
        // Check if tables exist
        $tables = ['menu_items', 'testimonials'];
        foreach ($tables as $table) {
            $result = $connection->query("SHOW TABLES LIKE '$table'");
            if ($result && $result->num_rows > 0) {
                echo "<p style='color: green;'>✓ Table '$table' exists</p>";
                
                // Count records
                $countResult = $connection->query("SELECT COUNT(*) as count FROM $table");
                if ($countResult) {
                    $count = $countResult->fetch_assoc()['count'];
                    echo "<p style='color: blue;'>ℹ Table '$table' has $count records</p>";
                }
            } else {
                echo "<p style='color: red;'>✗ Table '$table' does not exist</p>";
            }
        }
        
        // Show sample menu items
        echo "<h2>Sample Menu Items</h2>";
        $menuResult = $connection->query("SELECT id, name, category, price, is_featured FROM menu_items LIMIT 5");
        if ($menuResult && $menuResult->num_rows > 0) {
            echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
            echo "<tr><th>ID</th><th>Name</th><th>Category</th><th>Price</th><th>Featured</th></tr>";
            while ($row = $menuResult->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . ucfirst($row['category']) . "</td>";
                echo "<td>$" . number_format($row['price'], 2) . "</td>";
                echo "<td>" . ($row['is_featured'] ? 'Yes' : 'No') . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        
        echo "<h2>Setup Complete!</h2>";
        echo "<p style='color: green; font-weight: bold;'>✓ Database setup completed successfully!</p>";
        echo "<p>You can now:</p>";
        echo "<ul>";
        echo "<li>View the menu at: <a href='index.php'>Homepage</a></li>";
        echo "<li>Browse all menu items at: <a href='menu-grid.php'>Menu Grid</a></li>";
        echo "<li>View individual items at: <a href='menu-detail.php?id=1'>Menu Detail</a></li>";
        echo "</ul>";
        
    } else {
        echo "<p style='color: red;'>✗ SQL file not found: $sqlFile</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color: red;'>✗ Setup failed: " . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<h3>Next Steps:</h3>";
echo "<ol>";
echo "<li>Upload your menu item images to the 'images/' folder</li>";
echo "<li>Update the image paths in the database if needed</li>";
echo "<li>Add more menu items through the admin panel or directly in the database</li>";
echo "<li>Test the menu functionality on your website</li>";
echo "</ol>";
?> 