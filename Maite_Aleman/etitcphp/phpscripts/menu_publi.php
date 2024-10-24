<?php
$menu = [
    "home" => "index.php",
    "quienes somos" => "quienes_somos.php"
];
?>
<!-- Menú Principal -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mi Proyecto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary me-2" href="registro.php">Registrarme</a>
                </li>
                <?php
                foreach ($menu as $item => $url) {
                    echo '
                    <li class="nav-item">
                        <a class="nav-link" href="' . $url . '">' . ucfirst($item) . '</a>
                    </li>
                    ';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Fin del Menú Principal -->
