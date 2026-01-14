<?php require 'header.php'; ?>
<h2>Админ панель</h2>
<a href="/close_admin.php">Закрыть админку</a>

<h3>Добавить пост</h3>
<form method="post">
<input name="title" placeholder="Заголовок"><br>
<textarea name="content" placeholder="Текст поста"></textarea><br>
<button name="add_post">Добавить</button>
</form>

<hr>
<h3>Посты</h3>
<?php foreach ($posts as $p): ?>
<p>
<b><?= htmlspecialchars($p['title']) ?></b>
<a href="?delete_post=<?= $p['id'] ?>">[удалить]</a>
</p>
<?php endforeach; ?>

<hr>
<h3>Комментарии</h3>
<?php foreach ($comments as $c): ?>
<p>
<b><?= $c['login'] ?></b> (<?= $c['title'] ?>): <?= htmlspecialchars($c['content']) ?>
<a href="?delete_comment=<?= $c['id'] ?>">[удалить]</a>
</p>
<?php endforeach; ?>

<hr>
<h3>Пользователи</h3>
<?php foreach ($users as $u): ?>
<p><?= $u['login'] ?> (<?= $u['role'] ?>)</p>
<?php endforeach; ?>

<?php require 'footer.php'; ?>
