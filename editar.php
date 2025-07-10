<?php
require_once('plantillas/cabecera.php');

if (!isset($_GET['id'])) {
    header('Location:listado.php');
}

$consulta = "SELECT * FROM alumnos WHERE id=".$_GET['id'];

$resultado = mysqli_query($conexion, $consulta);
// comprobamos el número de filas
if (mysqli_num_rows($resultado)==0) {
    // No hay ningún alumno con ese código
    $_SESSION['mensaje']='No se puede editar. No existe ningun alumno con el id '.$_GET['id'];
    header('Location:listado.php');
}
// recupoeramos los datos del alumno a modificar

$fila = mysqli_fetch_array($resultado);
$id = $fila['id'];
$dni = $fila['dni'];
$nombre=$fila['nombre'];
$apellido1=$fila['apellido1'];
$apellido2=$fila['apellido2'];
$fechaNac = $fila['fecha_nac'];
$email= $fila['email'];

?>

<article>
    <h2>Editar los datos de un alumno</h2>

    <form action="actualizar.php" method="post">
        
        <div  class="control mb-3">
            <label for="dni" class="col-sm-2 col-form-label">DNI:</label>
            <input type="text" name="dni" id="dni" required value='<?=$dni?>' class="form-control">
        </div>
    
    
        <div  class="control mb-3">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required value='<?=$nombre?>' class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="apellido1" class="col-sm-2 col-form-label">Apellido1:</label>
            <input type="text" name="apellido1" id="apellido1" required value='<?=$apellido1?>' class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="apellido2" class="col-sm-2 col-form-label">Apellido2:</label>
            <input type="text" name="apellido2" id="apellido2"  value='<?=$apellido2?>' class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="fechanac" class="col-sm-2 col-form-label">Fecha Nacimiento:</label>
            <input type="date" name="fechanac" id="fechanac"  value='<?=$fechaNac?>' class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="email" class="col-sm-2 col-form-label">Correo electrónico:</label>
            <input type="email" name="email" id="email"  value='<?=$email?>' class="form-control">
        </div>
        <div  class="control mb-3">
            <input type="submit" value="Editar Alumno"  class="btn btn-primary">
        </div>

<!-- Colocamos en el formulario un campo oculto con la información del id del alumno a editar, esto hace que en el envío del formulario se envíe el dato -->
        <input type="hidden" name="id" value="<?=$id?>">

    </form>
</article>

<?php
require_once('plantillas/pie.php');
?>
