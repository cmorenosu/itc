<?php

class conexion {

protected $url="localhost";
protected $user="root";
protected $password="123456789";
protected $dbname = "bd_facnori_medina";
protected $conex = null; 

    public function __constructor() {
        //Todas las configuraciones de conexión
        $this -> conex = new mysqli(
            $this -> url,
            $this -> user,
            $this -> password,
            $this -> dbname
        ); 
        if ($this -> conex -> connect_error){
            die ("Conexion fallida: " . $this -> conex -> connect_error);
        }
    }
}

?>