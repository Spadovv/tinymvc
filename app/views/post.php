<?php require 'header.php'; ?>
<h2><?= htmlspecialchars($post['title']) ?></h2>
<p><?= htmlspecialchars($post['content']) ?></p>

<h3>Комментарии</h3>
<?php foreach ($comments as $c): ?>
<p><b><?= $c['login'] ?>:</b> <?= htmlspecialchars($c['content']) ?></p>
<?php endforeach; ?>

<?php if (Auth::user()): ?>
<form method="post">
<textarea name="text"></textarea><br>
<button name="add_comment">Отправить</button>
</form>
<?php else: ?>
<p>Чтобы оставить комментарий, войдите.</p>
<?php endif; ?>

<?php require 'footer.php'; ?>
