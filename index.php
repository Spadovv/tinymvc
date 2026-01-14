<?php
require 'core/Database.php';
require 'core/Auth.php';

/* Logout */
if (isset($_GET['logout'])) {
    session_destroy();      // уничтожаем сессию
    header("Location: /index.php"); // редирект на главную
    exit;
}

require 'app/models/Post.php';

$posts = Post::all();

require 'app/views/header.php';
require 'app/views/posts.php';
require 'app/views/footer.php';
