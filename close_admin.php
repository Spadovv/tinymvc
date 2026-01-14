<?php
session_start();
unset($_SESSION['admin_mode']); // выключаем режим админки
header("Location: /index.php"); // редирект на обычную страницу
exit;