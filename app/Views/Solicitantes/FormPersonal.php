<?php echo $helpers->getHeader('Editar Informacion Personal', 'Solicitantes/Personal') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <form action="<?php echo $helpers->generateUrl('solicitante', 'editpersonal') ?>" method="POST">
            <div class="row p-2 mb-3">
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="form-label" for="names">Nombres:</label>
                    <input class="form-control" type="text" id="names" name="names" value="<?php echo $solicitante->nom_sol ?>" minlength="3" required>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="form-label" for="lastNames">Apellidos:</label>
                    <input class="form-control" type="text" id="lastNames" name="lastNames" value="<?php echo $solicitante->ape_sol ?>" minlength="3" required>
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-4 col-sm-12 mb-3">
                    <label class="form-label" for="cedula">Cédula de identidad:</label>
                    <input class="form-control" type="number" id="cedula" name="cedula" value="<?php echo $solicitante->ced_sol ?>" min="0" required>
                </div>
                <div class="col-md-4 col-sm-12 mb-3">
                    <label class="form-label" for="edad">Edad:</label>
                    <input class="form-control" type="number" id="edad" name="edad" value="<?php echo $solicitante->edad_sol ?>" min="0" required>
                </div>

                <div class="col-md-4 col-sm-12">
                    <label class="form-label" for="sexo">Sexo:</label>

                    <select class="form-control" name="sexo" id="sexo">
                        <?php foreach ($sexos as $sexo): ?>
                            <option value="<?php echo $sexo ?>"><?php echo $sexo ?></option>
                        <?php endforeach; ?>
                    </select>
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
