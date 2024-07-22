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

    <form method="POST" action="/colaborador/incapacidades/crear" enctype="multipart/form-data" class="formulario"
        id="FormularioInterno">

        <fieldset class="formulario__fieldset">

            <div class="formulario__campo">
                <input type="text" class="formulario__input" name="colaborador_id" id="colaborador_id"
                    placeholder="ID del Colaborador" value="<?php echo $_SESSION['id']; ?>" hidden>
            </div>

            <div class="formulario__campo">
                <label for="fecha" class="formulario__label">Fecha de ingreso de boleta:</label>
                <input type="text" class="formulario__input" name="fecha" id="fecha" placeholder="fecha de la Empresa"
                    value="<?php echo date('Y-m-d'); ?>" readonly>
            </div>

            <div class="formulario__campo">
                <label for="boleta" class="formulario__label">Cargar Boleta:</label>
                <input type="file" class="formulario__input" name="boleta" id="boleta"
                    placeholder="boleta de la Empresa" accept="application/pdf">
                <div id="passwordHelpBlock" class="form-text">
                    Aqui debe cargar su boleta de incapacidad.
                </div>
            </div>

            <div class="formulario__campo">
                <label for="motivo" class="formulario__label">Motivo Incapacidad:</label>
                <textarea class="formulario__textarea" name="motivo"
                    id="motivo"> <?php echo $incapacidad->motivo; ?> </textarea>
            </div>

            <div class="formulario__campo">
                <label for="cantidad_dias" class="formulario__label">Cantidad de dias:</label>
                <input type="number" class="formulario__input" name="cantidad_dias" id="cantidad_dias"
                    placeholder="Cantidad Dias Incapacitado" value="<?php echo $incapacidad->cantidad_dias; ?>">
            </div>

            <input class="formulario__submit formulario__submit--registrar" type="submit" value="Crear Incapacidad"
                id="botonSubmit">
    </form>

</div>