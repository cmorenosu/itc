<?php
class Conexion{
   protected $servername = "localhost";
   protected $username = "root";
   protected $password = "123456789";
   protected $dbname = "bd_laura_bernal";
   protected $conex = null;

   public function __construct(){
        $data=null;
        $this->conex = new mysqli(
            $this->servername, 
            $this->username, 
            $this->password, 
            $this->dbname
        );
        if($this->conex->connect_error) {
            echo "ayuda";
            die("<hr>Conexion fallida: ".$this->conex->connect_error);
        }else{
            $data="<hr>Conexión Exitosa";
        }
        echo $data;
    }

    public function insertar($sql){
        $data=null;
        if ($this->conex->query($sql) === TRUE) {
            $data = "¡Conuslta sql exitosa!";
        }else{
            $data = "Error: " . $sql . "<br>" . $this->$conex->error;
        }
        return $data;
    }

    public function finalizar(){
        $this->conex->close();
    }
}