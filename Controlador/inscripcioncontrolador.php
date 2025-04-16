<?php
include '../Modelo/modelo.php';

// Procesar formulario de inscripción
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_alumno = $_POST['id_alumno'];
    $id_curso = $_POST['id_curso'];
    $fecha_inscripcion = $_POST['fecha_inscripcion'];

    inscribirAlumno($id_alumno, $id_curso, $fecha_inscripcion);

    header("Location: ../Vista/vista.php");
    exit();
}
?>
