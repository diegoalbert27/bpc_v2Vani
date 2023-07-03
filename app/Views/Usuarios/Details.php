<?php echo $helpers->getHeader("Información del Perfil", "Usuario/{$user->user}") ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-3">
    <div class="card-body">
        <div class="text-end">
            <a class="btn btn-primary" href="<?php echo $helpers->generateUrl('user', 'editform', [ 'id' => $user->id ]) ?>"><span class="fas fa-pencil"></span></a>
        </div>

        <div class="row p-2">
            <div class="col-md-4 col-6 mb-3 mb-md-0">
                <p><span class="fw-bold">Nombre Completo: </span></p>
                <?php echo $user->user ?>
            </div>
            <div class="col-md-4 col-6">
                <p><span class="fw-bold">Nombre de Usuario: </span></p>
                <?php echo $user->username ?>
            </div>
            <div class="col-md-4 col-12">
                <p><span class="fw-bold">Correo electrónico: </span></p>
                <?php echo $user->email ?>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-4">
                <p><span class="fw-bold">Nivel: </span></p>
                <?php echo $user->role->name ?>
            </div>
            <div class="col-4">
                <p><span class="fw-bold">Teléfono: </span></p>
                <?php echo $user->phone ?>
            </div>
            <div class="col-4">
                <p><span class="fw-bold">Estado: </span></p>
                <?php echo $helpers->isEnabled($user->enabled) ?>
            </div>
        </div>
        <div class="text-center p-3">
            <?php if ((int) $session_user->role->nivel === 1 || (int) $session_user->role->nivel === 10 && (int) $user->role->nivel !== 5): ?>
                <?php if ( !$is_organizer ): ?>
                    <a class="link-primary" href="<?php echo $helpers->generateUrl('user', 'TobeOrganizer', ['id' => $user->id ]) ?>">Registrar como organizador</a>
                <?php else: ?>
                    <div class="bg-light rounded w-50 m-auto p-2 border <?php echo $is_organizer->is_actived ? 'text-primary' : 'text-danger' ?>">
                        <span class="fas fa-<?php echo $is_organizer->is_actived ? 'check' : 'exclamation' ?>-circle"></span> <?php echo $is_organizer->is_actived ? 'Organizador Activo' : 'Organizador Inactivo' ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <div class="mt-3 mt-md-1">
                <a class="link-primary" href="<?php echo $helpers->generateUrl('user', 'editquestionform', ['id' => $user->id ]) ?>">Administrar preguntas de seguridad</a>
            </div>
        </div>
    </div>
</div>
