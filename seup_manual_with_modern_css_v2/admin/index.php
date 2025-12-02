<?php
define('APP_INIT', true);

require __DIR__ . '/../config/config.php';
require __DIR__ . '/../class/Database.php';

$db = new Database($pdo);

$base = rtrim(BASE_URL, '/');
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>SEUP Manual Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo $base; ?>/css/style.css">
    <script src="<?php echo $base; ?>/js/main.js" defer></script>
</head>
<body>
<header class="site-header">
    <div class="container">
        <h1>SEUP Manual – Admin</h1>
        <nav class="main-nav">
            <a href="<?php echo $base; ?>/">Frontend</a>
            <a href="<?php echo $base; ?>/admin/">Dashboard</a>
        </nav>
    </div>
</header>
<main class="site-main container">
    <h2>Dashboard</h2>
    <p>Ovdje će kasnije ići login, uređivanje obavijesti i priručnika.</p>
</main>
<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> 8Core / SEUP</p>
    </div>
</footer>
</body>
</html>
