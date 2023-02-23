<?php echo $helpers->getHeader('Solicitantes Registrados', 'Solicitantes/Inicio') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Estado</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach($solicitantes as $solicitante): ?>
                        <tr>
                            <th><?php echo $solicitante->id_sol ?></th>
                            <td><?php echo $solicitante->nom_sol ?></td>
                            <td><?php echo $solicitante->ape_sol ?></td>
                            <td><?php echo $solicitante->ced_sol ?></td>
                            <td><?php echo $helpers->isEnabled($solicitante->estado_s) ?></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="<?php echo $helpers->generateUrl('solicitante', 'detail', [ 'id' => $solicitante->id_sol ]) ?>">
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
