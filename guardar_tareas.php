<?php
include("db.php");

if (isset($_POST['enviar_tarea'])) {
    $nombre_tarea = $_POST['agregar_tarea'];
    $sql = "INSERT INTO tareas (nombre_tarea) VALUES ('$nombre_tarea')";
    $resultado = mysqli_query($conn, $sql);
    if (!$resultado) {
        die("Error de consultas");
    }
    echo 'guradado';
}
