<?php
class Conexion{
   protected $servername = "localhost";
   protected $username = "root";
   protected $password = "123456789";
   protected $dbname = "bd_juan_triviño";
   protected $conex = null;

   public function __construct(){
      $data=null; 
      $this->conex = new mysqli(
         $this->servername, 
         $this->username, 
         $this->password, 
         $this->dbname
      );
      if ($this->conex->connect_error) {
         die ("<hr>Conexion fallida: " . $this->conex->connect_error);
      }else{
         $data="<hr>conexion Exitosa";
      }
      echo $data;
   }

   public function insertar($sql){
     //$sql = "INSERT INTO usuario (nombre , email) VALUES ('$nombre', '$email')";
      $data=null;
      if ($this->conex->query($sql) === TRUE) {
         $data = "consulta sql Exitosa";
      } else {
         $data = "Error: " . $sql . "<br>" . $this->conex->error;
      }
      return $data;
   }

   public function finalizar(){
      $this->conex->close();
   }


}

// Crear la conexion
 

// Verificar la conexion

//echo "Conexion exitosa a la base de datos ’bd_juan_triviño’";
?>