<?php 
session_start(); //Iniciar sesión

$user = "";
$password = "";

//Datos simulados de usuario correcto
$usuario_correcto = 'admin';
$contraseña_correcta = '12345';

//Recibir datos de formulario 
$username = $_POST['user'];
$password = $_POST['password'];



include "phpscripts/head.php";
include "phpscripts/menu_publico.php";
include "vistas/principal.php";
include "vistas/login.php";
echo "<h1>".$username." clave ".$password."</h1>"; 

include "phpscripts/footer.php";
?>