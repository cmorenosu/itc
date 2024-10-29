<br>
<link rel="stylesheet" href="estilo.css">

<!-- Container -->
<div class="container my-5">
    <!-- Row -->
    <div class="row justify-content-center">
        <!-- Columna de Login -->
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Bienvenidos al sistema de juegos XYZ</h3>
                    <form method="post" action="index.php">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                            <input type="email" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo">
                            <div id="emailHelp" class="form-text">Por favor, ingrese un correo válido.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Fin de Columna de Login -->
    </div>
    <!-- Fin de Row -->
</div>
<!-- Fin de Container -->
<br>
