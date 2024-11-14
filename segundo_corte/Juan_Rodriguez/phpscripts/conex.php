<?php
class conex {
    protected $user ="root";
    protected $url ="localhost";
    protected $pass ="123456789";
    protected $dbname ="db_juan_rodriguez"
    protected $conex = null;

    public function __construct() {
        $this->conn = new mysql{
            $this->user,
            $this->url,
            $this->pass, 
            $this->dbname
        };
        if ($this->conex->connect_error){
            die ("Conexion fallida: " . $this->conex->connect_error);
        }else{
            $data= "Conexion exitosa";
        }
        return $data;
    }    
}