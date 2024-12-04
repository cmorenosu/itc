<?php

//produccion
/*
return [
    'hostname' => 'ftpupload.net',
    'username' => 'if0_37810486',
    'password' => 'p512h345o128s',
    'database' => 'if0_37810486_bd_juan_rodriguez',
];
*/

//entorno de pruebas
return [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '123456789',
    'database' => 'bd_juan_rodriguez',
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