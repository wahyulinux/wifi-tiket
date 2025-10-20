<?php
require_once 'config/database.php';

class Tiket {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }
    public function create($data) {
        $stmt = $this->conn->prepare("INSERT INTO tiket (id_pelanggan, deskripsi, status) VALUES (?, ?, 'Baru')");
        return $stmt->execute([$data['id_pelanggan'], $data['deskripsi']]);
    }

    public function getAll() {
        $stmt = $this->conn->prepare("
            SELECT tiket.*, pelanggan.nama AS nama_pelanggan 
            FROM tiket 
            JOIN pelanggan ON tiket.id_pelanggan = pelanggan.id 
            ORDER BY tiket.id DESC
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
    $stmt = $this->conn->prepare("
        SELECT tiket.*, pelanggan.nama AS nama_pelanggan 
        FROM tiket 
        JOIN pelanggan ON tiket.id_pelanggan = pelanggan.id 
        WHERE tiket.id = ?
    ");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateStatus($id, $status) {
        $sql = "UPDATE tiket SET status = ?";

        $params = [$status];

        if ($status === 'Diproses') {
            $sql .= ", waktu_mulai = NOW()";
        }

        if ($status === 'Selesai') {
            $sql .= ", waktu_selesai = NOW()";
        }

        $sql .= " WHERE id = ?";
        $params[] = $id;

        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM tiket WHERE id = ?");
        return $stmt->execute([$id]);
    }
}






