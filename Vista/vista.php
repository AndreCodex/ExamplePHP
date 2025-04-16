<?php
include '../Modelo/modelo.php';
$inscripciones = obtenerInscripciones();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Inscripciones</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Lista de Inscripciones</h1>

       <!-- Botones de Navegación -->
       <div class="navigation">
        <a href="alumno.php" class="btn">Agregar Alumno</a>
        <a href="curso.php" class="btn">Agregar Curso</a>
        <a href="inscripciones.php" class="btn">Inscribir Alumno</a>
    </div>
    <table>
        <tr>
            <th>Nombre del Alumno</th>
            <th>Apellido del Alumno</th>
            <th>Curso</th>
            <th>Fecha de Inscripción</th>
        </tr>
        <?php foreach ($inscripciones as $inscripcion): ?>
        <tr>
            <td><?= htmlspecialchars($inscripcion['nombre']); ?></td>
            <td><?= htmlspecialchars($inscripcion['apellido']); ?></td>
            <td><?= htmlspecialchars($inscripcion['nombre_curso']); ?></td>
            <td><?= htmlspecialchars($inscripcion['fecha_inscripcion']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
