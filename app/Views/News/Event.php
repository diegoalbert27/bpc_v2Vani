<?php echo $helpers->getHeader('Registro de noticias para el evento', 'Noticias/Registro') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <form action="<?php echo $helpers->generateUrl('news', 'addEventNew', [ 'id' => $event->id_event ]) ?>" method="POST" enctype="multipart/form-data">
            <div class="row p-2 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="title">Título</label>
                    <input class="form-control" type="text" name="title" id="title" minlength="3" required value="<?php echo $event->title_event ?>">
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
                    <textarea class="form-control" name="content" id="content" rows="3" required ><?php echo $event->info_event ?></textarea>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-md-3">
                    <button class="btn btn-link" type="button" id="add-image">
                        Agregar Contenido Multimedia
                    </button>
                </div>
            </div>
            <div class="row p-2 mb-3">
                <div class="col" id="new_images_section">
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col">
                    <div class="row g-2" id="new_images_section_preview"></div>
                </div>
            </div>

            <div class="p-2 text-end">
                <button class="btn btn-primary" type="submit">Agregar Registro</button>
            </div>
        </form>
    </div>
</div>
