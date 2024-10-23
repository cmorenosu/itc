<?php
$menu=["Home","Quienes somos"]
?>
<!--- menu principal--->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cifuplay</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item inicio">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item nosotros">
                        <a class="nav-link" href="#">Nosotros</a>
                    <li class="nav-item contacto">
                        <a class="nav-link" href="#">Contacto</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            PlayGame
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Nivel uno</a></li>
                            <li><a class="dropdown-item" href="#">Nivel dos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Jugar</a></li>
                        </ul>
                    <li class="nav-item inicio">
                        <a class="nav-link" aria-current="page" href="registrarse.html">Iniciar sesi&oacute;n</a>
                    </li>
                    </li>
                    </li>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php
                    for($i=0; $i<count($menu); $i++){
                        echo'
                        <li class="nav-item">
                        <a class= "nav-link active" aria-current="page" href="...">'.$menu[$i].' </a>
                        </li> ';
                    }
                    ?>
                </ul>    
            </div>
        </div>
    </nav>

    <!--- fin de menu principal--->