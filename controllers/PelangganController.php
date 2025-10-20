<?php

if ($_SESSION['user']['role'] !== 'admin') {
    echo "Akses ditolak.";
    exit;
}

require_once 'models/Pelanggan.php';

class PelangganController {
    private $model;

    public function __construct() {
        $this->model = new Pelanggan();
    }

    public function index() {
        $pelanggan = $this->model->getAll();
        include 'views/pelanggan/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: index.php?page=pelanggan');
        } else {
            include 'views/pelanggan/create.php';
        }
    }
}
