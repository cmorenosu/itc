<?php
$menu=["Home", "Quienes somos","Contactenos", "Jugar ","Iniciar sesion" ];
?>
    <!--MENU-->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">D2</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

<?php
 for($i=0; $i < count($menu); $i++){
       echo '
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="Vistas/login.php">' .$menu[$i]. '</a>
            </li>
         ';
 }
?>

          </ul>
        </div>
      </div>
    </nav>


    <!--FIN MENU PRINCIPAL-->
    