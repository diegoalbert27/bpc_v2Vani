<?php echo $helpers->getHeader('Organizadores', 'Organizadores/Inicio') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Cuenta</th>
                    <th>Estado</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach($organizers as $organizer): ?>
                        <tr>
                            <th><?php echo $organizer->id ?></th>
                            <td><?php echo $organizer->id_user->user ?></td>
                            <td><?php echo $organizer->id_user->role->name ?></td>
                            <td><?php echo $helpers->isEnabled($organizer->is_actived) ?></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-success view-organizer" type="button" data-bs-toggle="modal" data-bs-target="#organizer">
                                        <span class="fas fa-pencil"></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="organizer" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="modal-organizer-name"></h2>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <h5 class="fw-light mb-3">Actualizar el estado del organizador</h5>
        <button class="btn w-100" id="btn-change-status">Activo</button>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="" id="send-organizer"><span class="fas fa-floppy-disk"></span> Guardar</a>
      </div>
    </div>
  </div>
</div>
