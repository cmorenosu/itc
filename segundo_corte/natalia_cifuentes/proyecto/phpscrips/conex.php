<?php
    $servername = "localhost";
    $username = "root";
    $password = "123456789";
    $dbname = "bd_natalia_cifuentes";

    //crear loa conexion
    $conn = new mysqli ($servername, $username, $password, $dbname);

    //vereficar la conexion
    if ($conn -> connect_error) {
    die("conexion fallida" . $conn -> connect_error );
    }
    echo "conexion exitosa en la base de datos 'ejemplo' ";
?>
 