<?php echo $helpers->getHeader('Información del Préstamo', 'Préstamos/Detalle') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-header bg-white">
        <div class="d-flex">
            <h5 class="m-0 fw-bold container py-1">Préstamo #<?php echo "{$prestamo->id_p}" ?></h5>
        </div>
    </div>
    <div class="card-body">
        <div class="container mt-2">
            <div class="row mb-4">
                <div class="col-md-6 col-sm-3">
                    <div class="d-flex">
                        <h5 class="pe-3">Datos del préstamo</h5>
                        <a class="btn btn-primary btn-sm" href="<?php echo $helpers->generateUrl('prestamos', 'editprestamo', ['id' => $prestamo->id_p]) ?>">
                            <span class="fas fa-pencil"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-sm-3">
                    <h6>Carnet:</h6>
                    <span><?php echo $prestamo->numero_carnet2->id_sol ?></span>
                </div>
                <div class="col-md-6 col-sm-3">
                    <h6>Nombre del solicitante:</h6>
                    <span><?php echo "{$prestamo->numero_carnet2->nom_sol} {$prestamo->numero_carnet2->ape_sol}" ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 col-sm-3">
                    <h6>Cota:</h6>
                    <span><?php echo $prestamo->id_libro2->cota ?></span>
                </div>
                <div class="col-md-6 col-sm-3">
                    <h6>Título del libro:</h6>
                    <span><?php echo $prestamo->id_libro2->titulo ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <h6>Fecha de entrega:</h6>
                    <span><?php echo $prestamo->fecha_entrega ?></span>
                </div>
                <div class="col-md-6">
                    <h6>Fecha de devolución:</h6>
                    <span><?php echo $prestamo->fecha_devolucion ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <h6>Observaciones:</h6>
                    <span><?php echo $prestamo->observaciones_p ?></span>
                </div>
                <div class="col-md-6">
                    <h6>Estado:</h6>
                    <span><?php echo $helpers->generateStatePrestamo($prestamo->pendiente) ?></span>
                </div>
            </div>
            <div class="text-end">
                <a class="btn btn-link" href="<?php echo $helpers->generateUrl('prestamos', 'index') ?>">Volver</a>
            </div>
        </div>
    </div>
</div>
