<?php echo $helpers->getHeader('Registrar nuevo solicitante', 'Solicitantes/Registro') ?>

<div class="alert alert-danger alert-dismissible fade show mt-3 d-none" id="alert" role="alert">
    <span></span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="row mt-4">
    <div id="registerForm">
        <div class="col-md-12 col-sm-12 mb-4">
            <div class="d-flex mx-1 border shadow rounded bg-white text-center">
                <div class="border-end flex-fill p-3 bg-primary shadow text-light rounded-start" id="barDatePersonal">
                    Datos Personales
                </div>
                <div class="border-end flex-fill p-3" id="barContact">
                    Informacion de Contacto
                </div>
                <div class="flex-fill p-3" id="barOcupacion">
                    Lugar de estudio o trabajo
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12" id="datePersonalForm">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row p-2 mb-3">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="names">Nombres:</label>
                            <input class="form-control" type="text" id="names" name="names">
                            <div class="text-danger pt-1 d-none" id="valid-names">
                                El texto solo puede contener letras, espacios y debe ser mayor o igual tres caracteres.
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="lastNames">Apellidos:</label>
                            <input class="form-control" type="text" id="lastNames" name="lastNames">
                            <div class="text-danger pt-1 d-none" id="valid-lastNames">
                                El texto solo puede contener letras, espacios y debe ser mayor o igual tres caracteres.
                            </div>
                        </div>
                    </div>

                    <div class="row p-2 mb-3">
                        <div class="col-md-4 col-sm-12 mb-3">
                            <label class="form-label" for="cedula">Cédula de identidad:</label>
                            <input class="form-control" type="text" id="cedula" name="cedula">
                            <div class="text-danger pt-1 d-none" id="valid-cedula">
                                Debe ingresar valores numéricos.
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 mb-3">
                            <label class="form-label" for="edad">Edad:</label>
                            <input class="form-control" type="text" id="edad" name="edad">
                            <div class="text-danger pt-1 d-none" id="valid-edad">
                                La edad debe ser menor a 100 con valores numéricos
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <label class="form-label" for="sexo">Sexo:</label>

                            <select class="form-control" name="sexo" id="sexo">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>
                    </div>

                    <div class="p-2 text-end">
                        <button class="btn btn-primary" type="button" id="add-data-personal">Siguente</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 d-none" id="contactForm">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row p-2 mb-3">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="phone">Teléfono:</label>
                            <input class="form-control" type="tel" id="phone" name="phone">
                            <div class="text-danger pt-1 d-none" id="valid-phone">
                                Debe ingresar valores numéricos.
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="email">Correo electrónico:</label>
                            <input class="form-control" type="email" id="email" name="email">
                            <div class="text-danger pt-1 d-none" id="valid-email">
                                El correo sólo puede contener letras, números, puntos, guiones y guión bajo.
                            </div>
                        </div>
                    </div>

                    <div class="row p-2 mb-3">
                        <div class="col-md-12 col-sm-12 mb-3">
                            <label class="form-label" for="address">Dirección de habitación:</label>
                            <input class="form-control" type="text" id="address" name="address">
                            <div class="text-danger pt-1 d-none" id="valid-address">
                                La dirección es requerida
                            </div>
                        </div>
                    </div>

                    <div class="p-2 text-end">
                        <button class="btn btn-link" type="button" id="back-data-contact">Volver</button>
                        <button class="btn btn-primary" type="button" id="add-data-contact">Siguente</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 d-none" id="ocupacionForm">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row p-2 mb-3">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="ocupacion">Ocupación:</label>
                            <select class="form-control" name="ocupacion" id="ocupacion">
                                <option value="Ninguno">Ninguno</option>
                                <option value="Trabajador">Trabajador</option>
                                <option value="Estudiante">Estudiante</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="nameOcupacion">Nombre del lugar de estudio o trabajo:</label>
                            <input class="form-control" type="text" id="nameOcupacion" name="nameOcupacion">
                            <div class="text-danger pt-1 d-none" id="valid-nameOcupacion">
                                El nombre de la ocupación es requerido
                            </div>
                        </div>
                    </div>

                    <div class="row p-2 mb-3">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="phoneOcupacion">Teléfono:</label>
                            <input class="form-control" type="tel" id="phoneOcupacion" name="phoneOcupacion">
                            <div class="text-danger pt-1 d-none" id="valid-phoneOcupacion">
                                El numéro de contacto de la ocupación es requerido
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="addressOcupacion">Dirección:</label>
                            <input class="form-control" type="text" id="addressOcupacion" name="addressOcupacion">
                            <div class="text-danger pt-1 d-none" id="valid-addressOcupacion">
                                La dirección de la ocupación es requerido
                            </div>
                        </div>
                    </div>

                    <div class="p-2 text-end">
                        <button class="btn btn-link" type="button" id="back-data-ocupacion">Volver</button>
                        <button class="btn btn-primary" type="button" id="add-solicitante">Agregar Registro</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12 d-none" id="registroTerminado">
        <div class="card shadow">
            <div class="card-body">
                <div class="text-center p-4 my-3">
                    <span class="fas fa-check fs-2 text-white bg-success p-4 rounded-circle shadow"></span>
                    <h4 class="card-title fw-normal mt-4">Solicitante Registado Exitosamente</h4>
                    <a class="link link-primary" href="<?php $helpers->generateUrl('solicitante', 'register') ?>">Realizar nuevo registro</a>
                    <span>|</span>
                    <a class="link link-primary" id="solicitanteLink" href="">Visualizar nuevo registro</a>
                </div>
            </div>
        </div>
    </div>
</div>
