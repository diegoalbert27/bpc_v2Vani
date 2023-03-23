<?php echo $helpers->getHeader('Auditoria', 'Auditorias/Inicio') ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Usuario</th>
                    <th>Accion</th>
                    <th>Modulo</th>
                    <th>Fecha</th>
                </thead>
                <tbody>
                    <?php foreach($audits as $audit): ?>
                        <tr>
                            <th><?php echo $audit->usr_aud->user ?></th>
                            <td><?php echo $audit->acc_aud ?></td>
                            <td><?php echo $audit->ent_aud ?></td>
                            <td><?php echo $audit->fec_aud ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
