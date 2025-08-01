<?php
// Define the document root
$docRoot = $_SERVER['DOCUMENT_ROOT'];

// Manually set the web root URL
$webRoot = "https://www.edge2edgecleaning.com.au/"; // Replace with your actual domain

// Define the server root (optional, if needed)
$srvRoot = str_replace('include/dir.php', '', __FILE__);

// Define constants for global use
define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);
?>