<?php
require_once __DIR__ . '/../models/Post.php';
require_once __DIR__ . '/../models/Comment.php';
require_once __DIR__ . '/../../core/Auth.php';

if (!Auth::isAdmin()) die('Доступ запрещён');

/* Добавление поста */
if (isset($_POST['add_post'])) {
    Post::create($_POST['title'], $_POST['content']);
}

/* Удаление поста */
if (isset($_GET['delete_post'])) {
    Post::delete($_GET['delete_post']);
}

/* Удаление комментария */
if (isset($_GET['delete_comment'])) {
    Comment::delete($_GET['delete_comment']);
}
