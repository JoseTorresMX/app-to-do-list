<?php
//Vareables de entorno para MySQL
$host = 'localhost';
$user = 'root';
$passwd = '';
$db = 'todolist';

//Manejo de Excepciones
try {
    //Cadena de conexión con PDO
    //$conn = new PDO("mysql:host=localhost;dbname=todolist", 'root', '');

    //Cadena de conexión con mysqli
    $conn = new mysqli($host, $user, $passwd, $db);
} catch (Exception $e) {
    echo 'Errores de conexión' . $e->getMessage() . '';
    //echo 'Conexión exitosa';
}
if (isset($_POST['agregar_tarea'])) {
    $tarea = $_POST['tarea'];
    $sql = 'INSERT INTO tareas (nombre_tarea) VALUE(?)';
    $sentencia = $conn->prepare($sql);
    $sentencia->execute([$tarea]);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'DELETE FROM tareas WHERE id=?';
    $sentencia = $conn->prepare($sql);
    $sentencia->execute([$id]);
}

$sql = 'SELECT * FROM tareas';
$resultados = $conn->query($sql);

//foreach ($resultados as $resultado) {
// print_r($resultado);
//}