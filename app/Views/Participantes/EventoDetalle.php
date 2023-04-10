<?php echo $helpers->getHeader('Informacion del evento', 'Eventos/Informacion') ?>

<?php echo $helpers->getMessage($_GET) ?>

<?php if (isset($_GET['state']) && (int) $_GET['state'] === 1): ?>
    <div class="card shadow">
        <div class="card-body">
            <div class="text-center p-4 my-3">
                <span class="fas fa-check fs-2 text-white bg-success p-4 rounded-circle shadow"></span>
                <h4 class="card-title fw-normal mt-4">Evento Realizado con exito</h4>
                <a class="link link-primary" href="<?php echo $helpers->generateUrl('news', 'eventNewForm', [ 'id' => $event->id_event ]) ?>">Generar Noticia Del Evento Realizado</a>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="card shadow mt-4 <?php echo isset($_GET['state']) && (int) $_GET['state'] === 1 ? 'd-none' : '' ?>">
    <div class="card-header bg-white">
        <div class="d-flex">
            <h5 class="m-0 fw-bold container py-1"><?php echo "{$event->title_event} - {$event->date_realized_event} - {$event->time}" ?></h5>

            <a class="btn btn-primary d-none" id="save-state-event" href="<?php echo $helpers->generateUrl('event', 'management', [ 'id' => $event->id_event ]) ?>">
                <span class="fas fa-floppy-disk"></span>
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="container mt-2">
            <div class="row mb-4">
                <div class="col-md-8 col-sm-3">
                    <h5 class="pe-3">Datos del Evento</h5>
                    <h6>Participantes: <span><?php echo count($participants) ?></span></h6>

                    <?php if ($is_participant): ?>
                        <span class="text-primary">Participacion Confirmada!</span>
                    <?php endif; ?>
                </div>
                <?php if ((int) $session_user->role->nivel === 10): ?>
                    <div class="col-md-4">
                        <h6>Estado del Evento:</h6>
                        <select class="form-select" name="state_event" id="state_event">
                            <?php echo $helpers->getStateEventOption($event->state_event) ?>
                        </select>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row mb-5">
                <div class="col-md-2 col-sm-3">
                    <h6>Tipo de evento:</h6>
                    <span><?php echo $event->type_event ?></span>
                </div>
                <div class="col-md-10 col-sm-3">
                    <h6>Lugar:</h6>
                    <span><?php echo $event->place_event ?></span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
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
