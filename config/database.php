<?php
class Database {
    public static function connect() {
        try {
            return new PDO("mysql:host=localhost;dbname=tiket_wifi", "root", "", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }
}
