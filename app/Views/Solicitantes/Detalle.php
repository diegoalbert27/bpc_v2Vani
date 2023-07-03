<?php echo $helpers->getHeader('Información Solicitante', 'Solicitantes/Información') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-header bg-white">
        <div class="d-flex">
            <h5 class="m-0 fw-bold container py-1"><?php echo "{$solicitante->nom_sol} {$solicitante->ape_sol}" ?></h5>
            <div class="dropdown">
                <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="fas fa-download"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="_blank" href="<?php echo $helpers->generateUrl('solicitante', 'getCarnet', [ 'id' => $solicitante->id_sol ]) ?>">Carnet</a></li>
                    <li><a class="dropdown-item" target="_blank" href="<?php echo $helpers->generateUrl('solicitante', 'gethistorialprestamo', [ 'id' => $solicitante->id_sol ]) ?>"> Historial de préstamos</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container mt-2">
            <div class="row mb-4">
                <div class="col-md-6 col-sm-3">
                    <div class="d-flex">
                        <h5 class="pe-3">Información Personal</h5>
                        <a class="btn btn-primary btn-sm" href="<?php echo $helpers->generateUrl('solicitante', 'formpersonal', ['id' => $solicitante->id_sol]) ?>">
                            <span class="fas fa-pencil"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 col-4">
                    <h6>Cédula:</h6>
                    <span><?php echo $solicitante->ced_sol ?></span>
                </div>
                <div class="col-md-4 col-4">
                    <h6>Edad:</h6>
                    <span><?php echo $solicitante->edad_sol ?></span>
                </div>
                <div class="col-md-4 col-4">
                    <h6>Sexo:</h6>
                    <span><?php echo $solicitante->sex_sol ?></span>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 col-4">
                    <h6>Carnet:</h6>
                    <span><?php echo $solicitante->carnet ?></span>
                </div>
                <div class="col-md-4 col-4">
                    <h6>Estado:</h6>
                    <span><?php echo $helpers->isEnabled($solicitante->estado_s) ?></span>
                </div>
                <div class="col-md-4 col-4">
                    <h6>Reputación:</h6>
                    <span><?php echo $helpers->getReputation($reputation) ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 col-12">
                    <div class="d-flex align-items-baseline">
                        <h5 class="pe-3">Información De Contacto</h5>
                        <a class="btn btn-primary btn-sm" href="<?php echo $helpers->generateUrl('solicitante', 'formcontact', ['id' => $solicitante->id_sol]) ?>">
                            <span class="fas fa-pencil"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 col-12 mb-3 mb-md-0">
                    <h6>Dirección:</h6>
                    <span><?php echo $solicitante->dir_sol ?></span>
                </div>
                <div class="col-md-4 col-6">
                    <h6>Teléfono:</h6>
                    <span><?php echo $solicitante->tlf_sol ?></span>
                </div>
                <div class="col-md-4 col-6">
                    <h6>Correo:</h6>
                    <span><?php echo $solicitante->corr_sol ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 col-12">
                    <div class="d-flex align-items-baseline">
                        <h5 class="pe-3">Información De Ocupación</h5>
                        <a class="btn btn-primary btn-sm" href="<?php echo $helpers->generateUrl('solicitante', 'formocupacion', ['id' => $solicitante->id_sol]) ?>">
                            <span class="fas fa-pencil"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4 col-6 mb-3 mb-md-0">
                    <h6>Ocupación:</h6>
                    <span><?php echo $solicitante->ocup_sol ?></span>
                </div>
                <div class="col-md-4 col-6 mb-3  mb-md-0">
                    <h6>Institución:</h6>
                    <span><?php echo $solicitante->nom_inst ?></span>
                </div>
                <div class="col-md-4 col-12 mb-3 mb-md-0">
                    <h6>Teléfono de la institución:</h6>
                    <span><?php echo $solicitante->tel_inst ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 col-12">
                    <h6>Dirección de la institución:</h6>
                    <span><?php echo $solicitante->dir_inst ?></span>
                </div>
            </div>
            <div class="text-end">
                <a class="btn btn-link" href="<?php echo $helpers->generateUrl('solicitante', 'index') ?>">Volver</a>
            </div>
        </div>
    </div>
</div>
