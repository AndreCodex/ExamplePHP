<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alumno</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <form action="../Controlador/alumnocontrolador.php" method="POST">
        <h1>Formulario de Alumno</h1>
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Apellido:</label>
        <input type="text" name="apellido" required><br>
        <label>Correo Electrónico:</label>
        <input type="email" name="correo" required><br>
        <button type="submit">Agregar Alumno</button>
    </form>
</body>
</html>
