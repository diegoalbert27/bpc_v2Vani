<?php echo $helpers->getHeader('Categorías', 'Categorías/Inicio') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="row mt-4">
    <div class="col-md-6 col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?php echo $helpers->generateUrl('category', 'create'); ?>" method="post">
                    <div class="form-group p-2">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <label class="form-label" for="category">Nombre de la Categoría</label>
                                <input type="text" name="category" class="form-control mb-3" id="category" required>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <label class="form-label" for="ubication">Ubicacíon</label>
                                <select name="ubication" class="form-control mb-3"  id="ubication" required>
                                    <option value="1">Piso 1</option>
                                    <option value="2">Piso 2</option>
                                </select>
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Agregar Categoría</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="card shadow">
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Categoría</th>
                            <th>Piso</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($categories as $category): ?>
                            <tr>
                                <th><?php echo $category->id ?></th>
                                <td><?php echo $category->name ?></td>
                                <td><?php echo $category->ubication ?></td>
                                <td><?php echo $helpers->isEnabled($category->enabled) ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success" href="<?php echo $helpers->generateUrl('category', 'editform', [ 'id' => $category->id ]) ?>" type="button">
                                            <span class="fas fa-pencil"></span>
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
</div>
