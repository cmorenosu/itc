<?php
$servername = "localhost";
 $username = "root";
$password = "123456789";
$dbname = "bd_maite_aleman";

// Crear la c o n e x i n
$conn = new mysqli ( $servername , $username , $password , $dbname);

 // Verificar la c o n e x i n
 if ($conn -> connect_error ){
 die (" C o n e x i n fallida : " .$conn -> connect_error ) ;
}
echo " C o n e x i n exitosa a la base de datos 'bd_maite_aleman '";
 ?>

 <br>
 <br>