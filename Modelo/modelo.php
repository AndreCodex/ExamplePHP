<?php
// Conexión a la base de datos
function dbConnect() {
    $servername = "localhost";
    $username = "app_uess";
    $password = "PasswordSeguro123!";
    $dbname = "universidaduess";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    return $conn;
}

// Funciones para manejar alumnos
function insertarAlumno($nombre, $apellido, $correo) {
    $conn = dbConnect();
    $sql = "INSERT INTO Alumno (nombre, apellido, correo_electronico) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $apellido, $correo);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

// Funciones para manejar cursos
function insertarCurso($nombre_curso, $descripcion) {
    $conn = dbConnect();
    $sql = "INSERT INTO Curso (nombre_curso, descripcion) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre_curso, $descripcion);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

// Funciones para manejar inscripciones
function inscribirAlumno($id_alumno, $id_curso, $fecha_inscripcion) {
    $conn = dbConnect();
    $sql = "INSERT INTO Inscripcion (id_alumno, id_curso, fecha_inscripcion) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iis", $id_alumno, $id_curso, $fecha_inscripcion);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

// Función para obtener las inscripciones con detalles
function obtenerInscripciones() {
    $conn = dbConnect();
    $sql = "SELECT Alumno.nombre, Alumno.apellido, Curso.nombre_curso, Inscripcion.fecha_inscripcion
            FROM Inscripcion
            JOIN Alumno ON Inscripcion.id_alumno = Alumno.id_alumno
            JOIN Curso ON Inscripcion.id_curso = Curso.id_curso";
    $result = $conn->query($sql);
    $inscripciones = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $inscripciones[] = $row;
        }
    }

    $conn->close();
    return $inscripciones;
}

// Función para obtener todos los cursos
function obtenerCursos() {
    $conn = dbConnect();
    $sql = "SELECT id_curso, nombre_curso FROM Curso";
    $result = $conn->query($sql);
    $cursos = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cursos[] = $row;
        }
    }

    $conn->close();
    return $cursos;
}

// Función para obtener todos los alumnos
function obtenerAlumnos() {
    $conn = dbConnect();
    $sql = "SELECT id_alumno, nombre, apellido FROM Alumno";
    $result = $conn->query($sql);
    $alumnos = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $alumnos[] = $row;
        }
    }

    $conn->close();
    return $alumnos;
}
?>
