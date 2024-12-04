<?php
require_once '../config/conexion.php';

class User {
    private $db;

    public function __construct() { 
        $this->db = new conexion();
    }

    public function register($name, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO usuarios (nombre, correo, password) VALUES (?, ?, ?)";
        return $this->db->query($sql, [$name, $email, $hashedPassword]);
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM usuarios WHERE correo = ?";
        $stmt = $this->db->query($sql, [$email]);
        $user = $stmt->get_result()->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            return true;
        }
        return false;
    }
}

$var = new User;

$var->register("pedro", "pedro@gmail.com", "123");
$var->register("pedro1", "pedro1@gmail.com", "456");
$var->register("pedro2", "pedro2@gmail.com", "789");
?>