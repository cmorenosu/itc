<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "bd_mariana_palacio";

// Crear la c o n e x i n
$conn = new mysqli($servername , $username , $password , $dbname
   );

// Verificar la c o n e x i n
if ($conn->connect_error) {
  die ("Conexion fallida: " . $conn->connect_error);
}
echo "Conexion exitosa a la base de datos ’ejemplo ’";
?>