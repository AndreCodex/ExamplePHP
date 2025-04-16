<?php
include '../Modelo/modelo.php';

// Procesar formulario de curso
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_curso = $_POST['nombre_curso'];
    $descripcion = $_POST['descripcion'];

    insertarCurso($nombre_curso, $descripcion);

    header("Location: ../Vista/vista.php");
    exit();
}
?>
