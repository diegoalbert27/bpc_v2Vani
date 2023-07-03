<div class="row mt-2">
    <div class="col">
        <div class="bg-white shadow-sm rounded p-5">
            <h1 class="fs-2">Hola, <?php echo $user->user ?>.</h1>
            <h5 class="text-secondary fw-light">Has ingresado como <?php echo $user->role->name ?></h5>
        </div>

        <?php if ((int) $session_user->role->nivel === 10 || (int) $session_user->role->nivel === 5): ?>
            <section class="onboarding container row">
                <div class="col d-flex align-items-start d-md-inline">
                    <article class="bg-white shadow-sm rounded p-3 mt-3 me-2 me-md-0">
                        <h1 class="text-primary fs-5 fw-bold">CANTIDAD TOTAL DE LIBROS</h1>
                        <h2><?php echo $total_libros ?></h2>
                    </article>

                    <article class="bg-white shadow-sm rounded p-3 mt-3 me-2 me-md-0">
                        <h1 class="text-primary fs-5 fw-bold">CANTIDAD ACTUAL DE LIBROS</h1>
                        <h2><?php echo $total_libros_actual ?></h2>
                    </article>

                    <article class="bg-white shadow-sm rounded p-3 mt-3 me-2 me-md-0">
                        <h1 class="text-primary fs-5 fw-bold">LIBROS PRÉSTADOS</h1>
                        <h2><?php echo $total_libros_prestado ?></h2>
                    </article>
                </div>
            </section>
        <?php endif; ?>
    </div>
    <?php if (((int) $session_user->role->nivel === 10 || (int) $session_user->role->nivel === 5) && count($prestamos) > 0): ?>
        <div class="col mt-4 mt-md-0">
            <div class="text-center text-md-start">
                <h4>Préstamos pendientes por devolución</h4>

                <a class="btn btn-primary" href="<?php echo $helpers->generateUrl('prestamos', 'returnprestamo') ?>">Ver más</a>
            </div>

            <?php foreach($prestamos as $prestamo): ?>
                <div class="card shadow-sm mt-4 mb-3 border-0">
                    <div class="card-header bg-white">
                        <h5 class="card-title <?php
                            if ($helpers->getCurrentDate() >= $helpers->getCustomDate('Y-m-d', $prestamo->fecha_devolucion)) {
                                echo 'text-danger';
                            }
                        ?>">Fecha de devolución: <?php echo $prestamo->fecha_devolucion ?>
                    </div>
                    <div class="card-body">

                        <div class="row p-2 mb-3">
                            <div class="col-md-6 col-6">
                                <div class="fw-bold mb-2">Solicitante</div>
                                <span><?php echo "{$prestamo->numero_carnet2->nom_sol} {$prestamo->numero_carnet2->ape_sol}" ?></span>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="fw-bold mb-2">Libro</div>
                                <span><?php echo $prestamo->id_libro2->titulo ?></span>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
