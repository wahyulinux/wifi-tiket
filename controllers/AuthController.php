<?php
require_once 'config/database.php';

class AuthController {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = [
                    'username' => $user['username'],
                    'role' => $user['role']
                ];
                header("Location: index.php");
            } else {
                $error = "Username atau password salah!";
                include 'views/auth/login.php';
            }
        } else {
            include 'views/auth/login.php';
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?action=login");
    }
}
