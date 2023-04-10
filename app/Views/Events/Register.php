<?php echo $helpers->getHeader('Registro de Nuevo Evento', 'Eventos/Registro') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <form action="<?php echo $helpers->generateUrl('event', 'add') ?>" method="POST">
            <div class="row p-2 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="event_name">Nombre del evento:</label>
                    <input class="form-control" type="text" name="event_name" id="event_name" minlength="3" required>
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="organizer">Organizador:</label>
                    <select class="form-select" name="organizer" id="organizer">
                        <?php foreach($organizers as $organizer): ?>
                            <option value="<?php echo $organizer->id ?>"><?php echo $organizer->id_user->user ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="event_type">Tipo:</label>
                    <select class="form-select" name="event_type" id="event_type">
                        <option value="Limitado">Limitado</option>
                        <option value="No limitado">No limitado</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="aforo">Aforo:</label>
                    <input class="form-control" type="number" name="aforo" id="aforo" required min="0" value="0">
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-3">
                    <label class="form-label" for="event_date">Fecha:</label>
                    <input class="form-control" type="date" name="event_date" id="event_date" min="<?php echo $helpers->getCurrentDate(1) ?>"" value="<?php echo $helpers->getCurrentDate(1) ?>">
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="event_time">Hora:</label>
                    <input class="form-control" type="time" name="event_time" id="event_time" value="06:00">
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="event_point">Lugar:</label>
                    <input class="form-control" type="text" name="event_point" id="event_point" minlength="3" required>
                </div>
            </div>

            <div class="row p-2 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="event_detail">Detalles del evento:</label>
                    <input class="form-control" type="text" name="event_detail" id="event_detail" minlength="3" required>
                </div>
            </div>

            <div class="p-2 text-end">
                <button class="btn btn-primary" type="submit">Agregar Evento</button>
            </div>
        </form>
    </div>
</div>
