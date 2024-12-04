<?php
    session_start();
    $user = [""];
    $password = [""];

    $usuario_correcto = "admin@apocosi.com";
    $contraseña_correcta = "3312";

    $username = $_POST['user'];
    $password = $_POST['password'];

    if ($username === $usuario_correcto && $password === $contraseña_correcta){
        $_SESSION["usename"] = $username;
        echo "¡Bienvenido, $username!";
        echo '<br><a href ="logout.php">Cerrar Sesión</br>';
    } else {
        echo "Correo o cntraseña erroneos";
    };
    include "..\phpscripts\head.php";
    include "..\phpscripts/menu_publico.php";
?>

<!-- Inicio login-->
<div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
            <h3 class="card-title text-center mb-4">Iniciar sesión</h3>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="user" class="form-control" id="email" placeholder="Ingresa tu correo" required>
                    <div id="emailHelp" class="form-text">A poco si muy vrgs</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña"
                        required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Recordarme</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
            </form>
            <div class="text-center mt-3">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="text-center mt-2">
                <a href="#">Crear una cuenta nueva</a>
            </div>
        </div>
    </div>
    <!-- Fin login-->