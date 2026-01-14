<?php
require_once __DIR__ . '/../models/Post.php';
require_once __DIR__ . '/../models/Comment.php';
require_once __DIR__ . '/../../core/Auth.php';

/* Добавление комментария */
if (isset($_POST['add_comment']) && Auth::user()) {
    Comment::create(
        $_GET['id'],
        Auth::user()['id'],
        $_POST['text']
    );
    header("Location: /post.php?id=" . $_GET['id']);
    exit;
}
