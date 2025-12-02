<?php
if (!defined('APP_INIT')) {
    die('Direct access not allowed.');
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ' . BASE_URL);
    exit;
}

$base = rtrim(BASE_URL, '/');
$isLoggedIn = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title><?php echo SITE_NAME; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $base; ?>/css/style.css">

    <!-- JS -->
    <script src="<?php echo $base; ?>/js/main.js" defer></script>
</head>
<body>
<header class="site-header">
    <div class="container">
        <h1 class="site-title"><?php echo SITE_NAME; ?></h1>
        <nav class="main-nav">
            <a href="<?php echo $base; ?>/">Početna</a>
            <a href="<?php echo $base; ?>/index.php?page=manual">User manual</a>
            <a href="<?php echo $base; ?>/index.php?page=notifications">Obavijesti</a>
            <?php if ($isLoggedIn): ?>
                <a href="<?php echo $base; ?>/administrator/dashboard.php" style="background: #28a745; padding: 8px 15px; border-radius: 4px;">Admin</a>
                <a href="<?php echo $base; ?>/?logout=1" style="background: #dc3545; padding: 8px 15px; border-radius: 4px;">Odjava</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
<main class="site-main container">
