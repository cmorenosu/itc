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