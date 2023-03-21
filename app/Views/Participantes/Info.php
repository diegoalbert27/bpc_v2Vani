<?php echo $helpers->getHeader('Participantes del evento', 'Eventos/Participante') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-header bg-light">
        <h5 class="card-title"><?php echo $event->title_event ?></h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo electrónico</th>
                </thead>
                <tbody>
                    <?php foreach($participants as $participant): ?>
                        <tr>
                            <th><?php echo $participant->id_user->user ?></th>
                            <td><?php echo $participant->id_user->phone ?></td>
                            <td><?php echo $participant->id_user->email ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="mt-4 text-end">
            <a class="btn btn-link" href="<?php echo $helpers->generateUrl('event', 'detalle', [ 'id' => $event->id_event ]) ?>">Volver</a>
        </div>
    </div>
</div>

