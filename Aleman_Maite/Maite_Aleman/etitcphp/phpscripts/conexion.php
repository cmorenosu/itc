<?php
class conexion{
protected $user = "root";
protected $url= "localhost";
protected $pass= "123456789";
protected $bdname =  "bd_Maite_Aleman";
protected $conex =  null;


public function __construct(){
    $data = "<hr>";
    $this->conex = new mysqli(
    $this->url,
    $this->user,
    $this->pass,
    $this->bdname         
    );
    if ($this->conex->connect_error){
        $data = "conexion fallida: ".$this->conex->connect_error;
    }else{
        $data ="conexion exitosa";
    }
    echo $data;
}

/*
public function insertar ($sql){
$data=null;
if ($this ->conex->query($sql)== TRUE){
 $data = "consulta sql exitosa";
}else{
$data ="error: " . $sql . "<br>" .$this->conex->error;
}
return $data;
}

public function finalizar (){
    $this->conex->close();
}*/

}
?>