<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

define('APP_INIT', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../class/Database.php';

$db = new Database($pdo);
$prefix = 'cms_';

$success = '';
$error = '';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $id = $_GET['id'] ?? 0;

    if ($action === 'publish' && $id) {
        $db->execute("UPDATE {$prefix}posts SET published = 1 WHERE id = ?", [$id]);
        $success = 'Objava objavljena!';
    } elseif ($action === 'unpublish' && $id) {
        $db->execute("UPDATE {$prefix}posts SET published = 0 WHERE id = ?", [$id]);
        $success = 'Objava skrivena!';
    } elseif ($action === 'delete' && $id) {
        $db->execute("DELETE FROM {$prefix}posts WHERE id = ?", [$id]);
        $success = 'Objava obrisana!';
    } elseif ($action === 'logout') {
        session_destroy();
        header('Location: index.php');
        exit;
    }
}

$posts = $db->fetchAll("
    SELECT p.*, c.name as category_name
    FROM {$prefix}posts p
    LEFT JOIN {$prefix}categories c ON p.category_id = c.id
    ORDER BY p.created_at DESC
");

$base = rtrim(BASE_URL, '/');
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard - <?php echo SITE_NAME; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $base; ?>/css/style.css">
    <style>
        .admin-header {
            background: #343a40;
            color: white;
            padding: 15px 0;
            margin-bottom: 30px;
        }
        .admin-header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .admin-header h1 {
            margin: 0;
            font-size: 24px;
        }
        .admin-nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            padding: 8px 15px;
            background: #495057;
            border-radius: 4px;
        }
        .admin-nav a:hover {
            background: #6c757d;
        }
        .btn {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            border: none;
        }
        .btn-primary {
            background: #007bff;
            color: white;
        }
        .btn-primary:hover {
            background: #0056b3;
        }
        .btn-success {
            background: #28a745;
            color: white;
        }
        .btn-warning {
            background: #ffc107;
            color: #212529;
        }
        .btn-danger {
            background: #dc3545;
            color: white;
        }
        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
        }
        .alert {
            padding: 12px 20px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .posts-table {
            width: 100%;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .posts-table table {
            width: 100%;
            border-collapse: collapse;
        }
        .posts-table th {
            background: #f8f9fa;
            padding: 12px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid #dee2e6;
        }
        .posts-table td {
            padding: 12px;
            border-bottom: 1px solid #dee2e6;
        }
        .posts-table tr:last-child td {
            border-bottom: none;
        }
        .status-badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }
        .status-published {
            background: #d4edda;
            color: #155724;
        }
        .status-unpublished {
            background: #f8d7da;
            color: #721c24;
        }
        .actions {
            white-space: nowrap;
        }
        .actions a {
            margin-right: 5px;
        }
        .mb-20 {
            margin-bottom: 20px;
        }
        .empty-state {
            text-align: center;
            padding: 40px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <div class="container">
            <h1>Admin Dashboard</h1>
            <div class="admin-nav">
                <a href="<?php echo $base; ?>/" target="_blank">Pregled stranice</a>
                <a href="?action=logout">Odjava</a>
            </div>
        </div>
    </div>

    <div class="container">
        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <div class="mb-20">
            <a href="edit.php" class="btn btn-primary">+ Nova objava</a>
        </div>

        <div class="posts-table">
            <?php if (empty($posts)): ?>
                <div class="empty-state">
                    <p>Još nema objava. Kliknite na "Nova objava" za dodavanje sadržaja.</p>
                </div>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Naslov</th>
                            <th>Kategorija</th>
                            <th>Status</th>
                            <th>Datum</th>
                            <th>Akcije</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($post['title']); ?></td>
                                <td><?php echo htmlspecialchars($post['category_name']); ?></td>
                                <td>
                                    <?php if ($post['published']): ?>
                                        <span class="status-badge status-published">Objavljeno</span>
                                    <?php else: ?>
                                        <span class="status-badge status-unpublished">Skriveno</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo date('d.m.Y H:i', strtotime($post['created_at'])); ?></td>
                                <td class="actions">
                                    <a href="edit.php?id=<?php echo $post['id']; ?>" class="btn btn-primary btn-sm">Uredi</a>
                                    <?php if ($post['published']): ?>
                                        <a href="?action=unpublish&id=<?php echo $post['id']; ?>"
                                           class="btn btn-warning btn-sm"
                                           onclick="return confirm('Želite li sakriti ovu objavu?')">Sakrij</a>
                                    <?php else: ?>
                                        <a href="?action=publish&id=<?php echo $post['id']; ?>"
                                           class="btn btn-success btn-sm">Objavi</a>
                                    <?php endif; ?>
                                    <a href="?action=delete&id=<?php echo $post['id']; ?>"
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Jeste li sigurni da želite obrisati ovu objavu?')">Obriši</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
