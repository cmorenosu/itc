'<?php
    // Usuarios a insertar
    include "conexion_bd.php";
    
    $usuarios = [
        ['nombre' => 'Juan Perez', 'email' => 'juan@example.com '],
        ['nombre' => 'Maria Lopez', 'email' => ' maria@example.com '],
        ['nombre' => 'Carlos Gomez', 'email' => ' carlos@example.com'],
        ['nombre' => 'Ana Martinez', 'email' => 'ana@example.com '],
        ['nombre' => 'Pedro Sanchez', 'email' => ' pedro@example.com']
    ];

    // Insertar usuarios
    foreach ($usuarios as $usuario) {
        $nombre = $usuario ['nombre'];
        $email = $usuario ['email'];

        $sql = "INSERT INTO usuario (nombre , email) VALUES ('$nombre', '$email')";

        if ($conn->query($sql) === TRUE ) {
            echo "Usuario $nombre registrado exitosamente . <br >";
        } else {
            echo "Error : ".$sql."<br >".$conn->error;
        }
    }
    
    // Cerrar la conexion
    $conn -> close();
    
?>
