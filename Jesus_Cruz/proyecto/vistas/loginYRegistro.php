<?php

?>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guerra de Tanques</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .content-left {
            padding: 40px;
            background-color: #007bff;
            color: white;
            text-align: center;
        }
        .content-right {
            padding: 40px;
            position: relative;
        }
        .form-header {
            display: flex;
            justify-content: center;
            position: relative;
            margin-bottom: 20px;
            width: 100%;
            background-color: #f0f0f0;
            padding: 5px;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-header button {
            flex: 1;
            padding: 10px 20px;
            border: none;
            background: none;
            cursor: pointer;
            position: relative;
            z-index: 2;
            color: #555;
            font-size: 16px;
            font-weight: bold;
        }
        .form-header button.active {
            color: white;
        }
        .slider {
            position: absolute;
            top: 5px;
            left: 0;
            width: 50%;
            height: 100%;
            background-color: #007bff;
            border-radius: 30px;
            z-index: 1;
        }
        form {
            display: none;
            flex-direction: column;
        }
        form.active {
            display: flex;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Sección izquierda con texto -->
        <div class="row">
            <div class="col-md-6 content-left">
                <h1>Bienvenido a la Guerra de Tanques</h1>
                <p>Accede a tu cuenta o crea una nueva para comenzar la batalla y demostrar tus habilidades estratégicas.</p>
                <img src="https://wallpapers.com/images/high/soldier-tanks-war-9iis4vh5sxdzc09b.webp" alt="Correo" style="width: 420px;">
            </div>

            <!-- Sección derecha con el formulario de login/registro -->
            <div class="col-md-6 content-right">
                <div class="form-header">
                    <button id="login-btn" class="active">Iniciar Sesión</button>
                    <button id="register-btn">Registrarse</button>
                    <div class="slider" id="slider"></div>
                </div>

                <!-- Formulario de Inicio de Sesión -->
                <form id="login-form" method="post" action="" class="active">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="user" placeholder="Nombre de usuario" required class="form-control">
                    <input type="password" name="password" placeholder="Contraseña" required class="form-control">
                    <input type="submit" value="Entrar" class="btn btn-primary">
                </form>

                <!-- Formulario de Registro -->
                <form id="register-form" method="post" action="">
                    <h2>Registrarse</h2>
                    <input type="text" name="user" placeholder="Nombre de usuario" required class="form-control">
                    <input type="email" name="email" placeholder="Correo electrónico" required class="form-control">
                    <input type="password" name="password" placeholder="Contraseña" required class="form-control">
                    <input type="submit" value="Registrarse" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <script>
        const loginBtn = document.getElementById('login-btn');
        const registerBtn = document.getElementById('register-btn');
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const slider = document.getElementById('slider');

        loginBtn.addEventListener('click', () => {
            loginForm.classList.add('active');
            registerForm.classList.remove('active');
            loginBtn.classList.add('active');
            registerBtn.classList.remove('active');
            slider.style.left = '0';
        });

        registerBtn.addEventListener('click', () => {
            registerForm.classList.add('active');
            loginForm.classList.remove('active');
            registerBtn.classList.add('active');
            loginBtn.classList.remove('active');
            slider.style.left = '50%';
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76A4LYHHyemfqe1pXbsHc/W+V3q8MR5AiVZ4ASjSmu3C4bYZZYHwwI7CHsI2Dyw" crossorigin="anonymous"></script>
</body>
</html>