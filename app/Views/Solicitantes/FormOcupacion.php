<?php echo $helpers->getHeader('Editar Informacion Personal De Ocupacion', 'Solicitantes/Personal') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <form action="<?php echo $helpers->generateUrl('solicitante', 'editpersonalocupacion') ?>" method="POST">
            <div class="row p-2 mb-3">
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="form-label" for="ocupacion">Ocupación:</label>
                    <select class="form-select" name="ocupacion" id="ocupacion">
                        <?php foreach($ocupaciones as $ocupacion): ?>
                            <option value="<?php echo $ocupacion ?>"><?php echo $ocupacion ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="form-label" for="nameOcupacion">Nombre del lugar de estudio o trabajo:</label>
                    <input class="form-control" type="text" id="nameOcupacion" name="nameOcupacion" value="<?php echo $solicitante->nom_inst ?>">
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="form-label" for="phoneOcupacion">Teléfono:</label>
                    <input class="form-control" type="number" id="phoneOcupacion" name="phoneOcupacion" value="<?php echo $solicitante->tel_inst ?>">
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="form-label" for="addressOcupacion">Dirección:</label>
                    <textarea class="form-control" id="addressOcupacion" name="addressOcupacion" rows="3"><?php echo $solicitante->dir_inst ?></textarea>
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
