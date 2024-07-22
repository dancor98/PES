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

    <form method="POST" enctype="multipart/form-data" class="formulario" id="FormularioInterno">

        <fieldset class="formulario__fieldset">
            <legend class="formulario__legend">Informacion Contacto</legend>

            <div class="formulario__campo">
                <label for="foto" class="formulario__label">Imagen:</label>
                <input type="file" class="formulario__input formulario__input--file" name="foto" id="foto"
                    accept=".png, .jpg, .jpeg">
            </div>


            <div class="formulario__campo">
                <label for="correo_electronico" class="formulario__label">Correo Electronico:</label>
                <input type="email" class="formulario__input" name="correo_electronico" id="correo_electronico"
                    placeholder="Correo Electronico" value="<?php echo $colaborador->correo_electronico ?? ''; ?>">
            </div>

            <div class="formulario__campo">
                <label for="telefono" class="formulario__label">Telefono:</label>
                <input type="number" class="formulario__input" name="telefono" id="telefono" placeholder=""
                    value="<?php echo $colaborador->telefono ?? ''; ?>">
            </div>
        </fieldset>

        <fieldset class="formulario__fieldset">
            <legend class="formulario__legend">Contacto de Emergencia</legend>

            <div class="formulario__campo">
                <label for="nombre_emergencia" class="formulario__label">Nombre:</label>
                <input type="text" class="formulario__input" name="nombre_emergencia" id="nombre_emergencia"
                    placeholder="Nombre de contacto de emergencia"
                    value="<?php echo $colaborador->nombre_emergencia ?? ''; ?>">
            </div>

            <div class="formulario__campo">
                <label for="telefono_emergencia" class="formulario__label">Telefono:</label>
                <input type="tel" class="formulario__input" name="telefono_emergencia" id="telefono_emergencia"
                    placeholder="Nombre de contacto de emergencia"
                    value="<?php echo $colaborador->telefono_emergencia ?? ''; ?>">
            </div>
        </fieldset>


        <input class="formulario__submit formulario__submit--registrar" type="submit" value="Actualizar mi Informacion"
            id="botonSubmit">
    </form>

</div>