<?php
include '../Modelo/modelo.php';
$alumnos = obtenerAlumnos();
$cursos = obtenerCursos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscripción</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <form action="../Controlador/inscripcioncontrolador.php" method="POST">
        <h1>Formulario de Inscripción</h1>
        <label>Alumno:</label>
        <select name="id_alumno" required>
            <?php foreach ($alumnos as $alumno): ?>
            <option value="<?= $alumno['id_alumno']; ?>"><?= $alumno['nombre'] . ' ' . $alumno['apellido']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label>Curso:</label>
        <select name="id_curso" required>
            <?php foreach ($cursos as $curso): ?>
            <option value="<?= $curso['id_curso']; ?>"><?= $curso['nombre_curso']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label>Fecha de Inscripción:</label>
        <input type="date" name="fecha_inscripcion" required><br>

        <button type="submit">Inscribir</button>
    </form>
</body>
</html>
