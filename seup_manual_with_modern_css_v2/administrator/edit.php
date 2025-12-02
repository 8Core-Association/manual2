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

$post_id = $_GET['id'] ?? 0;
$post = null;
$error = '';
$success = '';

if ($post_id) {
    $post = $db->fetch("SELECT * FROM {$prefix}posts WHERE id = ?", [$post_id]);
    if (!$post) {
        header('Location: dashboard.php');
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $content = $_POST['content'] ?? '';
    $category_id = (int)($_POST['category_id'] ?? 0);
    $published = isset($_POST['published']) ? 1 : 0;

    if (empty($title)) {
        $error = 'Naslov je obavezan!';
    } elseif (empty($content)) {
        $error = 'Sadržaj je obavezan!';
    } elseif ($category_id === 0) {
        $error = 'Kategorija je obavezna!';
    } else {
        if ($post_id) {
            $db->execute(
                "UPDATE {$prefix}posts SET title = ?, content = ?, category_id = ?, published = ? WHERE id = ?",
                [$title, $content, $category_id, $published, $post_id]
            );
            $success = 'Objava uspješno ažurirana!';
        } else {
            $db->execute(
                "INSERT INTO {$prefix}posts (title, content, category_id, published) VALUES (?, ?, ?, ?)",
                [$title, $content, $category_id, $published]
            );
            $success = 'Objava uspješno kreirana!';
            $post_id = $db->lastInsertId();
        }

        $post = $db->fetch("SELECT * FROM {$prefix}posts WHERE id = ?", [$post_id]);
    }
}

$categories = $db->fetchAll("SELECT * FROM {$prefix}categories ORDER BY name");

$base = rtrim(BASE_URL, '/');
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title><?php echo $post_id ? 'Uredi objavu' : 'Nova objava'; ?> - <?php echo SITE_NAME; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $base; ?>/css/style.css">
    <script src="https://cdn.tiny.cloud/1/i36bor9xq5815no4er36rcf42p8s1dj7wray5r0pze7i0l7t/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
        .form-wrapper {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .form-group textarea {
            width: 100%;
            min-height: 400px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
            font-family: inherit;
        }
        .checkbox-group {
            display: flex;
            align-items: center;
        }
        .checkbox-group input {
            margin-right: 8px;
            width: 18px;
            height: 18px;
        }
        .checkbox-group label {
            margin: 0;
            font-weight: normal;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            margin-right: 10px;
        }
        .btn-primary {
            background: #007bff;
            color: white;
        }
        .btn-primary:hover {
            background: #0056b3;
        }
        .btn-secondary {
            background: #6c757d;
            color: white;
        }
        .btn-secondary:hover {
            background: #545b62;
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
        .form-actions {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <div class="container">
            <h1><?php echo $post_id ? 'Uredi objavu' : 'Nova objava'; ?></h1>
            <div class="admin-nav">
                <a href="dashboard.php">← Dashboard</a>
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

        <div class="form-wrapper">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="title">Naslov:</label>
                    <input type="text"
                           id="title"
                           name="title"
                           value="<?php echo htmlspecialchars($post['title'] ?? ''); ?>"
                           required>
                </div>

                <div class="form-group">
                    <label for="category_id">Kategorija:</label>
                    <select id="category_id" name="category_id" required>
                        <option value="">-- Odaberi kategoriju --</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category['id']; ?>"
                                    <?php echo ($post['category_id'] ?? 0) == $category['id'] ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($category['name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="content">Sadržaj:</label>
                    <textarea id="content" name="content"><?php echo htmlspecialchars($post['content'] ?? ''); ?></textarea>
                </div>

                <div class="form-group">
                    <div class="checkbox-group">
                        <input type="checkbox"
                               id="published"
                               name="published"
                               <?php echo ($post['published'] ?? 0) ? 'checked' : ''; ?>>
                        <label for="published">Objavljeno (vidljivo na stranici)</label>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Spremi</button>
                    <a href="dashboard.php" class="btn btn-secondary">Odustani</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        tinymce.init({
            selector: '#content',
            height: 500,
            menubar: true,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | formatselect | bold italic backcolor | \
                      alignleft aligncenter alignright alignjustify | \
                      bullist numlist outdent indent | removeformat | help',
            content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
            language: 'hr'
        });
    </script>
</body>
</html>
