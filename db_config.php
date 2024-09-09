<?php
$servername = 'localhost';
$username = 'root';
$passwd = '';
$dbname = 'todolist';

//Creando conexión
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwd);
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexion exitosa";
} catch (Exception $e) {
    echo "Algo falló";
}
<<<<<<< HEAD
//Actualizando y valiando tarea compeltadda
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $completado = isset($_POST['completado']) ? 1 : 0;

    $sql = "UPDATE tareas SET completada=? WHERE id=?";
    $sentencia = $conn->prepare($sql);
    $sentencia->execute([$completado, $id]);

    //echo $completada;
    //echo "<br>";
    //echo $id;
    //$id = $_POST["id"];
    //print_r($_POST);
}


=======
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $completada = (isset($_POST["completado"])) ? 1 : 0;
    $sql = "UPDATE tareas SET completada=? WHERE id=?";
    $sentencia = $conn->prepare($sql);
    $sentencia->execute([$completada, $id]);
}
>>>>>>> funcional
//Agregando registros
if (isset($_POST['agregar_tarea'])) {
    $tarea = ($_POST['tarea']);
    $sql = "INSERT INTO tareas (nombre_tarea) VALUES(?)";
    $sentencia = $conn->prepare($sql);
    $sentencia->execute([$tarea]);
}
//Borrar registros
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tareas WHERE id=?";
    $sentencia = $conn->prepare($sql);
    $sentencia->execute([$id]);
}
//Consulta a la base de datos
$sql = "SELECT * FROM tareas ORDER BY id DESC";
$registros = $conn->query($sql);


//$conn = new mysqli($servername, $username, $passwd, $dbname);

//Validando conexxión
//if ($conn->connect_error) {
//    die("Conexión fallida:" . $conn->connect_error);
//}

