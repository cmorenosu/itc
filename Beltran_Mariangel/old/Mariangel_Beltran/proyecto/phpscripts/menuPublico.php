<?php
    $menu = ["Juegos","Quiénes somos","Contáctanos","Registro"];
    $url = ["#","#","#","#"];
?>

<!--Menu principal-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">
            <h2><I>MG06ok</I></h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <?php
                    for($i=0; $i<count($menu); $i++){
                        echo '
                         <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="'.$url[$i].'">'.$menu[$i].'</a>
                        </li>
                        ';
                    }
                ?>
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>

        </div>

    </div>

</nav>

<!--Fin de menu principal-->