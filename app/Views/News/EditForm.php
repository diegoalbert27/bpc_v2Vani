<?php echo $helpers->getHeader('Registro de noticias', 'Noticias/Registro') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <form action="<?php echo $helpers->generateUrl('news', 'edit', [ 'id' => $new->id_new ]) ?>" method="POST">
            <div class="row p-2 mb-0 mb-md-3">
                <div class="col-md-12">
                    <label class="form-label" for="title">Título</label>
                    <input class="form-control" type="text" name="title" id="title" minlength="3" value="<?php echo $new->title_new ?>" required>
                </div>
            </div>

            <div class="row p-2 mb-0 mb-md-3">
                <div class="col-md-9 col-6">
                    <label class="form-label" for="autor">Autor</label>
                    <input class="form-control" type="text" name="autor" id="autor" minlength="3" value="<?php echo $new->author_new ?>" required>
                </div>
                <div class="col-md-3 col-6">
                    <label class="form-label" for="date">Fecha</label>
                    <input class="form-control" type="date" name="date" id="date" value="<?php echo $new->date_new ?>" required>
                </div>
            </div>
            <div class="row p-2 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="content">Contenido</label>
                    <textarea class="form-control" name="content" id="content" rows="3" required><?php echo $new->content_new ?></textarea>
                </div>
            </div>

            <div class="p-2 text-end">
                <a class="btn btn-link" href="<?php echo $helpers->generateUrl('news', 'detalle', [ 'id' => $new->id_new ]) ?>">Volver</a>
                <button class="btn btn-primary" type="submit">Editar Registro</button>
            </div>
        </form>
    </div>
</div>
