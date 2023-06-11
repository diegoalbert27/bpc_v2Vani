<?php echo $helpers->getHeader('Editar Informacion Personal De Contacto', 'Solicitantes/Personal') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <form action="<?php echo $helpers->generateUrl('solicitante', 'editpersonalcontact') ?>" method="POST">
            <div class="row p-2 mb-3">
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="form-label" for="phone">Teléfono:</label>
                    <input class="form-control" type="number" id="phone" name="phone" min="0" value="<?php echo $solicitante->tlf_sol ?>" required>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="form-label" for="email">Correo electrónico:</label>
                    <input class="form-control" type="email" id="email" name="email" value="<?php echo $solicitante->corr_sol ?>" required>
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-12 col-sm-12 mb-3">
                    <label class="form-label" for="address">Dirección de habitación:</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required><?php echo $solicitante->dir_sol ?></textarea>
                </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $solicitante->id_sol ?>">

            <div class="p-2 text-end">
                <a class="btn btn-link" href="<?php echo $helpers->generateUrl('solicitante', 'detail', [ 'id' => $solicitante->id_sol ]) ?>">Volver</a>
                <button class="btn btn-primary" type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>
