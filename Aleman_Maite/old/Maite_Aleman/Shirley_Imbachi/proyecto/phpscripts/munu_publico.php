<?php
$menu = ["home", "quienes somos"];
?>
<!-- menu Principal -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="https://google.com">Registrarme!!!</a>
                </li>

                <?php
                for ($i = 0; $i < count($menu); $i++) {
                    echo '
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://google.com">' . $menu[$i] . '</a>
                    </li>
                    ';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Fin menu Principal -->

