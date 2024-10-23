<?php
    session_start(); // Iniciar sesión
 
    // Datos simulados de usuario correcto
    $usuario_correcto = 'msbeltrand@itc.edu.co';
    $contrasenia_correcta = '123456';
    if($_SERVER['REQUEST_METHOD']=='POST'){
            // Recibir datos del formulario
            $username = $_POST['user'];
            $password = $_POST['password'];
    }else{
        $username = null;
        $password = null;  
    }

    include "phpscripts/head.php";
    include "phpscripts/menuPublico.php";
    include "vistas/principal.php";
   
    if ($username === $usuario_correcto && $password === $contrasenia_correcta) {
        // Guardar nombre de usuario en sesión
        $_SESSION['username'] = $username;
        echo "<h1><strong>Usuario:</strong> ".$username." <br><strong>Clave:</strong> ".$password."</h1>";
    } else {
        // Error de inicio de sesión
        include "vistas/login.php";
        include "code/alertaInicio.php";
    }
    include "phpscripts/footer.php";
?>