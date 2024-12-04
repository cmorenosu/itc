<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>

    <!-- Enlazar con el CDN de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJr+Qe7VcmYxHZOp2flInMlscTp8abU4W5U5mf3lmXTViX1Fhbg3m3A1dXSA" crossorigin="anonymous">
    
    <style>
        /* Personalización de la página de error 404 */
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .error-page {
            margin-top: 100px;
            text-align: center;
        }
        .error-code {
            font-size: 100px;
            font-weight: bold;
            color: #dc3545;
        }
        .error-message {
            font-size: 24px;
            color: #6c757d;
        }
        .btn-home {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="error-page">
        <div class="error-code">404</div>
        <div class="error-message">¡Ups! La página que buscas no existe.</div>
        <p>La página que intentaste visitar no se pudo encontrar. Puede que haya sido movida o eliminada.</p>
        <a href="/" class="btn btn-primary btn-home">Volver a la página de inicio</a>
    </div>
</div>

<!-- Enlazar con el JS de Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0yS8Ff9x8IBG8AqQ8tSOxJ10hFOjUsvQSHnUod6z4X0V5V5H" crossorigin="anonymous"></script>

</body>
</html>
