<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "bd_mariangel";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn -> connect_error) {
die ("Conexión fallida: ".$conn -> connect_error);
}
echo "Conexión exitosa a la base de datos 'bd_mariangel'";
?>

<br>
<br>