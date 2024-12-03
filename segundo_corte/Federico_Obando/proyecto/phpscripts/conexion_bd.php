<?php
    $servername = "localhost";
    $username = "root";
    $password = "123456789";
    $dbname = "bd_federico_obando";

    // Crear la conexin
    $conn = new mysqli ( $servername , $username , $password , $dbname);

    // Verificar la conexin
    if ($conn -> connect_error) {
    die ("Conexion fallida : " . $conn -> connect_error) ;
    }
    echo "Conexion exitosa a la base de datos ’bd_federico_obando’";
?>
