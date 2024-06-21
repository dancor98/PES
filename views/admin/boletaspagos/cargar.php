<h1 class="contenedor-admin__titulo"><?php echo $titulo; ?></h1>

<div class="contenedor-formulario">
    <div class="row justify-content-end botones-acciones">
        <div class="col-12 col-md-auto mb-2 mb-md-0">
            <div class="boton-acciones">
                <a href="/admin/boletaspagos" class="boton-acciones__texto">
                    <i class="fa-solid fa-rotate-left icono-admin"></i>
                    Volver
                </a>
            </div>
        </div>
    </div>

    <?php include_once __DIR__ . '/../../templates/alertas.php'; ?>

    <form method="POST" action="/admin/boletaspagos/cargar" enctype="multipart/form-data" class="formulario">

        <fieldset class="formulario__fieldset">
            <div class="formulario__campo">
                <label for="csv_file" class="formulario__label">Cargar CSV de boletas de pago:</label>
                <input type="file" class="formulario__input" name="csv_file" id="csv_file" placeholder="boleta de la Empresa" accept=".csv">
                <div id="passwordHelpBlock" class="form-text">
                    Aqui debe cargar su su archivo csv.
                </div>
            </div>


            <input class="formulario__submit formulario__submit--registrar" type="submit" value="Cargar CSV">
    </form>

</div>