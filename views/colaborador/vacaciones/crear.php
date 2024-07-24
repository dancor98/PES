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

    <form method="POST" action="/colaborador/vacaciones/crear" enctype="multipart/form-data" class="formulario"
        id="FormularioInterno">

        <fieldset class="formulario__fieldset">

            <div class="formulario__campo">
                <input type="text" class="formulario__input" name="colaborador_id" id="colaborador_id"
                    value="<?php echo $_SESSION['id']; ?>" hidden>
            </div>
            <div class="formulario__campo">
                <input type="text" class="formulario__input" name="estado" id="estado" value="Pendiente" hidden>
            </div>

            <div class="formulario__campo">
                <label for="fecha" class="formulario__label">fecha Solicitud:</label>
                <input type="date" class="formulario__input" name="fecha" id="fecha" placeholder="fecha de la Empresa"
                    value="<?php echo date('Y-m-d'); ?>" readonly>
            </div>

            <div class="formulario__campo">
                <label for="cantidad" class="formulario__label">Cantidad de dias:</label>
                <input type="number" class="formulario__input" name="cantidad" id="cantidad"
                    placeholder="Cantidad de dias a disfrutar" value="<?php echo $vacacion->cantidad; ?>" require>
            </div>

            <div class="row row-campo">
                <div class="col">
                    <label for="desde" class="formulario__label">desde:</label>
                    <input type="date" class="form-control formulario__input" id="desde" name="desde"
                        value="<?php echo $vacacion->desde; ?>" require>
                </div>
                <div class="col">
                    <label for="hasta" class="formulario__label">hasta:</label>
                    <input type="date" class="form-control formulario__input" id="hasta" name="hasta"
                        value="<?php echo $vacacion->hasta; ?>" require>
                </div>
            </div>

            <div class="formulario__campo">
                <label for="detalle" class="formulario__label">Detalle:</label>
                <input type="text" class="formulario__input" name="detalle" id="detalle"
                    placeholder="Detalle de la solicitud" value="<?php echo $vacacion->detalle; ?>" require>
            </div>

            <input class="formulario__submit formulario__submit--registrar" type="submit" value="Solicitar Vacaciones"
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
                    <p class="modal-mensaje">Se creo la solicitud de vacaciones con exito.</p>
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
                    <p class="modal-mensaje">Hubo un error en la solicitud, intentelo mas tarde.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

</div>