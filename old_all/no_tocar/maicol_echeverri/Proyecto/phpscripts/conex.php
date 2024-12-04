<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "123456789";
    $dbname     = "bd_maicol_echeverri";

    $conn = new mysqli( $servername , $username , $password , $dbname);

    if($conn -> connect_error ){
        die ("fallida : ".$conn->connect_error ) ;
    }
    echo "exito entrando a la base de datos";
?>