

<?php

echo "Este formulario se opera por clase: ";
include "conexion.php";

$mysldata = new conexion();

/*
include "conexion.php";

// Usuarios a insertar
$usuarios = [
['nombre' => 'Juan Perez', 'email' => 'juan@example.com'],
['nombre'  => 'Maria Lopez', 'email' => 'maria@example.com'],
['nombre' => 'Carlos Gomez', 'email' => 'carlos@example.com'],
['nombre' => 'Ana Martinez', 'email' => 'ana@example.com'],
['nombre' => 'Pedro Sanchez', 'email' => 'pedro@example.com']];

// Insertar usuarios
foreach ( $usuarios as $usuario ) {
    $nombre = $usuario ['nombre'];
    $email = $usuario ['email'];
    $sql = " INSERT INTO usuario (nombre , email ) VALUES ( '$nombre', '$email')";

    if ($conn -> query( $sql ) === TRUE ) {
        echo " Usuario $nombre registrado exitosamente . <br >";
    } 
    else 
    {
        echo " Error : " . $sql . "<br >" . $conn -> error ;
    }
}

// Cerrar la c o n e x i n
$conn -> close () ;
*/

?>
