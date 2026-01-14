<?php
require 'core/Database.php';
require 'core/Auth.php';
require 'app/models/Post.php';
require 'app/models/Comment.php';
require 'app/controllers/PostController.php';

$post = Post::find($_GET['id']);
$comments = Comment::byPost($_GET['id']);

require 'app/views/post.php';
