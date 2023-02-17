<?php echo $helpers->getHeader('Informacion Solicitante', 'Solicitantes/Informacion') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-header bg-white">
        <h5 class="m-0 fw-bold container py-1"><?php echo "{$solicitante->nom_sol} {$solicitante->ape_sol}" ?></h5>
    </div>
    <div class="card-body">
        <div class="container mt-2">
            <div class="row mb-4">
                <div class="col-md-4 col-sm-3">
                    <h6>Cédula:</h6>
                    <span><?php echo $solicitante->ced_sol ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Edad:</h6>
                    <span><?php echo $solicitante->tlf_sol ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Sexo:</h6>
                    <span><?php echo $solicitante->sex_sol ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 col-sm-3">
                    <h6>Dirección:</h6>
                    <span><?php echo $solicitante->dir_sol ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Telefono:</h6>
                    <span><?php echo $solicitante->tlf_sol ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Correo:</h6>
                    <span><?php echo $solicitante->corr_sol ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 col-sm-3">
                    <h6>Ocupación:</h6>
                    <span><?php echo $solicitante->ocup_sol ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Institución:</h6>
                    <span><?php echo $solicitante->nom_inst ?></span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 col-sm-3">
                    <h6>Teléfono de la institución:</h6>
                    <span><?php echo $solicitante->dir_inst ?></span>
                </div>
                <div class="col-md-4 col-sm-3">
                    <h6>Dirección de la institución:</h6>
                    <span><?php echo $solicitante->tel_inst ?></span>
                </div>
            </div>
        </div>
    </div>
</div>