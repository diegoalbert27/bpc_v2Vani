<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="assets/img/icono.jpg" />

    <title><?php echo $title ?> | Biblioteca "Agustín Codazzi"</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="./assets/libs/font-awesome/all.min.css">

    <!-- BOOTSTRAP AND CUSTOM CSS -->
    <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mb-3">
                                        <img src='assets/img/biblioteca.jpg' alt="" width="120" height="80">
                                        <h3 class="text-dark-emphasis mt-2 mb-4">Preguntas de seguridad</h3>
                                    </div>
                                    <form action="<?php echo $helpers->generateUrl('auth', 'recovery'); ?>" method="POST">
                                        <div class="mb-3">
                                            <p name="pregunta_1"><?php echo $questions[0]->question ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" type="text" name="answer_1" placeholder="Respuesta" autocomplete="off" required>

                                            <input type="hidden" name="id_1" value="<?php echo $questions[0]->id ?>">
                                        </div>

                                        <div class="mb-3">
                                            <p name="pregunta_2"><?php echo $questions[1]->question ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" type="text" name="answer_2" placeholder="Respuesta" autocomplete="off" required>
                                            <input type="hidden" name="id_2" value="<?php echo $questions[1]->id ?>">
                                        </div>

                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="submit">Confirmar</button>
                                        </div>
                                        <hr>

                                        <input type="hidden" name="user" value="<?php echo $questions[0]->user ?>">

                                        <div class="text-center">
                                            <a class="small" href="<?php echo $helpers->generateUrl('auth', 'login'); ?>">Volver</a>
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
    <script src="./assets/libs/popperjs/popper.min.js"></script>
    <script src="./assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
