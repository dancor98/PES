<h1 class="contenedor-admin__titulo"><?php echo $titulo; ?></h1>

<div class="contenedor-formulario">
    <div class="row justify-content-end botones-acciones">
        <div class="col-12 col-md-auto mb-2 mb-md-0">
            <div class="boton-acciones">
                <a href="/admin/incapacidades" class="boton-acciones__texto">
                    <i class="fa-solid fa-rotate-left icono-admin"></i>
                    Volver
                </a>
            </div>
        </div>
    </div>

    <?php include_once __DIR__ . '/../../templates/alertas.php'; ?>

    <form class="formulario">

        <!-- Informacion Colaborador -->
        <fieldset class="formulario__fieldset">
            <legend class="formulario__legend">Informacion Colaborador</legend>

            <div class="formulario__campo">
                <label for="nombre" class="formulario__label">Nombre:</label>
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre Colaborador" value="<?php echo $incapacidad->colaborador->nombre ?? ''; ?>" readonly>
            </div>

            <div class="formulario__campo">
                <label for="apellido_paterno" class="formulario__label">Apellido Paterno:</label>
                <input type="text" class="formulario__input" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido paterno" value="<?php echo $incapacidad->colaborador->apellido_paterno ?? ''; ?>" readonly>
            </div>

            <div class="formulario__campo">
                <label for="apellido_materno" class="formulario__label">Apellido Materno:</label>
                <input type="text" class="formulario__input" name="apellido_materno" id="apellido_materno" placeholder="Apellido materno" value="<?php echo $incapacidad->colaborador->apellido_materno ?? ''; ?>" readonly>
            </div>

            <div class="formulario__campo">
                <label for="cedula" class="formulario__label">Cedula:</label>
                <input type="text" class="formulario__input" name="cedula" id="cedula" placeholder="cedula colaborador" value="<?php echo $incapacidad->colaborador->cedula ?? ''; ?>" readonly>
            </div>
        </fieldset>

        <!-- Informacion Incapacidad -->
        <fieldset class="formulario__fieldset">
            <legend class="formulario__legend">Informacion Incapacidad</legend>
            <div class="formulario__campo">
                <label for="motivo" class="formulario__label">Motivo Incapacidad:</label>
                <textarea name="motivo" id="motivo" class="formulario__textarea" readonly> <?php echo $incapacidad->motivo; ?> </textarea>
            </div>
            <div class="formulario__campo">
                <label for="cantidad_dias" class="formulario__label">Dias Incapacitado:</label>
                <input type="number" class="formulario__input" name="cantidad_dias" id="cantidad_dias" value="<?php echo $incapacidad->cantidad_dias ?? ''; ?>" readonly>
            </div>
            <a href="/../<?php echo $incapacidad->boleta; ?>" class="btn boton-carta btn-primary mb-2" download="Boleta Incapacidad <?php echo $incapacidad->colaborador->nombre . ' ' . $incapacidad->colaborador->apellido_paterno . '-' . $incapacidad->fecha; ?>">
                <i class="fa-solid fa-money-check-dollar"></i>
                Descargar
            </a>
            </legend>
        </fieldset>
    </form>

</div>