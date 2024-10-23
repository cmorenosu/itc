<?php
$servername = "https://phpserver";
$username = "root";
$password = "";
$dbname = "ejemplo";

//crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);

//verificar conexion
if  ($conn->connect_error){
    die("Conexion fallida:" . $conn->connect_error);
}

echo "Coneccion exitosa a la base de datos: " . $dbname;
?>