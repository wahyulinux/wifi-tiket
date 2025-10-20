<?php

session_start();

// Redirect jika belum login dan bukan ke login page
$publicPages = ['login'];
$action = $_GET['action'] ?? 'index';

if (!isset($_SESSION['user']) && !in_array($action, $publicPages)) {
    header('Location: index.php?action=login');
    exit;
}

$action = $_GET['action'] ?? 'index';
$page = $_GET['page'] ?? 'tiket';
$id = $_GET['id'] ?? null;

if ($action === 'login' || $action === 'logout') {
    require_once 'controllers/AuthController.php';
    $auth = new AuthController();

    if ($action === 'login') $auth->login();
    if ($action === 'logout') $auth->logout();
    exit;
}


if ($page === 'pelanggan') {
    require_once 'controllers/PelangganController.php';
    $controller = new PelangganController();

    switch ($action) {
        case 'create':
            $controller->create();
            break;
        default:
            $controller->index();
    }
} else {
    require_once 'controllers/TiketController.php';
    $controller = new TiketController();

    switch ($action) {
        case 'create':
            $controller->create();
            break;
        case 'edit':
            $controller->edit($id);
            break;
        case 'delete':
            $controller->delete($id);
            break;
        default:
            $controller->index();
    }
}
