<?php
    session_start(); // Iniciar sesión

    $user="";
    $password="";
    // Datos simulados de usuario correcto
    $usuario_correcto = 'admin';
    $contrasenia_correcta = '123456';

    // Recibir datos del formulario
    $username = $_POST['user'];
    $password = $_POST['password'];

    include "phpscripts/head.php";
    include "phpscripts/menu_publico.php";
    include "vistas/principal.php";
    include "vistas/registro.php";
    echo "<h1>".$username." clave ".$password."<h1>";

    include "phpscripts/footer.php";
?>