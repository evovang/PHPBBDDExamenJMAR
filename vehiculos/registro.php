<?php
require_once('../plantillas/cabecera.php');
?>

<article>
    <h2>Dar de alta una vehiculo</h2>

    <form action="insertar.php" method="post">
        <div  class="control mb-3">
            <label for="matricula" class="col-sm-2 col-form-label">Matricula:</label>
            <input type="text" name="matricula" id="matricula" required class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="marca"class="col-sm-2 col-form-label">Marca:</label>
            <input type="text" name="marca" id="marca" required class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="modelo"class="col-sm-2 col-form-label">Modelo:</label>
            <input type="text" name="modelo" id="modelo" required class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="tipo"class="col-sm-2 col-form-label">Tipo:</label>
            <select name="tipo" id="tipo" class="form-select form-select-lg">
                <option value="turismo">Turismo</option>
                <option value="autobus">Autobus</option>
                <option value="camion">Camion</option>
                <option value="furgon">Furgon</option>
            </select>
        </div>

        <div  class="control mb-3">
            <label for="color"class="col-sm-2 col-form-label">Color:</label>
            <input type="text" name="color" id="color" required class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="fecha_matriculacion"class="col-sm-2 col-form-label">Fecha de Matriculacion:</label>
            <input type="date" name="fecha_matriculacion" id="fecha_matriculacion" required class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="cilindrada"class="col-sm-2 col-form-label">Cilindrada:</label>
            <input type="text" name="cilindrada" id="cilindrada" required class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="itv_pasada"class="col-sm-2 col-form-label">ITV pasada:</label>
            <label>
            <input type="radio" name="itv_pasada" value="true" required class="form-control"> Pasada
            </label>
            <label>
            <input type="radio" name="itv_pasada" value="false" class="form-control"> No pasada
            </label>
        </div>

        <div  class="control mb-3">
            <input type="submit" value="Añadir Vehiculo"   class="btn btn-primary">
        </div>

    </form>
</article>

<?php
require_once('../plantillas/pie.php');
?>
