<?php
// Global config for SEUP Manual

// CHANGE THIS to match real URL (no trailing slash)
define('BASE_URL', 'https://dokumentacija.8core.hr');

// Site name
define('SITE_NAME', 'SEUP User Manual');

// Database settings
define('DB_HOST', 'localhost');
define('DB_NAME', '8core_manual');
define('DB_USER', '8core_manual');
define('DB_PASS', 'GrginDol4646');
define('DB_CHARSET', 'utf8mb4');

// Create PDO connection
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    http_response_code(500);
    echo 'Database connection error.';
    exit;
}
