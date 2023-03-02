<?php echo $helpers->getHeader('Informacion Libro', 'Libro/Informacion') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-header bg-white">
        <div class="d-flex">
            <h5 class="m-0 fw-bold container py-1"><?php echo "{$libro->titulo}" ?></h5>
            <div class="dropdown">
                <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="fas fa-download"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="_blank" href="<?php echo $helpers->generateUrl('libro', 'getReportPdf', [ 'id' => $libro->id_libro ]) ?>">Generar Reporte PDF</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container mt-2">
            <div class="row mb-4">
                <div class="col-md-6 col-sm-3">
                    <div class="d-flex">
                        <h5 class="pe-3">Datos del libro</h5>
                        <a class="btn btn-primary btn-sm" href="<?php echo $helpers->generateUrl('libro', 'editlibro', ['id' => $libro->id_libro]) ?>">
                            <span class="fas fa-pencil"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 col-sm-3">
                    <h6>Autor:</h6>
                    <span><?php echo $libro->autor ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Categoría:</h6>
                    <span><?php echo $libro->categoria->name ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Estado:</h6>
                    <span><?php echo $libro->estado_libro ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <h6>Sinopsis:</h6>
                    <span><?php echo $libro->sinopsis ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 col-sm-3">
                    <div class="d-flex">
                        <h5 class="pe-3">Cantidad</h5>
                        <a class="btn btn-primary btn-sm" href="<?php echo $helpers->generateUrl('libro', 'cantidadform', ['id' => $libro->cantidad->id_inv ]) ?>">
                            <span class="fas fa-pencil"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 col-sm-3">
                    <h6>Cantidad total:</h6>
                    <span><?php echo $libro->cantidad->total_inv ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Cantidad actual:</h6>
                    <span><?php echo $libro->cantidad->cant_inv ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Prestados:</h6>
                    <span><?php echo $libro->cantidad->resto_inv ?></span>
                </div>
            </div>
            <div class="text-end">
                <a class="btn btn-link" href="<?php echo $helpers->generateUrl('libro', 'index') ?>">Volver</a>
            </div>
        </div>
    </div>
</div>
