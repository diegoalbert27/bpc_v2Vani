<ul class="list-unstyled components px-3">
    <li>
        <a href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between">
            <span>Registros</span>
            <span class="fal fa-plus"></span>
        </a>
        <ul class="collapse list-unstyled mt-1" id="homeSubmenu">
            <li>
                <a href="<?php echo $helpers->generateUrl('solicitante', 'register') ?>">Solicitante</a>
            </li>
            <li>
                <a href="<?php echo $helpers->generateUrl('libro', 'register') ?>">Libro</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#procesosSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between">
            <span>Procesos</span>
            <span class="fal fa-plus"></span>
        </a>
        <ul class="collapse list-unstyled mt-1" id="procesosSubmenu">
            <li>
                <a href="<?php echo $helpers->generateUrl('prestamos', 'generateprestamo') ?>">Prestamo de libros</a>
            </li>
            <li>
                <a href="<?php echo $helpers->generateUrl('prestamos', 'returnprestamo') ?>">Devolucion de libros</a>
            </li>
            <li>
                <a href="<?php echo $helpers->generateUrl('event', 'register') ?>">Organización de Eventos</a>
            </li>
            <li>
                <a href="<?php echo $helpers->generateUrl('participantes', 'index') ?>">Participar en eventos</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#consultasSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between">
            <span>Consultas</span>
            <span class="fal fa-plus"></span>
        </a>
        <ul class="collapse list-unstyled mt-1" id="consultasSubmenu">
            <li>
                <a href="<?php echo $helpers->generateUrl('solicitante', 'index') ?>">Solicitantes</a>
            </li>
            <li>
                <a href="<?php echo $helpers->generateUrl('libro', 'index') ?>">Libros</a>
            </li>
            <li>
                <a href="<?php echo $helpers->generateUrl('prestamos', 'index') ?>">Prestamos</a>
            </li>
            <li>
                <a href="<?php echo $helpers->generateUrl('event', 'index') ?>">Eventos</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#pageSubmenu" data-bs-toggle="collapse"x` aria-expanded="false" class="dropdown-toggle d-flex justify-content-between">
            <span>Configuración</span>
            <span class="fal fa-plus"></span>
        </a>
        <ul class="collapse list-unstyled mt-1" id="pageSubmenu">
            <li>
                <a href="<?php echo $helpers->generateUrl('user') ?>">Usuarios</a>
            </li>
            <li>
                <a href="<?php echo $helpers->generateUrl('category') ?>">Categorías</a>
            </li>
            <li>
                <a href="<?php echo $helpers->generateUrl('audit') ?>">Auditoria</a>
            </li>
            <li>
                <a href="<?php echo $helpers->generateUrl('user', 'details', [ 'id' => $session_user->id ]) ?>">Perfil</a>
            </li>
            <li>
                <a href="<?php echo $helpers->generateUrl('organizer', 'index') ?>">Organizadores</a>
            </li>
        </ul>
    </li>
</ul>
