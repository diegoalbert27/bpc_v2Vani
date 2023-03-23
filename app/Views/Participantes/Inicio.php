<?php echo $helpers->getHeader('Próximos eventos', 'Eventos/Proximos') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="row mt-4">
    <div class="col-md-5 col-sm-12">

        <div class="card shadow mb-3 d-none" id="not-event">
            <div class="card-body text-center">
                <h6 class="card-title">No hay ningun evento en esta fecha</h6>
                <button class="btn btn-link p-0" id="view-defaul-events">Ver los eventos disponibles</button>
            </div>
        </div>

        <?php foreach($events_pendientes as $event): ?>
            <div class="card shadow defaul-events mb-3" id="<?php echo $event->id_event ?>">
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-md-2 fw-bold">
                            <h3 class="mb-0"><?php echo $helpers->getCustomDate($event->date_realized_event, 'd') ?></h3>
                        </div>
                        <div class="col-md-3">
                            <p class="mb-0 text-secondary">Fecha:</p>
                            <h6 class="mt-0 fw-bold"><?php echo $helpers->getCustomDate($event->date_realized_event, 'Y-m') ?></h6>

                            <p class="mb-0 text-secondary">Hora:</p>
                            <h6 class="mt-0 fw-bold"><?php echo $helpers->getCustomDate($event->time, 'h:s') ?></h6>
                        </div>
                        <div class="col">
                            <h5 class="fw-bold"><?php echo $event->title_event ?></h5>
                            <p><?php echo $event->place_event ?></p>
                            <a class="link link-primary" href="<?php echo $helpers->generateUrl('participantes', 'eventdetail', [ 'id' => $event->id_event ]) ?>">Saber mas</a>

                            <?php if ($is_participants[$event->id_event]): ?>
                                <p class="fw-bold">Tu Asistencia Confirmada!</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card shadow">
            <div class="card-body">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>
