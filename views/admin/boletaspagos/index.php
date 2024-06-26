    <h1 class="contenedor-admin__titulo"><?php echo $titulo; ?></h1>

    <?php include_once __DIR__ . '/../../templates/alertas.php'; ?>


    <div class="contenedor-admin contenedor-admin__info">

        <div class="row justify-content-end botones-acciones">
            <div class="col-12 col-md-auto mb-2 mb-md-0">
                <div class="boton-acciones">
                    <a href="/admin/colaboradores?page=1" class="boton-acciones__texto">
                        <i class="fa-solid fa-circle-plus icono-admin"></i>
                        Crear Boletas de Pago
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-auto">
                <div class="boton-acciones">
                    <a href="/admin/boletaspagos/cargar" class="boton-acciones__texto">
                        <i class="fa-solid fa-file-import icono-admin"></i>
                        Crear Boletas con CSV
                    </a>
                </div>
            </div>
        </div>


        <?php if (!empty($boletaspagos)) { ?>
            <table class="table">
                <thead class="table__thead">
                    <tr>
                        <th class="table__th" scope="col">Colaborador</th>
                        <th class="table__th" scope="col">Cedula</th>
                        <th class="table__th" scope="col">Creada</th>
                        <th class="table__th" scope="col">Periodo</th>
                        <th class="table__th" scope="col">Empresa</th>
                        <th class="table__th" scope="col"></th>
                    </tr>
                </thead>
                <tbody class="table__tbody">
                    <?php foreach ($boletaspagos as $boletapago) { ?>
                        <tr class="table__tr">
                            <td class="table__td">
                                <?php echo $boletapago->colaborador->nombre . ' ' . $boletapago->colaborador->apellido_paterno; ?>
                            </td>
                            <td class="table__td">
                                <?php echo $boletapago->colaborador->cedula; ?>
                            </td>
                            <td class="table__td">
                                <?php echo $boletapago->fecha; ?>
                            </td>
                            <td class="table__td">
                                <?php echo $boletapago->periodo; ?>
                            </td>
                            <td class="table__td">
                                <?php echo $boletapago->empresa->nombre; ?>
                            </td>

                            <td class="table__td--acciones">
                                <a class="table__accion table__accion--editar" href="/../<?php echo $boletapago->archivo_pdf; ?>" download="Boleta Pago <?php echo $boletapago->colaborador->nombre . ' ' . $boletapago->colaborador->apellido_paterno . '-' . $boletapago->fecha; ?>">
                                    <i class="fa-solid fa-download"></i>
                                    Descargar
                                </a>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p class="text-center">No hay boletas de pago creadas</p>
        <?php } ?>
        <?php
        echo $paginacion;
        ?>
    </div>