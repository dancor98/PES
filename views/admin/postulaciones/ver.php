<div class="contenedor-formulario">
    <h1 class="contenedor-admin__titulo"><?php echo $titulo; ?></h1>
    <div class="row justify-content-end botones-acciones">
        <div class="col-12 col-md-auto mb-2 mb-md-0">
            <div class="boton-acciones">
                <a href="/admin/postulaciones" class="boton-acciones__texto">
                    <i class="fa-solid fa-rotate-left icono-admin"></i>
                    Volver
                </a>
            </div>
        </div>
    </div>

    <?php include_once __DIR__ . '/../../templates/alertas.php'; ?>

    <form method="POST" enctype="multipart/form-data" class="formulario">
        <fieldset class="formulario__fieldset">
            <legend class="formulario__legend">Informacion Personal del Postulante</legend>

            <div class="row row-campo">
                <div class="col">
                    <label for="nombre" class="formulario__label">Nombre:</label>
                    <input type="text" class="form-control formulario__input" id="nombre" name="nombre" value="<?php echo $postulacion->nombre . " " . $postulacion->apellido_paterno; ?>" readonly>
                </div>
            </div>

            <div class="row row-campo">
                <div class="col">
                    <label for="cedula" class="formulario__label">Cedula:</label>
                    <input type="text" class="form-control formulario__input" id="cedula" name="cedula" value="<?php echo $postulacion->cedula; ?>" readonly>
                </div>
                <div class="col">
                    <label for="fecha_nacimiento" class="formulario__label">Fecha de nacimiento:</label>
                    <input type="text" class="form-control formulario__input" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $postulacion->fecha_nacimiento; ?>" readonly>
                </div>
                <div class="col">
                    <label for="genero" class="formulario__label">Genero:</label>
                    <input type="text" class="form-control formulario__input" id="genero" name="genero" value="<?php echo $postulacion->genero; ?>" readonly>
                </div>
            </div>
            <div class="row row-campo">
                <div class="col">
                    <label for="telefono" class="formulario__label">Telefono:</label>
                    <input type="text" class="form-control formulario__input" id="telefono" name="telefono" value="<?php echo $postulacion->telefono; ?>" readonly>
                </div>
                <div class="col">
                    <label for="correo" class="formulario__label">Correo Electronico:</label>
                    <input type="text" class="form-control formulario__input" id="correo" name="correo" value="<?php echo $postulacion->correo; ?>" readonly>
                </div>
            </div>

            <legend class="formulario__legend">Informacion para la postulacion</legend>

            <div class="row row-campo">
                <div class="col">
                    <label for="departamento_id" class="formulario__label">departameno de interes:</label>
                    <input type="text" class="form-control formulario__input" id="departamento_id" name="departamento_id" value="<?php echo $postulacion->departamento->nombre; ?>" readonly>
                </div>
                <div class="col">
                    <label for="pretencion_salarial" class="formulario__label">Pretencion salarial:</label>
                    <input type="text" class="form-control formulario__input" id="pretencion_salarial" name="pretencion_salarial" value="₡ <?php echo $postulacion->pretencion_salarial; ?>" readonly>
                </div>
            </div>

            <div class="formulario__campo">
                <label for="mensaje" class="formulario__label">mensaje:</label>
                <textarea name="mensaje" id="mensaje" class="formulario__textarea" readonly><?php echo $postulacion->mensaje; ?>
                </textarea>
            </div>
            <a href="/../<?php echo $postulacion->cv; ?>" class="btn boton-carta btn-primary mb-2" download="CV - <?php echo $postulacion->nombre . ' ' . $postulacion->apellido_paterno; ?>">
                <i class="fa-solid fa-money-check-dollar"></i>
                Descargar CV
            </a>
    </form>

</div>