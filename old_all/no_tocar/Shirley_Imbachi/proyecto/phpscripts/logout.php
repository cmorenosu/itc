<?php
// logout.php

session_start(); // Iniciar sesión para poder destruirla

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión (o cualquier otra página)
header("Location: login_form.html"); // Suponiendo que el formulario de inicio está en login_form.html
exit();
?>

