<?php
class Database {
    private $conn;

    public function __construct() {
        $config = require '/config/database.php';
        $this->conn = new mysqli(
            $config['hostname'],
            $config['username'],
            $config['password'],
            $config['database']
        );

        if ($this->conn->connect_error) {
            die("Error en la conexión: " . $this->conn->connect_error);
        }
    }

    public function query($sql, $params = []) {
        $stmt = $this->conn->prepare($sql);
        if ($params) {
            $stmt->bind_param(str_repeat('s', count($params)), ...$params);
        }
        $stmt->execute();
        return $stmt->get_result();
    }
}
