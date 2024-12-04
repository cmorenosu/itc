<?php
session_start(); // Iniciar sesion

//Datos simulados de usuario correcto
$usuario_correcto = 'bncifuentesg@itc.edeu.co';
$contraseña_correcta = '12345';

//Recibir datos del formulario
$username = $_POST['user'];
$password = $_POST['password'];

include "phpscrips/head.php";
include "phpscrips/menu_publico.php";
//include "vistas/principal.php";
include "vistas/login.php";
echo '<h1>'.$username.'user'.$password.'password'.'</h1>';

include "phpscrips/footer.php";

?>