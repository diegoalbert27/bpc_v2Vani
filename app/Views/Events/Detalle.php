<?php echo $helpers->getHeader('Informacion Del Evento', 'Evento/Informacion') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-header bg-white">
        <div class="d-flex">
            <h5 class="m-0 fw-bold container py-1"><?php echo "{$event->title_event}" ?></h5>
        </div>
    </div>
    <div class="card-body">
        <div class="container mt-2">
            <div class="row mb-4">
                <div class="col-md-6 col-sm-3">
                    <div class="d-flex">
                        <h5 class="pe-3">Datos del Evento</h5>
                        <a class="btn btn-primary btn-sm" href="<?php echo $helpers->generateUrl('event', 'editevent', ['id' => $event->id_event]) ?>">
                            <span class="fas fa-pencil"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 col-sm-3">
                    <h6>Tipo de evento:</h6>
                    <span><?php echo $event->type_event ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Aforo:</h6>
                    <span><?php echo $event->participants_event ?? 0 ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Lugar:</h6>
                    <span><?php echo $event->place_event ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <h6>Estado:</h6>
                    <span><?php echo $helpers->getStateEvent($event->state_event) ?></span>
                </div>
                <div class="col-md-4">
                    <h6>Informacion:</h6>
                    <span><?php echo $event->info_event ?></span>
                </div>
                <div class="col-md-4">
                    <h6>Interesados:</h6>
                    <span><?php echo count($participants) ?></span>

                    <?php if (count($participants) > 0): ?>
                        <a class="link link-primary" href="<?php echo $helpers->generateUrl('participantes', 'info', [ 'id' => $event->id_event ]) ?>">Informacion</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <?php if ($news_event): ?>
                        <h6>Noticia</h6>
                        <a class="link link-primary" href="<?php echo $helpers->generateUrl('news', 'detalle', [ 'id' => $news_event->id_new ]) ?>">Ver Noticia</a>
                    <?php elseif ((int) $event->state_event === 1): ?>
                        <h6>Noticia</h6>
                        <a class="link link-primary" href="<?php echo $helpers->generateUrl('news', 'eventNewForm', [ 'id' => $event->id_event ]) ?>">Generar Noticia</a>
                    <?php endif ?>
                </div>
            </div>
            <div class="text-end">
                <a class="btn btn-link" href="<?php echo $helpers->generateUrl('event', 'index') ?>">Volver</a>
            </div>
        </div>
    </div>
</div>
