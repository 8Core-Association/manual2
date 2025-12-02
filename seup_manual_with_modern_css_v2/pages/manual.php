<?php
if (!defined('APP_INIT')) {
    die('Direct access not allowed.');
}

$prefix = 'cms_';
$posts = $db->fetchAll("
    SELECT p.*
    FROM {$prefix}posts p
    LEFT JOIN {$prefix}categories c ON p.category_id = c.id
    WHERE c.slug = 'user-manual' AND p.published = 1
    ORDER BY p.created_at DESC
");
?>

<h2>User Manual</h2>

<?php if (empty($posts)): ?>
    <p>Trenutno nema objavljenih priručnika.</p>
<?php else: ?>
    <?php foreach ($posts as $post): ?>
        <article class="post-item">
            <h3><?php echo htmlspecialchars($post['title']); ?></h3>
            <div class="post-meta">
                <span class="post-date"><?php echo date('d.m.Y', strtotime($post['created_at'])); ?></span>
            </div>
            <div class="post-content">
                <?php echo $post['content']; ?>
            </div>
        </article>
    <?php endforeach; ?>
<?php endif; ?>
