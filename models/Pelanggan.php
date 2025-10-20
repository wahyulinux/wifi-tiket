<?php
require_once 'config/database.php';

class Pelanggan {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM pelanggan");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->conn->prepare("INSERT INTO pelanggan (nama, alamat, no_hp) VALUES (?, ?, ?)");
        return $stmt->execute([$data['nama'], $data['alamat'], $data['no_hp']]);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM pelanggan WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
