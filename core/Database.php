<?php
class Database {
    public static function connect() {
        $c = require __DIR__ . '/../config/db.php';
        return new PDO(
            "mysql:host={$c['host']};dbname={$c['db']};charset=utf8",
            $c['user'],
            $c['pass']
        );
    }
}
