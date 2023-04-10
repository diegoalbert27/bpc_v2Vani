<?php echo $helpers->getHeader('Usuarios Registrados', 'Usuarios/Inicio') ?>

<?php echo $helpers->getMessage($_GET) ?>

<div class="row mt-4">
    <div class="col-md-6 col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="user" action="<?php echo $helpers->generateUrl('user', 'create'); ?>" method="post">
                    <div class="form-group p-2">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label" for="name">Nombre completo</label>
                                <input type="text" name="name" class="form-control form-control-user mb-3" id="name" required>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label" for="username">Usuario</label>
                                <input type="text" name="username" class="form-control form-control-user mb-3"  id="username" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label" for="role">Nivel</label>
                                <select class="form-select form-control-user mb-3" name="role" id="role">
                                    <?php foreach($roles as $role) : ?>
                                        <option value="<?php echo $role->id?>"><?php echo $role->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label" for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control form-control-user mb-3" id="password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label" for="phone">Teléfono</label>
                                <input type="text" name="phone" class="form-control form-control-user mb-3" id="phone" required>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label" for="email">Correo electrónico</label>
                                <input type="email" name="email" class="form-control form-control-user mb-3" id="email" required>
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Agregar nuevo usuario</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="card shadow">
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Nivel</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <th><?php echo $user->id ?></th>
                                <td><?php echo $user->user ?></td>
                                <td><?php echo $user->role->name ?></td>
                                <td><?php echo $helpers->isEnabled($user->enabled) ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="<?php echo $helpers->generateUrl('user', 'details', [ 'id' => $user->id ]) ?>" type="button">
                                            <span class="fas fa-eye"></span>
                                        </a>
                                        <a class="btn btn-success" href="<?php echo $helpers->generateUrl('user', 'editform', [ 'id' => $user->id ]) ?>" type="button">
                                            <span class="fas fa-pencil"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
