<?php
require_once __DIR__ . '/../../core/Database.php';

class User {
    public static function find($login) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM users WHERE login=?");
        $stmt->execute([$login]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($login, $password) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO users (login,password) VALUES (?,?)");
        $stmt->execute([
            $login,
            password_hash($password, PASSWORD_DEFAULT)
        ]);
    }
}
