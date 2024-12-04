<?php

require_once '../config/database.php';

# Declaramos la clase map
class Map {

    # Declaramos la v
    private $db;

    # Definimos la funcion que instancia un PHP Data Object(PDO)
    # que crea una conexion con la base de datos
    public function __construct() {
        $this->db = new database();
    }

    public function saveMap($userId, $mapData) {
        $sql = "INSERT INTO mapas (usuario_id, datos_mapa) VALUES (?, ?)";
        return $this->db->query($sql, [$userId, $mapData]);
    }

    public function getMap($userId) {
        $sql = "SELECT datos FROM mapas WHERE usuario_id = ?";
        $stmt = $this->db->query($sql, [$userId]);
        return $stmt->get_result()->fetch_assoc()['datos_mapa'] ?? null;
    }
}

$objetoMapa = new Map();
$objetoMapa = ("","[
    ['b', 'b', 'b', 'b', 'b', 'b'],
    ['b', 'b', 'p', 'p', 'p', 'b'],
    ['b', 'b', 'p', 'p', 'p', 'b'],
    ['b', 'b', 'b', 'b', 'p', 'b'],
    ['b', 'b', 'p', 'p', 'p', 'b'],
    ['b', 'b', 'p', 'p', 'p', 'b'],
    ['b', 'b', 'b', 'b', 'b', 'b']
]");




?>

?>
