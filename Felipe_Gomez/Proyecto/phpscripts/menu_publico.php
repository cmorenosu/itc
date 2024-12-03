<?php
  $menu=["Academusoft","Correo","Pensum"];
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="imagenes/etitc.jpg">
            <img src="imagenes/etitc.jpg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
          </a>
        </div>
      </nav>
      <a class="navbar-brand" href="https://etitc.edu.co/es/" target="_blank">ETITC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
 
          
          <?php
            for($i=0; $i<count($menu); $i++){
              echo '
              <li class="nav-item">
                <a class="nav-link" href="https://etitc.edu.co/uploads/images/products/6179dc6dcadcf377374072.jpg"
                target="_blank">'.$menu[$i].' </a>
              </li>
              ';
 
              
            }
          ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Trabajos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Juego.html" target="_blank">Juego</a></li>
              <li><a class="dropdown-item" href="bootstrap.html" target="_blank">Ejercicio bootstrap</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="index3.html" target="_blank">Primer ejercicio</a></li>
            </ul>
          </li>
          
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!---menu principal-->