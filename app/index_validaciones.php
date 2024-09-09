<?php
require_once 'db.php';
if (isset($_POST['agregar_tareas'])) {
    $tarea_nueva = $_POST['tarea_campo'];
    if (!empty($tarea_nueva)) {
        $query = "INSERT INTO tareas (nombre_tarea) VALUES('$tarea_nueva')";
        $query_resultado = $conn->query($query);
    }
    header("Location: index.php");
}