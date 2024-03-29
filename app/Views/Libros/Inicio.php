<?php echo $helpers->getHeader('Libros de la Biblioteca', 'Libros/Inicio') ?>

<?php echo $helpers->getMessage($_GET) ?>

<?php if ((int) $session_user->role->nivel === 5 || (int) $session_user->role->nivel === 10): ?>
    <a class="btn btn-primary" href="<?php echo $helpers->generateUrl('libro', 'register') ?>">Añadir Nuevo Libro</a>
<?php endif; ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Cota</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Categoría</th>
                    <th>Estado</th>
                    <th>Cantidad</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach($libros as $libro): ?>
                        <tr>
                            <th><?php echo $libro->cota ?></th>
                            <td><?php echo $libro->titulo ?></td>
                            <td><?php echo $libro->autor ?></td>
                            <td><?php echo $libro->categoria->name ?></td>
                            <td><?php echo $libro->estado_libro ?></td>
                            <td><?php echo $libro->cantidad->cant_inv ?></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="<?php echo $helpers->generateUrl('libro', 'detalle', [ 'id' => $libro->id_libro ]) ?>">
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
