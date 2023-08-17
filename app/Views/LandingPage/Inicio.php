<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta name="description" content="Biblioteca Publica Agustin Codazzi de Maracay" />
        <meta name="keywords" content="Biblioteca, Maracay, Libros, Prestamo, Eventos">
        <meta name="author" content="Biblioteca Publica Agustin Codazzi de Maracay" />

        <title>Biblioteca Agustín Codazzi</title>

        <!-- Css Libs -->
        <?php include_once './app/Views/LandingPage/partials/Head.php'; ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include_once './app/Views/LandingPage/partials/Navigation.php'; ?>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Biblioteca</h1>
                        <h1 class="text-white font-weight-bold">"Agustín Codazzi"</h1>
                        <hr class="divider divider-dark" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white mb-5">Un espacio donde se preserva un registro cultural del pasado y del presente, facilitando el acceso de los usuarios a los conocimientos e incentivando la creación.</p>
                        <a class="btn btn-dark btn-xl" href="?controller=auth">Ingresar</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- About-->
        <section class="page-section bg-dark" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">¿Quienes somos?</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Somos un centro que rescata, preserva, organiza y difunde el acervo documental estatal y facilita el acceso a una variedad de materiales bibliográficos con el proposito de satisfacer las necesidades de información personal, educacional, profesional y recreacional de los ciudadanos.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Nuestros servicios</h2>
                <hr class="divider divider-dark" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="mt-5">
                            <div class="mb-3"><i class="fa-solid fa-file-pen fs-1"></i></div>
                            <h3 class="h4 mb-2">Lectura e investigación</h3>
                            <p class="text-muted mb-0">Contamos con una amplia colección de material de referencia, en ciencias, humanidades, literatura y más.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="mt-5">
                            <div class="mb-3"><i class="fa-solid fa-book-open fs-1"></i></div>
                            <h3 class="h4 mb-2">Préstamo circulante</h3>
                            <p class="text-muted mb-0">Se prestan los libros para llevarlos a casa haciendo más cómoda la investigación o la lectura.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="mt-5">
                            <div class="mb-3"><i class="fa-regular fa-folder-open fs-1"></i></div>
                            <h3 class="h4 mb-2">Depósito legal</h3>
                            <p class="text-muted mb-0">En la institución se reciben los ejemplares indicados por la Biblioteca Nacional para su conservación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Books-->
        <section class="page-section bg-dark" id="books">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center  text-white mt-0">Últimos libros</h2>
                <hr class="divider divider-light" />
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php for ($row = 1; $row <= count($libros); $row++): ?>
                            <?php if ((($row + 1) % 4) === 0): ?>
                                <div class="carousel-item <?php echo ($row + 1) === 4 ? 'active' : '' ?>">
                                    <div class="row gx-4 gx-lg-5">
                                        <?php for ($index = (($row + 1) - 4); $index <= $row; $index++): ?>
                                            <?php if (isset($libros[$index])): ?>
                                                <div class="col-lg-3 col-md-4 text-center">
                                                    <div class="mt-5">
                                                        <div class="mb-3">
                                                            <span class="fa-solid fa-book text-white fs-1"></span>
                                                        </div>
                                                        <h3 class="h4 mb-2 text-white"><?php echo $libros[$index]->titulo ?></h3>
                                                        <p class="text-muted mb-0"><?php echo $libros[$index]->autor ?></p>
                                                    </div>
                                                </div>
                                            <?php endif ?>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include_once './app/Views/LandingPage/partials/Footer.php'; ?>

        <!-- Scripts -->
        <?php include_once './app/Views/LandingPage/partials/Scripts.php'; ?>

        <!-- Core theme JS-->
        <script src="assets/js/landing-page.js" type="module" defer></script>
    </body>
</html>
