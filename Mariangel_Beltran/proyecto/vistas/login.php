<?php
?>

<br>
<br>
<br>

<!--contenido-->
<div class="container">
    <div class="text-center">
        <div class="row justify-content-around">
            <div class="col-md-4 mb-2 mt-5">
                <p class="h1">Registro</p>

                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="validationDefault01" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="validationDefault02" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefaultUsername" class="form-label">Apodo</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="text" class="form-control" id="validationDefaultUsername"
                                aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword5" class="form-label">Password</label>
                        <input type="password" id="inputPassword5" class="form-control"
                            aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not
                            contain spaces, special characters, or emoji.
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Acepto los términos y condiciones
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
            </div>

            <div class="col-md-4 mb-2 mt-5">
                <p class="h1">Iniciar sesión</p>

                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dirección de correo electrónico</label>
                        <input type="email" name="user" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nunca compartiremos tu contraseña con nadie.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--fin contenido-->

<br>
<br>
<br>