<?php echo $helpers->getHeader('Editar Informacion Del Libro', 'Libros/Editar') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
    <form action="<?php echo $helpers->generateUrl('libro', 'edit', [ 'id' => $libro->id_libro ]) ?>" method="POST">
            <div class="row p-2 mb-3">
                <div class="col-md-3">
                    <label class="form-label" for="cota">Cota</label>
                    <input class="form-control" type="text" name="cota" id="cota" minlength="3" required value="<?php echo $libro->cota ?>">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="title">Titulo</label>
                    <input class="form-control" type="text" name="title" id="title" minlength="3" required value="<?php echo $libro->titulo ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="category">Categoria</label>
                    <select class="form-select" name="category" id="category">
                        <?php foreach($categorias as $category): ?>
                            <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="autor">Autor</label>
                    <input class="form-control" type="text" name="autor" id="autor" minlength="3" required value="<?php echo $libro->autor ?>">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="state">Estado</label>
                    <select class="form-select" name="state" id="state">
                        <?php foreach($estado_libro as $estado): ?>
                            <option value="<?php echo $estado ?>"><?php echo $estado ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row p-2 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="sinopsis">Sinopsis</label>
                    <textarea class="form-control" name="sinopsis" id="sinopsis" required><?php echo $libro->sinopsis ?></textarea>
                </div>
            </div>

            <div class="p-2 text-end">
                <button class="btn btn-primary" type="submit">Editar Registro</button>
            </div>
        </form>
    </div>
</div>
