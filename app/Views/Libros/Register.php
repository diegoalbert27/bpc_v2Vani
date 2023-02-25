<?php echo $helpers->getHeader('Registro de Nuevo Libro', 'Libros/Registro') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <form action="<?php echo $helpers->generateUrl('libro', 'add') ?>" method="POST">
            <div class="row p-2 mb-3">
                <div class="col-md-3">
                    <label class="form-label" for="cota">Cota</label>
                    <input class="form-control" type="text" name="cota" id="cota" minlength="3" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="title">Titulo</label>
                    <input class="form-control" type="text" name="title" id="title" minlength="3" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="category">Categoria</label>
                    <select class="form-control" name="category" id="category">
                        <?php foreach($categories as $category): ?>
                            <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="autor">Autor</label>
                    <input class="form-control" type="text" name="autor" id="autor" minlength="3" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="state">Estado</label>
                    <select class="form-control" name="state" id="state">
                        <option value="Disponible para su lectura">Disponible para su lectura</option>
                        <option value="Disponible para su lectura y prestamo">Disponible para su lectura y prestamo</option>
                        <option value="No disponible">No disponible</option>
                    </select>
                </div>
            </div>
            <div class="row p-2 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="sinopsis">Sinopsis</label>
                    <input class="form-control" type="text" name="sinopsis" id="sinopsis" required>
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="cantidad_total">Cantidad total del libro</label>
                    <input class="form-control" type="number" name="cantidad_total" id="cantidad_total" min="0" step="1" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="cantidad_minima">Cantidad mínima del libro</label>
                    <input class="form-control" type="number" name="cantidad_minima" id="cantidad_minima" min="0" step="1" required>
                </div>
            </div>

            <div class="p-2 text-end">
                <button class="btn btn-primary" type="submit">Agregar Registro</button>
            </div>
        </form>
    </div>
</div>
