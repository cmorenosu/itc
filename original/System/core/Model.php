<?php
require_once 'system/libraries/Database.php';
class Model {
    protected $db;

    public function __construct() {
        $this->db = new Database();
    }
}
