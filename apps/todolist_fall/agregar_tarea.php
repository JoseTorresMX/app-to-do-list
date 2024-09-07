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
    echo 'Errore de conexión' . $e->getMessage() . '';
    //echo 'Conexión exitosa';
}
if ($_POST) {
    print_r($_POST);
}
$sql_selquery = 'SELECT * FROM tareas';
$resultados = $conn->query($sql_selquery);

//foreach ($resultados as $resultado) {
// print_r($resultado);
//}