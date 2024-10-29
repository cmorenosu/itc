<?php

class conex2
{
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "123456789";
    protected $dbname = "bd_mariangel";
    protected $conex = null;

    public function __construct()
    {
        //todas las configuraciones de conexión

        $this->conex = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname,
        );
        if ($this->conex->connect_error) {
            die("Conexión fallida: " . $this->conex->connect_error);
        }
    }
}

?>