<?php
class Conexion{
   protected $servername = "localhost";
   protected $username = "root";
   protected $password = "123456789";
   protected $dbname = "bd_juan_triviño";
   protected $conex = null;

   public function __construct(){
       $this->conex = new mysqli(
         $this->servername, 
         $this->username, 
         $this->password, 
         $this->dbname
      );
      if ($this->conex->connect_error) {
         die ("Conexion fallida: " . $this->conex->connect_error);
      }
   }


}

// Crear la conexion
 

// Verificar la conexion

//echo "Conexion exitosa a la base de datos ’bd_juan_triviño’";
?>