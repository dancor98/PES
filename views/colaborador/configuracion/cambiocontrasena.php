<div class="contenedor-formulario">
    <div class="row justify-content-end botones-acciones">
        <div class="col-12 col-md-auto mb-2 mb-md-0">
            <div class="boton-acciones">
                <a href="/colaborador/configuracion" class="boton-acciones__texto">
                    <i class="fa-solid fa-rotate-left icono-admin"></i>
                    Volver
                </a>
            </div>
        </div>
    </div>

    <?php include_once __DIR__ . '/../../templates/alertas.php'; ?>

    <form method="POST" enctype="multipart/form-data" class="formulario" id="FormularioInterno">

        <fieldset class="formulario__fieldset">
            <legend class="formulario__legend">Cambio Contrasena</legend>

            <div class="formulario__campo">
                <label for="contrasena" class="formulario__label">Contrasena Nuenva:</label>
                <input type="password" class="formulario__input" name="contrasena" id="contrasena" placeholder="Nueva Contrasena" value="">
            </div>
        </fieldset>


        <input class="formulario__submit formulario__submit--registrar" type="submit" value="Actualizar mi Contrasena" id="botonSubmit">
    </form>

</div>