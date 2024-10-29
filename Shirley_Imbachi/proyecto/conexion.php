<?php
class conex2{
protected $servername = "root";
protected $username= "localhost";
protected $password= "123456789";
protected $bdname =  "bd_shirley_imbachi";

public function_construct(){
    $this -> conex = new mysqli(
    $this -> servername,
    $this -> username,
    $this -> password,
    $this -> bdname,         
    );
    if ($this ->conex-> connect_error){
        dile("conexion fallida: ".$this ->conex->connect_error);
    }
}
}
?>
