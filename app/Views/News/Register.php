<?php echo $helpers->getHeader('Registro de noticias', 'Noticias/Registro') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <form action="<?php echo $helpers->generateUrl('news', 'add') ?>" method="POST">
            <div class="row p-2 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="title">Titulo</label>
                    <input class="form-control" type="text" name="title" id="title" minlength="3" required>
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-9">
                    <label class="form-label" for="autor">Autor</label>
                    <input class="form-control" type="text" name="autor" id="autor" minlength="3" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="date">Fecha</label>
                    <input class="form-control" type="date" name="date" id="date" value="<?php echo $helpers->getCurrentDate() ?>" required>
                </div>
            </div>
            <div class="row p-2 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="content">Contenido</label>
                    <textarea class="form-control" name="content" id="content" rows="3" required></textarea>
                </div>
            </div>

            <div class="p-2 text-end">
                <button class="btn btn-primary" type="submit">Agregar Registro</button>
            </div>
        </form>
    </div>
</div>
