<?php
require_once 'config/database.php';
$pdo = Database::connect();

$adminPass = password_hash('admin123', PASSWORD_DEFAULT);
$teknisiPass = password_hash('teknisi123', PASSWORD_DEFAULT);

$pdo->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)")
    ->execute(['admin', $adminPass, 'admin']);

$pdo->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)")
    ->execute(['teknisi', $teknisiPass, 'teknisi']);

echo "User admin dan teknisi ditambahkan!";
