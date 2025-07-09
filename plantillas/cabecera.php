<?php 
// Varoables con la rutas tanto de HTML como de PHP. En PHP debe ir desde el documnet root y en HTML desde la ruta de inicio del sitio web
$ruta = '/PHPBBDDExamenJMAR/';
$rutaPHP = $_SERVER['DOCUMENT_ROOT'].$ruta;
// echo $_SERVER['DOCUMENT_ROOT'].$ruta;

// incluimos la conexión a la base de datos
require_once($rutaPHP."config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de alumnos - Séneca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous">	
    <link rel="stylesheet" href="<?=$ruta?>css/estilos.css">
</head>
<body>
    <div class="row col-lg-10 mx-auto py-md-5 shadow-lg p-3 mb-5 bg-white rounded" id="contenedor">
    <header class="align-items-center pb-3 mb-5 border-bottom">
        <img src="<?=$ruta?>assets/imgs/seneca.jpg" alt="">
        <h1 class="fs-4 text-center">Gestion de alumnos - Séneca</h1>
        
    </header>
    <aside class="col-lg-3">
        <nav>
            <ul>
                <li><a href="<?=$ruta?>index.php">Inicio</a></li>
                <li><a href="<?=$ruta?>listado.php">Mostrar alumnos</a></li>
                <li><a href="<?=$ruta?>registro.php">Insertar Alumnos</a></li>
                <li><a href="<?=$ruta?>asignaturas/listado.php">Mostrar asignaturas</a></li>
                <li><a href="<?=$ruta?>asignaturas/registro.php">Insertar Asignatura</a></li>
                <li><a href="<?=$ruta?>vehiculos/listado.php">Mostrar Vehiculos</a></li>
                <li><a href="<?=$ruta?>vehiculos/registro.php">Insertar Vehiculos</a></li>
            </ul>
        </nav>
    </aside>
    <main class="col-lg-8 mx-auto py-md-3">