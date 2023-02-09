<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="assets/img/icono.jpg" />

    <title><?php echo $title ?> | Biblioteca "Agustín Codazzi"</title>

    <!-- BOOTSTRAP AND CUSTOM CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
</head>

<body class="bg-dark">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-7">
                                <div class="p-4">
                                    <div class="text-center mb-3">
                                        <img src='assets/img/biblioteca.jpg' alt="" width="120" height="80">
                                        <h1 class="h3 text-gray-900 mt-2 mb-4">¡Crear cuenta!</h1>
                                    </div>

                                    <?php echo $helpers->getMessage($_GET) ?>

                                    <form class="user" action="<?php echo $helpers->generateUrl('auth', 'create'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-user mb-3" id="name" aria-describedby="emailHelp" placeholder="Nombre completo">

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
                                            <input class="btn btn-block color-primario text-white" type="submit" value="Registrarme">
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="<?php echo $helpers->generateUrl('auth', 'accountrecovery'); ?>">¿Olvidaste tu contraseña?</a>
                                        </div>
                                        <div class="text-center mb-4">
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
