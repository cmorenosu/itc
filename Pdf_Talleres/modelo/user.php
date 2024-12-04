<?php
require_once 'database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function register($name, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO usuarios (nombre, correo, password) VALUES (?, ?, ?)";
        return $this->db->query($sql, [$name, $email, $hashedPassword]);
    }
/*
INSERT INTO usuarios (nombre, correo, password) 
VALUES 
("a","b@b.com","111"),
("b","a@a.com","222")
*/
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

$var = new user;
$var->register("pedro","pedro@gmail.com","123");
$var->register("pedro1","pedro2@gmail.com","456");
$var->register("pedro2","pedro3@gmail.com","789");
?>
