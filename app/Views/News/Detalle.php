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
            <div class="text-end">
                <a class="btn btn-link" href="<?php echo $helpers->generateUrl('news', 'index') ?>">Volver</a>
            </div>
        </div>
    </div>
</div>
