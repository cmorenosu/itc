<?php

?>

<style>

        .left-side {
            width: 50%;
            display: flex;
            justify-content: center;
        }
        .right-side {
            width: 50%;
            display: flex;
            justify-content: flex-end;
        }
        .form-box {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #5f2eff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4a1fcf;
        }
        .form-footer {
            margin-top: 10px;
            text-align: left;
            font-size: 14px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="container">
        <!-- Cuadro de Acceder  -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-box">
                    <h2>Acceder</h2>
                    <form action="" method="POST">
                        <input type="text" name="user" placeholder="Nombre de usuario o correo electrónico" required>
                        <input type="password" name="password" placeholder="Contraseña" required>
                        <button type="submit">Acceder</button>
                        <div class="form-footer">
                            <input type="checkbox" name="remember"> Recuérdame
                            <br>
                            <a href="#">¿Olvidaste la contraseña?</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Cuadro de Registrarse -->
            <div class="col-md-6">
                <div class="form-box">
                    <h2>Registrarse</h2>
                    <form action="register.php" method="POST">
                        <input type="text" name="user" placeholder="Nombre de usuario" required>
                        <input type="email" name="email" placeholder="Dirección de correo electrónico" required>
                        <input type="password" name="password" placeholder="Contraseña" required>
                        <button type="submit">Registrarse</button>
                        <div class="form-footer">
                            <small>Los datos personales se utilizarán para gestionar su cuenta y mejorar la experiencia en este sitio. Consulte nuestra <a href="#">política de privacidad</a>.</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
