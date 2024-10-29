<?php
class conexion {

    // Declaramos las variables de entorno
    protected $user = "root";
    protected $url = "localhost";
    protected $pass = "123456789";
    protected $db = "db_jader_araujo"; 
    protected $conex = null;

    public function __construct() {

        // hacemos la consulta en la base de datos
        $this->conex = new mysqli(
            $this-> servername,
            $this-> username,
            $this-> password,
            $this-> dbname
        );

        // validamos la conexion
        if($this->conex->connect_error){
            die("Conexion fallida".$this->conex->connect_error);
        }
    }
} 

?>