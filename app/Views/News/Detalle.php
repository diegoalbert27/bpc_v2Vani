<?php echo $helpers->getHeader('Noticia Informacion', 'Noticias/Informacion') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-header bg-white">
        <div class="d-flex">
            <h5 class="m-0 fw-bold container py-1"><?php echo "{$new->title_new}" ?></h5>
            <div class="dropdown">
                <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="fas fa-download"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="_blank" href="<?php echo $helpers->generateUrl('news', 'getReportPdf', [ 'id' => $new->id_new ]) ?>">Generar Reporte PDF</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container mt-2">
            <div class="row mb-5">
                <div class="col-md-6 col-sm-12">
                    <h6>Autor:</h6>
                    <span><?php echo $new->author_new ?></span>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h6>Fecha:</h6>
                    <span><?php echo $new->date_new ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <h6>Contenido:</h6>
                    <span><?php echo $new->content_new ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col d-flex">
                    <button class="btn btn-link" id="add-image">Agregar Nueva Imagen</button>

                    <form action="<?php echo $helpers->generateUrl('news', 'addNewsImages', [ 'id' => $new->id_new ]) ?>" method="POST" enctype="multipart/form-data">

                        <div class="" id="images-section"></div>

                        <button class="btn btn-sm btn-primary d-none" type="submit" id="save-images">
                            <span class="fas fa-floppy-disk"></span> Guardar
                        </button>
                    </form>
                </div>
            </div>
            <div class="row mb-4">
                <ul class="col list-group" id="preview-list-images"></ul>
            </div>
            <div class="row mb-4">
                <?php foreach($news_images as $image): ?>
                    <div class="col">
                        <div class="text-end py-2">
                            <button class="btn btn-sm btn-danger delete-image" type="button" data-bs-toggle="modal" data-bs-target="#delete-confirm-image" data-image="<?php echo $image->id_new_image ?>">
                                <span class="fas fa-trash"></span>
                            </button>
                        </div>
                        <a href="<?php echo "./{$image->url}" ?>" target="_blank">
                            <img class="w-100 rounded img-fluid" src="<?php echo "./{$image->url}" ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="text-end">
                <a class="btn btn-link" href="<?php echo $helpers->generateUrl('news', 'index') ?>">Volver</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="delete-confirm-image" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar Imagen De La Noticia</h5>
        <button class="btn-close" type="button"  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Seguro que quiere eliminar esta imagen de la noticia?
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="" id="confirm-delete-image">Si, estoy seguro</a>
      </div>
    </div>
  </div>
</div>
