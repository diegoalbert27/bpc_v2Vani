<?php echo $helpers->getHeader('Editar Cantidad del Libro', 'Libros/Inventario') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
    <form action="<?php echo $helpers->generateUrl('libro', 'editcantidad', [ 'id' => $inventario->id_inv ]) ?>" method="POST">
            <div class="row p-2 mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="cantidad_actual">Actualmente en la Biblioteca:</label>
                    <input class="form-control" type="number" name="cantidad_actual" id="cantidad_actual" min="0" step="1" required value="<?php echo $inventario->cant_inv ?>">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="cantidad_minima">Cantidad Mínimo:</label>
                    <input class="form-control" type="number" name="cantidad_minima" id="cantidad_minima" min="0" step="1" required value="<?php echo $inventario->min_inv ?>">
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="cantidad_total">Total de Libros:</label>
                    <input class="form-control" type="number" name="cantidad_total" id="cantidad_total" min="0" step="1" required value="<?php echo $inventario->total_inv ?>">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="cantidad_resto">Libros Prestados:</label>
                    <input class="form-control" type="number" name="cantidad_resto" id="cantidad_resto" min="0" step="1" required value="<?php echo $inventario->resto_inv ?>">
                </div>
            </div>

            <div class="p-2 text-end">
                <button class="btn btn-primary" type="submit">Editar Cantidad</button>
            </div>
        </form>
    </div>
</div>
