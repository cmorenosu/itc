<?php

class Conexion{

protected $servername="localhost";
protected $user="root";
protected $password="123456789";
protected $dbname = "bd_felipe_gomez";
protected $conex = null; 

    public function __construct() {
        //Todas las configuraciones de conexión
        $data = null;
        $this -> conex = new mysqli(
            $this -> servername,
            $this -> user,
            $this -> password,
            $this -> dbname
        ); 

        if ($this -> conex -> connect_error){
            die ("<hr>Conexion fallida: " . $this -> conex -> connect_error);
        }
        else{
        $data ="<hr>conexion exitosa";
    }
    echo $data;
    }

    public function query ($sql,$params = []){
        $stmt = $this ->conex->prepare($sql);
        if($stmt === false){
            die("Error en la preparación: ".$this->conex->error);
        }
        if($params){
            $stmt -> bind_param(str_repeat('s',count($params)), ...$params);
        }
        $stmt-> execute();
        return $stmt;
    }

    public function insertar($sql){
       // $sql = "INSERT INTO usuario(nombre,email) VALUES('$nombre','$email')";
       $data=null;
    if($this ->conex-> query($sql)===TRUE) {
        $data="Usuario $nombre registrado exitosamente . <br >";
    } else {
        $data="Error :" . $sql . "<br>".$this->$conex -> error;
    }
    return $data;
}

public function finalizar (){
    $this -> conex -> close();
}

}

?>