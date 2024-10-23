<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "bd_juan_triviño";

// Crear la conexion
 $conn = new mysqli($servername , $username , $password , $dbname
   );

// Verificar la conexion
if ($conn -> connect_error) {
   die ("Conexion fallida: " . $conn->connect_error);
}
echo "Conexion exitosa a la base de datos ’bd_juan_triviño’";
?>