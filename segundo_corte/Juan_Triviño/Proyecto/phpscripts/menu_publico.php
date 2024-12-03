<?php
$menu=["Home","Registro","Quienes somos","Contactenos","Jugar"]
?>

<!--menu principal-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">

        <?php
          for($i = 0; $i<count($menu); $i++){
            echo '
            <a class="nav-link active" aria-current="page" href="vistas/login.php">'.$menu[$i].'</a>
           ';
          }
            
          
        ?>
        </div>
      </div>
    </div>
  </nav>
  <!--fin de menu principal-->