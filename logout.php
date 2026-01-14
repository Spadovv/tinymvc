<?php
session_start();
session_destroy(); // уничтожаем все данные сессии
header("Location: /index.php"); // редирект на главную
exit;
