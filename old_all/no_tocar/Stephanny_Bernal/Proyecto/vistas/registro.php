<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guerra de Tanques</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<!DOCTYPE html>
<html lang="es">
<head>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro e Inicio de Sesión</title>
    <style>
        /* Estilos para la imagen de fondo */
        body {
            background-image: url(https://img.utdstc.com/screen/c73/517/c7351786a67396db0762ef461d787f80efb43128d3fc8d8d1422f7886f2b6e2d:600); /* Ruta de la imagen de fondo */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
        /* Asegura que el contenido esté bien centrado y se vea correctamente */
        .min-vh-100 {
            min-height: 100vh;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="d-flex flex-column min-vh-100 justify-content-center align-items-center" id="template-bg-3">

    <div class="card mb-5 p-5 bg-dark bg-gradient text-white col-md-4">
        <!-- Pestañas de navegación -->
        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active text-white bg-success" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Iniciar Sesión</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-white bg-success" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Registrar Cuenta</button>
            </li>
        </ul>

        <!-- Contenido de las pestañas -->
        <div class="tab-content" id="myTabContent">
            <!-- Formulario de inicio de sesión -->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <div class="card-header text-center">
                    <h3>Iniciar sesión</h3>
                </div>
                <div class="card-body mt-3">
                    <form name="login" action="" method="post">
                        <div class="input-group form-group mt-3">
                            <input type="text" name="user" class="form-control text-center p-3" placeholder="Usuario" name="username" required>
                        </div>
                        <div class="input-group form-group mt-3">
                            <input type="password" name="password" class="form-control text-center p-3" placeholder="Contraseña" name="password" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Acceder" class="btn btn-success mt-3 w-100 p-2" name="login-btn">
                        </div>
                    </form>
                    <?php if(!empty($loginResult)){?>
                    <div class="text-danger"><?php echo $loginResult;?></div>
                    <?php }?>
                </div>
            </div>

            <!-- Formulario de registro -->
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <div class="card-header text-center">
                    <h3>Registrar cuenta</h3>
                </div>
                <div class="card-body mt-3">
                    <form name="register" action="" method="post">
                        <div class="input-group form-group mt-3">
                            <input type="text" class="form-control text-center p-3" placeholder="Usuario" name="username" required>
                        </div>
                        <div class="input-group form-group mt-3">
                            <input type="email" class="form-control text-center p-3" placeholder="Correo electrónico" name="email" required>
                        </div>
                        <div class="input-group form-group mt-3">
                            <input type="password" class="form-control text-center p-3" placeholder="Contraseña" name="password" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Registrarse" class="btn btn-success mt-3 w-100 p-2" name="register-btn">
                        </div>
                    </form>
                    <?php if(!empty($registerResult)){?>
                    <div class="text-danger"><?php echo $registerResult;?></div>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="card-footer p-3 text-center">
            <div class="text-success">Bienvenido a nuestra plataforma. Por favor, elige iniciar sesión o registrarte.</div>
        </div>
    </div>

</div>

</body>
</html>