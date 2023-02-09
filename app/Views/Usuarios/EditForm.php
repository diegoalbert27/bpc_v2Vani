<?php echo $helpers->getHeader('Editar Usuario', 'Usuarios/Editar') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="card shadow mt-3">
    <div class="card-body">
        <form class="user" action="<?php echo $helpers->generateUrl('user', 'edit'); ?>" method="post">
            <div class="form-group p-2">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <label class="form-label" for="name">Nombre completo</label>
                        <input type="text" name="name" class="form-control form-control-user mb-3" id="name" required value="<?php echo $user->user ?>">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label class="form-label" for="username">Usuario</label>
                        <input type="text" name="username" class="form-control form-control-user mb-3"  id="username" required value="<?php echo $user->username ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <label class="form-label" for="role">Nivel</label>
                        <select class="form-control form-control-user mb-3" name="role" id="role">
                            <?php foreach($roles as $role) : ?>
                                <option value="<?php echo $role->id?>"><?php echo $role->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label class="form-label" for="password">Contraseña</label>
                        <input type="password" name="password" class="form-control form-control-user mb-3" id="password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <label class="form-label" for="phone">Teléfono</label>
                        <input type="text" name="phone" class="form-control form-control-user mb-3" id="phone" required value="<?php echo $user->phone ?>" >
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label class="form-label" for="email">Correo electrónico</label>
                        <input type="email" name="email" class="form-control form-control-user mb-3" id="email" required value="<?php echo $user->email ?>" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <label class="form-label" for="enabled">Estado</label>
                        <select class="form-control form-control-user mb-3" name="enabled" id="enabled">
                            <?php echo $helpers->isEnabledOption($user->enabled) ?>
                        </select>
                    </div>
                </div>

                <input type="hidden" id="id" name="id" value="<?php echo $user->id ?>" >

                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Editar usuario</button>
                </div>
            </div>
        </form>
    </div>
</div>
