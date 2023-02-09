<?php echo $helpers->getHeader('Editar Categorías', 'Categorías/Editar') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-3">
    <div class="card-body">
        <form action="<?php echo $helpers->generateUrl('category', 'edit'); ?>" method="post">
            <div class="form-group p-2">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <label class="form-label" for="category">Nombre de la Categoría</label>
                        <input type="text" name="category" class="form-control mb-3" id="category" required value="<?php echo $category->name ?>">
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <label class="form-label" for="ubication">Ubicacíon</label>
                        <select name="ubication" class="form-control mb-3"  id="ubication" required>
                            <?php
                                if ($category->ubication === 1) {
                                    echo '<option value="1">Piso 1</option>
                                    <option value="2">Piso 2</option>';
                                } else if ($category->ubication === 2) {
                                    echo '<option value="2">Piso 2</option>
                                    <option value="1">Piso 1</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <label class="form-label" for="enabled">Estado</label>
                        <select class="form-control form-control-user mb-3" name="enabled" id="enabled">
                            <?php echo $helpers->isEnabledOption($category->enabled) ?>
                        </select>
                    </div>
                </div>

                <input type="hidden" id="id" name="id" value="<?php echo $category->id ?>">

                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Editar categoría</button>
                </div>
            </div>
        </form>
    </div>
</div>
