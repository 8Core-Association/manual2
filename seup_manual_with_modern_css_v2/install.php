<?php
require_once __DIR__ . '/config/config.php';

$prefix = 'cms_';

$queries = [
    "CREATE TABLE IF NOT EXISTS {$prefix}categories (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        slug VARCHAR(255) NOT NULL UNIQUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci",

    "CREATE TABLE IF NOT EXISTS {$prefix}posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        content LONGTEXT NOT NULL,
        category_id INT NOT NULL,
        published TINYINT(1) DEFAULT 0,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (category_id) REFERENCES {$prefix}categories(id) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci",

    "INSERT IGNORE INTO {$prefix}categories (id, name, slug) VALUES
        (1, 'User Manual', 'user-manual'),
        (2, 'Obavijesti', 'obavijesti')"
];

try {
    foreach ($queries as $query) {
        $pdo->exec($query);
    }
    echo "✅ Tablice uspješno kreirane!<br>";
    echo "✅ Kategorije dodane!<br>";
    echo "<br>Možete obrisati install.php datoteku.";
} catch (PDOException $e) {
    echo "❌ Greška: " . $e->getMessage();
}
