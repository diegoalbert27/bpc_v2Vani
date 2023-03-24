<?php echo $helpers->getHeader('Eventos', 'Libros/Inicio') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Lugar</th>
                    <th>Organizador</th>
                    <th>Estado</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach($events as $event): ?>
                        <tr>
                            <th><?php echo $event->title_event ?></th>
                            <td><?php echo $event->date_realized_event ?></td>
                            <td><?php echo $event->time ?></td>
                            <td><?php echo $event->place_event ?></td>
                            <td><?php echo $event->organizer_event->user ?></td>
                            <td><?php echo $helpers->getStateEvent($event->state_event) ?></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="<?php echo $helpers->generateUrl('event', 'detalle', [ 'id' => $event->id_event ]) ?>">
                                        <span class="fas fa-eye"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mt-4">
    <div class="card-body">
        <canvas id="chart"></canvas>
    </div>
</div>
