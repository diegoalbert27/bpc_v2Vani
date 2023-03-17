<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="assets/img/icono.jpg" />

    <title><?php echo $title ?> | Biblioteca "Agustín Codazzi"</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mb-3">
                                        <img src='assets/img/biblioteca.jpg' alt="" width="120" height="80">
                                        <h1 class="h3 text-gray-900 mt-2 mb-4">Preguntas de seguridad</h1>
                                    </div>
                                    <form action="<?php echo $helpers->generateUrl('auth', 'recovery'); ?>" method="POST">
                                        <div class="form-group">
                                            <p name="pregunta_1"><?php echo $questions[0]->question ?></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="answer_1" placeholder="Respuesta" required>

                                            <input type="hidden" name="id_1" value="<?php echo $questions[0]->id ?>">
                                        </div>

                                        <div class="form-group">
                                            <p name="pregunta_2"><?php echo $questions[1]->question ?></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="answer_2" placeholder="Respuesta" required>
                                            <input type="hidden" name="id_2" value="<?php echo $questions[1]->id ?>">
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-block color-primario text-white" type="submit">Confirmar</button>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
