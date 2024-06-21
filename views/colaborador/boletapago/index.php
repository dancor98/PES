<h1 class="contenedor-admin__titulo"><?php echo $titulo; ?></h1>

<?php include_once __DIR__ . '/../../templates/alertas.php'; ?>


<div class="contenedor-admin contenedor-admin__info">

    <?php if (!empty($boletaspagos)) { ?>

    <div class="row">
        <?php foreach ($boletaspagos as $boletapago) { ?>
        <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="card-col">
                <div class="card-body">
                    <h5 class="card-title carta-descripcion">
                        <?php echo $boletapago->colaborador->nombre . " " . $boletapago->colaborador->apellido_paterno; ?>
                    </h5>
                    <p class="card-text carta-descripcion">Cedula: <?php echo $boletapago->colaborador->cedula; ?></p>
                    <p class="card-text carta-descripcion">Periodo: <?php echo $boletapago->periodo; ?></p>
                    <p class="card-text carta-descripcion">Empresa: <?php echo $boletapago->empresa->nombre; ?></p>

                    <div class="row  botones-acciones">
                        <div class="col-12 col-md-auto mb-2 mb-md-0">
                            <div class="boton-acciones">
                                <a href="/../<?php echo $boletapago->archivo_pdf; ?>"
                                    download="Boleta Incapacidad <?php echo $boletapago->colaborador->nombre . ' ' . $boletapago->colaborador->apellido_paterno . '-' . $boletapago->fecha; ?>"
                                    class="boton-acciones__texto">
                                    <i class="fa-solid fa-download icono-admin"></i>
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }; ?>

    </div>



    <?php } else { ?>
    <p class="text-center">No hay boletas de pago creadas</p>
    <?php } ?>
    <?php
    echo $paginacion;
    ?>
</div>