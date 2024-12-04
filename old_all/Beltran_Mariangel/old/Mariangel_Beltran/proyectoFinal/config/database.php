<?php

class database
{
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "123456789";
    protected $dbname = "bd_mariangel";
    protected $conex = null;

    public function __construct()
    {
        //todas las configuraciones de conexión
        $data = null;
        $this->conex = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname,
        );
        if ($this->conex->connect_error) {
            die("<br>Conexión fallida: " . $this->conex->connect_error);
        } else {
            $data = "<br>Conexión exitosa";
        }
        echo $data;
    }

    public function insertar($sql)
    {
        // $sql = "INSERT INTO usuario(nombre,email) VALUES ('$nombre','$email')";
        $data = null;
        if ($this->conex->query($sql) === TRUE) {
            $data = "Consulta SQL exitosa. <br>";
        } else {
            $data = "Error: " . $sql . "<br>" . $this->conex->error;
        }
        return $data;
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->conex->prepare($sql);
        if ($stmt === false) {
            die("Error en la preparación: " . $this->conex->error);
        }
        if ($params) {
            $stmt->bind_param(str_repeat('s', count($params)), ...$params);
        }
        $stmt->execute();
        return $stmt;
    }

    public function finalizar()
    {
        $this->conex->close();
    }
}

?>