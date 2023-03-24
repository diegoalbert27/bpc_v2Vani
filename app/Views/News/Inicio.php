<?php echo $helpers->getHeader('Noticias', 'Noticias/Inicio') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Fecha</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach($news as $new): ?>
                        <tr>
                            <td><?php echo $new->title_new ?></td>
                            <td><?php echo $new->author_new ?></td>
                            <td><?php echo $new->date_new ?></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="<?php echo $helpers->generateUrl('news', 'detalle', [ 'id' => $new->id_new ]) ?>">
                                        <span class="fas fa-eye"></span>
                                    </a>
                                    <?php if ((int) $session_user->role->nivel === 10 || (int) $session_user->role->nivel === 5): ?>
                                        <a class="btn btn-success" href="<?php echo $helpers->generateUrl('news', 'editform', [ 'id' => $new->id_new ]) ?>">
                                            <span class="fas fa-pencil"></span>
                                        </a>
                                        <a class="btn btn-danger" href="<?php echo $helpers->generateUrl('news', 'delete', [ 'id' => $new->id_new ]) ?>">
                                            <span class="fas fa-trash"></span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
