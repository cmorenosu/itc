<?php
class conexion {
    protected $user ="root";
    protected $url ="localhost";
    protected $pass ="123456789";
    protected $dbname ="bd_juan_rodriguez";
    protected $conex = null;

    public function __construct() {
        $data = null;
        $this->conex = new mysqli(
            $this->url,
            $this->user,
            $this->pass, 
            $this->dbname
        );
        if ($this->conex->connect_error){
            die ("<hr>Conexion fallida: " . $this->conex->connect_error);
        }else{
            $data= "<hr>Conexion exitosa";
        }
        echo $data;
    }    

    public function insertar($sql){
        //$sql ="INSERT INTO usuario (nombre, null) VALUES ('$nombre', '$email')";
        $data=null;
        if($this->conex->query($sql) === TRUE){
        $data = "Consulta sql exitosa";
        } else{ 
            $data = "Error: " . $sql . "<hr>" . $this->conex->error;
        }
        return $data;

    }

    public function query($sql, $params = []){
        $stmt = $this->conex->prepare($sql);
        if ($stmt === false){
            die("Error en la preparación: ". $this->conex->error);
        }
        if($params){
            $stmt->blind_paramar(str_repeat('s', count($params)), ...$params);
        }
        $stmt->execute();
        return $stmt;
    }

    public function finalizar(){
        $this->conex->close();
    }
}
