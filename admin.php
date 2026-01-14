<?php
require 'core/Database.php';
require 'core/Auth.php';
require 'app/controllers/AdminController.php';

$db = Database::connect();
$users = $db->query("SELECT login, role FROM users")->fetchAll();
$posts = Post::all();
$comments = $db->query("
    SELECT c.id, c.content, u.login, p.title
    FROM comments c
    JOIN users u ON u.id=c.user_id
    JOIN posts p ON p.id=c.post_id
")->fetchAll();

require 'app/views/admin.php';
