<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Curso</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <form action="../Controlador/cursocontrolador.php" method="POST">
        <h1>Formulario de Curso</h1>
        <label>Nombre del Curso:</label>
        <input type="text" name="nombre_curso" required><br>
        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea><br>
        <button type="submit">Agregar Curso</button>
    </form>
</body>
</html>
