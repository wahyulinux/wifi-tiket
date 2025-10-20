<?php
require_once 'models/Tiket.php';

class TiketController {
    private $model;

    public function __construct() {
        $this->model = new Tiket();
    }

    public function index() {
        $tiket = $this->model->getAll();
        include 'views/tiket/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: index.php');
        } else {
            include 'views/tiket/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->updateStatus($id, $_POST['status']);
            header('Location: index.php');
        } else {
            $data = $this->model->getById($id);
            include 'views/tiket/edit.php';
        }
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: index.php');
    }
}
