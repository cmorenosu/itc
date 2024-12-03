<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Estudiantes PHP</title>
</head>


<body style="background-image: url('imagenes_genericas/fondo.png'); background-size: cover; color: #FFF ">

   

    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #636363; opacity:0.9;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="imagenes_genericas/logo.png" width="150px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  style="color: #FFF" aria-current="page" target="_blank" href=<?php echo "http://".$_SERVER["SERVER_NAME"]."/phpmyadmin"; ?>>MySQL Base de Datos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  style="color: #FFF" target="_blank" href="https://github.com/cmorenosu/itc">Repositorio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  style="color: #FFF" target="_blank" href="https://mrcamssys.rf.gd/mrcamssys/?i=1">Web Docente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  style="color: #FFF" target="_blank" href="https://www.etitc.edu.co/es/">Portal Institucional</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>



    <br><br>
    <div class="container">
        <h3>Electiva Tecnica PHP</h3>
        <h4><small>Docente: Carlos A. M. Susatama</small></h4>
        <hr>
        <div class="row">

            <?php
            $carpetaBase = realpath(__dir__);
            $resultado = array();

            foreach (scandir($carpetaBase) as $carpeta) {
                if ($carpeta != '.' && $carpeta != '..' && is_dir($carpetaBase . DIRECTORY_SEPARATOR . $carpeta)) {
                $restringir=substr($carpeta,0,1);
                    if($restringir!="." && $carpeta != "imagenes_genericas"){
                        if($carpeta=="old_all" || $carpeta=="Pdf_Talleres" || $carpeta=="original")
                            $stylex="bg-primary";
                        else
                            $stylex="bg-success";
            ?>

            <div class="col-md-3">
                <div class="card text-white  mb-3 <?php echo $stylex; ?>" style="max-width: 18rem; opacity:0.9;">
                    <!--<div class="card-header">Portal web</div>-->
                    <div class="card-body">
                        
                        <h5 class="card-title">
                            <a href="/itc/<?php echo $carpeta; ?>"
                                style="text-decoration:none; color:#FFF;"><?php echo $carpeta; ?></a>
                        </h5>
                        
                    </div>
                </div>
            </div>

            <?php
                    }
                    $resultado[] = $carpeta;
                }
            }

            ?>


<?php
/*
            $carpetaBase = realpath(__dir__);
            $resultado = array();

            foreach (scandir($carpetaBase) as $carpeta) {
                if ($carpeta != '.' && $carpeta != '..' && is_dir($carpetaBase . DIRECTORY_SEPARATOR . $carpeta)) {
                $restringir=substr($carpeta,0,1);
                    if($restringir!="." && $carpeta != "imagenes_genericas"){

                
            ?>

  
                            <?php echo $carpeta; ?><br>


            <?php
                    }
                    $resultado[] = $carpeta;
                }
            }
*/
            ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>