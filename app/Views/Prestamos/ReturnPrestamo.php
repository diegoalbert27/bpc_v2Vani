<?php echo $helpers->getHeader('Préstamos pendientes por devolución', 'Prestamos/Devoluciones') ?>

<?php echo $helpers->getMessage($_GET) ?>

<?php foreach($prestamos as $prestamo): ?>
    <div class="card shadow mt-4 mb-3">
        <div class="card-header bg-white">
            <h5 class="card-title">Fecha de devolución: <?php echo $prestamo->fecha_devolucion ?></h5>
        </div>
        <div class="card-body">

            <div class="row p-2 mb-3">
                <div class="col-md-6 col-sm-12">
                    <div class="fw-bold mb-2">Solicitante</div>
                    <span><?php echo "{$prestamo->numero_carnet2->nom_sol} {$prestamo->numero_carnet2->ape_sol}" ?></span>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="fw-bold mb-2">Teléfono</div>
                    <span><?php echo $prestamo->numero_carnet2->tlf_sol ?></span>
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-6 col-sm-12">
                    <div class="fw-bold mb-2">Libro</div>
                    <span><?php echo $prestamo->id_libro2->titulo ?></span>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="fw-bold mb-2">Email</div>
                    <span><?php echo $prestamo->numero_carnet2->corr_sol ?></span>
                </div>
            </div>

            <div class="p-2 mb-3">
                <button class="btn btn-primary return-prestamo" type="button" data-bs-toggle="modal" data-bs-target="#devolucionModal" data-prestamo="<?php echo $prestamo->id_p ?>">
                    Prestamo Devuelto
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
        <h5 class="modal-title">Devolucion de prestamo</h5>
        <button class="btn-close" type="button"  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Seguro que quiere devolver este prestamo?
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="" id="ok-prestamo">Si, estoy seguro</a>
      </div>
    </div>
  </div>
</div>
