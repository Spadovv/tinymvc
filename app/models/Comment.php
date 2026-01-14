<?php
require_once __DIR__ . '/../../core/Database.php';

class Comment {
    public static function byPost($id) {
        $stmt = Database::connect()->prepare(
            "SELECT c.id, c.content, u.login FROM comments c 
             JOIN users u ON u.id = c.user_id 
             WHERE post_id=?"
        );
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($post,$user,$text) {
        $stmt = Database::connect()->prepare(
            "INSERT INTO comments (post_id,user_id,content) VALUES (?,?,?)"
        );
        $stmt->execute([$post,$user,$text]);
    }

    public static function delete($id) {
        $stmt = Database::connect()->prepare("DELETE FROM comments WHERE id=?");
        $stmt->execute([$id]);
    }
}
