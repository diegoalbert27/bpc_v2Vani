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
        <!-- Outer Row -->
        <div class="row justify-content-center mt-2">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>

                            <div class="col-lg-7">
                                <div class="p-4">
                                    <div class="text-center mb-3">
                                        <img src='assets/img/biblioteca.jpg' alt="" width="120" height="80">
                                        <h3 class="text-dark-emphasis mt-2 mb-4">¡Crear cuenta!</h3>
                                    </div>

                                    <?php echo $helpers->getMessage($_GET) ?>

                                    <form class="user" action="<?php echo $helpers->generateUrl('auth', 'create'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-user mb-3" id="name" placeholder="Nombre completo">

                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <input type="text" name="username" class="form-control form-control-user mb-3"  id="username" placeholder="Usuario">
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <input type="password" name="password" class="form-control form-control-user mb-3" id="password" placeholder="Contraseña">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <input type="text" name="phone" class="form-control form-control-user mb-3" id="phone" placeholder="Teléfono">
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <input type="email" name="email" class="form-control form-control-user mb-3" id="email" placeholder="Correo electrónico">
                                                </div>
                                            </div>

                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary" type="submit">Registrarme</button>
                                            </div>

                                        </div>

                                        <hr>

                                        <div class="text-center">
                                            <a class="small" href="<?php echo $helpers->generateUrl('auth', 'accountrecovery'); ?>">¿Olvidaste tu contraseña?</a>
                                        </div>

                                        <div class="text-center mb-3">
                                            <a class="small" href="<?php echo $helpers->generateUrl('auth', 'login'); ?>">¿Ya tienes una cuenta? ¡Inicia sesión!</a>
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
