<?php
include '../Modelo/modelo.php';

// Procesar formulario de alumno
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];

    insertarAlumno($nombre, $apellido, $correo);

    header("Location: ../Vista/vista.php");
    exit();
}
?>
