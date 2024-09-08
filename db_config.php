<?php
$servername = 'localhost';
$username = 'root';
$passwd = '';
$dbname = 'todolist';

//Creando conexión
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexion exitosa";
} catch (Exception $e) {
    echo "Algo falló" . $e->getMessage() . "";
}
//$conn = new mysqli($servername, $username, $passwd, $dbname);

//Validando conexxión
//if ($conn->connect_error) {
//    die("Conexión fallida:" . $conn->connect_error);
//}

$sql = "SELECT * FROM tareas";
$registros = $conn->query($sql);

