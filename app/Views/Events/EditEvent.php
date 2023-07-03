<?php echo $helpers->getHeader('Edicion de Evento', 'Eventos/Editar') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <form action="<?php echo $helpers->generateUrl('event', 'edit', [ 'id' => $event->id_event ]) ?>" method="POST">
            <div class="row p-2 mb-0 mb-md-3">
                <div class="col-md-12">
                    <label class="form-label" for="event_name">Nombre del evento:</label>
                    <input class="form-control" type="text" name="event_name" id="event_name" minlength="3" required value="<?php echo $event->title_event ?>">
                </div>
            </div>

            <div class="row p-2 mb-0 mb-md-3">
                <div class="col-xl-6 col-md-5 col-12 mb-3 mb-md-0">
                    <label class="form-label" for="organizer">Organizador:</label>
                    <select class="form-select" name="organizer" id="organizer">
                        <?php foreach($organizers as $organizer): ?>
                            <option value="<?php echo $organizer->id ?>"><?php echo $organizer->id_user->user ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-xl-3 col-md-4 col-12 mb-3 mb-md-0s">
                    <label class="form-label" for="event_type">Tipo:</label>
                    <select class="form-select" name="event_type" id="event_type">
                        <?php echo $helpers->getTypeEventOption($event->type_event) ?>
                    </select>
                </div>

                <div class="col-md-3 col-12">
                    <label class="form-label" for="aforo">Aforo:</label>
                    <input class="form-control" type="number" name="aforo" id="aforo" required min="0" value="<?php echo $event->participants_event ?? 0 ?>">
                </div>
            </div>

            <div class="row p-2 mb-0 mb-md-3">
                <div class="col-xl-6 col-md-3 col-12 mb-2 mb-md-0">
                    <label class="form-label" for="event_point">Lugar:</label>
                    <input class="form-control" type="text" name="event_point" id="event_point" minlength="3" required value="<?php echo $event->place_event ?>">
                </div>

                <div class="col-xl-2 col-md-3 col-12 mb-2 mb-md-0">
                    <label class="form-label" for="event_date">Fecha:</label>
                    <input class="form-control" type="date" name="event_date" id="event_date" min="<?php echo $event->date_realized_event ?>"" value="<?php echo $event->date_realized_event ?>" max="<?php echo $event->date_realized_event ?>">
                </div>

                <div class="col-xl-2 col-md-3 col-6 mb-2 mb-md-0">
                    <label class="form-label" for="event_time">Hora:</label>
                    <input class="form-control" type="time" name="event_time" id="event_time" value="<?php echo $event->time ?>">
                </div>

                <div class="col-xl-2 col-md-3 col-6">
                    <label class="form-label" for="state_event">Estado:</label>
                    <select class="form-control" name="state_event" id="state_event">
                        <?php echo $helpers->getStateEventOption($event->state_event) ?>
                    </select>
                </div>
            </div>

            <div class="row p-2 mb-0 mb-md-3">
                <div class="col-md-12">
                    <label class="form-label" for="event_detail">Detalles del evento:</label>
                    <textarea class="form-control" name="event_detail" id="event_detail" minlength="3" rows="3" required><?php echo $event->info_event ?></textarea>
                </div>
            </div>

            <div class="p-2 text-end">
                <a class="btn btn-link" href="<?php echo $helpers->generateUrl('event', 'detalle', [ 'id' => $event->id_event ]) ?>">Volver</a>
                <button class="btn btn-primary" type="submit">Editar Evento</button>
            </div>
        </form>
    </div>
</div>
