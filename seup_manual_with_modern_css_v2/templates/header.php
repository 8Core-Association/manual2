<?php
if (!defined('APP_INIT')) {
    die('Direct access not allowed.');
}
$base = rtrim(BASE_URL, '/');
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
        </nav>
    </div>
</header>
<main class="site-main container">
