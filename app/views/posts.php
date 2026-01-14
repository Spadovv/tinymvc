<h2>Список постов</h2>
<?php foreach ($posts as $p): ?>
<a href="post.php?id=<?= $p['id'] ?>"><?= htmlspecialchars($p['title']) ?></a><br>
<?php endforeach; ?>
