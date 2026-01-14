<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Простой форум</title>
<link rel="stylesheet" href="/style.css">
</head>
<body>
<h1>Простой форум</h1>
<?php if (Auth::user()): ?>
    <p>Привет, <?= Auth::user()['login'] ?> | <a href="/index.php?logout=1">Выйти</a></p>
<?php else: ?>
    <a href="/login.php">Войти</a> | <a href="/register.php">Регистрация</a>
<?php endif; ?>
<?php if (Auth::isAdmin()): ?>
<a href="/admin.php">Админ панель</a>
<?php endif; ?>
<hr>
