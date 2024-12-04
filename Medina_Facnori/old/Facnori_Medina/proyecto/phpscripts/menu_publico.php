<?php
    $menu=["Home","Quienes Somos"];
?>
 <!--Menu principal-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="container-fluid">

  <a class="navbar-brand" href="#"><h2><I>Tan War</I></h2></a>
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
            <a class="nav-link active" aria-current="page" href="...">'.$menu[$i].'</a> 
          </li>
          ';
        }
       ?>    
    </ul>

  </div>

</div>

</nav>
<!--Fin de menu principal-->