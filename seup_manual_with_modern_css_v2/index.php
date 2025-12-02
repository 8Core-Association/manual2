<?php
// Front controller for SEUP Manual

define('APP_INIT', true);

// Load config and basic classes
require __DIR__ . '/config/config.php';
require __DIR__ . '/class/Database.php';

$prefix = 'cms_';

try {
    $pdo->exec("CREATE TABLE IF NOT EXISTS {$prefix}categories (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        slug VARCHAR(255) NOT NULL UNIQUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $pdo->exec("CREATE TABLE IF NOT EXISTS {$prefix}posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        content LONGTEXT NOT NULL,
        category_id INT NOT NULL,
        published TINYINT(1) DEFAULT 0,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (category_id) REFERENCES {$prefix}categories(id) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $pdo->exec("INSERT IGNORE INTO {$prefix}categories (id, name, slug) VALUES
        (1, 'User Manual', 'user-manual'),
        (2, 'Obavijesti', 'obavijesti')");
} catch (PDOException $e) {
}

$db = new Database($pdo);

// Simple router
$page = $_GET['page'] ?? 'home';

$allowedPages = [
    'home'          => 'home.php',
    'manual'        => 'manual.php',
    'notifications' => 'notifications.php',
];

$file = $allowedPages[$page] ?? $allowedPages['home'];

require __DIR__ . '/templates/header.php';
require __DIR__ . '/pages/' . $file;
require __DIR__ . '/templates/footer.php';
