<?php
require_once('plantillas/cabecera.php');
?>

<article>
    <h2>Inscribir un alumno</h2>

    <form action="insertar.php" method="post">

        <div class="control mb-3">
            <label for="dni" class="col-sm-2 col-form-label">DNI:</label>
            <input type="text" name="dni" id="dni" required class="form-control">
        </div>

        <div class="control mb-3">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required class="form-control">
        </div>

        <div class="control mb-3">
            <label for="apellido1" class="col-sm-2 col-form-label">Apellido1:</label>
            <input type="text" name="apellido1" id="apellido1" required class="form-control" >
        </div>

        <div class="control mb-3">
            <label for="apellido2" class="col-sm-2 col-form-label">Apellido2:</label>
            <input type="text" name="apellido2" id="apellido2" class="form-control">
        </div>

        <div class="control mb-3">
            <label for="fechanac" class="col-sm-2 col-form-label">Fecha Nacimiento:</label>
            <input type="date" name="fechanac" id="fechanac" class="form-control">
        </div>

        <div class="control mb-3">
            <label for="email" class="col-sm-2 col-form-label">Correo electrónico:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="control mb-3">
            <input type="submit" value="Añadir Alumno"  class="btn btn-primary">
        </div>

    </form>
</article>

<?php
require_once('plantillas/pie.php');
?>
