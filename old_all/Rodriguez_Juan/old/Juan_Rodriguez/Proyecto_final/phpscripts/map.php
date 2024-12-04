<?php
require_once 'conexion.php';

class Map {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function saveMap($userId, $mapData) {
        $sql = "INSERT INTO mapas (usuario_id, datos_mapas) VALUES (?, ?)";
        return $this->db->query($sql, [$userId, $mapData]);
    }

    public function getMap($userId) {
        $sql = "SELECT datos FROM mapas WHERE usuario_id = ?";
        $stmt = $this->db->query($sql, [$userId]);
        return $stmt->get_result()->fetch_assoc()['datos'] ?? null;
    }
}
?>
