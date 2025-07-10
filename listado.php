<?php   require_once('plantillas/cabecera.php'); ?>

<article>
    <h2>Listado de alumnos matriculados</h2>

    <table class="table table-striped table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido1</th>
                <th>Apellido2</th>
                <th>Fecha de Nacimiento</th>
                <th>Correo Electrónico</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
       
       <?php
            if (isset($_POST['filtrar'])) {
                $nomApe = $_POST['nomApe'];



                $consulta="SELECT * FROM alumnos WHERE CONCAT(nombre, ' ', apellido1, ' ', apellido2) like '%".$nomApe."%'";
            } else {
                $consulta ="SELECT * FROM alumnos";
            }


            // Ejecuta la consulta y devuelve un array con todas las 
            // filas resultantes
            $filas = mysqli_query($conexion, $consulta);

            // iterar las filas de la tabla
            while(($fila = mysqli_fetch_array($filas))==true){
                echo "<tr>\n";
                echo "<td> ".$fila['id']." </td>\n";
                echo "<td> ".$fila['dni']." </td>\n";
                echo "<td> ".$fila['nombre']." </td>\n";
                echo "<td> ".$fila['apellido1']." </td>\n";
                echo "<td> ".$fila['apellido2']." </td>\n";
                echo "<td> ".$fila['fecha_nac']. " </td>\n";
                echo "<td> ".$fila['email']. " </td>\n";
                echo "<td><a href='editar.php?id=".$fila['id']."' class='btn btn-primary'>Editar</a></td>\n";
                echo "<td><a href='borrado.php?id=".$fila['id']."' class='btn btn-primary'>Eliminar</a></td>\n";
                echo "</tr>\n";
                
            }

        ?>     
        </tbody>
    </table>
    <div class="mensaje">
        <?php 
            if (isset($_SESSION['mensaje'])) {
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            }
            ?>
    </div>
    <div class="mensaje">
        <?php 
            if (isset($_SESSION['mensaje'])) {
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            }
            ?>
    </div>

        <!-- Formulario para filtrar la informacion de la tabla
         Este foormulario enlaza con la propia página, de tal manera que si se llega desde el formulario -> queremos filtrar información, pero si no se llega por POST queremos mostrar todos los datos. -->
    <h2>Buscar:</h2>
    <form action="listado.php" method="post">
        <label for="nomApe">Filtrar por Nombre y/o apellidos: </label>
        <input type="text" name="nomApe" id="nomApe">

        <input type="submit" name='filtrar' value="Filtrar">
        <a href="listado.php">Limpiar filtro</a>
    </form>
    


</article>

<?php   require_once('plantillas/pie.php'); ?>