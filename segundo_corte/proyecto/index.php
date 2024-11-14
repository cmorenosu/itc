<?php
    session_start(); // Iniciar sesión

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



    include "phpscripts/head.php";
    include "phpscripts/menu_publico.php";
    include "vistas/principal.php";
    
    
    if ($username === $usuario_correcto && $password === $contrasenia_correcta) {
        // Guardar nombre de usuario en sesión
        $_SESSION['username'] = $username;
        //echo "¡Bienvenido, $username!";
        //echo '<br><a href="logout.php">Cerrar Sesión</a>';
        echo "<h1>".$username." clave ".$password."</h1>";
    } else {
        // Error de inicio de sesión
        if ( !isset( $_SESSION['usuario'] ) ) {
            echo '<div class="alert alert-warning " role="alert">
            Existe un usuario Activo!!!
        </div>';
        }else{
            include "vistas/login.php";
            echo '<div class="alert alert-danger" role="alert">
                Nombre de usuario o contraseña incorrectos.
            </div>';
        }
        
    }

    include "phpscripts/footer.php";
?>


<?php


// Verificar usuario y contraseña

?>