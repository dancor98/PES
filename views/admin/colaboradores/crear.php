<h1 class="contenedor-admin__titulo"><?php echo $titulo; ?></h1>

<div class="contenedor-formulario">
    <div class="row justify-content-end botones-acciones">
        <div class="col-12 col-md-auto mb-2 mb-md-0">
            <div class="boton-acciones">
                <a href="javascript:void(0);" id="backButton" class="boton-acciones__texto">
                    <i class="fa-solid fa-rotate-left icono-admin"></i>
                    Volver
                </a>
            </div>
        </div>
    </div>

    <?php include_once __DIR__ . '/../../templates/alertas.php'; ?>

    <form method="POST" action="/admin/colaboradores/crear" enctype="multipart/form-data" class="formulario"
        id="FormularioInterno">

        <fieldset class="formulario__fieldset">

            <fieldset class="formulario__fieldset">
                <legend class="formulario__legend">Informacion Personal</legend>

                <div class="row row-campo">
                    <div class="col">
                        <label for="nombre" class="formulario__label">Nombre:</label>
                        <input type="text" class="formulario__input form-control" name="nombre" id="nombre"
                            placeholder="Ej: Eduardo" value="<?php echo $colaborador->nombre ?? ''; ?>">
                    </div>
                    <div class="col">
                        <label for="apellido_paterno" class="formulario__label">Apellido:</label>
                        <input type="text" class="formulario__input form-control" name="apellido_paterno"
                            id="apellido_paterno" placeholder="Ej: Cordoba"
                            value="<?php echo $colaborador->apellido_paterno ?? ''; ?>">
                    </div>
                    <div class="col">
                        <label for="apellido_materno" class="formulario__label">Apellido:</label>
                        <input type="text" class="formulario__input form-control" name="apellido_materno"
                            id="apellido_materno" placeholder="Ej: Delgado"
                            value="<?php echo $colaborador->apellido_materno ?? ''; ?>">
                    </div>
                </div>

                <div class="row row-campo">
                    <div class="col">
                        <label for="cedula" class="formulario__label">Cedula:</label>
                        <input type="number" class="formulario__input form-control" name="cedula" id="cedula"
                            placeholder="Ej: 234216654" value="<?php echo $colaborador->cedula ?? ''; ?>">
                    </div>
                    <div class="col">
                        <label for="fecha_nacimiento" class="formulario__label">Fecha Nacimiento:</label>
                        <input type="date" class="formulario__input form-control" name="fecha_nacimiento"
                            id="fecha_nacimiento" placeholder=""
                            value="<?php echo $colaborador->fecha_nacimiento ?? ''; ?>">
                    </div>
                </div>

                <div class="row row-campo">
                    <div class="col">
                        <label for="correo_electronico" class="formulario__label">Correo:</label>
                        <input type="email" class="formulario__input form-control" name="correo_electronico"
                            id="correo_electronico" placeholder="Ej: usuario@specialized.co.cr"
                            value="<?php echo $colaborador->correo_electronico ?? ''; ?>">
                    </div>
                    <div class="col">
                        <label for="telefono" class="formulario__label">Telefono:</label>
                        <input type="number" class="formulario__input form-control" name="telefono" id="telefono"
                            placeholder="Ej: 88888888" value="<?php echo $colaborador->telefono ?? ''; ?>">
                    </div>
                </div>
            </fieldset>

            <fieldset class="formulario__fieldset">
                <legend class="formulario__legend">Informacion Medica</legend>

                <div class="row row-campo">
                    <div class="col">
                        <label for="nombre_emergencia" class="formulario__label">Nombre:</label>
                        <input type="text" class="formulario__input form-control" name="nombre_emergencia"
                            id="nombre_emergencia" placeholder="Nombre Contacto de Emergencia"
                            value="<?php echo $colaborador->nombre_emergencia ?? ''; ?>">
                    </div>
                    <div class="col">
                        <label for="telefono_emergencia" class="formulario__label">Telefono:</label>
                        <input type="tel" class="formulario__input form-control" name="telefono_emergencia"
                            id="telefono_emergencia" placeholder="Telefono Contacto Emergencia"
                            value="<?php echo $colaborador->telefono_emergencia ?? ''; ?>">
                    </div>
                </div>

            </fieldset>


            <fieldset class="formulario__fieldset">
                <legend class="formulario__legend">Informacion Trabajo</legend>

                <div class="row row-campo">
                    <div class="col">
                        <label for="departamento" class="formulario__label">Departamento:</label>
                        <select class="formulario__select form-control" id="departamento" name="departamento_id">
                            <option value="">- Seleccionar -</option>
                            <?php foreach ($departamentos as $departamento) { ?>
                            <option
                                <?php echo ($colaborador->departamento_id === $departamento->id) ? 'selected' : '' ?>
                                value="<?php echo $departamento->id; ?>"><?php echo $departamento->nombre; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        <label for="puesto" class="formulario__label">Puesto:</label>
                        <input type="text" class="formulario__input form-control" name="puesto" id="puesto"
                            placeholder="" value="<?php echo $colaborador->puesto ?? ''; ?>">
                    </div>
                </div>

                <div class="formulario__campo">
                    <label for="empresa" class="formulario__label">empresa:</label>
                    <select class="formulario__select" id="empresa" name="empresa_id">
                        <option value="">- Seleccionar -</option>
                        <?php foreach ($empresas as $empresa) { ?>
                        <option <?php echo ($colaborador->empresa_id === $empresa->id) ? 'selected' : '' ?>
                            value="<?php echo $empresa->id; ?>"><?php echo $empresa->nombre; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="formulario__campo">
                    <label for="salario" class="formulario__label">Salario:</label>
                    <input type="text" class="formulario__input" name="salario" id="salario" placeholder=""
                        value="<?php echo $colaborador->salario ?? ''; ?>">
                </div>

                <div class="formulario__campo">
                    <label for="fecha_ingreso" class="formulario__label">Fecha Ingreso:</label>
                    <input type="date" class="formulario__input" name="fecha_ingreso" id="fecha_ingreso" placeholder=""
                        value="<?php echo $colaborador->fecha_ingreso ?? ''; ?>">
                </div>


            </fieldset>
            <div class="formulario__campo">
                <input type="text" class="formulario__input" name="contrasena" id="contrasena" value="1234567CCM"
                    hidden>
            </div>

            <input class="formulario__submit formulario__submit--registrar" type="submit" value="Registrar Colaborador"
                id="botonSubmit">
    </form>


    <div class="modal" id="exito" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fa-solid fa-bell" id="icono-exito"></i>
                    <h5 class="modal-title titulo-modal">Mensaje</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="modal-mensaje">Se creo el colaborador con exito.>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="error" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fa-solid fa-triangle-exclamation" id="icono-error"></i>
                    <h5 class="modal-title titulo-modal">Mensaje</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="modal-mensaje">Hubo un error en la creacion, intentelo mas tarde.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

</div>