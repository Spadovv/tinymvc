<?php
require_once __DIR__ . '/../../core/Database.php';

class Post {
    public static function all() {
        return Database::connect()
            ->query("SELECT * FROM posts")
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        $stmt = Database::connect()->prepare("SELECT * FROM posts WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($title,$content) {
        $stmt = Database::connect()->prepare("INSERT INTO posts (title,content) VALUES (?,?)");
        $stmt->execute([$title,$content]);
    }

    public static function delete($id) {
        $stmt = Database::connect()->prepare("DELETE FROM posts WHERE id=?");
        $stmt->execute([$id]);
    }
}
