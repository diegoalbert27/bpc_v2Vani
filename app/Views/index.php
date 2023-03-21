<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="./image/jpg" href="./assets/img/icono.jpg" />

    <title><?php echo $title ?> | Biblioteca "Agustín Codazzi"</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Datatables -->
    <link rel="stylesheet" href="../node_modules/datatables/media/css/jquery.dataTables.min.css">

    <!-- BOOTSTRAP AND CUSTOM CSS -->

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="stylesheet" href="./assets/css/sidebar.css">

    <link rel="stylesheet" href="./assets/css/fullcalendar-custom.css">
</head>
<body class="bg-light">

    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="bg-dark bg-gradient text-light shadow-lg">
            <div class="sidebar-header">
                <h4 class="border border-top-0 border-start-0 border-end-0 border-2 py-3">
                    <a href="<?php echo $helpers->generateUrl('dashboard', 'index') ?>">
                        <span class="fas fa-book"></span> Biblioteca
                    </a>
                </h4>
            </div>

            <ul class="list-unstyled components px-3">
                <li>
                    <a href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between">
                        <span>Registros</span>
                        <span class="fal fa-plus"></span>
                    </a>
                    <ul class="collapse list-unstyled mt-1" id="homeSubmenu">
                        <li>
                            <a href="<?php echo $helpers->generateUrl('solicitante', 'register') ?>">Solicitante</a>
                        </li>
                        <li>
                            <a href="<?php echo $helpers->generateUrl('libro', 'register') ?>">Libro</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#procesosSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between">
                        <span>Procesos</span>
                        <span class="fal fa-plus"></span>
                    </a>
                    <ul class="collapse list-unstyled mt-1" id="procesosSubmenu">
                        <li>
                            <a href="<?php echo $helpers->generateUrl('prestamos', 'generateprestamo') ?>">Prestamo de libros</a>
                        </li>
                        <li>
                            <a href="<?php echo $helpers->generateUrl('prestamos', 'returnprestamo') ?>">Devolucion de libros</a>
                        </li>
                        <li>
                            <a href="<?php echo $helpers->generateUrl('event', 'register') ?>">Organización de Eventos</a>
                        </li>
                        <li>
                            <a href="<?php echo $helpers->generateUrl('participantes', 'index') ?>">Participar en eventos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#consultasSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between">
                        <span>Consultas</span>
                        <span class="fal fa-plus"></span>
                    </a>
                    <ul class="collapse list-unstyled mt-1" id="consultasSubmenu">
                        <li>
                            <a href="<?php echo $helpers->generateUrl('solicitante', 'index') ?>">Solicitantes</a>
                        </li>
                        <li>
                            <a href="<?php echo $helpers->generateUrl('libro', 'index') ?>">Libros</a>
                        </li>
                        <li>
                            <a href="<?php echo $helpers->generateUrl('prestamos', 'index') ?>">Prestamos</a>
                        </li>
                        <li>
                            <a href="<?php echo $helpers->generateUrl('event', 'index') ?>">Eventos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-bs-toggle="collapse"x` aria-expanded="false" class="dropdown-toggle d-flex justify-content-between">
                        <span>Configuración</span>
                        <span class="fal fa-plus"></span>
                    </a>
                    <ul class="collapse list-unstyled mt-1" id="pageSubmenu">
                        <li>
                            <a href="<?php echo $helpers->generateUrl('user') ?>">Usuarios</a>
                        </li>
                        <li>
                            <a href="<?php echo $helpers->generateUrl('category') ?>">Categorías</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg">
                <div class="container-fluid mx-1">
                    <button type="button" id="sidebarCollapse" class="btn">
                        <span class="fas fa-bars"></span>
                    </button>

                    <div class="btn-group dropstart">
                        <button type="button" class="btn border-0" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fas fa-user"></span>
                            <span><?php echo $user->username ?></span>
                        </button>
                        <ul class="dropdown-menu border-0 shadow">
                            <li>
                                <!-- <a class="dropdown-item p-3" href="#">
                                    <span class="fas fa-bell"></span> <span>Notificaciones</span>
                                </a> -->
                            </li>
                            <li>
                                <a class="dropdown-item p-3" href="<?php echo $helpers->generateUrl('auth', 'logout') ?>">
                                    <span class="fas fa-sign-out-alt"></span> <span>Cerrar sesión</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="m-4 pt-3">
                <?php include '../app/Views/' . $view . '.php'; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap Scripts -->
    <script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Datateble and Jquery -->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/datatables/media/js/jquery.datatables.min.js"></script>

    <script src="./assets/js/sidebar.js"></script>
    <script src="./assets/js/datatables.js"></script>

    <!-- AXIOS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
    <script src="../node_modules/axios/dist/axios.min.js"></script>

    <script src="../node_modules/fullcalendar/index.global.min.js"></script>

    <?php
        if (isset($_GET['controller']) && isset($_GET['action'])) {
            $controller = ucwords($_GET['controller']);
            $action = ucwords($_GET['action']);

            $path_js = "assets/js/pages/{$controller}/{$action}/index.js";

            if (file_exists($path_js)) {
                printf('<script src="%s" type="module"></script>', $path_js);
            }
        }
    ?>
</body>
</html>
