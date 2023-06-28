<?php echo $helpers->getHeader('Eventos', 'Eventos/Proximos') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="row mt-4">
    <div class="col-md-5 col-sm-12">

        <div class="card shadow mb-3 d-none" id="not-event">
            <div class="card-body text-center">
                <h6 class="card-title">No hay ningun evento en esta fecha</h6>
                <button class="btn btn-link p-0" id="view-defaul-events">Ver los eventos disponibles</button>
            </div>
        </div>

        <div class="card shadow mb-3 d-none" id="not-event-month">
            <div class="card-body text-center">
                <h6 class="card-title">No hay ningún evento en este mes</h6>
            </div>
        </div>

        <?php foreach($events_pendientes as $event): ?>
            <div class="card shadow defaul-events mb-3 d-none" id="<?php echo $event->id_event ?>">
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-md-2 fw-bold">
                            <h3 class="mb-0"><?php echo $helpers->getCustomDate($event->date_realized_event, 'd') ?></h3>
                            <p class="mb-0 text-secondary">Hora:</p>
                            <h6 class="mt-0 fw-bold"><?php echo $helpers->getCustomDate($event->time, 'h:s') ?></h6>
                        </div>
                        <div class="col">
                            <h5 class="fw-bold"><?php echo $event->title_event ?></h5>
                            <p><?php echo $event->place_event ?></p>

                            <?php if ((int) $session_user->role->nivel === 1): ?>
                                <a class="link link-primary" href="<?php echo $helpers->generateUrl('participantes', 'eventdetail', [ 'id' => $event->id_event ]) ?>">Saber mas</a>
                            <?php endif ?>

                            <?php if ($is_participants[$event->id_event]): ?>
                                <p class="fw-bold">Tu Asistencia Confirmada!</p>
                            <?php endif; ?>
                        </div>
                        <?php if ((int) $session_user->role->nivel === 10): ?>
                            <div class="col">
                                <div class="pb-1">
                                    <span class="fw-bold fs-5"><?php echo $helpers->getStateEvent($event->state_event) ?></span>
                                </div>

                                <a class="btn btn-sm btn-primary" href="<?php echo $helpers->generateUrl('participantes', 'eventdetail', [ 'id' => $event->id_event ]) ?>">
                                    <span class="fas fa-pencil"></span> Gestionar
                                </a>
                            </div>
                        <?php endif ?>
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
