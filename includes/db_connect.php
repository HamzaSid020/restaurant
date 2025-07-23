<?php
/**
 * Database Connection Include
 * This file provides database connection functionality for all pages
 */

// Include the database configuration
require_once __DIR__ . '/../database/config.php';

// Include database functions
require_once __DIR__ . '/../database/database_functions.php';

// Function to get database connection
function getDB() {
    return Database::getInstance();
}

// Function to safely escape strings
function escapeString($string) {
    $db = getDB();
    return $db->escape($string);
}

// Function to execute queries safely
function executeQuery($sql, $params = []) {
    $db = getDB();
    
    if (empty($params)) {
        return $db->query($sql);
    } else {
        $stmt = $db->prepare($sql);
        if (!$stmt) {
            throw new Exception("Prepare failed: " . $db->getConnection()->error);
        }
        
        // Bind parameters
        $types = '';
        $bindParams = [];
        
        foreach ($params as $param) {
            if (is_int($param)) {
                $types .= 'i';
            } elseif (is_float($param)) {
                $types .= 'd';
            } elseif (is_string($param)) {
                $types .= 's';
            } else {
                $types .= 'b';
            }
            $bindParams[] = $param;
        }
        
        array_unshift($bindParams, $types);
        call_user_func_array([$stmt, 'bind_param'], $bindParams);
        
        $stmt->execute();
        return $stmt->get_result();
    }
}

// Function to get single row
function getSingleRow($sql, $params = []) {
    $result = executeQuery($sql, $params);
    if ($result && $result->num_rows > 0) {
        return $result->fetch_assoc();
    }
    return null;
}

// Function to get multiple rows
function getMultipleRows($sql, $params = []) {
    $result = executeQuery($sql, $params);
    $rows = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    return $rows;
}

// Function to insert data and return last insert ID
function insertData($sql, $params = []) {
    $db = getDB();
    executeQuery($sql, $params);
    return $db->getLastInsertId();
}

// Function to update data and return affected rows
function updateData($sql, $params = []) {
    $db = getDB();
    executeQuery($sql, $params);
    return $db->getAffectedRows();
}

// Function to delete data and return affected rows
function deleteData($sql, $params = []) {
    return updateData($sql, $params);
}

// Error handling function
function handleDatabaseError($e) {
    error_log("Database Error: " . $e->getMessage());
    return [
        'success' => false,
        'message' => 'Database operation failed. Please try again later.'
    ];
}

// Success response function
function successResponse($data = null, $message = 'Operation completed successfully') {
    return [
        'success' => true,
        'message' => $message,
        'data' => $data
    ];
}
?> 