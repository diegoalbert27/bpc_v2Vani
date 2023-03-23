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

            <?php if ((int) $session_user->role->nivel === 10): ?>
                <?php include_once '../app/Views/partials/SidebarAdmin.php' ?>
            <?php endif; ?>

            <?php if ((int) $session_user->role->nivel === 1 || (int) $session_user->role->nivel === 5): ?>
                <?php include_once '../app/Views/partials/SidebarUsers.php' ?>
            <?php endif; ?>
        </nav>

        <!-- Page Content -->
        <div id="content" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg">
                <div class="container-fluid mx-1">
                    <button type="button" id="sidebarCollapse" class="btn">
                        <span class="fas fa-bars"></span>
                    </button>

                    <?php if ((int) $session_user->role->nivel === 1): ?>
                        <div class="dropdown">
                            <button type="button" class="btn border-0" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="fas fa-bell"></span>
                            </button>
                            <ul class="dropdown-menu border-0 shadow" id="notificacions">
                                <h6 class="dropdown-header">Notificaciones</h6>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div class="btn-group dropstart border">
                        <button type="button" class="btn border-0" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fas fa-user"></span>
                            <span><?php echo $session_user->username ?></span>
                        </button>
                        <ul class="dropdown-menu border-0 shadow text-center">
                            <li>
                                <a class="dropdown-item px-3" href="<?php echo $helpers->generateUrl('auth', 'logout') ?>">
                                    <span class="fas fa-sign-out-alt"></span> <span class="fw-light text-secondary">Cerrar sesión</span>
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

    <script src="assets/js/index.js" type="module"></script>

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
