<?php echo $helpers->getHeader('Respaldo', 'Respaldo/Inicio') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <p>Gestión para la importación y exportación de la base de datos, entienda que para importar la base de datos tiene que ser una instancia de la misma exportación del sistema, de lo contrario la importación no se hará de forma satisfactoria</p>

        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-success" href="<?php echo $helpers->generateUrl('backup', 'export') ?>">Exportar base de datos</a>
            </div>

            <div class="col-md-6">
                <form action="<?php echo $helpers->generateUrl('backup', 'import') ?>" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file" id="file">

                    <button class="btn btn-primary" type="submit">Importar base de datos</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Url</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach($backup as $file): ?>
                        <tr>
                            <th><?php echo $file->id ?></th>
                            <td><?php echo $file->url ?></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="<?php echo $file->url ?>" target="_blank">
                                        <span class="fas fa-download"></span>
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
