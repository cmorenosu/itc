<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Estudiantes PHP</title>
</head>

        
<body style="background-image: url('fondo.jpg'); background-size: cover;">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Servidor de Pruebas / <small>EITC</small></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!--<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>-->
            </div>
        </div>
    </nav>

    <br><br>
    <div class="container">
        <div class="row">



            <?php
            $carpetaBase = realpath(__dir__);
            $resultado = array();

            foreach (scandir($carpetaBase) as $carpeta) {
                if ($carpeta != '.' && $carpeta != '..' && is_dir($carpetaBase . DIRECTORY_SEPARATOR . $carpeta)) {
            ?>

                    <div class="col-md-3">
                        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Portal web</div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="/itc/<?php echo $carpeta; ?>" style="text-decoration:none; color:#FFF;"><?php echo $carpeta; ?></a>
                                </h5>
                                
                            </div>
                        </div>
                    </div>

            <?php
                    $resultado[] = $carpeta;
                }
            }

            ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>