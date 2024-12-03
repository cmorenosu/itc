<?php
    $menu=["home", "Registro", "Quienes somos", "Contactenos", "Jugar"]
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php
                        for($i=0; $i<count($menu); $i++){
                            echo '
                            <a class="nav-link" aria-current="page" href="vistas/registro.php">'.$menu[$i].'</a>
                            ';
                        }
                    ?>
                
                </div>
            </div>
        </div>
    </nav>