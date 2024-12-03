<?php
require_once '..\config\database.php';

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

//$user = new User;
//$user->register("Pancho", "pancho@gmail.com", "hbjcb8s90JVCIVY");
//$user->register("Simon", "simon@gmail.com", "hbjcb9s90JVsdVY");
//$user->register("Lilia", "lilia@witchmail.com", "hbjcb5s90JVm6lY");
//echo "conexión exitosa"; 
?>



<?php
require_once '..\config\database.php';

class Map {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function saveMap($userId, $mapData) {
        $sql = "INSERT INTO mapas (usuario_id, datos_mapa) VALUES (?, ?)";
        return $this->db->query($sql, [$userId, $mapData]);
    }

    public function getMap($userId) {
        $sql = "SELECT datos_mapa FROM mapas WHERE usuario_id = ?";
        $stmt = $this->db->query($sql, [$userId]);
        return $stmt->get_result()->fetch_assoc()['datos'] ?? null;
    }
}
$data = new map();
$json='[["b", "p", "b"], ["b", "p", "b"]]';
$data->saveMap(3, $json);
?>


