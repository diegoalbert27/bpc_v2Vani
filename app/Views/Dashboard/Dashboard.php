<div class="row mt-2">
    <div class="col-md-6">
        <div class="bg-white shadow-sm rounded p-5">
            <h1 class="fs-2">Hola, <?php echo $user->user ?>.</h1>
            <h5 class="text-secondary fw-light">Has ingresado como <?php echo $user->role->name ?></h5>
        </div>

        <?php if ((int) $session_user->role->nivel === 10 || (int) $session_user->role->nivel === 5): ?>
            <div class="container">
                <div class="bg-white shadow-sm rounded p-3 mt-5">
                    <p class="text-primary fw-bold">CANTIDAD TOTAL DE LIBROS</p>
                    <h3><?php echo $total_libros ?></h3>
                </div>

                <div class="bg-white shadow-sm rounded p-3 mt-3">
                    <p class="text-primary fw-bold">CANTIDAD ACTUAL DE LIBROS</p>
                    <h3><?php echo $total_libros_actual ?></h3>
                </div>

                <div class="bg-white shadow-sm rounded p-3 mt-3">
                    <p class="text-primary fw-bold">LIBROS PRÉSTADOS</p>
                    <h3><?php echo $total_libros_prestado ?></h3>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php if ((int) $session_user->role->nivel === 10 || (int) $session_user->role->nivel === 5): ?>
        <div class="col-md-6">
            <h4>Préstamos pendientes por devolución</h4>

            <a class="btn btn-primary" href="<?php echo $helpers->generateUrl('prestamos', 'returnprestamo') ?>">Ver mas</a>

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
                            <div class="col-md-6 col-sm-12">
                                <div class="fw-bold mb-2">Solicitante</div>
                                <span><?php echo "{$prestamo->numero_carnet2->nom_sol} {$prestamo->numero_carnet2->ape_sol}" ?></span>
                            </div>
                            <div class="col-md-6 col-sm-12">
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
