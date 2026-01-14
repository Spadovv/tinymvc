<?php
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../../core/Auth.php';

$error = null;

/* Регистрация */
if (isset($_POST['register'])) {
    if (!User::find($_POST['login'])) {
        User::create($_POST['login'], $_POST['password']);
        header("Location: /login.php");
        exit;
    } else {
        $error = "Пользователь уже существует";
    }
}

/* Вход */
if (isset($_POST['login_btn'])) {
    $user = User::find($_POST['login']);
    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user'] = $user;
        header("Location: /index.php");
        exit;
    } else {
        $error = "Неверный логин или пароль";
    }
}
