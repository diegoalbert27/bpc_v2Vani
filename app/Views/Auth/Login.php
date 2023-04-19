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

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>

                            <div class="col-lg-6">
                                <div class="p-5">

                                    <div class="text-center mb-3">
                                        <img src='assets/img/biblioteca.jpg' alt="" width="120" height="80">
                                        <h3 class="text-dark-emphasis mt-2 mb-4">¡Bienvenidos!</h3>
                                    </div>

                                    <?php echo $helpers->getMessage($_GET) ?>

                                    <form class="user" method="post" action="<?php echo $helpers->generateUrl('auth', 'validate'); ?>">
                                        <div class="mb-3">
                                            <input type="text" name="username" class="form-control form-control-user" placeholder="Usuario" required>
                                        </div>

                                        <div class="mb-3">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Contraseña" required>
                                        </div>

                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="submit">Ingresar</button>
                                        </div>

                                        <hr>

                                        <div class="text-center">
                                            <a class="small" href="<?php echo $helpers->generateUrl('auth', 'accountrecovery'); ?>">
                                                ¿Olvidaste tu contraseña?
                                            </a>
                                        </div>

                                        <div class="text-center mb-3">
                                            <a class="small" href="<?php echo $helpers->generateUrl('auth', 'signup'); ?>">
                                                ¡Crea una cuenta!
                                            </a>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Scripts -->
    <script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
