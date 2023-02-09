<?php echo $helpers->getHeader("Usuario #{$user->id}", "Usuarios/{$user->user}") ?>

<div class="card shadow mt-3">
    <div class="card-body">
        <div class="row p-2">
            <div class="col-4">
                <p><span class="fw-bold">Nombre Completo: </span></p>
                <?php echo $user->user ?>
            </div>
            <div class="col-4">
                <p><span class="fw-bold">Nombre de Usuario: </span></p>
                <?php echo $user->username ?>
            </div>
            <div class="col-4">
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
            <a class="link-primary" href="<?php echo $helpers->generateUrl('user', 'editquestionform', ['id' => $user->id ]) ?>">Administrar preguntas de seguridad</a>
        </div>
    </div>
</div>
