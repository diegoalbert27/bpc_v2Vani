<?php echo $helpers->getHeader('Préstamos pendientes por devolución', 'Préstamos/Devoluciones') ?>

<?php echo $helpers->getMessage($_GET) ?>

<?php foreach($prestamos as $prestamo): ?>
    <div class="card shadow mt-4 mb-3">
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
                    <div class="fw-bold mb-2">Teléfono</div>
                    <span><?php echo $prestamo->numero_carnet2->tlf_sol ?></span>
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-6 col-6">
                    <div class="fw-bold mb-2">Libro</div>
                    <span><?php echo $prestamo->id_libro2->titulo ?></span>
                </div>
                <div class="col-md-6 col-6">
                    <div class="fw-bold mb-2">Email</div>
                    <span><?php echo $prestamo->numero_carnet2->corr_sol ?></span>
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-6 col-12">
                    <div class="fw-bold mb-3">Observación</div>
                    <div class="d-flex justify-content-around mb-3">
                        <button class="bg-white rounded-pill p-2 border-0 shadow btns-calification" data-type="positive" data-value="1">
                            <span class="fas fa-check bg-success rounded-circle p-1 text-white"></span>
                            <span class="text-success">Positiva</span>
                        </button>
                        <button class="bg-primary rounded-pill p-2 border-0 shadow btns-calification" data-type="neutral" data-value="0">
                            <span class="fas fa-minus bg-white rounded-circle p-1 text-primary"></span>
                            <span class="text-white">Neutral</span>
                        </button>
                        <button class="bg-white rounded-pill p-2 border-0 shadow btns-calification" data-type="negative" data-value="-1">
                            <span class="fas fa-circle-xmark bg-danger rounded-circle p-1 text-white"></span>
                            <span class="text-danger">Negativa</span>
                        </button>
                    </div>
                    <textarea class="form-control" id="observation-return" rows="2"></textarea>
                </div>
            </div>

            <div class="p-2 mb-3">
                <button class="btn btn-primary return-prestamo" type="button" data-bs-toggle="modal" data-bs-target="#devolucionModal" data-prestamo="<?php echo $prestamo->id_p ?>">
                    Préstamo Devuelto
                    <span class="fas fa-check"></span>
                </button>
            </div>

        </div>
    </div>
<?php endforeach; ?>

<!-- Modal -->
<div class="modal fade" id="devolucionModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Devolucion de préstamo</h5>
        <button class="btn-close" type="button"  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Seguro que quiere devolver este préstamo?
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="" id="ok-prestamo">Sí, estoy seguro</a>
      </div>
    </div>
  </div>
</div>
