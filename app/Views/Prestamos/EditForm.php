<?php echo $helpers->getHeader('Editar Información del Préstamo', 'Prestamo/Gestión') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <form action="<?php echo $helpers->generateUrl('prestamos', 'editStatus', [ 'id' => $prestamo->id_p ]) ?>" method="POST">
            <div class="row p-2 mb-0 mb-md-3">
                <div class="col-md-3 col-sm-12 mb-3">
                    <label class="form-label" for="solicitante">Solicitante:</label>
                    <input class="form-control" type="text" id="solicitante" name="solicitante" value="<?php echo $prestamo->numero_carnet2 ?>" readonly>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="form-label" for="libro">Libro:</label>
                    <input class="form-control" type="text" id="libro" name="libro" value="<?php echo $prestamo->id_libro2->cota ?>" readonly>
                </div>
                <div class="col-md-3 col-sm-12 mb-3">
                    <label class="form-label" for="state">Estado:</label>
                    <select class="form-select" id="state" name="state">
                        <?php echo $helpers->getOptionStatePrestamo($prestamo->pendiente) ?>
                    </select>
                </div>
            </div>

            <div class="row p-2 mb-0 mb-md-2">
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="form-label" for="fecha_entrega">Fecha de entrega:</label>
                    <input class="form-control" type="date" id="fecha_entrega" name="fecha_entrega" value="<?php echo $prestamo->fecha_entrega ?>" readonly>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="form-label" for="fecha_devolucion">Fecha de devolución:</label>
                    <input class="form-control" type="date" id="fecha_devolucion" name="fecha_devolucion" value="<?php echo $prestamo->fecha_devolucion ?>" readonly>
                </div>
            </div>

            <div class="row p-2 mb-0 mb-md-3">
                <div class="col-md-12 col-sm-12">
                    <label class="form-label" for="calification">Calificación:</label>
                    <select class="form-select" id="calification" name="calification">
                        <?php echo $helpers->getCalificationsOptions($prestamo->calificacion) ?>
                    </select>
                </div>
            </div>

            <div class="row p-2 mb-0 mb-md-3">
                <div class="col-md-12 col-sm-12 mb-3">
                    <label class="form-label" for="observaciones">Observaciones:</label>
                    <textarea class="form-control" id="observaciones" name="observaciones" rows="3"><?php echo $prestamo->observaciones_p ?></textarea>
                </div>
            </div>

            <div class="p-2 text-end">
                <a class="btn btn-link" href="<?php echo $helpers->generateUrl('prestamos', 'details', [ 'id' => $prestamo->id_p ]) ?>">Volver</a>
                <button class="btn btn-primary" type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>
