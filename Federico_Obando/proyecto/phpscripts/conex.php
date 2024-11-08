<?php
    class conex {
        protected $user = "root";
        protected $url = "localhost";
        protected $pass = "123456789";
        protected $dbname = "bd_federico_obando";
        protected $conex = null;

        public function __construct(Type $var = null) {
            $this -> conex  = new mysqli (
                $this -> servername,
                $this -> username,
                $this -> password,
                $this -> dbname
            );

            if ($this -> conex -> connect_error) {
                die ("Conexion fallida : " . $this -> conex -> connect_error) ;
                }
                echo "Conexion exitosa a la base de datos ’bd_federico_obando’";
        }
    }
    
?>