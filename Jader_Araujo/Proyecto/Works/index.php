<?php
    session_start();    // Iniciar sesión
    include "phpscripts/head.php";  // incluimos el encabezado
    include "phpscripts/Menu_publlico.php";     // incluimos el menu principal
    include "phpscripts/contenido.php";     // incluimos el contenido 

    // Datos simulados de usuario correcto
    $usuario_correcto = 'admin';
    $contrasenia_correcta = '123456';

    if($_SERVER['REQUEST_METHOD']=='POST'){

        // Recibir datos del formulario
        $username = $_POST['user'];
        $password = $_POST['password'];
    }else{
        
        $username = null;
        $password = null;  
    }
    
    if ($username === $usuario_correcto && $password === $contrasenia_correcta) {
        // Guardar nombre de usuario en sesión
        $_SESSION['username'] = $username;
        //echo "¡Bienvenido, $username!";
        //echo '<br><a href="logout.php">Cerrar Sesión</a>';
        echo "<h1>".$username." clave ".$password."</h1>";
    } else {
        
        // Error de inicio de sesión
        echo "Nombre de usuario o contraseña incorrectos.";
    }
    include "phpscripts/footer.php";
?>