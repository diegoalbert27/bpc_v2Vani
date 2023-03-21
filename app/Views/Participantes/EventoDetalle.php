<?php echo $helpers->getHeader('Informacion del evento', 'Eventos/Informacion') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-header bg-white">
        <div class="d-flex">
            <h5 class="m-0 fw-bold container py-1"><?php echo "{$event->title_event} - {$event->date_realized_event} - {$event->time}" ?></h5>
        </div>
    </div>
    <div class="card-body">
        <div class="container mt-2">
            <div class="row mb-4">
                <div class="col-md-6 col-sm-3">
                    <h5 class="pe-3">Datos del Evento</h5>
                    <h6>Participantes: <span><?php echo count($participants) ?></span></h6>

                    <?php if ($is_participant): ?>
                        <span class="text-primary">Participacion Confirmada!</span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 col-sm-3">
                    <h6>Tipo de evento:</h6>
                    <span><?php echo $event->type_event ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Lugar:</h6>
                    <span><?php echo $event->place_event ?></span>
                </div>
                <div class="col-md-3">
                    <h6>Informacion:</h6>
                    <span><?php echo $event->info_event ?></span>
                </div>
            </div>

            <div class="text-end">
                <a class="btn btn-link" href="<?php echo $helpers->generateUrl('participantes', 'index') ?>">Volver</a>

                <?php if (!$is_participant): ?>
                    <a class="btn btn-primary" href="<?php echo $helpers->generateUrl('participantes', 'add', [ 'id' => $event->id_event ]) ?>">Participar</a>
                <?php endif; ?>

                <?php if ($is_participant): ?>
                    <a class="btn btn-danger" href="<?php echo $helpers->generateUrl('participantes', 'remove', [ 'id' => $event->id_event ]) ?>">Cancelar Participacion</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

