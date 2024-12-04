<?php
class conexion {

    // Declaramos las variables de entorno
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "123456789";
    protected $dbname = "bd_jader_araujo";
    protected $conex = null;

    // con esta funcion creamos el objeto para MySQL 
    public function __construct() {

        $data = null;

        // hacemos la consulta en la base de datos
        $this->conex = new mysqli(

            $this->servername,
            $this->username,
            $this->password,
            $this->dbname
        );

        // validamos la conexion
        if($this->conex->connect_error){
            die("<hr>Conexion fallida ".$this->conex->connect_error);
        }
        else {
           $data = "<hr>conexion exitosa";
        }

        echo $data;
    }

    public function instalar($sql) {
        
        $data = null;

        if($this->conex->query($sql) === true) {
            $data = "Consulta SQL exitosa";
        } else {
            $data = "Error: ".$sql."<br>".$this->conex->error;
        }
        return $data;
    }

    public function finalizar() {
        $this->conex->close();
    }
} 

?>