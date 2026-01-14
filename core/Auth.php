<?php
session_start();

class Auth {
    public static function user() {
        return $_SESSION['user'] ?? null;
    }

    public static function isAdmin() {
        return self::user() && self::user()['role'] === 'admin';
    }
}
