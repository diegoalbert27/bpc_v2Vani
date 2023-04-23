<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="assets/img/icono.jpg" />

    <title><?php echo $title ?> | Biblioteca "Agustín Codazzi"</title>

    <!-- BOOTSTRAP AND CUSTOM CSS -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
</head>

<body class="bg-dark text-white">
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> Pagina no encontrada.</p>
            <p class="lead">
                La pagina que buscas no ha sido encontrada
            </p>
            <a href="<?php echo $helpers->generateUrl('auth', 'login') ?>" class="btn btn-primary">Ir al inicio</a>
        </div>
    </div>
</body>
</html>
