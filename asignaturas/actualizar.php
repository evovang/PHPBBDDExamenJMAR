<?php
    require_once( $_SERVER['DOCUMENT_ROOT'].'/PHPBBDDExamenJMAR/config.php'); // conectar a la bd

    // Redirigimos al listado si no se llega a la página desde el formulario
    if (!isset($_POST['id']) || !isset($_POST['nombre'])) {
        header('Location:listado.php'); // deja de analizar la página y se redirige
    }

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $credito = $_POST['creditos'];
    $curso = $_POST['curso'];

    $consulta = "UPDATE asignaturas SET nombre=?, tipo=?, creditos=?, curso=? where id =?";
    // Utilizamos una consulta preparada
    $preparada = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($preparada, 'ssdii', $nombre,$tipo, $creditos, $curso, $id);

    // ejecutamos la consulta prparada
    mysqli_stmt_execute($preparada);

    if (mysqli_affected_rows($conexion)==1) {
        // hemos conseguido modificar el registro, redirigimos al listado
        header('Location: listado.php');
    } else {
        // redirigimos al formulario de edición del alumno
        header('Location: editar.php?id='.$id);
    }
    
?>