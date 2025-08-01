<?php
// Website Configuration File
// Basic configuration for Edge 2 Edge Cleaning website

// Web root path - adjust as needed
$webRoot = '/';

// Site settings
$siteName = 'Edge 2 Edge Cleaning';
$siteUrl = 'https://www.edge2edgecleaning.com.au/';
$siteEmail = 'info@edge2edgecleaning.com.au';

// Database configuration (if needed)
// $dbHost = 'localhost';
// $dbName = 'your_database_name';
// $dbUser = 'your_username';
// $dbPass = 'your_password';

// Error reporting (set to 0 for production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Time zone
date_default_timezone_set('Australia/Melbourne');

// Security settings
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);

// Email settings
$mailFrom = 'noreply@edge2edgecleaning.com.au';
$mailReplyTo = 'info@edge2edgecleaning.com.au';

// Form settings
$maxFileSize = 5 * 1024 * 1024; // 5MB
$allowedFileTypes = ['jpg', 'jpeg', 'png', 'gif', 'pdf'];

// Clean up function
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Validate email function
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Log function for debugging
function logError($message) {
    error_log(date('Y-m-d H:i:s') . " - " . $message . "\n", 3, 'error_log.txt');
}
?> 