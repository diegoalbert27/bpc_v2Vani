<?php echo $helpers->getHeader('Servicio de préstamo circulante', 'Prestamos/Registro') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <div class="container mt-2">
            <div class="row mb-3">

                <label class="form-label" for="solicitante_cedula">Solicitante:</label>

                <div class="col-md-3">
                    <input class="form-control" type="text" id="solicitante_cedula" name="solicitante_cedula">
                </div>
                <div class="col-md-7">
                    <input class="form-control" type="text" readonly>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span class="fas fa-user-plus"></span>
                    </button>
                </div>
            </div>

            <div class="row mb-3">

                <label class="form-label" for="libro">Libro:</label>

                <div class="col-md-3">
                    <input class="form-control" type="text" id="libro" name="libro">
                </div>
                <div class="col-md-7">
                    <input class="form-control" type="text" readonly>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary">
                        <span class="fas fa-book"></span>
                    </button>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="fecha_entrega">Fecha de entrega:</label>
                    <input class="form-control" type="date" id="fecha_entrega" name="fecha_entrega" min="<?php echo $helpers->getCurrentDate() ?>" max="<?php echo $helpers->getCurrentDate() ?>" value="<?php echo $helpers->getCurrentDate() ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="fecha_devolucion">Fecha de devolución:</label>
                    <input class="form-control" type="date" id="fecha_devolucion" name="fecha_devolucion" min="<?php echo $helpers->getCurrentDate() ?>" value="<?php echo $helpers->getCurrentDate() ?>">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <label class="form-label" for="observaciones">Observaciones:</label>
                    <input class="form-control" type="text" id="observaciones" name="observaciones">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12 text-end">
                    <a class="btn btn-link" href="<?php echo $helpers->generateUrl('prestamos', 'index') ?>">Volver</a>
                    <button class="btn btn-success" type="button">Generar Prestamo</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($solicitantes as $solicitante): ?>
                        <tr>
                            <td><?php echo $solicitante->id_sol ?></td>
                            <td><?php echo $solicitante->ced_sol ?></td>
                            <td><?php echo $solicitante->nom_sol ?></td>
                            <td><?php echo $solicitante->ape_sol ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
