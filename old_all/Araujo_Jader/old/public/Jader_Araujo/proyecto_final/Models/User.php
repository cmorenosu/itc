<?php

require_once '../config/database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = new database();
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

# Objeto de tipo Usuario
$objetoUsuario = new User;
$objetoUsuario->register("pedro","pedro@gmail.com","123");
$objetoUsuario->register("pedro1","pedro2@gmail.com","456");
$objetoUsuario->register("pedro2","pedro3@gmail.com","789");

?>