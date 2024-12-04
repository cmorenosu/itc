<?php
    class Database {
        protected $user = "root";
        protected $url = "localhost";
        protected $pass = "123456789";
        protected $dbname = "bd_federico_obando";
        protected $conn = null;

        public function __construct(Type $var = null) {
            $this -> database  = new mysqli (
                $this -> servername,
                $this -> username,
                $this -> password,
                $this -> dbname
            );

            if ($this -> database -> connect_error) {
                die ("Conexion fallida : " . $this -> conex -> connect_error) ;
                }
                echo "Conexion exitosa a la base de datos ’bd_federico_obando’";
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

    
?>