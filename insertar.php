<?php

if (!isset($_POST['nombre'])) {
    // Mueve el navegador hasta otra página si no se llegadesde el formulario
    header('Location:registro.php');
}
require_once('plantillas/cabecera.php');

    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $fechaNac = $_POST['fechanac'];
    $email = $_POST['email'];

    // controles sobre los valores o validaciones
    ?>

    <h2>Alumno a insertar</h2>
    <ul>
        <li>DNI: <?=$dni?></li>
        <li>Nombre: <?=$nombre?></li>
        <li>Apellido1: <?=$apellido1?></li>
        <li>Apellido2: <?=$apellido2?></li>
        <li>Fecha de Nacimiento: <?=$fechaNac?></li>
        <li>Correco Electrónico: <?=$email?> </li>
    </ul>

    <?php 
        $consulta = 
            "insert into alumnos (dni,nombre,apellido1,apellido2,fecha_nac, email) values('$dni','$nombre','$apellido1', '$apellido2', '$fechaNac', '$email') ";

            /* $consulta = 
            'insert into alumnos (nombre,apellido1,apellido2,fecha_nac, email) values("'.$nombre.'","'.$apellido1.'", '$apellido2', '$fechaNac', '$email') ';*/

           // echo $consulta;

           // ejecutamos la consulta
           $resultado = mysqli_query($conexion, $consulta);
           if ($resultado>0) {
                echo '<p>Se ha insertado el alumno satisfactoriamente</p>';
           } else {
                echo "<p class='error'> Error al insertar el alumno </p>";
           }
?>



<?php require_once('plantillas/pie.php'); ?>