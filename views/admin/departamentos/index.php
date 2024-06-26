<?php include_once __DIR__ . '/../../templates/alertas.php'; ?>


<div class="contenedor-admin contenedor-admin__info">

    <h1 class="contenedor-admin__titulo"><?php echo $titulo; ?></h1>

    <div class="row justify-content-end botones-acciones">
        <div class="col-12 col-md-auto mb-2 mb-md-0">
            <div class="boton-acciones">
                <a href="/admin/departamentos/crear" class="boton-acciones__texto">
                    <i class="fa-solid fa-circle-plus icono-admin"></i>
                    Crear Departamento
                </a>
            </div>
        </div>
    </div>

    <?php if (!empty($departamentos)) { ?>

        <div class="row">
            <?php foreach ($departamentos as $departamento) { ?>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="card-col">
                        <div class="card-body">
                            <h5 class="card-title carta-titulo">
                                <?php echo $departamento->nombre; ?></h5>

                            <a href="/admin/departamentos/editar?id=<?php echo $departamento->id; ?>" class="btn boton-carta btn-secondary mb-2 w-100">
                                <i class="fa-solid fa-user-pen"></i>
                                Editar
                            </a>
                            <form method="POST" action="/admin/departamentos/eliminar">
                                <input type="hidden" name="id" value="<?php echo $departamento->id; ?>">
                                <button class="btn boton-carta btn-danger mb-2 w-100" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }; ?>

        </div>

    <?php } else { ?>
        <p class="text-center">No hay Departamentos Activos</p>
    <?php } ?>

    <?php
    echo $paginacion;
    ?>
</div>