<?php
/*
// produccion
return [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'quFtGyDhtL7FY8quFtGyDhtL7FY8',
    'database' => 'if0_37845090_bd_felipe_gomez',
];
*/ 


// entorno de pruebas
return [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '123456789',
    'database' => 'bd_felipe_gomez',
];

/*
    class Database {
        protected $user = "root";
        protected $url = "localhost";
        protected $pass = "";
        protected $dbname = "paraclase";
        protected $conn = null;
        public function __construct() {
            $this->conn  = new mysqli (
                $this->url,
                $this->user,
                $this->pass,
                $this->dbname
            );
            if ($this->conn->connect_error) {
                die ("Conexion fallida : " . $this->conn->connect_error) ;
                }
        }
        public function query($sql, $params=[]) {
            $stmt = $this->conn->prepare($sql);
            if ($stmt == false) {
                die ("Error en la preparación: ".$this->conn->error);
            }
            if ($params) {
                $stmt->bind_param(str_repeat('s', count($params)), ...$params);
            }
            $stmt->execute();
            return $stmt;
        }
        
        public function close(){
            $this->conn->close();
        }
    }
?>*/