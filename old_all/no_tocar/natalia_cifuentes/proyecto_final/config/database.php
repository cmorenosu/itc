<?php

class Database{

protected $url="localhost";
protected $user="root";
protected $password="123456789";
protected $dbname = "bd_natalia_cifuentes";
protected $conex; 

    public function __construct(){
        //Todas las configuraciones de conexión
        $this->conex = new mysqli(
            $this->url,
            $this->user,
            $this->password,
            $this->dbname
        ); 
        if ($this->conex->connect_error){
            die("<hr>Conexion fallida: " . $this->conex->connect_error);
        }else{
            $data="<hr>Conexión exitosa ";
        }
        echo $data;
    }

    public function insertar($sql){
        //$sql = " INSERT INTO usuario (nombre , email ) VALUES ( '$nombre', '$email')"; 
        $data=null;
        if ($this->conex->query($sql) === TRUE ) {
          $data ="Consulta sql exitosa";
        } else {
          $data = "Error:" . $sql . "<br>" . $this->conex->error;
        }  
        return $data;  
    }
    public function finalizar(){
        $this->conex->close();
    }

    public function query($sql, $params = []){
        $stmt = $this->conex->prepare($sql);
        if ($stmt === false){
            die("Error en la preparación: " . $this->conex->error);
        }
        if ($params){
            $stmt->bind_param(str_repeat('s', count($params)), ...$params);
        }
        $stmt->execute();
        return $stmt;

    }
    
}
$Database = new Database;
?>