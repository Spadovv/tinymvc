<?php
session_start();
unset($_SESSION['admin_mode']); 
header("Location: /index.php"); 
exit;