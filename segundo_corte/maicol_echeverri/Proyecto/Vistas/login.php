<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <h4>ingresa tu usuario y contraceña para iniciar sesion</h4>
        <form action="#" method="POST">
            <label for="username">Usuario:</label>
            <input type="text" name= "user" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" name= "password" id="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
